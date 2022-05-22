<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rifqi Raehan Hermawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti ducimus soluta obcaecati nam repudiandae
            consectetur nulla ab natus quisquam incidunt minus similique sequi commodi error assumenda rem sint, deserunt quidem,
            veritatis est veniam sed, tenetur at odit! Magni enim voluptatem nemo laudantium repudiandae excepturi obcaecati placeat
            quae animi! Ullam facilis voluptatibus voluptatem debitis minus pariatur magni cum corporis perferendis dicta nostrum,
            sint molestias exercitationem quidem cupiditate voluptatum explicabo natus quasi, nihil asperiores quaerat. Porro qui quam,
            perferendis quis assumenda nesciunt?"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Muhammad Ilham Ardiansah",
        "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium incidunt delectus molestias! Beatae unde minima
        commodi modi ipsam asperiores eius nam officiis earum. Repellat corporis sed reiciendis inventore rem eos odio modi numquam.
         Laboriosam ut ipsum pariatur voluptas. Tenetur ex praesentium ullam rem dolore nihil quo modi provident, necessitatibus ea.
         Maxime fugiat ullam, repellendus consectetur explicabo eos porro cupiditate sapiente possimus blanditiis sint quam dignissimos
         impedit aut expedita voluptate atque. Nam facere distinctio laboriosam sequi, mollitia nihil sunt dolores voluptatem recusandae
         ducimus nobis sed, voluptatum expedita quisquam laudantium ipsum non ex illo vero doloremque amet nisi, assumenda fugit ab. In."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }



}
