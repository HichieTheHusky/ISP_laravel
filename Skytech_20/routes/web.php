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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('bilietoforma', 'bilietoforma')->name('bilietoforma');
Route::post('/createBilietas', [App\Http\Controllers\PagalbosController::class, 'makeBilietas'])->name('createBilietas');
Route::get('pagalbos', [App\Http\Controllers\PagalbosController::class, 'bilietai'])->name('pagalbos');
Route::get('bilietas', [App\Http\Controllers\PagalbosController::class, 'bilietas'])->name('bilietas');
Route::post('/createKomentaras', [App\Http\Controllers\PagalbosController::class, 'makeZinutes'])->name('createKomentaras');
Route::get('paskirsti', [App\Http\Controllers\PagalbosController::class, 'paskirsti'])->name('paskirsti');
Route::post('/createBilietoPriskirimas', [App\Http\Controllers\PagalbosController::class, 'makePaskirimas'])->name('createBilietoPriskirimas');
Route::get('uzdaryti', [App\Http\Controllers\PagalbosController::class, 'uzdaryti'])->name('uzdaryti');
Route::post('/createBilietoUzdarymas', [App\Http\Controllers\PagalbosController::class, 'makeUzdarymas'])->name('createBilietoUzdarymas');
Route::get('vertinti', [App\Http\Controllers\PagalbosController::class, 'vertinti'])->name('vertinti');
Route::post('/createBilietoIvertis', [App\Http\Controllers\PagalbosController::class, 'makeIvertis'])->name('createBilietoIvertis');


Route::view('dalis', 'dalis')->name('dalis');
Route::view('daliesduomenu', 'daliesduomenu')->name('daliesduomenu');
Route::view('surinkimopasirinkimolangas', 'surinkimopasirinkimolangas')->name('surinkimopasirinkimolangas');
Route::view('filtravimo', 'filtravimo')->name('filtravimo');

//Route::get('/profilis/{id}', 'VartotojoController@profilis')->name('Vartotojo.profilis');
Route::get('/profilis', [App\Http\Controllers\VartotojoController::class, 'profilis'])->name('Vartotojo.profilis');
Route::get('/profilisredagavimas', [App\Http\Controllers\VartotojoController::class, 'redagavimas'])->name('profilisredagavimas');
Route::post('/profilisredagavimas', [App\Http\Controllers\VartotojoController::class, 'atnaujinimas'])->name('profilisredagavimas');



//Route::view('profilis', 'profilis')->name('profilis');
//Route::view('profilisredagavimas', 'profilisredagavimas')->name('profilisredagavimas');
Route::get('/isimintinosprekes', [App\Http\Controllers\IsimintinuPrekiuController::class, 'atvaizduotiPrekes'])->name('isimintinosprekes');
Route::post('/isiminti', [App\Http\Controllers\PrekesController::class, 'isimintiPreke'])->name('isiminti');
Route::get('/isimintinosprekes/{kategorija}', [App\Http\Controllers\IsimintinuPrekiuController::class, 'filtras'])->name('filtravimas');;


Route::view('uzsakymoataskaitos', 'uzsakymoataskaitos')->name('uzsakymoataskaitos');
Route::view('uzsakymusarasas', 'uzsakymusarasas')->name('uzsakymusarasas');
Route::view('nepatuzsakymusarasas', 'nepatuzsakymusarasas')->name('nepatuzsakymusarasas');
Route::view('uzsakymas', 'uzsakymas')->name('uzsakymas');


Route::view('prekespridejimas', 'prekespridejimas')->name('prekespridejimas');
Route::get('prekes', [App\Http\Controllers\PrekesController::class, 'prekes'])->name('prekes');
Route::post('prekespridejimas', [App\Http\Controllers\PrekesController::class, 'pridetiPreke'])->name('prekespridejimas');

Route::view('preke', 'preke')->name('preke');
Route::view('prekesredag', 'prekesredag')->name('prekesredag');
Route::view('ataskaitoskriterij', 'ataskaitoskriterij')->name('ataskaitoskriterij');
Route::view('komentarasred', 'komentarasred')->name('komentarasred');
Route::view('prekesvertinimas', 'prekesvertinimas')->name('prekesvertinimas');
Route::view('uzsakymosudarymas', 'uzsakymosudarymas')->name('uzsakymosudarymas');

Route::view('darbuotojopridejimas', 'darbuotojopridejimas')->name('darbuotojopridejimas');
Route::post('darbuotojopridejimas', [App\Http\Controllers\AdministravimoController::class, 'pridetiDarbuotoja'])->name('darbuotojopridejimas');
Route::get('darbuotojai', [App\Http\Controllers\AdministravimoController::class, 'darbuotojai'])->name('darbuotojai');
Route::view('darbuotojas', 'darbuotojas')->name('darbuotojas');
Route::get('/darbuotojoredag/{id}', [App\Http\Controllers\AdministravimoController::class, 'redaguoti'])->name('darbuotojoredag');
Route::post('/darbuotojoredag', [App\Http\Controllers\AdministravimoController::class, 'redaguotiDarbuotoja'])->name('darbuotojas.redagavimas');
Route::view('ataskaita', 'ataskaita')->name('ataskaita');



