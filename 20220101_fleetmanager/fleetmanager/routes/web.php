<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShipController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\MinishipController;
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

Route::get('/', function() {
    return redirect('books');
});

Route::middleware(['auth'])->group(function () {
    Route::get('ships', [ShipController::class, 'getIndex']);
    Route::get('ships/index', [ShipController::class, 'getIndex']);
    Route::get('ships/show/{id}', [ShipController::class, 'getShow']);
    Route::get('ships/add', [ShipController::class, 'getAdd']);
    Route::post('ships/save', [ShipController::class, 'postSave']);
    Route::get('ships/edit/{id}', [ShipController::class, 'getEdit']);
    Route::post('ships/update/{id}', [ShipController::class, 'postUpdate']);
    Route::get('ships/delete/{id}', [ShipController::class, 'getDelete']);
    Route::get('ships/json', [ShipController::class, 'getJson']);

    Route::get('books', [BookController::class, 'getIndex']);
    Route::get('books/index', [BookController::class, 'getIndex']);
    Route::get('books/show/{id}', [BookController::class, 'getShow']);
    Route::get('books/add', [BookController::class, 'getAdd']);
    Route::post('books/save', [BookController::class, 'postSave']);
    Route::get('books/edit/{id}', [BookController::class, 'getEdit']);
    Route::post('books/update/{id}', [BookController::class, 'postUpdate']);
    Route::get('books/delete/{id}', [BookController::class, 'getDelete']);
    Route::get('books/json', [BookController::class, 'getJson']);

    Route::get('manufacturers', [ManufacturerController::class, 'getIndex']);
    Route::get('manufacturers/index', [ManufacturerController::class, 'getIndex']);
    Route::get('manufacturers/show/{id}', [ManufacturerController::class, 'getShow']);
    Route::get('manufacturers/add', [ManufacturerController::class, 'getAdd']);
    Route::post('manufacturers/save', [ManufacturerController::class, 'postSave']);
    Route::get('manufacturers/edit/{id}', [ManufacturerController::class, 'getEdit']);
    Route::post('manufacturers/update/{id}', [ManufacturerController::class, 'postUpdate']);
    Route::get('manufacturers/delete/{id}', [ManufacturerController::class, 'getDelete']);
    Route::get('manufacturers/json', [ManufacturerController::class, 'getJson']);

    Route::get('miniships', [MinishipController::class, 'getIndex']);
    Route::get('miniships/index', [MinishipController::class, 'getIndex']);
    Route::get('miniships/show/{id}', [MinishipController::class, 'getShow']);
    Route::get('miniships/add', [MinishipController::class, 'getAdd']);
    Route::post('miniships/save', [MinishipController::class, 'postSave']);
    Route::get('miniships/edit/{id}', [MinishipController::class, 'getEdit']);
    Route::post('miniships/update/{id}', [MinishipController::class, 'postUpdate']);
    Route::get('miniships/delete/{id}', [MinishipController::class, 'getDelete']);
    Route::get('miniships/json', [MinishipController::class, 'getJson']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
