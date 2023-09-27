<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\ResourceController;
use Symfony\Component\CssSelector\Node\FunctionNode;

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

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function(){
    Route::get('/dashboard', [layoutController::class, 'index']);
    Route::resource('laporan-kegiatan', ResourceController::class);
    Route::get('/lihat-laporan', [layoutController::class, 'lihatLaporan']);
});
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    Route::get('/admin', [layoutController::class, 'adminDash']);
    Route::get('/admin/registrasi-siswa', [layoutController::class, 'siswaRegister']);
    Route::post('/admin/registrasi-siswa', [layoutController::class, 'storeSiswaRegister']);
    Route::get('registrasi-siswa', [layoutController::class, 'siswaRegister']);
    Route::post('registrasi-siswa', [layoutController::class, 'storeSiswaRegister']);
    Route::get('/admin/search', [layoutController::class, 'adminDash']);
    Route::get('/admin/acc-laporan', [layoutController::class, 'accLaporan']);
    Route::get('/admin/beri-catatan', [layoutController::class, 'beriCatatan']);
    Route::post('/admin/beri-catatan', [layoutController::class, 'storeBeriCatatan']);
});
// lazyload // eagerload
Route::group(['middleware' => ['guest']], function(){
    Route::get('/login', [sessionController::class, 'login'])->name('login');
    Route::post('/login', [sessionController::class, 'actionlogin']);

    Route::get('/register', [sessionController::class, 'register']);
    Route::post('/register', [sessionController::class, 'actionregister']);
});
Route::get('/logout', [sessionController::class, 'actionlogout']);
