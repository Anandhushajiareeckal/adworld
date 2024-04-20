<?php

use App\Http\Controllers\ProfileController;
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
    return view('frontend.index');
});

Route::get("/about","App\Http\Controllers\FrontendController@about");
Route::get("/service","App\Http\Controllers\FrontendController@service");
Route::get("/achievements","App\Http\Controllers\FrontendController@achievements");
Route::get("/gallery","App\Http\Controllers\FrontendController@gallery");
Route::get("/contact","App\Http\Controllers\FrontendController@contact");



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get("/dashboard","App\Http\Controllers\AdminController@dashboard")->name('dashboard');


    Route::prefix('gallery')->group(function () {
        Route::get("/","App\Http\Controllers\GalleryController@index")->name('gallery');
        Route::post("/store","App\Http\Controllers\GalleryController@store")->name('gallery_store');
        Route::get("/delete/{id}","App\Http\Controllers\GalleryController@delete")->name('gallery_delete');
    });

    Route::prefix('achievement')->group(function () {
        Route::get("/","App\Http\Controllers\AchievementsController@index")->name('achievement');
        Route::post("/store","App\Http\Controllers\AchievementsController@store")->name('achievement_store');
        Route::get("/show/{id}","App\Http\Controllers\AchievementsController@show")->name('achievement_show');
        Route::get("/create/{id}","App\Http\Controllers\AchievementsController@create")->name('achievement_create');
        Route::post("/store/data","App\Http\Controllers\AchievementsController@store_data")->name('achievement_store_data');
        Route::get("/edit/{id}","App\Http\Controllers\AchievementsController@edit")->name('achievement_edit');
        Route::put("/update/{id}","App\Http\Controllers\AchievementsController@update")->name('achievement_update');
        Route::get("/delete/{id}","App\Http\Controllers\AchievementsController@item_delete")->name('achievement_delete');
        Route::get("/all/delete/{id}","App\Http\Controllers\AchievementsController@all_delete")->name('achievement_all_delete');

    });
});
