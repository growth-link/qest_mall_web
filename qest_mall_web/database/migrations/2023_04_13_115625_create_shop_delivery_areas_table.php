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
        Schema::create('shop_delivery_areas', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('area_name')->nullable();
            $table->unsignedInteger('shop_id')->nullable()->index('shop_delivery_areas_shop_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_delivery_areas');
    }
};
