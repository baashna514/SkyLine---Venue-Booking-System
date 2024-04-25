<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/home', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';









Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');
Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');
Route::get('/gallery', [\App\Http\Controllers\IndexController::class, 'gallery'])->name('gallery');
Route::get('/venues/{type?}/{param?}', [\App\Http\Controllers\IndexController::class, 'venue_search'])->name('venues');
Route::post('/venues-search', [\App\Http\Controllers\IndexController::class, 'venues'])->name('venues-search');
Route::get('/venue-detail/{id}', [\App\Http\Controllers\IndexController::class, 'venue_detail'])->name('venue-detail');
Route::post('/store-review', [\App\Http\Controllers\IndexController::class, 'store_review'])->name('store-review');
Route::post('/venues/venue-booking', [\App\Http\Controllers\IndexController::class, 'venue_booking'])->name('venue-booking');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', function () {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.admin-login');
    })->name('admin.login');

    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix' => 'customers'], function () {
        Route::get('/list', [\App\Http\Controllers\AdminController::class, 'customer_list'])->name('admin.customers');
        Route::get('/{id}/details', [\App\Http\Controllers\AdminController::class, 'customer_detail'])->name('admin.customers.detail');
    });

    Route::group(['prefix' => 'comments'], function () {
        Route::get('/list', [\App\Http\Controllers\AdminController::class, 'comments'])->name('admin.comments');
        Route::get('/{id}/delete', [\App\Http\Controllers\AdminController::class, 'delete_comment'])->name('admin.comments.delete');
    });

    Route::group(['prefix' => 'bookings'], function () {
        Route::get('/list', [\App\Http\Controllers\BookingController::class, 'booking_list'])->name('admin.booking');
        Route::get('/list/{id}/{status}/change-status', [\App\Http\Controllers\BookingController::class, 'change_status'])->name('admin.booking.change-status');
    });

    Route::group(['prefix' => 'venues'], function () {
        Route::get('/', [\App\Http\Controllers\VenueController::class, 'venues'])->name('admin.venues');
        Route::get('/{id}/delete', [\App\Http\Controllers\VenueController::class, 'venue_delete'])->name('admin.venues.delete');
        Route::get('/{id}/edit', [\App\Http\Controllers\VenueController::class, 'venue_edit'])->name('admin.venues.edit');
        Route::post('/{id}/update', [\App\Http\Controllers\VenueController::class, 'venue_update'])->name('admin.venues.update');
        Route::get('/{id}/delete-gallery', [\App\Http\Controllers\VenueController::class, 'venue_gallery_delete'])->name('admin.venues.remove-gallery');
        Route::get('/{id}/delete-thumbnail', [\App\Http\Controllers\VenueController::class, 'venue_thumbnail_delete'])->name('admin.venues.remove-thumbnail');
        Route::get('/new', [\App\Http\Controllers\VenueController::class, 'venue_new'])->name('admin.venue.new');
        Route::post('/store', [\App\Http\Controllers\VenueController::class, 'venue_store'])->name('admin.venues.store');
    });

    Route::group(['prefix' => 'cities'], function () {
        Route::get('/', [\App\Http\Controllers\CityController::class, 'cities'])->name('admin.cities');
        Route::post('/', [\App\Http\Controllers\CityController::class, 'city_store'])->name('admin.cities');
        Route::get('/{id}/delete', [\App\Http\Controllers\CityController::class, 'city_delete'])->name('admin.cities.delete');
        Route::get('/{id}/edit', [\App\Http\Controllers\CityController::class, 'city_edit'])->name('admin.cities.edit');
        Route::post('/{id}/update', [\App\Http\Controllers\CityController::class, 'city_update'])->name('admin.cities.update');
    });
});
