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

Route::group(["prefix" => "/student"],function(){
Route::get('/all', [StudentsController::class, "index"]);
Route::get('/edit/{student}', [StudentsController::class, "edit"]);
Route::post('/update/{student}', [StudentsController::class, "update"]);
Route::get('/tambah', [StudentsController::class, "create"]);
Route::post('/add', [StudentsController::class, "store"]);
Route::delete('/delete/{student}',[StudentsController::class,"destroy"]);
});


Route::get('/extra', [ExtraContoller::class, "index"]);

Route::get('/main', function () {
    return view('main');
});




