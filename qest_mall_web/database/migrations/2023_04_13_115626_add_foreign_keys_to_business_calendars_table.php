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
        Schema::table('business_calendars', function (Blueprint $table) {
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
        Schema::table('business_calendars', function (Blueprint $table) {
            $table->dropForeign('business_calendars_shop_id_foreign');
        });
    }
};
