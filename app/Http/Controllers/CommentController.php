<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function comment()
    {
        $posts = Comment::all();
        return view('post', [
            'post' => $posts,
        ]);
    }
}