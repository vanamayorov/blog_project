<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);


Route::get('/', 'MainController@index')->name('index');


Route::get('/portfolio', 'MainController@portfolio')->name('portfolio');


Route::group([
    'prefix' => 'blog'
], function(){
    Route::get('/', 'MainController@blog')->name('blog');
    Route::get('/{postId}', 'MainController@blogPost')->name('blogPost');
});



Route::group([
    'middleware' => 'is_admin',
    'namespace' => 'Admin'
], function(){
    Route::get('/home', 'BlogController@index')->name('home');
    Route::resource('/post', 'PostController');
    Route::resource('/categories', 'CategoryController');
});

Route::get('/{category}', 'CategoryController@category')->name('category');
