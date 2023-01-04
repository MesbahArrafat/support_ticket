<?php

namespace App\Http\Controllers;
use App\Models\SupportCategoryModel;
use Illuminate\Http\Request;

class SupportCategoryController extends Controller
{
    public function SupportCategorys(){
        $projects = SupportCategoryModel::all();
        return view('all_support_category', compact('projects'));
    }

    public function addSupportCategory(){ 
        return view('add_support_category');
    }

    public function storeSupportCategory(Request $request){
        $project = new SupportCategoryModel();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();
        return redirect('all_support_category');
    }

    public function manageSupportCategory(){
        $projects = SupportCategoryModel::all();
        return view('manage_support_category', compact('projects'));
    }

    public function editSupportCategory($id){
        $project = SupportCategoryModel::find($id);
        return view('edit_support_category', compact('project'));
    }

    public function updateSupportCategory(Request $request, $id){
        $project= SupportCategoryModel::find($id);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->update();
        return redirect('manage_support_category');
    }

    public function deleteSupportCategory($id){
        $project = SupportCategoryModel::find($id);
        $project->delete();
        return redirect('manage_support_category');
    }
}
