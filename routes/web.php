<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Abizar Valentino Fachri",
        "email" => "abizarfachri24@gmail.com",
        "image" => "bubu.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" =>  $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
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


    $new_post =[];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

