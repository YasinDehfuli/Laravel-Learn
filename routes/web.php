<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about',function (){
return 'we are in about page';
});
Route::get('/about/company',function (){
return 'Company';
});

Route::get('/home/student/login/who',function (){
return '<h1> Welcome Here </h1>';
});

Route::get('/student',function (){
return Student::inRandomOrder()->first();
});

Route::get('/students',function (){
return Student::all();
});

//Route::get('/student/{student}',function ($id){
//return \App\Models\Student::Where('id',$id)->first();
//});
Route::get('/student/{student}',function (Student $student){
return $student;
});



Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('user.index');
Route::get('/user/new',[\App\Http\Controllers\UserController::class,'create'])->name('user.create');
Route::post('/user/store',[\App\Http\Controllers\UserController::class,'store'])->name('user.store');
Route::get('/user/delete/{user}',[\App\Http\Controllers\UserController::class,'destroy'])->name('user.delete');

Route::get('/user/{user}' ,function (User $user ){
    return $user;
});
