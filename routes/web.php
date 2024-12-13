<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PegawaiController;
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

// Route untuk mengarahkan ke dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/data', function () {
    return view('welcome');
});

Route::get('/edit', function () {
    return view('edit');
});

// Route utama ke halaman project
Route::get('/project', function () {
    return view('home');
});

// Route untuk dashboard
Route::get('/dashboard', [ProjectController::class, 'index']);

// Route untuk project
Route::get('/project/getlist', [ProjectController::class, 'index1']);
Route::get('/project/tambah', [ProjectController::class, 'tambah']);
Route::post('/project/store', [ProjectController::class, 'store']);
Route::get('/project/edit/{id}', [ProjectController::class, 'edit']);
Route::post('/project/update', [ProjectController::class, 'update']);
Route::get('/project/hapus/{id}', [ProjectController::class, 'hapus']);
