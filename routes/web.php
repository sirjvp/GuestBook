<?php

use App\http\controllers\Auth\ActivationController;
use App\http\controllers\Admin\EventController as AdminEventController;
use App\http\controllers\EventController;
use App\http\controllers\StudentController;
use App\http\controllers\User\UserController as UUserController;
use App\http\controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::view('/', 'welcome');
Route::view('/welcome', 'header.home');
Route::view('/price', 'header.price');
Route::view('/stock', 'header.stock');

// Route::get('/index', [EventController::class, 'index'])->name('event.home');
// Route::get('edit/{event}', [EventController::class, 'edit'])->name('event.edit');
// Route::view('add', 'event.addEvent')->name('addEvent');
// Route::post('add', [EventController::class, 'store'])->name('event.store');
// Route::patch('update/{event}', [EventController::class, 'update'])->name('event.update');
// Route::delete('delete/{event}', [EventController::class, 'destroy'])->name('event.delete');

Route::get('/', function() {
    return redirect()->route('event.index');
});


// Route::get('/student', [StudentController::class, 'index'])->name('student.home');
// Route::get('editt/{student}', [StudentController::class, 'edit'])->name('student.edit');
// Route::view('addStudent', 'student.addStudent')->name('student.create');
// Route::post('create', [StudentController::class, 'store'])->name('student.store');
// Route::patch('updatee/{student}', [StudentController::class, 'update'])->name('student.update');
// Route::delete('deletee/{student}', [StudentController::class, 'destroy'])->name('student.delete');
Route::resource('student', StudentController::class);


// Route::get('/string', function () {
//     return "Halo String";
// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('activate', [ActivationController::class, 'activate'])->name('activate');

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'as' => 'admin'], function () {
    Route::resource('user', UserController::class);
    Route::resource('event', AdminEventController::class);
    //proteksi url
});
Route::group(['middleware' => 'creator','prefix' => 'creator', 'as' => 'creator'], function () {
    Route::resource('event', EventController::class);
    //proteksi url
});
Route::group(['middleware' => 'user','prefix' => 'user', 'as' => 'user'], function () {
    Route::resource('user', UUserController::class);
    //proteksi url
});