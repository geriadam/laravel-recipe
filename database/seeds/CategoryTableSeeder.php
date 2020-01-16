<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "name" => "Chicken",
            "image" => "product29.jpg",
        ]);

        Category::create([
            "name" => "Juice",
            "image" => "product30.jpg",
        ]);

        Category::create([
            "name" => "BBQ",
            "image" => "product31.jpg",
        ]);

        Category::create([
            "name" => "Dessert",
            "image" => "product32.jpg",
        ]);

        Category::create([
            "name" => "Sushi",
            "image" => "product33.jpg",
        ]);

        Category::create([
            "name" => "Coffee",
            "image" => "product34.jpg",
        ]);

        Category::create([
            "name" => "Pizza",
            "image" => "product35.jpg",
        ]);

        Category::create([
            "name" => "Vegan",
            "image" => "product31.jpg",
        ]);

        Category::create([
            "name" => "Salad",
            "image" => "product29.jpg",
        ]);
    }
}
