<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_accessories', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->bigInteger('user_id');
            $table->bigInteger('accessory_category_id');
            $table->bigInteger('brand_id');
            $table->string('name');
            $table->string('price');
            $table->string('city');
            $table->string('img');
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
        Schema::dropIfExists('sell_accessories');
    }
}
