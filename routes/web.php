<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;


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
// Route::get('/greeting', function () {
//     return 'Hello World';
// });
// Route::get('/wel', function () {
//     return view('welcome');
// });
// Route::get('/', [UserController::class, 'index']);


Auth::routes();

// Route::get('/', [UserController::class, 'index']);

Route::get('/addContact', [ContactController::class, 'index'])->name('addContact');
Route::post('/update', [ContactController::class, 'updateContact'])->name('update');
Route::name('contact.')->group(function () {
    Route::get('/allContacts', [ContactController::class, 'getAllContacts'])->name('allContacts');
    Route::post('/addContact', [ContactController::class, 'addContact'])->name('addContact');
    // Route::get('/addContact', [ContactController::class, 'add'])->name('add');
    Route::get('/details', [ContactController::class, 'details'])->name('details');
    Route::get('/edit', [ContactController::class, 'edit'])->name('edit');
    Route::get('/delete', [ContactController::class, 'deleteContact'])->name('delete');
});
Route::get('/', [HomeController::class, 'index'])->name('home');