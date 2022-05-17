<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TesztController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/api/tesztek', [TesztController::class, 'index']); // <-- összeset lekéri
Route::get('/api/kategoriak', [KategoriaController::class, 'index']); // <-- összeset lekéri

Route::get('/api/kategoria/{id}', [KategoriaController::class, 'show']);
Route::get('/api/teszt/{id}', [TesztController::class, 'show']); //<-- ID alapján 1-et lekér

Route::get('/api/tesztek/expand', [TesztController::class, 'expandAll']);