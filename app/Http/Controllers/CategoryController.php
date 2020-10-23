<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($categoryCode){
        try{
            $category = Category::where('code', $categoryCode)->firstOrFail();
            $categories = Category::get();

        }catch(\Exception $exception){
            return view('errors.404');
        }
        return view('blog', compact('category', 'categories'));
    }
}
