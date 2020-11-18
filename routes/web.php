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

//grouper les routes pour faire des pages admin par exemple
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('salut', function() {
//         return 'salut';
//     });
// });

//add 'middleware' => 'auth' ou autre => redirige vers la connexion
// Route::group(['prefix' => 'admin', 'middleware' => 'ip'], function () {
//     Route::get('salut', function() {
//         return 'salut';
//     });
// });



//Faire une route qui est séparé par un - grace au regex
//donner un nom 
// Route::get('salut/{slug}-{id}',['as' => 'salut', function ($slug, $id) {
//     return "Lien : /salut/$slug-$id";
// }])
// ->where('slug', '[a-z0-9\-]+')
// ->where('id', '[0-9]+');

Route::get('home', 'WelcomeController@index');

Route::get('about', 'PagesController@about');


// Route::controller('welcome', 'WelcomeController');