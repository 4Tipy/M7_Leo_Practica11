<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorEjercicio1;
use App\Http\Controllers\Admin\ControladorAdmin;

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
    return 'Pagina principal';
});

Route::get('/ej1', [controladorEjercicio1::class, 'ej1']);
Route::get('/sufrimiento/{pepo}', [controladorEjercicio1::class, 'sufrimiento']);

Route::group(['middleware' => ['adb']], function(){
    Route::get('articulos', [ControladorAdmin::class, 'articulos']);
});
