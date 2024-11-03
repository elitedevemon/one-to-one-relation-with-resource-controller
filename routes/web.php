<?php

use App\Http\Controllers\StudentRecordController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//   return view('welcome');
// });

Route::resource('student', StudentRecordController::class);