<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/student-list', [StudentController::class, 'index']);
Route::get('/add-student', [StudentController::class, 'addStudent']);
Route::post('/save-student', [StudentController::class, 'saveStudent']);

Route::get('/edit-student/{id}', [StudentController::class, 'editStudent']);
Route::post('/update-student/{id}', [StudentController::class, 'updateStudent']);