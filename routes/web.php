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

Route::get('/', function () {
    return view('home');
});

Route::get('/sculpture', 'SculptureController@index');

Route::get('/textile', 'TextileController@index');

Route::get('/paint', 'PaintController@index');


Route::get('/art', 'AllartsController@index');

Route::get('/appli', 'ApplicationController@index');

////////create artwork//////////

Route::get('/create', 'CreateController@index');

//////////////Users///////////////
Route::get('/backselfer', 'BackSelferController@index');

Route::get('/registr', function () {
    return view('users/registration');
 });


// Route::get('/galleries', function () {
//     return view('galleries/galleries');
// });

// Route::get('/rules', function () {
//     return view('rules/rules');
// });




// Route::get('/connexion', function () {
//     return view('users/connectpage');
// });



Route::get('/buyer', function () {
    return view('users/buyer');
 });

