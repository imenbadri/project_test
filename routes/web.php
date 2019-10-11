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


Route::middleware(['auth'])->group(function () {

	Route::get('/ajouter_livre','LivresController@ajouter_livre')->name('ajouter_livre');

	Route::post('/ajouter_livre','LivresController@post_ajouter_livre')->name('ajouter_livre');

	Route::get('/supprimer_livre/{id}', 'LivresController@deleteLivre')->name('delete_livre');

	Route::get('/edit_livre/{id}', 'LivresController@editLivre')->name('edit_livre');

	Route::post('/edit_livre/{id}', 'LivresController@updateLivre')->name('update_livre');

	route::get('/ajouter_categorie', 'CategoryController@ajouter_categorie')->name('ajouter_categorie');

	route::post('/ajouter_categorie', 'CategoryController@post_ajouter_categorie')->name('ajouter_categorie');

	route::get('/supprimer_categorie/{id}', 'CategoryController@deleteCategory')->name('delete_categorie');

	route::get('edit_categorie/{id}','CategoryController@editCatergorie')-> name('edit_categorie');

	route::post('edit_categorie/{id}','CategoryController@updateCatergorie')-> name('update_categorie');
});



Route::get('/','homeController@index')->name('index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/voir_livre/{id}', 'LivresController@voirLivre')->name('voir_livre');


route::get('voir_categorie/{id}','CategoryController@voirCatergorie')-> name('voir_categorie');




