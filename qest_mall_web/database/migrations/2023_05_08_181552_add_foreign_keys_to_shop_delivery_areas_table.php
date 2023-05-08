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
        Schema::table('shop_delivery_areas', function (Blueprint $table) {
            $table->foreign(['shop_id'])->references(['id'])->on('shops')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_delivery_areas', function (Blueprint $table) {
            $table->dropForeign('shop_delivery_areas_shop_id_foreign');
        });
    }
};
