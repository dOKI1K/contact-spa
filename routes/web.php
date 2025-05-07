<?php

use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use PSpell\Config;

Route::get('/', function () {
    return view('homepage');
})->name('welcome');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

Route::get('locale/{lang}', [LanguageController::class, 'setLocale'])->name('locale.set');

Route::post('email', function () {
    $data = request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string|max:400',
    ]);

    Mail::to(env('MAIL_USERNAME'))->send(new \App\Mail\Email($data));

    return response()->json(['message' => 'Email sent successfully!']);
})->name('email.send');
