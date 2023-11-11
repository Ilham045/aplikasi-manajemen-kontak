<?php
 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register.save', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login.action', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(ContactController::class)->prefix('contact')->group(function () {
        Route::get('', 'index')->name('contact');
        Route::get('create', 'create')->name('contact.create');
        Route::post('store', 'store')->name('contact.store');
        Route::get('show/{id}', 'show')->name('contact.show');
        Route::get('edit/{id}', 'edit')->name('contact.edit');
        Route::put('edit/{id}', 'update')->name('contact.update');
        Route::delete('destroy/{id}', 'destroy')->name('contact.destroy');
    });
 
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');