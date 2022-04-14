<?php
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\ProdutosController;
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



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('home');

    })->name('home');
    
    Route::get('/usuarios', [UsuariosController::class,'lista']);
    
    Route::get('/clientes', [ClientesController::class,'lista']);

    Route::get('/produtos', [ProdutosController::class,'lista']);
    
    Route::get('/usuarios-add', [UsuariosController::class,'add']);

    Route::get('/clientes-add', [ClientesController::class,'add']);

    Route::get('/produtos-add', [ProdutosController::class,'add']);


});


