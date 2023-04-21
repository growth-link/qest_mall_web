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
        Schema::table('shop_delivery_charges', function (Blueprint $table) {
            $table->foreign(['delivery_type_id'])->references(['id'])->on('delivery_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['shop_delivery_area_set_id'])->references(['id'])->on('shop_delivery_area_sets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['shop_id'])->references(['id'])->on('shops')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['size_id'])->references(['id'])->on('sizes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shop_delivery_charges', function (Blueprint $table) {
            $table->dropForeign('shop_delivery_charges_delivery_type_id_foreign');
            $table->dropForeign('shop_delivery_charges_shop_delivery_area_set_id_foreign');
            $table->dropForeign('shop_delivery_charges_shop_id_foreign');
            $table->dropForeign('shop_delivery_charges_size_id_foreign');
        });
    }
};
