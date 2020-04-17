<?php

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
    return view('index');
});

Route::get('/features', function () {
    $features_page='feature page';
    return view('features', ['routingfeatures' => $features_page]);
    //return view('features');
});

Route::get('/Mahasiswa', 'MahasiswaController@homeindex');


Route::resource('/students', 'StudentsController');

// Route::get('/students', 'StudentsController@indexStudents');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::get('/students/create', 'StudentsController@create');

Route::get('/pricing', function () {
    $pricing_page='pricing page';
    return view('pricing',['routingpricing' => $pricing_page]);
});