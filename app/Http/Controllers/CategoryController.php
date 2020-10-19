<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($categoryCode){
        $category = Category::where('code', $categoryCode)->first();
        $categories = Category::get();
        return view('blog', compact('category', 'categories'));
    }
}
