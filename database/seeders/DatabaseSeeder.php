<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Abizar Valentino Fachri',
        //     'email' => 'abizar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Azzam Zharan Imran',
        //     'email' => 'azzam@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatum deleniti consequuntur, quasi, quaerat laudantium temporibus, cupiditate amet eligendi saepe dolorem quisquam sequi. ',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatum deleniti consequuntur, quasi, quaerat laudantium temporibus, cupiditate amet eligendi saepe dolorem quisquam sequi. Soluta commodi quibusdam, neque quia inventore cumque unde error architecto similique obcaecati nobis culpa, aliquam explicabo ex quis illum quas sequi, quidem adipisci velit. Tempore qui recusandae est quia laudantium, dicta itaque maiores repellat facilis. Neque molestias dolores soluta et ducimus nobis aut reiciendis pariatur magnam quo consequatur fugit minus, optio placeat numquam odit quae quis magni aspernatur aperiam eaque doloremque. Magni iusto id soluta tempore, dolores laudantium enim cumque, dolore adipisci sapiente, perferendis voluptates deserunt quibusdam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatum deleniti consequuntur, quasi, quaerat laudantium temporibus, cupiditate amet eligendi saepe dolorem quisquam sequi. ',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatum deleniti consequuntur, quasi, quaerat laudantium temporibus, cupiditate amet eligendi saepe dolorem quisquam sequi. Soluta commodi quibusdam, neque quia inventore cumque unde error architecto similique obcaecati nobis culpa, aliquam explicabo ex quis illum quas sequi, quidem adipisci velit. Tempore qui recusandae est quia laudantium, dicta itaque maiores repellat facilis. Neque molestias dolores soluta et ducimus nobis aut reiciendis pariatur magnam quo consequatur fugit minus, optio placeat numquam odit quae quis magni aspernatur aperiam eaque doloremque. Magni iusto id soluta tempore, dolores laudantium enim cumque, dolore adipisci sapiente, perferendis voluptates deserunt quibusdam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatum deleniti consequuntur, quasi, quaerat laudantium temporibus, cupiditate amet eligendi saepe dolorem quisquam sequi. ',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatum deleniti consequuntur, quasi, quaerat laudantium temporibus, cupiditate amet eligendi saepe dolorem quisquam sequi. Soluta commodi quibusdam, neque quia inventore cumque unde error architecto similique obcaecati nobis culpa, aliquam explicabo ex quis illum quas sequi, quidem adipisci velit. Tempore qui recusandae est quia laudantium, dicta itaque maiores repellat facilis. Neque molestias dolores soluta et ducimus nobis aut reiciendis pariatur magnam quo consequatur fugit minus, optio placeat numquam odit quae quis magni aspernatur aperiam eaque doloremque. Magni iusto id soluta tempore, dolores laudantium enim cumque, dolore adipisci sapiente, perferendis voluptates deserunt quibusdam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatum deleniti consequuntur, quasi, quaerat laudantium temporibus, cupiditate amet eligendi saepe dolorem quisquam sequi. ',
        //     'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatum deleniti consequuntur, quasi, quaerat laudantium temporibus, cupiditate amet eligendi saepe dolorem quisquam sequi. Soluta commodi quibusdam, neque quia inventore cumque unde error architecto similique obcaecati nobis culpa, aliquam explicabo ex quis illum quas sequi, quidem adipisci velit. Tempore qui recusandae est quia laudantium, dicta itaque maiores repellat facilis. Neque molestias dolores soluta et ducimus nobis aut reiciendis pariatur magnam quo consequatur fugit minus, optio placeat numquam odit quae quis magni aspernatur aperiam eaque doloremque. Magni iusto id soluta tempore, dolores laudantium enim cumque, dolore adipisci sapiente, perferendis voluptates deserunt quibusdam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
