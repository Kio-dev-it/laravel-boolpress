<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str; //utilizzato per genereare lo slug automaticamente dal titolo utilizzando l'helper slug()

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for( $i = 0; $i < 20; $i++ ){
            $newPost = new Post();
            $newPost->title = $faker->words(7, true);
            $newPost->slug = Str::of($newPost->title)->slug('-');
            $newPost->content = $faker->text(800);
            $newPost->author = $faker->firstName();
            $newPost->save();
        }
    }
}
