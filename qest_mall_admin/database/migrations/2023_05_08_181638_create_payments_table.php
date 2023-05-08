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
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('purchase_no')->nullable();
            $table->string('voucher_id')->nullable();
            $table->integer('delivery_post_code')->nullable();
            $table->string('delivery_address_1')->nullable();
            $table->string('delivery_first_name')->nullable();
            $table->string('delivery_last_name')->nullable();
            $table->string('delivery_first_name_kana')->nullable();
            $table->string('delivery_last_name_kana')->nullable();
            $table->integer('shipping_cost')->nullable();
            $table->integer('credit_card')->nullable();
            $table->integer('waon_point')->nullable();
            $table->integer('get_point')->nullable();
            $table->integer('coupon_id')->nullable();
            $table->integer('coupon_price')->nullable();
            $table->string('memo', 1000)->nullable();
            $table->integer('user_id')->nullable();
            $table->dateTime('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
