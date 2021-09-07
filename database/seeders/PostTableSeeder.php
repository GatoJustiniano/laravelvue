<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $categories = Category::all();

        foreach ($categories as $key => $c) {
            for ($i=1; $i < 20; $i++) { 
                Post::create([
                    'title'         => "Post $i $key",
                    'url_clean'     => "categoria-$i-$key",
                    'content'       => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur neque ut neque mattis aliquam. Sed sed nibh neque. Duis scelerisque dapibus ligula, vel pulvinar sapien ultrices vitae. Etiam fringilla porta elementum. Nam tempus accumsan tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque lobortis tempus erat, at condimentum neque convallis eget. Donec dapibus, elit quis varius sagittis, lorem ipsum auctor urna, eu efficitur. ",
                    'posted'        => 'yes',
                    'category_id'   => $c->id,
                    
                ]);
            }
        }
    }
}
