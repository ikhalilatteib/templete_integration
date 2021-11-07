<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileAvatarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/index','index')->name('index');
Route::view('/admin/layout','layouts.admin-layouts')->name('admin.layout');
Route::get('/admin/users',[ProfileAvatarController::class,'index'])->name('admin.users');
Route::view('/admin/uploads/img','uploads-img')->name('admin.uploads.img');
Route::post('/admin/uploads/store',[ProfileAvatarController::class,'store'])->name('admin.uploads.store');

Route::group(['prefix' => 'article','middleware' => 'id.true'],function (){
    Route::view('/create','article.create')->name('article.create');
    Route::post('/store',[ArticleController::class,'storeArticle'])->name('article.store');
    Route::get('',[ArticleController::class,'indexArticle'])->name('article.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
