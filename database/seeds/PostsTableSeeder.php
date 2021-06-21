<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 15; $i ++){
            $new_post = new Post();

            $new_post->title = $faker->words(2, true);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->content = $faker->paragraph(2, false);
            
            $new_post->save();
        }
    }
}
