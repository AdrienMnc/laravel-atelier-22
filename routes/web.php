<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\LayoutController;

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




// Route::get('/index',  function () {
//     return "coucou get";
// })->name('index.index');



// Route::post('/postings',  function () {
//     return "coucou post";
// })->name('postings.store');


// Route::put('/updates/{id}',  function ($id) {
//     return "coucou put" . $id;
// })->name('updates.update');


// Route::delete('/delete/{id}',  function ($id) {
//     return "delete !!!" . $id;
// })->name('delete.destroy');

// // -----------------------------------------------------------------------------//

// Route::get('/afficherFactures/{id}', [AfficherFactureController::class, 'index'])
//     ->name('afficherFactures.index');


// Route::post('/creerFactures/{id}', [CreerFactureController::class, 'store'])
//     ->name('creerFactures.store');


// Route::put('/editerFactures/{id}', function ($id) {
//     return ['ID : ' . $id, 'Facture modifié'];
// })->name('editerFactures.update');


// Route::delete('/supprimerFactures/{id}', function ($id) {
//     return ['ID : ' . $id, 'Facture supprimé'];
// })->name('supprimerFactures.destroy');


// Route::get('/facture45/{id}/{name?}', function ($id, $name = null) {

//     if ($id && $name === true) {
//         return ['ID : ' . $id, 'Name :' . $name];
//     } else {
//         return "Veuillez remplir les champs";
//     }
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


// Route::get("/test/{id}", [NumberController::class, "create"])
//     ->name("test.create");




// Route::get("/cryptos/{cryptoName}", [CryptoController::class, "checkCrypto"])
//     ->name("cryptos.checkCrypto");


Route::post("/countries", [CountryController::class, "send"])
    ->name("countries.send");


Route::get("/series", [SerieController::class, "index"])
    ->name("series.index");

Route::get("showSeries/{id}", [SerieController::class, "show"])
    ->name("showSeries.show");

Route::get("layouts", [LayoutController::class, "index"])
    ->name("layouts.index");
