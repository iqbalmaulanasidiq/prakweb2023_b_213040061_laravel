<?php

namespace App\Models;



class Post 
{
  private static $blog_post = [
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

public static function all(){
    return collect(self::$blog_post);
}

public static function find($slug){
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);
}

}
