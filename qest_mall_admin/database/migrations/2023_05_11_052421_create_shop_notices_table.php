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
        Schema::create('shop_notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('context')->nullable();
            $table->boolean('is_read')->nullable();
            $table->boolean('is_all_shop')->nullable();
            $table->integer('shop_id')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
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
        Schema::dropIfExists('shop_notices');
    }
};
