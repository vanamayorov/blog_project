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

Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');
Route::get('/', 'MainController@index')->name('index');

Route::get('/portfolio', 'MainController@portfolio')->name('portfolio');


Route::group([
    'prefix' => 'blog'
], function(){
    Route::get('/', 'MainController@blog')->name('blog');
    Route::get('/{postId}', 'MainController@blogPost')->name('blogPost');
});

Route::group([
    'prefix' => 'person',
    'namespace' => 'Person',
    'as' => 'person.'
], function(){
    Route::get('/info', 'PersonController@index')->name('info.index');
});


Route::group([
    'middleware' => 'is_admin',
    'namespace' => 'Admin'
], function(){
    Route::get('/home', 'BlogController@index')->name('home');
    Route::get('/todo', 'BlogController@toDo')->name('toDo');
    Route::resource('/post', 'PostController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/users', 'UserController');
    Route::post('/delete/{id}', 'CommentController@delete')->name('delete');
});


Route::get('/findPost', 'MainController@findPost');
Route::get('/{category}', 'CategoryController@category')->name('category');
Route::post('/comments/{post_id}', 'CommentController@store')->name('write-post');