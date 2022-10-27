<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Abizar Valentino Fachri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga rem placeat beatae delectus facere amet, at iure. Eaque repudiandae maiores eius doloribus voluptatem culpa magni dolores dignissimos, ratione adipisci at ex et! Totam placeat dolore veritatis nostrum ipsum vero aut accusamus ipsam quaerat hic voluptas dolorem ipsa qui voluptatem illo minima illum, quas nulla libero doloribus. Quisquam ducimus facilis incidunt aperiam totam blanditiis minima. Minus voluptates at nostrum laborum maxime, doloremque accusamus recusandae velit pariatur quo quibusdam sint aliquid autem."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Azzam Zhafran Imran",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste quos adipisci error officiis, vitae perspiciatis iusto excepturi perferendis doloremque, deserunt ex, natus vero dolorem provident alias odit blanditiis? Nesciunt amet quisquam ullam totam animi eaque rerum nulla tempora sint eius ab quas fuga doloribus distinctio velit, exercitationem voluptas quo laboriosam illum temporibus? Totam, voluptatibus laudantium tenetur earum adipisci nemo. Doloremque, similique odio. Error, maxime illo accusantium rem aperiam magnam ad natus officia quos est! Omnis, magni soluta ab numquam quos iusto! Modi, error. Debitis ipsum laborum quae commodi molestiae id officia eius ut voluptates quod quas ipsa aspernatur, consequuntur unde."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }


}
