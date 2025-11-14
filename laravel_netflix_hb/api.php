<?php

use App\Http\Controllers\TopListController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/toplist', [TopListController::class,"index"])->name("toplist.index");
Route::get('/toplist/categories', [TopListController::class,"categories"])->name("toplist.categories");
Route::get('/toplist/films', [TopListController::class,"films"])->name("toplist.films");
Route::get('/toplist/tvs', [TopListController::class,"tvs"])->name("toplist.tvs");
Route::get('/toplist/popular', [TopListController::class,"popular"])->name("toplist.popular");
Route::get('/toplist/week/{week}', [TopListController::class,"week"])->name("toplist.week");
Route::get('/toplist/top1/{week}', [TopListController::class,"top1"])->name("toplist.top1");
