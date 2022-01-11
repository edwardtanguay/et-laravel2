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

Route::get('/articles', function () {
	return view('pages/articles');
});

Route::get('/article/{id}/{lang?}', function ($id, $lang = 'english') {
	return view('pages/article', ['id' => $id, 'lang' => $lang]);
})->where('id', '[0-9]+')->where('lang', '(english|german)');

Route::redirect('/toparticle', '/article/555');

Route::get('/about', function () {
	$colors = array('red', 'green', 'yellow');
	return view('pages/about', ['message' => 'This is information about the site.', 'colors' => $colors]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
