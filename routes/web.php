<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'pages.home')->name('home');

Route::view('services', 'pages.services')->name('services');

Route::view('service_details', 'pages.service_details')->name('service_details');

Route::view('about_us', 'pages.about_us')->name('about_us');

Route::view('faq', 'pages.faq')->name('faq');

Route::view('terms_and_conditions', 'pages.terms_and_conditions')->name('terms_and_conditions');

Route::view('privacy_policy', 'pages.privacy_policy')->name('privacy_policy');

Route::view('contact', 'pages.contact')->name('contact');
