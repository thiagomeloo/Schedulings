<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\User\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::prefix('profile')
        ->name('profile.')
        ->group(function () {
            Route::controller(ProfileController::class)->group(function () {
                Route::get('/', 'edit')->name('edit');
                Route::patch('/', 'update')->name('update');
                Route::delete('/', 'destroy')->name('destroy');
            });
        });

    Route::prefix('user')
        ->name('user.')
        ->group(function(){
            Route::get('/', Index::class)->name('index');
        });

});

require __DIR__.'/auth.php';
