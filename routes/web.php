<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
Route::get('hello', function () {
    return 'ini laravel saya';
});
Route::get('tampil/{nilai}', function ($nilai) {
    return 'Nilai saya adalah : '. $nilai;
});
Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil penjumlahan adalah : '. $nilai1 + $nilai2;
});
Route::get('pengurangan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pengurangan adalah : '. $nilai1 - $nilai2;
});
Route::get('perkalian/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil perkalian adalah : '. $nilai1 * $nilai2;
});
Route::get('pembagian/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return 'Hasil pembagian adalah : '. $nilai1 / $nilai2;
});

Route::match(['get', 'post', 'put'], '/coba', function () {
    return 'halaman coba';
});

Route::any('/any', function () {
    return 'any';
});

Route::get('pagecontroller', [PageController::class, 'index'] );
Route::get('pagecontrollerrequest', [PageController::class, 'request'] );

Route::get('request', [PageController::class, 'requestdata'] );

// Route::get('users/{id}', function ($id) {});
// Route::post('users/{id}', function ($id) {});
// Route::put('users/{id}', function ($id) {});
// Route::delete('users/{id}', function ($id) {});

Route::get('test', function () {
    return view('coba');
});

Route::get('template', function () {
    return view('template');
});

Route::get('tabeldata', function () {
    $data = ['meja', 'kursi', 'pensil', 'pulpen', 'lampu'];
    return view('table', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);
// Route::get('tambahsiswa', [SiswaController::class, 'create']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
