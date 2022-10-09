<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\ProductDetail;
use App\Http\Livewire\ProductIndex;
use App\Http\Livewire\ProductLiga;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', Home::class)->name('home');

// Products
Route::get('products', ProductIndex::class)->name('product');
Route::get('products/liga/{liga_id}', ProductLiga::class)->name('product.liga');
Route::get('products/{liga_id}', ProductDetail::class)->name('product.detail');
