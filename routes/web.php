<?php

use App\Http\Controllers\EmulatorsController;
use App\Http\Controllers\OAuthController;
use App\Http\Controllers\PlatformsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RomsController;
use App\Http\Controllers\TrendingController;
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

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('roms', RomsController::class);
    Route::resource('emulators', EmulatorsController::class);
    Route::resource('platforms', PlatformsController::class);

});

Route::resource('roms', RomsController::class)->only([
    'index', 'show'
]);

Route::resource('emulators', EmulatorsController::class)->only([
    'index', 'show'
]);

Route::resource('platforms', PlatformsController::class)->only([
    'index', 'show'
]);

Route::group(['prefix' => 'trending'], function () {
    Route::get('/trending_roms', [TrendingController::class, 'trending_roms'])->name('trending.roms');
    Route::post('/trending_roms', [TrendingController::class, 'trending_roms_post'])->name('trending.roms.post');

    Route::get('/trending_emulators', [TrendingController::class, 'trending_emulators'])->name('trending.emulators');
    Route::post('/trending_emulators', [TrendingController::class, 'trending_emulators_post'])->name('trending.emulators.post');

    Route::get('/trending_platforms', [TrendingController::class, 'trending_platforms'])->name('trending.platforms');
    Route::post('/trending_platforms', [TrendingController::class, 'trending_platforms_post'])->name('trending.platforms.post');
});

Route::group(['prefix' => 'oauth'], function () {
    Route::get('/{driver}', [OAuthController::class, 'redirectToProvider'])->name('oauth.redirect');
    Route::get('/{driver}/callback', [OAuthController::class, 'handleProviderCallback'])->name('oauth.callback');
});

// match storage urls like http://localhost/storage/*.*
Route::get('/storage/{any}', function ($any) {
    // sanitize the requested file name
    $any = str_replace('..', '', $any);
    return response()->file(storage_path($any));
})->where('any', '.*');

require __DIR__.'/auth.php';
