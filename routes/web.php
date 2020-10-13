<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/course/{slug}',[HomeController::class,'course']);

Route::get('post/{slug}', function($slug){
	$post = App\Models\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});

Route::get('/about-us', [HomeController::class,'about']);
Route::get('/registrasi', [HomeController::class,'formDaftarTraining']);
Route::post('/simpanpeserta',[HomeController::class,'simpanPeserta'])->name('simpanpeserta');
Route::post('simpanbukutamu',[HomeController::class,'simpanBukuTamu'])->name('saveguest');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
