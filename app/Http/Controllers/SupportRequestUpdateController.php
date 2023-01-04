<?php

namespace App\Http\Controllers;
use App\Models\SupportRequestUpdateModel;
use App\Models\SupportRequestModel;

use Illuminate\Http\Request;

class SupportRequestUpdateController extends Controller
{
    public function viewSupportRequestUpdate($id){
        // $post = SupportRequestModel::with('user')->find($id);
        $post = SupportRequestModel::find($id);
        // $support_request_update = SupportRequestUpdateModel::find($id);
        // dd($support_request);
        // return view('view_support_request',compact('support_request'));
        return view('support_request_update',compact('post'));
    }

    // public function store(Request $request)
    // {
    // 	$request->validate([
    //         'comment'=>'required',
    //     ]);
   
    //     $input = $request->all();
    //     $input['user_id'] = auth()->user()->id;
    
    //     SupportRequestUpdateModel::create($input);
   
    //     return back();
    // }


}
