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
    return view('Dashboard.main');
});
Route::get('/edit', function () {
    return view('Dashboard.edit');
});
Route::get('/analysis', function () {
    return view('Dashboard.analysis');
});
Route::get('/addmember', function () {
    return view('Dashboard.addmember');
});
