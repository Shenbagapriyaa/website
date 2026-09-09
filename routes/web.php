<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes - Track Tech Solution Enterprise Platform
|--------------------------------------------------------------------------
*/

// Home & Overview
Route::get('/', [PageController::class, 'home'])->name('home');

// Products & Solutions
Route::get('/products', [PageController::class, 'productsIndex'])->name('products.index');
Route::get('/products/{slug}', [PageController::class, 'productShow'])->name('products.show');

// Company & About
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/company/about', [PageController::class, 'about']); // Alias for backward compatibility

// Case Studies & Success Stories
Route::get('/success-stories', [PageController::class, 'successStories'])->name('success-stories');
Route::get('/case-studies', [PageController::class, 'successStories']);

// Interactive 3D Demo & ROI Calculator
Route::get('/demo', [PageController::class, 'demo'])->name('demo');
Route::get('/learn-more', [PageController::class, 'demo']);

// Contact & Consultations
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
