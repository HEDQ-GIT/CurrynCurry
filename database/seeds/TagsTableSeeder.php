<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    public function run()
    {

//        Tag::truncate();

        Tag::create(['name' => "LOCAL"]);
        Tag::create(['name' => "GREENS"]);
        Tag::create(['name' => "EGGS"]);
        Tag::create(['name' => "FRUITES"]);
        Tag::create(['name' => "MEET"]);
        Tag::create(['name' => "ITALIAN"]);
        Tag::create(['name' => "MEXICAN"]);
        Tag::create(['name' => "SPANISH"]);
        Tag::create(['name' => "SALAD"]);
    }
}
