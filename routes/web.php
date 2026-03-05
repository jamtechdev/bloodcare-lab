<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/check-report', [App\Http\Controllers\ReportController::class, 'checkReport'])->name('check-report');
Route::get('/book-appointment', [App\Http\Controllers\AppointmentController::class, 'bookAppointment'])->name('book-appointment');
