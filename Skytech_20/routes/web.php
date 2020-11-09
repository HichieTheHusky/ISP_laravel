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

Route::view('pagalbos', 'pagalbos')->name('pagalbos');
Route::view('bilietoforma', 'bilietoforma')->name('bilietoforma');
Route::view('bilietas', 'bilietas')->name('bilietas');
Route::view('paskirsti', 'paskirsti')->name('paskirsti');
Route::view('uzdaryti', 'uzdaryti')->name('uzdaryti');
Route::view('vertinti', 'vertinti')->name('vertinti');


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



