<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'DESC')->take(2)->get();
        return view('index', compact('posts'));
    }

    public function blog(){
        $posts = Post::simplePaginate(3);
        $categories = Category::get();
        return view('blog', compact('posts', 'categories'));
    }
    public function blogPost($postId){
        $post = Post::where('id', $postId)->first();
        $categories = Category::get();
        return view('blog-post', compact(['post', 'categories']));
    }
    public function portfolio(){
        return view('portfolio');
    }
    
}
