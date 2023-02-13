<?php

use Illuminate\Support\Facades\Route;
//este es un import para traer el verificador de vistas en caso de que existan o no
use Illuminate\Support\Facades\View;
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
//esta es la ruta principall el index
if (View::exists('index')){
    Route::get('/', function () {
        return view('index');
        
        //de esta manera se pueden enviar datos como por ejem un arreglo
        //return view('index',['nombre'=>'yorgelix']);
    });
}else{
    Route::get('/', function () {
       return view('NotFound');
    });
}

