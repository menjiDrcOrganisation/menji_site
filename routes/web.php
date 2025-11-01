<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Mail\TestMail;
use App\Mail\Replay;
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
})->name('accueil');;
Route::get('/conctact', function () {
    return view('contact'); // Assurez-vous que ce fichier de vue existe
})->name('contact');
Route::get('/demande', function () {
    return view('demande'); // Assurez-vous que ce fichier de vue existe
})->name('demande');
Route::post('/contact', [PostController::class, 'submit'])->name('contact.submit');
Route::get('/apropos', function () {
    return view('apropos'); // Assurez-vous que ce fichier de vue existe
})->name('apropos');

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
Route::get('/blog/{post}', [PostController::class, 'show'])->name('blog.show');

Route::get('/post', [PostController::class, 'index'])->name('admin.posts.create');
Route::post('/post', [PostController::class, 'store'])->name('admin.posts.store');
Route::get('/post/{post}', [PostController::class,'edit'])->name('admin.posts.edit');
Route::put('/post/{post}', [PostController::class,'update'])->name('admin.posts.update');
Route::get('/voir', [PostController::class, 'voir'])->name('admin.posts.voir');
Route::delete('/admin/posts/images/{id}', [PostController::class, 'destroyImage'])->name('posts.images.destroy');
Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy');

// Routes admin protégées
// Route::middleware('auth')->group(function () {
//     Route::resource('admin/posts', PostController::class)->except(['show']);
// });




// Route::get('/send-email', function () {
//     $data = [
//         'email' => 'manimamarien08@gmail.com',  // ← L'expéditeur réel (ex: le client)
//         'nom' => 'marien',
//         'message' => 'Bonjour, ceci est un test avec replyTo().'
//     ];

//     Mail::to('menjidrc@menjidrc.com')  
//         ->send((new Replay($data))->replyTo($data['email'], $data['nom']));

//     return "E-mail de test envoyé avec succès.";
// });


require __DIR__.'/auth.php';
