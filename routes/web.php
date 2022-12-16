<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['name' => 'Abir']);
})->middleware(['auth', 'verified'])->name('dashboard');;

Route::get('/contact', function () {
    return view('contact',);
});

Route::get('/posts', function () {
    return view('posts',);
})->middleware(['auth', 'verified'])->name('dashboard');;

Route::get('/dashboard', function () {
    $postData = Post::all();
    return view('dashboard', [
        'posts' => $postData
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // add post
    Route::post('/addPost', [PostController::class, 'postFunction'])->name('addPost');
});

require __DIR__.'/auth.php';
