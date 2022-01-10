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
    return view('pages/welcome');
});

Route::get('/info', function () {
    return view('pages/info');
});

Route::get('/articles/{id}/{lang?}', function ($id, $lang = 'english') {
    return ("showing article #$id ($lang)");
})->where('id', '[0-9]+')->where('lang', '(english|german)');

Route::redirect('/toparticle', '/articles/555');

Route::get('/about', function () {
	$colors = array('red', 'green', 'yellow'); 
	return view('pages/about', ['message' => 'This is information about the site.', 'colors' => $colors]);
});