<?php

use App\Http\Controllers\CategoryController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('gestion_category', 'CategoryController');

Route::resource('gestion_product', 'ProductController');

Route::resource('gestion_client', 'ClientController');

Route::resource('gestion_vente', 'VenteController');

Route::resource('gestion_fournisseur', 'FournisseurController');

Route::resource('gestion_achat', 'AchatController');

Route::resource('gestion_invent', 'InventaireController');
