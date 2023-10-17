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
    return view('/auth/login');
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function(){
    Route::resource('laporan-kegiatan', ResourceController::class);
    Route::get('/downloadLampiran/{id}', [ResourceController::class, 'downloadImage'])->name('downloadLampiran');
});
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function(){
    Route::get('/lihat-laporan/{id}', [layoutController::class, 'lihatLaporan'])->name('lihatLaporan');
    Route::get('/downloadLampiran/{id}', [ResourceController::class, 'downloadImage'])->name('downloadLampiran');
    Route::get('/admin', [layoutController::class, 'adminDash'])->name('adminDashboard');
    Route::get('/admin/registrasi-siswa', [layoutController::class, 'siswaRegister']);
    Route::post('/admin/registrasi-siswa', [layoutController::class, 'storeSiswaRegister']);
    Route::get('registrasi-siswa', [layoutController::class, 'siswaRegister']);
    Route::post('registrasi-siswa', [layoutController::class, 'storeSiswaRegister']);
    Route::get('/admin/search', [layoutController::class, 'adminDash']);
    Route::get('/admin/beri-catatan/{data}/show', [layoutController::class, 'beriCatatan'])->name('beriCatatan.show');
    Route::put('/admin/acc-laporan/{data}', [layoutController::class, 'accLaporan'])->name('accLaporan');
    Route::put('/admin/beri-catatan/{data}', [layoutController::class, 'storeBeriCatatan'])->name('beriCatatan.put');
    Route::delete('/admin/beri-catatan/{data}', [layoutController::class, 'hapusBeriCatatan'])->name('beriCatatan.destroy');
});
// lazyload // eagerload
Route::group(['middleware' => ['guest']], function(){
    Route::get('/login', [sessionController::class, 'login'])->name('login');
    Route::post('/login', [sessionController::class, 'actionlogin']);

    Route::get('/register', [sessionController::class, 'register'])->name('register');
});
Route::get('/logout', [sessionController::class, 'actionlogout'])->name('logout');
