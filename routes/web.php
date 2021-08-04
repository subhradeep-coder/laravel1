<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
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

Auth::routes();

Route::post('/save', [StudentController::class, 'store']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::view('add','addmember');
Route::resource('student',StudentController::class);
//Route::post('student',[StudentController::class,'store']);
Route::get('/delete-contact/{id}',[StudentController::class, 'delete'])->name('delete.contact');

Route::get('/list', [StudentController::class, 'show']);
Route::get('/admin/home', [StudentController::class,'show']);
Route::get('delete/{id}', [StudentController::class,'delete']);
