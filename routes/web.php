<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ExtraContoller;
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

Route::get("/hello", function () {
    return '<h1> Hello World </h1>';
});


Route::get('/home', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('student/detail', function () {
    return view('student/detail', [
        "title" => "detail"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "nama" => "altan assyfa naura putra",
        "kelas" => "11 PPLG 1",
        "foto" => "img/akuapi.jpeg"
    ]);
});


Route::get('/student/all', [StudentsController::class, "index"]);


Route::get('/student/detail/{student}', [StudentsController::class, "show"]);


Route::get('/extra', [ExtraContoller::class, "index"]);

Route::get('/main', function () {
    return view('main');
});




