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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('home/uae', function () {
    return view('home-uae');
})->name('home-uae');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/insights', function () {
    return view('insights');
})->name('insights');

// Route for tax-technology
// Route::get('/tax-technology', function () {
//     return view('tax-technology');
// })->name('tax-technology');

// // Route for litigation-management
// Route::get('/litigation-management', function () {
//     return view('litigation-management');
// })->name('litigation-management');

// // Route for structuring-tax
// Route::get('/structuring-tax', function () {
//     return view('structuring-tax');
// })->name('structuring-tax');

// Route for management-service
Route::get('/new-management-service', function () {
    return view('management-service');
})->name('new-management-service');

//Rout for tmsl-tool
Route::get('/tmsl-tool', function () {
    return view('tmsl-tool');
})->name('tmsl-tool');


// Route for tax-technology
Route::get('tax-technology', function () {
    return view('ae-tax-technology');
})->name('tax-technology');

// Route for litigation-management
Route::get('litigation-management', function () {
    return view('ae-litigation-management');
})->name('litigation-management');

// Route for structuring-tax
Route::get('structuring-tax', function () {
    return view('ae-structuring-tax');
})->name('structuring-tax');

// Route for management-service
Route::get('management-service', function () {
    return view('ae-management-service');
})->name('management-service');

Route::get('/handler', function () {
    return view('handler');
})->name('handler');