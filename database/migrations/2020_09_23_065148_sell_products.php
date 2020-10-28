<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SellProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_products', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->string('category_id');
            $table->string('brand_id');
            $table->string('model');
            $table->string('color');
            $table->string('price');
            $table->string('minor_dent_scratch');
            $table->string('major_dent_scratch');
            $table->string('original_accessories_available');
            $table->string('screen_is_cracked');
            $table->string('device_box_available');
            $table->string('device_battery_status');
            $table->string('pta');
            $table->string('img1');
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->string('img6')->nullable();
            $table->string('img7')->nullable();
            $table->string('img8')->nullable();
            $table->string('img9')->nullable();
            $table->string('img10')->nullable();
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
        Schema::dropIfExists('sell_products');
    }
}
