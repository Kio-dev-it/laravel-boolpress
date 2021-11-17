<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str; //utilizzato per genereare lo slug automaticamente dal titolo utilizzando l'helper slug()

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['html', 'css', 'js', 'vuejs', 'php', 'laravel', 'mysql'];

        foreach($categories as $category){
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::of($newCategory->name)->slug('-');
            $newCategory->save();
        }
    }
}
