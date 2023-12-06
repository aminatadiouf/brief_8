<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AssociationLogin;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AssociationnController;
use App\Http\Controllers\evenementController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//register
Route::get('/register', [RegisterController::class,'index']);

Route::get('/register/create', [RegisterController::class,'create']);

Route::post('/register/store', [RegisterController::class,'store']);



//login

Route::get('/login', [LoginController::class,'index']);

Route::get('/login/create', [LoginController::class,'create']);

Route::post('/login/store', [LoginController::class,'store']);

//home
Route::get('/home', [HomeController::class,'index'])->name('home');


//associationRegister

Route::get('/association', [AssociationnController::class,'index']);

Route::get('/association/create', [AssociationnController::class,'create']);

Route::post('/association/store', [AssociationnController::class,'store']);

//assaciationLogin

Route::get('/assos', [AssociationLogin::class,'index']);

Route::get('/assoslogin/create', [AssociationLogin::class,'create']);

Route::post('/assoslogin/store', [AssociationLogin::class,'store']);


//Evenement
Route::get('/evenement', [evenementController::class,'index'])->name('evenement');

Route::get('/evenement/create', [evenementController::class,'create']);

Route::post('/evenement/store', [evenementController::class,'store']);

//liste Evenement

Route::get('afficheListe',[evenementController::class,'Afficher'])->name('afficheListe');

// Route::get('/afficheListe/{events}',[evenementController::class,'Afficher']);

//supprimer evenement
Route::post('supprimer/{events}', [evenementController::class,'destroy'])->name('suppression');



//Modifier evenement
Route::get('getupdate/{events}',[evenementController::class,'edit'])->name('edit');

Route::post('modifier/{events}',[evenementController::class,'update'])->name('modifier');


//Reservation

Route::get('reservation/{id}',[ReservationController::class,'index'])->name('reservation');



Route::get('/reservation/create',[ReservationController::class,'create']);

Route::post('/reservation/store',[ReservationController::class,'store'])->name('reserv');



//LISTE RESERVATION

Route::get('/liste_reservation/{reserv}/{events}',[ReservationController::class,'show'])->name('place');

Route::get('/liste_reserv',[ReservationController::class,'affiche'])->name('reservation');




Route::get('/accepter_reservation/{id}', [ReservationController::class, 'accepteReservation'])->name('resercationAccept');
Route::get('/decliner-reservation/{id}', [ReservationController::class, 'refusedReservation'])->name('reservationdecline');


