<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_delivery_charges', function (Blueprint $table) {
            $table->increments('shop_id');
            $table->integer('shop_delivery_area_set_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('delivery_type_id')->nullable();
            $table->integer('size')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_delivery_charges');
    }
};
