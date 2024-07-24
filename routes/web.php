<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RepresentativeController;
use Illuminate\Support\Facades\Auth;

Route::get('/project-requeriments', function () {
    return view('project-requeriments');
})->name('/project-requeriments');

Auth::routes();

Route::get('/', function () {
    return view('home');
})->name('/')->middleware('auth');

Route::resource('/representatives', RepresentativeController::class)->middleware('auth');

Route::resource('/customers',  CustomerController::class)->middleware('auth');

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

