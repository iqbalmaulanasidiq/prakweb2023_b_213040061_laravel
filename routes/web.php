<?php

// use App\Models\Post;
// use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


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
    return view("home", [
    "title" => "Home",
    "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view("about", [
    "title" => "About",
    "active" => "about",
    "name" => "Iqbal Maulana Sidiq", 
    "email" => "iqbalsidiq523@gmail.com",
    "image" => "img/profile.png" 
]);
});



Route::get('/posts', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories', //untuk menandakan link mana yang sedang aktif
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => "Post By Category : $category->name",
//         'active' => 'categories', //untuk menandakan link mana yang sedang aktif
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author){
//     return view('posts', [
//         'title' => "Post By Category : $author->name",
//         'active' => 'posts', //untuk menandakan link mana yang sedang aktif
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });

//login
Route::get('/login' , [LoginController::class, 'index'])->name('login');
Route::get('/register' , [RegisterController::class, 'index'])->name('register');
