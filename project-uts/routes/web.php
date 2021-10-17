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
    return view('index');
});

//Content
Route::get('/quotes', function () {
    return view('quotes/quotes');
});
Route::get('/quotes/add', function () {
    return view('quotes/addQuotes');
});
Route::get('/notes', function () {
    return view('notes/notes');
});
Route::get('/notes/add', function () {
    return view('notes/addNotes');
});

//Menu
Route::get('/toRead', function () {
    return view('toRead/toRead');
});
Route::get('/toRead/add', function () {
    return view('toRead/addToRead');
});
Route::get('/reading', function () {
    return view('reading/reading');
});
Route::get('/reading/add', function () {
    return view('reading/addReading');
});
Route::get('/history', function () {
    return view('history/history');
});