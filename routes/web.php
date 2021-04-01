<?php
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserPostController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['namaspace'=>'User'],function (){
    Route::get('/',[HomeController::class,'index']);
    Route::get('post/{post}',[UserPostController::class,'post'])->name('post');
    Route::get('post/tag/{tag}',[HomeController::class,'tag'])->name('tag');
    Route::get('post/category/{category}',[HomeController::class,'category'])->name('category');

    //vue route
    Route::post('getPosts',[UserPostController::class,'getAllPost']);

    Route::post('saveLike',[UserPostController::class,'saveLike']);

});


Route::group(['namaspace'=>'Admin'],function () {
    Route::get('admin/home',[AdminHomeController::class,'index'])->name('admin/home');
    Route::resource('admin/user', UserController::class);
    Route::resource('admin/role', RoleController::class);
    Route::resource('admin/permission', PermissionController::class);
    Route::resource('admin/post', PostController::class);
    Route::resource('admin/tag', TagController::class);
    Route::resource('admin/category', CategoryController::class);
    Route::get('admin-login',[LoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('admin-login',[LoginController::class,'login']);
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
