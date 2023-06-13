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
        Schema::create('service_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_name')->nullable();
            $table->string('service_name_kana')->nullable();
            $table->string('service_manager_name')->nullable();
            $table->string('service_manager_name_kana')->nullable();
            $table->string('privacy_manager_name')->nullable();
            $table->string('privacy_manager_name_kana')->nullable();
            $table->string('tel', 14)->nullable();
            $table->string('mail')->nullable();
            $table->string('post_code')->nullable();
            $table->integer('prefecture_id')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_info');
    }
};
