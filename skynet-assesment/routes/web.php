<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('postpage');
});
Route::get('/create',function(){
    return view('createpost');
});
Route::get('/update/{id}',[PostController::class,'getPost']);
Route::post('/post/add',[PostController::class,'createPost']);
Route::post('/post/update',[PostController::class,'updatePost']);
