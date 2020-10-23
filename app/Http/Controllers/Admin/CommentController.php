<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function delete($id){
        $comment = Comment::find($id);
        if($comment){
            $comment->delete();
        }
        return back();
        
    }
}
