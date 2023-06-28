<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SommeController;
use App\Http\Controllers\TodoApiController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\TodoListController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// use App\Http\Controllers\SommeController;
// use App\Http\Controllers\TodoApiController;
// use App\Http\Controllers\TodoController;
// use App\Http\Controllers\TodoListController;


// Route::get('/', [TodoListController::class, 'index'])->name('todolist.index');

Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todo/show/{todo}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todo/delete/{todo}', [TodoController::class, 'delete'])->name('todo.delete');
// // Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
// // Route::post('/todo/save', [TodoController::class, 'save'])->name('todo.save');
// Route::match(['get', 'post'],'/todo/create',[TodoController::class, 'create'])->name('todo.create');


// Route::get('/somme', [SommeController::class, 'index'])->name('somme.index');

// Route::resource('todosapi', TodoApiController::class);

// Route::view('/show-todos','todosapi.showtodos');
