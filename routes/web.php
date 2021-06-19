<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::group(['prefix'=> LaravelLocalization::setLocale()], function(){
    Route::get('/' , function (){
        return view('welcome');
    });
    Route::get('posts' , [PostController::class, 'index']);
    Route::post('posts' , [PostController::class, 'newPost']);
});
