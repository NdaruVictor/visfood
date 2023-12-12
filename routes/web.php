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
    return view('landing.homepage.index');
});

Route::middleware('auth')->group(function () {
    Route::resource('/posts', \App\Http\Controllers\PostController::class);
    Route::resource('/recipes', \App\Http\Controllers\RecipeController::class);
    Route::resource('/alamats', \App\Http\Controllers\AlamatController::class);
    Route::get('/keyword', 'PostController@keyword')->name('posts.keyword');
    // Route::get('/keyword', 'RecipeController@keyword')->name('recipes.keyword');
    Route::get('logout', 'Auth\LoginController@destroy')->name('logout');
});

    Route::resource('recipe', 'Landing\RecipeController')->only('index','show');
    Route::get('/searchR', 'Landing\RecipeController@search')->name('recipe.search');
    Route::resource('contact', 'Landing\ContactController')->only('index');
    Route::post('/contact', 'Landing\ContactController@sendEmail')->name('contact.send');
    Route::get('/search', 'Landing\HomeController@search')->name('landing.search');
    Route::resource('about', 'Landing\AboutController')->only('index');
    Route::get('login', 'Auth\LoginController@create')->name('login');
    Route::post('login', 'Auth\LoginController@store');
    Route::get('register', 'Auth\RegisterController@create')->name('register');
    Route::post('register', 'Auth\RegisterController@store');


Route::get('/ndaru', function () {
    return ("Saya murid rpl");
});

Route::get('/guru', function () {
    return view('data_guru');
});

Route::get('/siswa',function(){
    return view('data_siswa');
});
