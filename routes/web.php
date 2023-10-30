<?php

use Illuminate\Support\Facades\Route;

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
    "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view("about", [
    "title" => "About",
    "name" => "Iqbal Maulana Sidiq", 
    "email" => "iqbalsidiq523@gmail.com",
    "image" => "img/profile.png" 
]);
});



Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iqbal Maulana Sidiq",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Usep",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit tihs jhkst lasjdl lashdui sahd kashd kasdg askdh aksdhh. Quis"
        ]
    ];
    
    return view("posts", [
    "title" => "Posts",
    "posts" => $blog_post
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Iqbal Maulana Sidiq",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Usep",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit tihs jhkst lasjdl lashdui sahd kashd kasdg askdh aksdhh. Quis"
        ]
    ];

    $new_post = [];

    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
