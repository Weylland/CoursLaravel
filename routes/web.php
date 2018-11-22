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
Route::get('/', 'UtilisateursController@liste');

Route::get('/inscription', 'InscriptionController@formulaire');
Route::post('/inscription', 'InscriptionController@traitement');

Route::get('/connexion', 'ConnexionController@formulaire');
Route::post('/connexion', 'ConnexionController@traitement');

Route::group([
    'middleware' => 'App\Http\Middleware\Auth'
], function () {
    Route::get('/mon-compte', 'CompteController@acceuil');
    Route::get('/actualites', 'ActualitesController@liste');
    Route::get('/deconnexion', 'CompteController@deconnexion');
    Route::post('/modification-mot-de-passe','CompteController@modificationMotDePasse');
    Route::post('/modification-avatar','CompteController@modificationAvatar');

    Route::post('/messages', 'MessagesController@nouveau');
    Route::post('/{email}/suivis', 'SuivisController@nouveau');
    Route::delete('/{email}/suivis', 'SuivisController@enlever');
});

Route::get('/{email}', 'UtilisateursController@voir');