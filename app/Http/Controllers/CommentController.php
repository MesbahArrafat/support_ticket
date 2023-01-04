<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {

     
     
    	$request->validate([
            'body'=>'required',
        ]);
   
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
    
        Comment::create($input);
   
        return back();
    }

    public function edit($id){
        $comment = Comment::find($id);
        return view('edit_comment', compact('comment'));
    }

    public function update(Request $request, $id){
        $comment= Comment::find($id);
        $comment->body = $request->body;
        $comment->update();
        return redirect('support_request_update');
    }
}
