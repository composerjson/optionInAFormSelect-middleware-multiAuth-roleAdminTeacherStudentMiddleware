<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $d = Department::orderBy('name')->get();
//     // dd($d);
//     return view('welcome')->with(compact('d') );
// });

Route::view('/', 'welcome');

// Route::get('/student', [StudentController::class, 'index']);

Route::resource('/student', StudentController::class);

Route::resource('/department', DepartmentController::class);

Route::resource('/list', DepartmentController::class);


// Route::redirect('/here', '/department/create');
// Route::redirect('/here', url('/there'));
