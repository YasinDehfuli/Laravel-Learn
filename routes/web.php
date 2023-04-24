<?php

use Illuminate\Support\Facades\Route;

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
return \App\Models\Student::first();
});

Route::get('/students',function (){
return \App\Models\Student::all();
});
