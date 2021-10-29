<?php
use App\Http\Controllers\BodyController;
use Illuminate\Support\Facades\Route;

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

//kansa
Route::get('/login',[BodyController::class, 'kansalogin']);
Route::get('/transaksi',[BodyController::class, 'kansatransaksi']);
Route::get('/bkasir',[BodyController::class, 'kansaberandakasir']);
Route::get('/transaksi2',[BodyController::class, 'kansatransaksi2']);
Route::get('/test',[BodyController::class, 'test']);
Route::get('/riwayat',[BodyController::class,'kansariwayat']);
//Route::get('/manage/transaksi',[BodyController::class,'kansatransaksi']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
