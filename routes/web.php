<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('welcome');

Route::get('locale/{lang}', [LanguageController::class, 'setLocale'])->name('locale.set');
