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
        Schema::table('specified_commercial_transactions', function (Blueprint $table) {
            $table->foreign(['shop_id'], 'specified_commercial_transactions')->references(['id'])->on('shops')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specified_commercial_transactions', function (Blueprint $table) {
            $table->dropForeign('specified_commercial_transactions');
        });
    }
};
