<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;

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

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//pertemuan 1
Route::get('pert1', function () {
    return view('pertemuan1');
});

//pertemuan 2
Route::get('pert2', function () {
    return view('pertemuan2');
});

//pertemuan 3
Route::get('pert3', function () {
    return view('pertemuan3');
});

//tugas pertemuan 3
Route::get('tugas3', function () {
    return view('tugaspertemuan3');
});

//pertemuan 4
Route::get('pert4', function () {
    return view('pertemuan4');
});

//index pertemuan 5
Route::get('index', function () {
    return view('index');
});

//pertemuan 5
Route::get('pert5', function () {
    return view('pertemuan5');
});

//linktree
Route::get('linksouri', function () {
    return view('linktree');
});

//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index']);