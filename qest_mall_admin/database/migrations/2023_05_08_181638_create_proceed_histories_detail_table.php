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
        Schema::create('proceed_histories_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_no')->nullable();
            $table->integer('type')->nullable();
            $table->dateTime('start_at')->nullable();
            $table->dateTime('end_at')->nullable();
            $table->integer('subject_type')->nullable();
            $table->integer('tax_type')->nullable();
            $table->integer('price')->nullable();
            $table->integer('sq_no')->nullable();
            $table->integer('payment_id')->nullable();
            $table->dateTime('send_at')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('udpated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proceed_histories_detail');
    }
};
