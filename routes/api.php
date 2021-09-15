<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostController;
use App\Http\Controllers\api\CategoryController;


Route::resource('post', PostController::class)->only(['index','show']);

Route::get('post/{category}/category', [PostController::class,'category'])->name('category');

Route::get('post/{url_clean}/url_clean', [PostController::class,'url_clean'])->name('url_clean');

Route::get('category', [CategoryController::class,'index'])->name('index');
Route::get('category/all', [CategoryController::class,'all'])->name('all');
