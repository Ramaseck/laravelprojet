<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class,'show'])
->name('home');

Route::get('/base', [PostController::class,'shows'])
->name('base');


Route::get('/about-us',function(){
    return view('/pages/about');

})->name('about');
Route::get('/index',function(){
    return view('/pages/index');
})->name('index');



//inscription compte
Route::get('/posts/create', [PostController::class,'create'])
->name('posts.create');
Route::post('/posts/create', [PostController::class,'store'])
->name('posts.store');

//inscription patient
Route::get('/posts/created', [PostController::class,'created'])
->name('posts.created');
Route::post('/posts/created', [PostController::class,'stored'])
->name('posts.stored');

//inscription medcin
Route::get('/posts/creates', [PostController::class,'creates'])
->name('posts.creates');
Route::post('/posts/creates', [PostController::class,'stores'])
->name('posts.stores');






 

/*Route::get('/inscrip-med',function(){
    return view('/pages/inscrip-med');
//})->name('inscrip-med');*/


Route::get('/inscrip-pat',function(){
    return view('/pages/inscrip-pat');
})->name('inscrip-pat');
Route::get('/inscription', [PostController::class,'rows'])
->name('inscription'); 







Route::get('articles', [PostController::class,'index'])
->name ('articles');
Route::get('article', [PostController::class,'show'])
->name ('article');



