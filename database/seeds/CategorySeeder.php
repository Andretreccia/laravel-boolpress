<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = ['Politica', 'Natura', 'Tecnologia', 'Cucina', 'Motori'];
        foreach ($categories as $category) {
            $_category = new Category();
            $_category->name = $category;
            $_category->slug = Str::slug($category);
            $_category->save();
        }
    }
}