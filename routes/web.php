<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\web\WebController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\SettingGeneralController;
use App\Http\Controllers\dashboard\ContactController;
use App\Http\Controllers\dashboard\ProductController;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\PostCommentController;

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

Route::get('/', [WebController::class, 'index'])->name('index');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('logs', [LogViewerController::class, 'index']);

    Route::get('setting/general_setting', [SettingGeneralController::class,'generalSetting'])->name('setting.general');
	Route::post('setting/general_setting_store', [SettingGeneralController::class,'generalSettingStore'])->name('setting.generalStore');

    Route::resource('intermediary/permissions', PermissionController::class);
    Route::resource('intermediary/roles', RoleController::class);

    Route::resource('dashboard/user', UserController::class);        
    Route::get('dashboard/list_users', [UserController::class, 'listarUsuarios'])->name('list_users');
    
    Route::resource('dashboard/category', CategoryController::class);
    Route::resource('dashboard/contact', ContactController::class)->only(['index','show','destroy']);
    Route::resource('dashboard/post-comment', PostCommentController::class)->only(['index','show','destroy']);
    Route::get('dashboard/post-comment/{post}/post', [PostCommentController::class,'post'])->name('post-comment.post');
    Route::get('dashboard/post-comment/j-show/{postComment}', [PostCommentController::class,'jshow']);
    Route::post('dashboard/post-comment/proccess/{postComment}', [PostCommentController::class,'proccess']);    
    
    Route::resource('dashboard/post', PostController::class);
    Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');    
    // route para cargar image con ckeditor
    Route::post('dashboard/post/content_image', [PostController::class, 'contentImage']);  
    
    
    Route::view('/game', 'game.show')->name('game.show');

    Route::resource('dashboard/product', ProductController::class);
    Route::get('dashboard/list_products', [ProductController::class, 'listarProducts'])->name('list_products');

});



