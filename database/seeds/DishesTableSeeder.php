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

        foreach (range(1, 20) as $idx) {
            Dish::create([
                'name' => "Spicy Baked Eggs",
                'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 15, $max = 99), // 48.8932,
                'imgUrl' => 'food3.jpg'
            ]);
        }
    }
}
