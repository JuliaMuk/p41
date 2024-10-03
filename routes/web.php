<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
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

Route::get('/first', [MainController::class, 'show'])->name('first');

Route::get('/students', [StudentController::class, 'index'])->name('student.index');

Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
