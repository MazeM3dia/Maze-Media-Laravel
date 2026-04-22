<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.01-homepage')->name('home');
Route::view('/mz-charts', 'pages.02-mz-charts')->name('mz-charts');
Route::view('/mz-gameplays', 'pages.03-mz-gameplays')->name('mz-gameplays');
Route::view('/projects', 'pages.04-mz-projects')->name('projects');
Route::view('/blog', 'pages.05-blog')->name('blog');
Route::view('/live-tv', 'pages.10-live-tv')->name('live-tv');
Route::view('/contact', 'pages.11-contact')->name('contact');
Route::view('/terms', 'pages.12-terms')->name('terms');
Route::view('/privacy', 'pages.13-privacy')->name('privacy');
Route::view('/cookie-policy', 'pages.14-cookie')->name('cookie-policy');
Route::view('/sitemap', 'pages.15-sitemap')->name('sitemap');
Route::view('/design-system', 'pages.16-design-system')->name('design-system');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
