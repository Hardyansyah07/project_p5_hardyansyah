<?php

use App\Models\artikel;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {


});

Route::get('/', function () {
    $artikel = artikel::latest()->paginate(3);
    $category = Category::all();
    $categoryViral = artikel::where('category_id', 2)->latest()->paginate(5);
    foreach ($artikel as $text) {
        $text->ringkasan = Str::limit($text->content, 100);
    }
    return view('welcome', compact('artikel', 'category', 'categoryViral'));
    // return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('category', App\Http\Controllers\CategoryController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('artikel', App\Http\Controllers\ArtikelController::class)->middleware('auth');
