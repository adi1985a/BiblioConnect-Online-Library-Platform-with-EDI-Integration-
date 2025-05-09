<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KsiazkaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Trasa dla wyświetlania listy wszystkich książek
Route::get('/ksiazki', [KsiazkaController::class, 'index'])->name('ksiazki.index');

// Trasa dla wyszukiwania książek
Route::get('/ksiazki/wyszukaj', [KsiazkaController::class, 'wyszukaj'])->name('ksiazki.wyszukaj');
Route::post('/ksiazki/wyszukaj/wyniki', [KsiazkaController::class, 'wyniki'])->name('ksiazki.wyszukaj.wyniki');


// Trasa dla wypożyczania książki
Route::post('/ksiazki/{ksiazka}/wypozycz', [KsiazkaController::class, 'wypozycz'])->name('ksiazki.wypozycz');

// Trasa dla zwracania książki
Route::post('/ksiazki/{ksiazka}/zwroc', [KsiazkaController::class, 'zwroc'])->name('ksiazki.zwroc');


// Trasa dla dodawania nowej książki
Route::get('/ksiazki/dodaj', [KsiazkaController::class, 'dodaj'])->name('ksiazki.dodaj');
Route::post('/ksiazki/zapisz', [KsiazkaController::class, 'zapisz'])->name('ksiazki.zapisz')->middleware(['web', 'auth']);

// Trasa dla rejestracji
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Trasa dla logowania
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


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

Route::get('/', function () {
    return view('welcome');
});
