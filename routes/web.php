<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
    use App\Http\Controllers\ContactController;


Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/contact', [PagesController::class, 'contact'])->name('contact');

Route::get('/feature', [PagesController::class, 'feature'])->name('feature');

Route::get('/quote', [PagesController::class, 'quote'])->name('quote');

Route::get('/service', [PagesController::class, 'service'])->name('service');

Route::get('/service-detail', [PagesController::class, 'serviceDetail'])->name('service.detail');

Route::get('/team', [PagesController::class, 'team'])->name('team');

Route::get('/testimonial', [PagesController::class, 'testimonial'])->name('testimonial');

Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])
    ->name('privacy.policy');

Route::get('/terms-and-conditions', [PagesController::class, 'termsAndConditions'])
    ->name('terms.conditions');


Route::post('/contact-submit', [ContactController::class, 'submit'])
    ->name('contact.submit');