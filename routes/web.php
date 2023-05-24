<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormtugasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;

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

route::get('/salam',function(){
    return view('salam',[
        "nama" =>"Ridho Yustisiyo",
        "umur" =>19
    ]);
});

route::get('/nilai',function(){
    return view('nilai');
});
route::get('/tampil',function(){
    return view('tampil');
});

Route::get('/form',[FormController::class, 'index']);
Route::post('/hasil',[FormController::class, 'hasil']);

Route::get('/formtugas',[FormtugasController::class, 'index']);
Route::post('/hasiltugas',[FormtugasController::class, 'hasil']);

// admin atau backend
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
});




