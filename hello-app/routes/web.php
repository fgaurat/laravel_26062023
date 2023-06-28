<?php

use App\Http\Controllers\IsPairController;
use App\Http\Controllers\HelloController;
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

Route::get('/hello', function () {
    return '<h1>hello</h1>';
});

Route::get('/hello2', function () {
    return view('hello');
});

Route::get('/hello3', function () {
    return response("<h2>Hello3</h2>",200)->header("Content-type","text/plain");
});
Route::get('/hello4', function () {
    return response(["value"=>10,20,30,40],200);
});
Route::get('/hello5/{name}', function ($name) {
    return "Hello $name";
});

Route::get('/hello6/{name}/{fname?}', function ($name,$fname="empty") {
    return "Hello $name $fname";
});

Route::get('/hello7/{name}/{fname?}', function ($name,$fname="empty") {
    $r= "Hello $name $fname";
    $j = ["message"=>$r];
    return response()->json($j);
});

Route::get('/hello8/{name}', function ($name) {
    return view("hello8",compact('name'));
})->name('hello8');


Route::get('/hello9', [HelloController::class, 'index'])->name('hello9');
Route::get('/hello10/{name}', [HelloController::class, 'index'])->name('hello9');

//Route::get('/helloctrl', 'HelloController@index'); <8
//Route::get('/helloctrl', 'App\Http\Controllers\HelloController@index');>=8
//Route::get('/helloctrl', [HelloController::class, 'index']);//>=8

Route::view('show-numbers', 'show-numbers.index');
Route::get('/is_pair/{value}', [IsPairController::class, 'index'])->name('is_pair');
Route::get('/is_pair2', [IsPairController::class, 'index'])->name('is_pair2');
Route::view('test-numbers/{value}/{result}', 'is_pair.show');

Route::get('/pair', function () {
    return '<h1>Middleware pair</h1>';
});
Route::get('/impair', function () {
    return '<h1>Middleware impair</h1>';
});
