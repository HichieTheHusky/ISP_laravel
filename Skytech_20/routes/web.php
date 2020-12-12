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


Route::view('profilis', 'profilis')->name('profilis');
Route::view('profilisredagavimas', 'profilisredagavimas')->name('profilisredagavimas');
Route::view('isimintinosprekes', 'isimintinosprekes')->name('isimintinosprekes');


Route::view('uzsakymoataskaitos', 'uzsakymoataskaitos')->name('uzsakymoataskaitos');
Route::view('uzsakymusarasas', 'uzsakymusarasas')->name('uzsakymusarasas');
Route::view('nepatuzsakymusarasas', 'nepatuzsakymusarasas')->name('nepatuzsakymusarasas');
Route::view('uzsakymas', 'uzsakymas')->name('uzsakymas');


Route::view('prekespridejimas', 'prekespridejimas')->name('prekespridejimas');
Route::view('prekes', 'prekes')->name('prekes');
Route::view('preke', 'preke')->name('preke');
Route::view('prekesredag', 'prekesredag')->name('prekesredag');
Route::view('ataskaitoskriterij', 'ataskaitoskriterij')->name('ataskaitoskriterij');
Route::view('komentarasred', 'komentarasred')->name('komentarasred');
Route::view('prekesvertinimas', 'prekesvertinimas')->name('prekesvertinimas');
Route::view('uzsakymosudarymas', 'uzsakymosudarymas')->name('uzsakymosudarymas');


Route::view('darbuotojopridejimas', 'darbuotojopridejimas')->name('darbuotojopridejimas');
Route::view('darbuotojai', 'darbuotojai')->name('darbuotojai');
Route::view('darbuotojas', 'darbuotojas')->name('darbuotojas');
Route::view('darbuotojoredag', 'darbuotojoredag')->name('darbuotojoredag');
Route::view('ataskaita', 'ataskaita')->name('ataskaita');



