<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\AutomovilesController;
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
    return view('auth.login');
});

Auth::routes(['register'=>true,'reset'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuarios');

Route::get('/usuarios/nuevo',[UsuariosController::class,'create'])->name('usuarios.create');
Route::post('/usuarios/store',[UsuariosController::class,'store'])->name('usuarios.store');


route::resource('trabajadores',TrabajadorController::class);
/*Route::get('/usuarios', function () {
    return view('usuarios');
})->name('usuarios');*/

Route::resource('automoviles',AutomovilesController::class);
