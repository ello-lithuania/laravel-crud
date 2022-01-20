<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewAdMail;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('homepage');
Route::get('/kategorijos/{category_slug}', [App\Http\Controllers\CategoriesController::class, 'show']);
Route::get('/skelbimas/{skelbimo_id}/{skelbimo_slug}', [App\Http\Controllers\AdvertisementController::class, 'show']);
Route::get('/skelbimas/{skelbimo_id}/{skelbimo_slug}/redaguoti', [App\Http\Controllers\AdvertisementController::class, 'edit']);
Route::get('/skelbimas/sumoketi', [App\Http\Controllers\AdvertisementController::class, 'pay'])->name('pay_ad');
Route::post('/skelbimas/{skelbimo_id}/{skelbimo_slug}/atnaujinti', [App\Http\Controllers\AdvertisementController::class, 'update'])->name('atnaujinti-skelbima');



Route::get('/naujas-skelbimas', [App\Http\Controllers\AdvertisementController::class, 'index'])->name('advertisement-form');
Route::post('/sukurti-skelbima', [App\Http\Controllers\AdvertisementController::class, 'store'])->name('sukurti-skelbima');

Route::post('/naujienlaiskis-uzsakytas', [App\Http\Controllers\NewsletterController::class, 'create'])->name('newsletter-save');

Route::get('/wishlist', [App\Http\Controllers\WishlistController::class, 'index'])->name('wishlist');
Route::post('/isiminti-skelbima', [App\Http\Controllers\WishlistController::class, 'add'])->name('wishlist-save');
Route::get('/pamirsti-skelbima/{ad_id}', [App\Http\Controllers\WishlistController::class, 'remove'])->name('wishlist-remove');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/email', function() {
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
    Mail::to('xinterx1@gmail.com')->send(new NewAdMail($details));
    return new NewAdMail;
});