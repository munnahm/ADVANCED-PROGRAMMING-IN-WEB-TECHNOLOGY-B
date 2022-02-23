<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;
use App\Http\Controllers\studentController;
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
Route::get('profile',function(){
    return view('cv.profile');
});
Route::get('education',function(){
    return view('cv.education');
});
Route::get('student/login',[studentController::class,'login'])->name('s.login');
Route::post('student/home',[studentController::class,'home'])->name('s.home');
Route::get('registration',[formController::class,'registration']);
Route::get('student/create',[studentController::class,'create'])->name('s.create');
Route::get('student/get',[studentController::class,'get'])->name('s.get');
Route::get('student/list',[studentController::class,'list'])->name('s.list');
Route::get('student/details/{id}/{name}',[studentController::class,'details'])->name('s.details');
