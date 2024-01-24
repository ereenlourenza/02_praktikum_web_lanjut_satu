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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    echo "Selamat Datang";
});

// melalui route
Route::get('/about', function(){
    return 'Ereen Lourenza N. M - 2141762044';
});

//melalui controller
// use App\Http\Controllers\Controller1;
// Route::get('/about', [Controller1::class,'about']);

//melalui route
Route::get('/articles/{id}', function(Request $request, $id){
    return 'Halaman Artikel dengan ID '.$id;
});

//melalui controller
// Route::get('/articles/{id}', [Controller1::class,'articles']);