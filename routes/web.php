<?php

use App\Http\Controllers\LocationController;
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

Route::get('/charte', function () {
    return view('charte');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/futif', function () {
    return view('futif');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/voiture', function () {
    return view('voiture');
});

Route::get('/',[LocationController:: class, 'welcome']);
Route::get('ajouter',[LocationController:: class, 'create']);
Route::post('ajouter',[LocationController:: class, 'store'])->name('ajouter');
Route::get('/detail/{id}', [LocationController::class,'detail'])->name('detail');

Route::get('/products', [LocationController::class, 'search'])->name('products.index');
Route::get('/voiture',[LocationController:: class, 'voiture'])->name('products.search');
Route::get('/modifier/{id}',[LocationController::class, 'edit'])->name('edit');
Route::put('/modifier/{id}',[LocationController::class, 'update'])->name('update');
Route::get('/delete/{id}',[LocationController::class, 'destroy'])->name('delete');
Route::get('/tableau',[LocationController::class, 'tableau'])->name('tableau');
Route::get('/inscription/{id}',[LocationController::class, 'show'])->name('inscription');

Route::post('/subscribe', [LocationController::class, 'post_'])->name('subscribe');

Route::post('/contact',[LocationController:: class, 'envoiedemail'] )->name('envoiedemail');

