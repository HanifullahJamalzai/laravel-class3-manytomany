<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
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

Route::get('/addcourse', [StudentController::class, 'add']);
Route::get('/addstudent', [CourseController::class, 'add']);

Route::get('/deletecourse', [StudentController::class, 'delete']);
Route::get('/deletestudent', [CourseController::class, 'delete']);

Route::get('/updatecourse', [StudentController::class, 'update']);
Route::get('/updatestudent', [CourseController::class, 'update']);

Route::get('showcourse', [StudentController::class, 'show']);
Route::get('showstudent', [CourseController::class, 'show']);