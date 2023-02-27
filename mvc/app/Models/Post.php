<?php

namespace App\Models;


class Post {
   private static $blog_posts =[
    [
        "judul" => "Blog Pertama",
        "Penulis" => "Ira Amelia",
        "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        A reprehenderit dolore eaque beatae pariatur exercitationem quisquam in magni quia ipsam, sit dolores. 
        Consectetur veniam dolore officiis obcaecati quidem distinctio perspiciatis eveniet, 
        porro molestiae magnam, atque asperiores harum minima? Rem quam porro nam soluta ullam, 
        eligendi dolor ipsum. Vero quos ipsam, mollitia illo, sint dolores neque, accusantium adipisci ex 
        nobis quisquam laudantium corporis qui repudiandae. 
        Quis, inventore dignissimos. Recusandae enim magnam architecto id temporibus commodi sed nihil velit.
        Mollitia deserunt veritatis reprehenderit sunt quod laborum quam. 
        Quia veniam expedita doloribus, quisquam animi inventore, quis rerum dolorem quibusdam quidem cum fugiat fuga."
    ],
    [
        "judul" => "Blog Kedua",
        "Penulis" => "Eka Sulistyaningsih",
        "body" =>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        A reprehenderit dolore eaque beatae pariatur exercitationem quisquam in magni quia ipsam, sit dolores. 
        Consectetur veniam dolore officiis obcaecati quidem distinctio perspiciatis eveniet, 
        porro molestiae magnam, atque asperiores harum minima? Rem quam porro nam soluta ullam, 
        eligendi dolor ipsum. Vero quos ipsam, mollitia illo, sint dolores neque, accusantium adipisci ex 
        nobis quisquam laudantium corporis qui repudiandae. 
        Quis, inventore dignissimos. Recusandae enim magnam architecto id temporibus commodi sed nihil velit.
        Mollitia deserunt veritatis reprehenderit sunt quod laborum quam. 
        Quia veniam expedita doloribus, quisquam animi inventore, quis rerum dolorem quibusdam quidem cum fugiat fuga."
    ]
    ];
    public static function all(){
        return collect (self::$blog_posts);
    }
}
