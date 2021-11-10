<?php

use App\Http\Controllers\ServiceController;
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

// Route::get('services/{service}', [ServiceController::class, 'details'])->name('services.details');

Route::get('services/house-cleaning', function () {
    return view('pages.services.house_cleaning');
})->name('service.house_cleaning');

Route::get('services/deep-cleaning', function () {
    return view('pages.services.deep_cleaning');
})->name('service.deep_cleaning');

Route::get('services/end-of-lease-cleaning', function () {
    return view('pages.services.end_of_lease_cleaning');
})->name('service.end_of_lease_cleaning');

Route::get('services/office-cleaning', function () {
    return view('pages.services.office_cleaning');
})->name('service.office_cleaning');

Route::get('services/party-event-cleaning', function () {
    return view('pages.services.party_event_cleaning');
})->name('service.party_event_cleaning');

Route::get('services/construction-cleaning', function () {
    return view('pages.services.construction_cleaning');
})->name('service.construction_cleaning');

Route::get('services/strata-cleaning', function () {
    return view('pages.services.strata_cleaning');
})->name('service.strata_cleaning');

Route::get('services/other-cleaning', function () {
    return view('pages.services.other_cleaning');
})->name('service.other_cleaning');
