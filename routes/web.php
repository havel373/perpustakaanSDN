<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\VisitorController;

Route::group(['domain' => ''], function() {
    Route::get('auth',[AuthController::class, 'index'])->name('auth.index');
    Route::prefix('')->name('web.')->group(function(){
        Route::prefix('auth')->name('auth.')->group(function(){
            Route::post('login',[AuthController::class, 'do_login'])->name('login');
            Route::post('register',[AuthController::class, 'do_register'])->name('register');
        });

        Route::middleware(['auth:web'])->group(function(){
            Route::redirect('/', 'dashboard', 301);
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            Route::resource('member', MemberController::class);
            Route::resource('visitor', VisitorController::class);
            
            // BOOK
            Route::prefix('book')->name('book.')->group(function(){
                Route::get('', [BookController::class, 'index'])->name('index');
                Route::get('create', [BookController::class, 'create'])->name('create');
                Route::get('edit/{book}', [BookController::class, 'edit'])->name('edit');
                Route::post('store', [BookController::class, 'store'])->name('store');
                Route::get('show/{book}', [BookController::class, 'show'])->name('show');
                Route::patch('update/{book}', [BookController::class, 'update'])->name('update');
                Route::patch('accept/{book}', [BookController::class, 'accept'])->name('accept');
                Route::patch('decline/{book}', [BookController::class, 'decline'])->name('decline');
                Route::delete('destroy/{book}', [BookController::class, 'destroy'])->name('destroy');
            });

              // BORROW
              Route::prefix('borrow')->name('borrow.')->group(function(){
                Route::get('', [BorrowController::class, 'index'])->name('index');
                Route::get('edit', [BorrowController::class, 'edit'])->name('edit');
                Route::post('save', [BorrowController::class, 'save'])->name('save');
            });

            // PROFILE
            Route::prefix('profile')->name('profile.')->group(function(){
                Route::get('', [ProfileController::class, 'index'])->name('index');
                Route::get('edit', [ProfileController::class, 'edit'])->name('edit');
                Route::post('cpassword', [ProfileController::class, 'cpassword'])->name('cpassword');
                Route::post('save', [ProfileController::class, 'save'])->name('save');
            });
            Route::get('logout',[AuthController::class, 'do_logout'])->name('auth.logout');
        });
    });
});