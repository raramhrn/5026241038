<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\NilaiKuliahController;

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
    return view('index1');
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
Route::get('/pegawai1', [PegawaiDBController::class, 'index']);

//pert 12
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiController::class, 'cari']);

//pert15 latihan EAS
Route::get('/nilai', [NilaiKuliahController::class, 'index']);
Route::get('/tambahnilai', [NilaiKuliahController::class, 'tambah']);
Route::post('/storenilai', [NilaiKuliahController::class, 'store']);
// Route::get('/nilaiedit/{id}', [NilaiKuliahController::class