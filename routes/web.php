<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
    return view('index');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Routes publiques
Route::get('/blog', [PostController::class, 'create'])->name('blog.index');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/post', [PostController::class, 'index'])->name('admin.posts.create');
Route::post('/post', [PostController::class, 'store'])->name('admin.posts.store');

// Routes admin protégées
Route::middleware('auth')->group(function () {
    Route::resource('admin/posts', PostController::class)->except(['show']);
});

require __DIR__.'/auth.php';
