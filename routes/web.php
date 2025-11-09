<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

// =========================== GET route example ==================================
Route::get('/', function () {
    return view('home');
});

// Parameters using routes
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " .  $lastname;
});

// Named routes
Route::get('/test', function () {
    return 'This is a test';
})->name("testpage");


Route::get('/company', function () {
    return view('company');
});

// Grouped routes
Route::prefix("company")->group(function () {
    Route::get('/company', function () {
        return view('sales');
    });

    Route::get('/company', function () {
        return view('production');
    });
});


// =========================== POST route example ==================================
Route::get('/formsubmitted', function (Request $request) {

    $request->validate([
        'fullname' => 'required|in:3|max:30',
        'email' => 'required|in:3|max:30|email',
    ]);

    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your full name is {$request->input('fullname')}, and your email is $email";
})->name("formsubmitted");