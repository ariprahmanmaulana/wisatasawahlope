<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_posts = [
    [
        "title" => "judul pertama",
        "slug" => "judul-pertama",
        "body" => "lorwmjhdf fgjifdg gsf gig if u igf aig if fig fi if gf f  fi gfi gfi a f",
    ],
    [
        "title" => "judul pertama",
        "slug" => "judul-pertama",
        "body" => "lorwmjhdf fgjifdg gsf gig if u igf aig if fig fi if gf f  fi gfi gfi a f"
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($post["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}