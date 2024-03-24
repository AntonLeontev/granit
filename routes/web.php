<?php

use App\Http\Controllers\CivilProductController;
use App\Http\Controllers\MilitaryProductController;
use Illuminate\Support\Facades\Route;

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

Route::inertia('/', 'Home')->name('home');
Route::inertia('/military', 'Military')->name('military');
Route::inertia('/civil', 'Civil')->name('civil');
Route::inertia('/contacts', 'Contacts')->name('contacts');

Route::get('military/catalog', [MilitaryProductController::class, 'index'])->name('catalog.military');
Route::get('military/catalog/products/{product}', [MilitaryProductController::class, 'show'])
    ->name('military.product.show');

Route::get('civil/catalog', [CivilProductController::class, 'index'])->name('catalog.civil');
Route::get('civil/catalog/products/{product}', [CivilProductController::class, 'show'])
    ->name('civil.product.show');

Route::get('lang', function () {
    if (session()->get('lang', 'en') === 'ru') {
        session()->put('lang', 'en');
    } else {
        session()->put('lang', 'ru');
    }
})->name('lang');
