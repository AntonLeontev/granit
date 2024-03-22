<?php

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

Route::inertia('/civil/catalog', 'CatalogCivil')->name('catalog.civil');
Route::inertia('military/catalog', 'CatalogMilitary')->name('catalog.military');

Route::inertia('military/catalog/product', 'Product')->name('catalog.product');
