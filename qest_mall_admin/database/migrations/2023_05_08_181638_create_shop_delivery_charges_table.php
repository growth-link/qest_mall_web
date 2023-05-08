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
            $table->increments('id');
            $table->unsignedInteger('shop_id')->nullable()->index('shop_delivery_charges_shop_id_foreign');
            $table->unsignedInteger('shop_delivery_area_set_id')->nullable()->index('shop_delivery_charges_shop_delivery_area_set_id_foreign');
            $table->unsignedInteger('delivery_type_id')->nullable()->index('shop_delivery_charges_delivery_type_id_foreign');
            $table->unsignedInteger('size_id')->nullable()->index('shop_delivery_charges_size_id_foreign');
            $table->integer('price')->nullable();
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
