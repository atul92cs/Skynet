<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
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

Route::get('/',[PageController::class,'showPosts']);
Route::get('/create',function(){
    return view('createpost');
});
Route::get('/update/{id}',[PostController::class,'getPost']);
Route::post('/post/add',[PostController::class,'createPost']);
Route::post('/post/update',[PostController::class,'updatePost']);
