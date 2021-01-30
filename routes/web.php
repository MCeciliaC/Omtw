<?php

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

// Route::get('/', function () {
//     // return view('welcome');
//     return redirect('/home');
// });

Route::get('/', function () {
    // return view('welcome');
    return view('/Welcome');
});

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/play', "playController@showQuestions");

Route::get('/answerQuestion/{gameId}/{button}', "playController@answerQuestion");

Route::get('/abm', "abmController@list");
Route::get('/abm/{id}', "abmController@showModify");

Route::post('/abm', "abmController@insert");

Route::patch('/abm', "abmController@modify");

Route::delete('/abm', "abmController@delete");

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function () {
    return view('contact');
});

Route::get('/edition', function () {
    return view('edition');
});

Route::post('/edition', "editionController@editUser");

Route::get('/ranking', "rankingController@list");
