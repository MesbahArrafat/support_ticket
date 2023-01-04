<?php

namespace App\Http\Controllers;
use App\Models\SupportRequestModel;
use App\Models\User;
use App\Models\SupportCategoryModel;
use App\Models\ProjectsModel;
use Illuminate\Http\Request;

class SupportRequestController extends Controller
{
    public function onlyUserRequests(){
        $user = auth()->user();
        $user_role = $user->role;
        $user_id = $user->id;
        $support_request_qry = SupportRequestModel::select('*');
        if ($user_role == 3) {
            $support_request_qry->where('customer_id', $user_id);
        }    //only for customer
        $support_requests = $support_request_qry->paginate(10);

        return view('all_support_request', compact('support_requests'));
    }
    public function SupportRequests(){
        // $users = SupportRequestModel::all();
         $users = SupportRequestModel::with(['category','comments'])->get();
         $users = SupportRequestModel::paginate(10);
        return view('all_support_request', compact('users'));
    }

    public function addSupportRequest(){
        $categories = SupportCategoryModel::all();
        $user = auth()->user();
        $user_role = $user->role;
        $user_id = $user->id;
        $projects_qry = ProjectsModel::select('*');
        if ($user_role == 3) {
            $projects_qry->where('user_id', $user_id);
        }    //only for customer
        $projects = $projects_qry->get();

        return view('add_support_request',compact('categories','projects'));
    }
    public function storeSupportRequest(Request $request){
        $user = new SupportRequestModel();
        $user->customer_id = $request->customer_id;
        $user->project_id = $request->project_id;
        $user->category_id = $request->category_id;
        $user->description = $request->description;
        $user->save();
        return redirect('customer_all_support_request');
    }


    public function manageSupportRequest(){
        // $users = SupportRequestModel::paginate(10);
        $projects = ProjectsModel::all();
        $employees = User::all();
        // $support_requests = SupportRequestModel::paginate(10);
        $user = auth()->user();
        $user_role = $user->role;
        $user_id = $user->id;
          $support_request_qry = SupportRequestModel::with('comments');
        if ($user_role == 3) {
            $support_request_qry->where('customer_id', $user_id);
        }    //only for customer
        else if ($user_role == 2) {
            $support_request_qry->where('employee_id', $user_id);
        } 
        $support_requests = $support_request_qry->paginate(10);
        return view('manage_support_request', compact('support_requests','projects','employees'));
    }

    public function customerManageSupportRequest(){
        // $users = SupportRequestModel::where('customer_id',auth()->user()->id)->paginate(10);
        // $projects = ProjectsModel::all();
        $user = auth()->user();
        $user_role = $user->role;
        $user_id = $user->id;
        $support_request_qry = SupportRequestModel::select('*');
        if ($user_role == 3) {
            $support_request_qry->where('customer_id', $user_id);
        }    //only for customer
        $support_requests = $support_request_qry->paginate(10);
        return view('manage_support_request', compact('support_requests'));
    }

    

    // public function updateSupportRequestStatus($id){
    //     $status = SupportRequestModel::find($id);
    //     if ($status->status == 1){
    //         $status->status = 2;
    //     }elseif ($status->status == 2){
    //         $status->status = 1;
    //     }
    //     $status->update();
    //     return redirect('manage_support_request');
    // }

    public function editSupportRequest($id){
        $user = auth()->user();
        $user_role = $user->role;
        $user_id = $user->id;
        $projects_qry = ProjectsModel::select('*');
        if ($user_role == 3) {
            $projects_qry->where('user_id', $user_id);
        }    //only for customer
        $projects = $projects_qry->get();
        $categories = SupportCategoryModel::all();
        $employees = User::where('role',2)->get(); 
        $user = SupportRequestModel::find($id);
        return view('edit_support_request', compact('user','categories','employees','projects'));
    }

    public function viewSupportRequest($id){
        $support_request = SupportRequestModel::find($id);
        // $support_request = User::find($id);
        // $support_request = ProjectsModel::find($id);
        // $support_request = SupportCategoryModel::find($id);
        // dd($support_request);
        return view('view_support_request',compact('support_request'));
    }

    // public function customerUpdateSupportRequest(Request $request, $id){
    //     // $users = SupportRequestModel::all();
    //     // $categories = SupportCategoryModel::all();
    //     $user= SupportRequestModel::find($id);
    //     $user->name = $request->name;
    //     $user->category_id = $request->category_id;
    //     $user->description = $request->description;
    //     // $user->status = $request->status;
    //     // $user->employee_id = $request->employee_id;
    //     $user->update();
    //     // return redirect('manage_support_request',compact('user','categories','users'));
    //     return redirect('customer_update_support_request');
        
    // }

    public function updateSupportRequest(Request $request, $id){
        // $users = SupportRequestModel::all();
        // $categories = SupportCategoryModel::all();
        $user= SupportRequestModel::find($id);
        if(auth()->user()->role == 1){
            $user->status = $request->status;
            $user->employee_id = $request->employee_id;
        }
        elseif(auth()->user()->role == 3){
            $user->project_id = $request->project_id;
            $user->category_id = $request->category_id;
            $user->description = $request->description;
        }
        
        $user->update();
        // return redirect('manage_support_request',compact('user','categories','users'));
        return redirect('manage_support_request');
        
    }

    public function deleteSupportRequest($id){
        $user = SupportRequestModel::find($id);
        $user->delete();
        return redirect('manage_support_request');
    }
}
