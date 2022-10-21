<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sistemaController;

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

// Route::get('/', function () { return view('welcome');});

//Route::name('base')->get('base',function(){return view('base');});
Route::name('lista_usuario')->get('usuarios',[sistemaController::class, 'usuarios']);
Route::name('lista_tipos')->get('tipos',[sistemaController::class, 'tipos']);
Route::name('lista_tienda')->get('tienda',[sistemaController::class, 'tienda']);
Route::name('lista_productos')->get('/',[sistemaController::class,  'productos']);

/*-------------------------------RUTAS USUARIO------------------------------------------*/
Route::name('editar_usuario')->get('editar_usuario',[sistemaController::class,  'editar_usuario']);


Route::name('registro_usuario')->get('registrar',[sistemaController::class,  'altau']);
Route::name('registrar')->post('registrar',[sistemaController::class,  'registrar']);

Route::name('borrarusuario/{id_usuario}')->get('borrarusuario/{id_usuario}',[sistemaController::class,  'borrarusuario']);
//Route::name('detalle_usuario')->get('detalle_usuario',[sistemaController::class,  'detalle_usuario']);

Route::name('detalle_usuario')->get('detalle_usuario/{id}',[sistemaController::class,  'detalle_usuario']);

Route::name('editar_usuario')->get('editar_usuario/{id}',[sistemaController::class,  'editar_usuario']);
Route::name('salvar')->put('salvar',[sistemaController::class,  'salvar']);


/*-------------------------------RUTAS PRODUCTOS------------------------------------------*/
Route::name('registro_productos')->post('registro_productos',[sistemaController::class,  'registro_productos']);
Route::name('editar_productos')->get('editar_productos',[sistemaController::class,  'productos']);


/*-------------------------------RUTAS TIPOS------------------------------------------*/
Route::name('registro_tipos')->post('registro_tipos',[sistemaController::class,  'registro_tipos']);
Route::name('editar_tipos')->get('editar_tipos',[sistemaController::class,  'tipos']);



/*-------------------------------RUTAS TIENDA------------------------------------------*/
Route::name('registro_tienda')->get('registro_tienda',[sistemaController::class,  'registro_tienda']);
Route::name('editar_tienda')->get('editar_tienda',[sistemaController::class,  'tienda']);

