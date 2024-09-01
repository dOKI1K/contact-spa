<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use PSpell\Config;

Route::get('/', function () {
    return view('homepage');
})->name('welcome');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

