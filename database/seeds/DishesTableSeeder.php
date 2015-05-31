<?php

use Illuminate\Database\Seeder;
use App\Dish;
// composer require laracasts/testdummy

class DishesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

//        Dish::truncate();

        foreach (range(1, 24) as $idx) {
            Dish::create([
                'name' => "Spicy Baked Eggs",
                'min_price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 15, $max = 99), // 48.8932,
                'max_price' => 100,
                'imgUrl' => 'food3.jpg',
                'isspicy' => false,
                'isrange' => false,
                'menu_index' => $idx,
                'description' => $faker->paragraph(2)
            ]);
        }
    }
}
