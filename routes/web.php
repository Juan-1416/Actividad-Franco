<?php

use App\Http\Controllers\Ejercicio1Controller;
use App\Http\Controllers\Ejercicio2Controller;
use App\Http\Controllers\Ejercicio3Controller;
use App\Http\Controllers\Ejercicio4Controller;
use App\Http\Controllers\Ejercicio5Controller;
use App\Http\Controllers\Ejercicio6Controller;
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
Route::get('/', function () {
    return view('Template.Template');
});
Route::get('Ejercicio1',[Ejercicio1Controller::class,'Ejercicio1'])->name('Ejercicio1');
Route::post('/resultado_Ej1',[Ejercicio1Controller::class,'resultado_Ej1'])->name('resultado_Ej1');

Route::get('Ejercicio2',[Ejercicio2Controller::class,'Ejercicio2'])->name('Ejercicio2');
Route::post('/resultado_Ej2',[Ejercicio2Controller::class,'resultado_Ej2'])->name('resultado_Ej2');

Route::get('Ejercicio3',[Ejercicio3Controller::class,'Ejercicio3'])->name('Ejercicio3');
Route::post('/resultado_Ej3',[Ejercicio3Controller::class,'resultado_Ej3'])->name('resultado_Ej3');

Route::get('Ejercicio4',[Ejercicio4Controller::class,'Ejercicio4'])->name('Ejercicio4');
Route::post('/resultado_Ej4',[Ejercicio4Controller::class,'resultado_Ej4'])->name('resultado_Ej4');

Route::get('Ejercicio5',[Ejercicio5Controller::class,'Ejercicio5'])->name('Ejercicio5');
Route::post('/resultado_Ej5',[Ejercicio5Controller::class,'resultado_Ej5'])->name('resultado_Ej5');

Route::get('Ejercicio6',[Ejercicio6Controller::class,'Ejercicio6'])->name('Ejercicio6');
Route::post('/resultado_Ej6',[Ejercicio6Controller::class,'resultado_Ej6'])->name('resultado_Ej6');
