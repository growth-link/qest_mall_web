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
        Schema::table('items', function (Blueprint $table) {
            $table->foreign(['brand_id'])->references(['brand_id'])->on('brands')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['category_id'])->references(['category_id'])->on('categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
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
        Schema::table('items', function (Blueprint $table) {
            $table->dropForeign('items_brand_id_foreign');
            $table->dropForeign('items_category_id_foreign');
            $table->dropForeign('items_shop_id_foreign');
        });
    }
};
