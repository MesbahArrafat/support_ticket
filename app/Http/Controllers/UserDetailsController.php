<?php

namespace App\Http\Controllers;
use App\Models\UserDetailsModel;

use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    
    public function UsersDetails(){
        $users = UserDetailsModel::all();
        return view('alluser-details', compact('users'));
    }

    public function addUserDetails(){
        return view('adduser_details');
    }
    public function userDetailsStore(Request $request){
        $user = new UserDetailsModel();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->company_name = $request->company_name;
        $user->save();
        return redirect('/users_details');
    }

    public function manageUsersDetails(){
        $users = UserDetailsModel::all();
        return view('manageuser-details', compact('users'));
    }

    public function editUserDetails($id){
        $user = UserDetailsModel::find($id);
        return view('edituser-details', compact('user'));
    }

    public function updateUserDetails(Request $request, $id){
        $user= UserDetailsModel::find($id);
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->company_name = $request->company_name;
        $user->update();
        return redirect('manageuser-details');
    }

    public function deleteUserDetails($id){
        $user = UserDetailsModel::find($id);
        $user->delete();
        return redirect('manageuser-details');
    }
}
