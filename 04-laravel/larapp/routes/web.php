<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sayhello', function () {
    return "<h1> Hello TCO 2770672 </h1>";
});

Route::get('/pets/show', function () {
    $pets = App\Models\Pet::all();
    //echo var_dump($pets);
    dd($pets->toArray()); // Dump & die
});

Route::get('/pet/view', function () {
    $pets = App\Models\Pet::all();
    return view('petsview')->with('pets', $pets);
});

Route::get('/user/show', function () {
    $users = App\Models\User::all();
    //echo var_dump($users);
    dd($users->toArray()); // Dump & die
});

Route::get('/user/view', function () {
    $users = App\Models\User::all();
    return view('usersview')->with('users', $users);
});