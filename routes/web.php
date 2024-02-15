<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\ExtraContoller;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\dashboardController;
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

Route::get('/extra', [ExtraContoller::class, "index"]);

Route::get('/main', function () {
    return view('main');
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
// Route::get('/edit/{student}', [StudentsController::class, "edit"]);
// Route::post('/update/{student}', [StudentsController::class, "update"]);
// Route::get('/tambah', [StudentsController::class, "create"]);
// Route::post('/add', [StudentsController::class, "store"]);
// Route::delete('/delete/{student}',[StudentsController::class,"destroy"]);

});

Route::group(["prefix" => "/class"],function(){
Route::get('/kelas', [kelasController::class, "index"]);
// Route::get('/tambah', [kelasController::class, "create"]);
// Route::post('/add', [kelasController::class, "store"]);
// Route::delete('/delete/{kelas}',[kelasController::class,"destroy"]);
// Route::get('/edit/{kelas}', [kelasController::class, "edit"]);
// Route::post('/update/{kelas}', [kelasController::class, "update"]);
});

Route::group(["prefix" => "/login"], function (){
    Route::get('/index', [loginController::class, "login"])->name('login')->middleware('guest');
    Route::get('/signin', [registerController::class, "Register"])->middleware('guest');
    Route::post('/register', [registerController::class, "store"]);
    Route::post('/login', [loginController::class, "authenticate"]);
    Route::post('/keluar', [loginController::class, "logout"]);
});

Route::group(['prefix' => "dashboard"], function(){
    // <-----------------------------------STUDENT----------------------------------------------->
    Route::get('/dashboard', [dashboardController::class, "index"])->middleware('auth');
    Route::get('/tambah', [dashboardController::class, "create"])->middleware('auth');
    Route::post('/add', [dashboardController::class, "store"])->middleware('auth');
    Route::delete('/delete/{student}',[dashboardController::class,"destroy"])->middleware('auth');
    Route::get('/edit/{student}', [dashboardController::class, "edit"])->middleware('auth');
    Route::post('/update/{student}', [dashboardController::class, "update"])->middleware('auth');
    // <-----------------------------------KELAS----------------------------------------------->
    Route::get('/kelas', [dashboardController::class, "indexKelas"])->middleware('auth');
    Route::get('/tambahKelas', [dashboardController::class, "createKelas"])->middleware('auth');
    Route::post('/addKelas', [dashboardController::class, "storeKelas"])->middleware('auth');
    Route::delete('/deleteKelas/{kelas}',[dashboardController::class,"destroyKelas"])->middleware('auth');
    Route::get('/editKelas/{kelas}', [dashboardController::class, "editKelas"])->middleware('auth');
    Route::post('/updateKelas/{kelas}', [dashboardController::class, "updateKelas"])->middleware('auth');
});






