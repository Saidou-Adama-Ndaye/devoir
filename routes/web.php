<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [EtudiantController::class, 'welcome'])->name('liste.welcome');
Route::get('/classe', [EtudiantController::class, 'classe'])->name('ajout.classe');
Route::post('/store', [EtudiantController::class, 'store'])->name('store.classe');
Route::get('/delete/{id}', [EtudiantController::class, 'delete'])->name('delete.classe');
Route::get('/edit/{id}', [EtudiantController::class, 'edit'])->name('edit.classe');
Route::post('/update/{id}', [EtudiantController::class, 'update'])->name('update.classe');
