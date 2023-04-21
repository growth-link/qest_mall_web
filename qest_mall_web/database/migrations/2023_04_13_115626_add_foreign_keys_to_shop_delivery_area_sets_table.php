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
        Schema::table('shop_delivery_area_sets', function (Blueprint $table) {
            $table->foreign(['prefecture_id'])->references(['id'])->on('prefectures')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['shop_delivery_area_id'])->references(['id'])->on('shop_delivery_areas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_delivery_area_sets', function (Blueprint $table) {
            $table->dropForeign('shop_delivery_area_sets_prefecture_id_foreign');
            $table->dropForeign('shop_delivery_area_sets_shop_delivery_area_id_foreign');
        });
    }
};
