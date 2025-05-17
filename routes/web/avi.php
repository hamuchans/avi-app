<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AviController;
use App\Http\Controllers\AvController;

Route::redirect('/', 'avi/home')->name('index');

// Aviサイトホーム
Route::get('home', [AviController::class, 'home'])->name('home');

// AV関連
Route::prefix('av')->group(function () {
  Route::get ('index', [AvController::class, 'index'])->name('av.index');
  Route::get ('{av}/detail', [AvController::class, 'detail'])->name('av.detail');
  Route::get ('new', [AvController::class, 'input'])->name('av.new');
  Route::post('register', [AvController::class, 'save'])->name('av.register');
  Route::get ('{av}/edit', [AvController::class, 'input'])->name('av.edit');
  Route::post('{av}/update', [AvController::class, 'save'])->name('av.update');
  Route::post('{av}/delete', [AvController::class, 'delete'])->name('av.delete');
});