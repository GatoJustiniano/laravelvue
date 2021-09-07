<?php

namespace Database\Seeders;

use App\Models\PostImage;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostImage::truncate();

        $posts = Post::all();

        foreach ($posts as $key => $c) {
            PostImage::create([
                'image'         => "1630969542.jpg",
                'post_id'       => $c->id,
                
            ]);
        }
    }
}
