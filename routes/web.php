<?php

use Illuminate\Support\Facades\Route;

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
    //CREAIAMO DUE VARIABILI
    $pageTitle = 'about me';
    $classNumber = 91;
    $data = [
        'name' => 'Luca',
        'surname' => 'Cirigliano',
        'address' => 'Via Tal Dei Tali 88 Desio MB',
        'message' => 'Ricordati che devi morire!'

    ];
    return view('about', compact('pageTitle', 'classNumber'), $data);
});
