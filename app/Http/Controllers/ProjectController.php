<?php

namespace App\Http\Controllers;
use App\Models\ProjectsModel;
use App\Models\User;
use Illuminate\Http\Request;


class ProjectController extends Controller
{

    public function Projects(){
        $projects = ProjectsModel::with('user')->get();
        return view('allproject', compact('projects'));
    }

    public function addProject(){
        $users = User::where('role',3)->get(); 
        return view('addproject',compact('users'));
    }

    public function projectStore(Request $request){
        $project = new ProjectsModel();
        $project->name = $request->name;
        $project->user_id = $request->user_id;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->save();
        return redirect('allproject');
    }

    public function manageProject(){
        $projects = ProjectsModel::all();
        return view('manageproject', compact('projects'));
    }

    public function updateProjectStatus($id){
        $status = ProjectsModel::find($id);
        if ($status->status == 1){
            $status->status = 2;
        }elseif ($status->status == 2){
            $status->status = 1;
        }
        $status->update();
        return redirect('manageproject');
    }

    public function editProject($id){
        $project = ProjectsModel::find($id);
        return view('editproject', compact('project'));
    }

    public function updateProject(Request $request, $id){
        $project= ProjectsModel::find($id);
        $project->name = $request->name;
        $project->user_id = $request->user_id;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->update();
        return redirect('manageproject');
    }

    public function deleteProject($id){
        $project = ProjectsModel::find($id);
        $project->delete();
        return redirect('manageproject');
    }

    
}
