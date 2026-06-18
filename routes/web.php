<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PartnerController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\TransactionController;

// Public Pages


Route::get('/profil', function () {
    return view('profil');
});

Route::get('/katalog', function () {
    $categories = Category::all();
    return view('katalog', compact('categories'));
})->name('katalog');

Route::get('/bantuan', function () {
    return view('bantuan');
})->name('bantuan');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// User Area


Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/event/{event}', [EventController::class, 'show'])
    ->name('events.show');

Route::get('/checkout', [EventController::class, 'checkout'])
    ->name('checkout');

Route::get('/my-ticket', [EventController::class, 'ticket'])
    ->name('ticket');

Route::get('/checkout/{event}', [CheckoutController::class, 'create'])
    ->name('checkout.create');

Route::post('/checkout/{event}', [CheckoutController::class, 'store'])
    ->name('checkout.store');

// Login Redirect 

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Admin Area 

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.post');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    Route::middleware(['auth', 'admin'])->group(function () {

        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');

        Route::resource('/events', AdminEventController::class);

        Route::get('/transactions', [TransactionController::class, 'index'])
            ->name('transactions.index');

        Route::resource('/categories', CategoryController::class);

        Route::resource('/partners', PartnerController::class);

    });

});