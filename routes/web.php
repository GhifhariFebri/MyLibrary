<?php

use App\Http\Controllers\WriterController;
use App\Models\Writer;
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

Route::get('/mypro', [WriterController::class, 'myproject']);

Route::get('/writer/{id}', [WriterController::class, 'show']);

Route::get('/', function () {
    return view('home', ["title2"=>"Home"
    ]);
});

Route::get('/about-us', function () {
    return view('about-us', ["title2"=>"About-us", "nama" => "Ghifari",
    "email" => "Ghifari@gmail.com",
    "line" => "@Ghifari2313"]);
});

