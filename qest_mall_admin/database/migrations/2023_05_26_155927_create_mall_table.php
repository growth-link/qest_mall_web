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
        Schema::create('mall', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name')->nullable();
            $table->string('company_name_kana')->nullable();
            $table->string('company_no')->nullable();
            $table->string('delegate_name')->nullable();
            $table->string('delegate_name_kana')->nullable();
            $table->string('delegate_tel_no')->nullable();
            $table->string('delegate_mail_address')->nullable();
            $table->string('post_code')->nullable();
            $table->integer('prefecture_id')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('address3')->nullable();
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
        Schema::dropIfExists('mall');
    }
};
