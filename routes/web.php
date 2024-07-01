<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/index', function () {
    if (Auth::User()->usertype == 'admin') {
        return view('administrator.index');
    }
    if (Auth::User()->usertype == 'operator') {
        return view('operator.index');
    }
    if (Auth::User()->usertype == 'kepsek') {
        return view('kepsek.index');
    }
    return view('index');
})->middleware(['auth', 'verified'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

route::get('admin/index', [HomeController::class, 'index1'])->middleware(['auth', 'admin']);
route::get('operator/index', [HomeController::class, 'index2'])->middleware(['auth', 'operator']);
route::get('kepsek/index', [HomeController::class, 'index3'])->middleware(['auth', 'kepsek']);
