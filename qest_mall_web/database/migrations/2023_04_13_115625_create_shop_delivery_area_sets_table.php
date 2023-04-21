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
        Schema::create('shop_delivery_area_sets', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('shop_delivery_area_id')->nullable()->index('shop_delivery_area_sets_shop_delivery_area_id_foreign');
            $table->unsignedInteger('prefecture_id')->nullable()->index('shop_delivery_area_sets_prefecture_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_delivery_area_sets');
    }
};
