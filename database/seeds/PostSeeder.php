<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->title = $faker->sentence();
            $post->slug = Str::slug($post->title);
            $post->image = $faker->imageUrl(
                1200,
                480,
                'Posts',
                true,
                $post->title
            );
            /* con l upload 

            prima php artisan storage:link
            crea una cartella
            $post->image = 'nome_cartella/' . $faker->image('storage/app/public/nome_cartella', 640, 480. 'posts', false); */
            $post->sub_title = $faker->sentence();
            $post->content = $faker->paragraphs(20, true);
            $post->save();
        }
    }
}