<?php
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\JadwalController_;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
use Illuminate\Routing\Controllers\Middleware;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/siswa', function () {
//     return "<h1>Selamat Datang nama</h1>";
// });

// Route::get('/siswa/{id}', function ($id) {
//     return "<h1>Selamat Datang siswa dengan $id </h1>";
// })->where('id', '[0-9]+') ;

// Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
//     return "<h1>Selamat Datang siswa dengan $id dan Nama $nama</h1>";
// })->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']) ;

// Route::get('siswa',[SiswaController::class, 'index']);
// Route::get('siswa/{id}',[SiswaController::class, 'detail'])->where('id', '[0-9]+');

route::resource('siswa', SiswaController::class);


Route::get('/',[HalamanController::class, 'index']);
Route::get('/index',[HalamanController::class, 'index']);
Route::get('/kontak',[HalamanController::class, 'kontak']);
Route::get('/tentang',[HalamanController::class, 'tentang']);

Route::resource('siswa', SiswaController::class)->middleware('isLogin');

route::get('/sesi',[SessionController::class,'index'])->middleware('isTamu');
route::post('/sesi/login',[SessionController::class,'login'])->middleware('isTamu');
route::get('/sesi/logout',[SessionController::class,'logout']);
route::get('/sesi/register',[SessionController::class,'register'])->middleware('isTamu');
route::post('/sesi/create',[SessionController::class,'create'])->middleware('isTamu');

// route::resource('/jadwal', JadwalController_::class);
