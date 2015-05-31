<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('imgUrl');
            $table->decimal('min_price', 7, 2);
            $table->decimal('max_price', 7, 2);
            $table->boolean('isspicy');
            $table->text('description');
            $table->boolean('isrange');
            $table->tinyInteger('menu_index');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dishes');
    }
}
