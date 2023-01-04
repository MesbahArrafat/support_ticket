<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Users(){
        $users = UserModel::all();
        return view('users', compact('users'));
    }

    public function addUser(){
        return view('adduser');
    }
    public function userStore(Request $request){
        $user = new UserModel();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        return redirect('users');
    }

    public function manageUsers(){
        $users = UserModel::all();
        return view('manageusers', compact('users'));
    }

    public function updateUserStatus($id){
        $status = UserModel::find($id);
        if ($status->status == 1){
            $status->status = 2;
        }elseif ($status->status == 2){
            $status->status = 1;
        }
        $status->update();
        return redirect('manageusers');
    }

    public function editUser($id){
        $user = UserModel::find($id);
        return view('edituser', compact('user'));
    }

    public function updateUser(Request $request, $id){
        $user= UserModel::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->status = $request->status;
        $user->update();
        return redirect('manageusers');
    }

    public function deleteUser($id){
        $user = UserModel::find($id);
        $user->delete();
        return redirect('manageusers');
    }
}
