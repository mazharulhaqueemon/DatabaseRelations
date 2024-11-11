<?php

use App\Http\Controllers\ArtistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/artistview',[ArtistController::class,'artistlist'])->name('artistview');
Route::get('/song',[ArtistController::class,'songwithartist'])->name('song');