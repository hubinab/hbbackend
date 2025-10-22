<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CalculatorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/idezetek/house', [QuoteController::class, "house"])->name('quote.house');
Route::get('/idezetek/modern-family', [QuoteController::class, "modernFamily"])->name('quote.modernFamily');
Route::get('/idezetek/uvegtigris/csoki', [QuoteController::class, "uvegtigrisCsoki"])->name('quote.uvegtigrisCsoki');
Route::get('/idezetek/uvegtigris/lali', [QuoteController::class, "uvegtigrisLali"])->name('quote.uvegtigrisLali');
Route::get('/idezetek/harry-potter/{slug}', [QuoteController::class, "harryPotter"])->name('quote.harryPotter');
Route::get('/naptar/ma', [CalendarController::class, "today"])->name('calendar.today');
Route::get('/naptar/tegnap', [CalendarController::class, "yesterday"])->name('calendar.yesterday');
Route::get('/naptar/holnap', [CalendarController::class, "tomorow"])->name('calendar.tomorow');
Route::get('/szamologep/{a}{operator}{b}', [CalculatorController::class, "result"])
    ->where(["a" => "[0-9]+", "operator" => "[+|-|*|/]", "b" => "[0-9]"])
    ->name('calculator.result');
Route::get('/hetnapja/{number}', [CalendarController::class, "weekdayName"])
    ->where(["number" => "[0-9]+"])
    ->name('weekday.name');
Route::get('/hetnapja/{name}', [CalendarController::class, "weekdayNumber"])
    ->where(["name" => "[a-zA-ZáéőóúűüöÁÉŐÚÓÜűÖ]+"])
    ->name('weekday.number');
