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
        Schema::create('shops', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('shop_name', 100)->nullable();
            $table->string('shop_name_kana', 100)->nullable();
            $table->string('shop_tt_code', 10)->nullable();
            $table->integer('visibility_status')->nullable();
            $table->string('officer_name', 40)->nullable();
            $table->string('officer_name_kana', 40)->nullable();
            $table->tinyInteger('is_same_officer')->default(0);
            $table->string('personal_info_officer_name', 40)->nullable();
            $table->string('personal_info_officer_name_kana', 40)->nullable();
            $table->unsignedInteger('tel')->nullable();
            $table->string('mail', 50)->nullable();
            $table->unsignedInteger('zip_code')->nullable();
            $table->unsignedInteger('prefecture_id')->nullable();
            $table->string('city', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('building', 100)->nullable();
            $table->unsignedInteger('industry_id')->nullable();
            $table->string('category', 2000)->nullable();
            $table->string('introduction', 2000)->nullable();
            $table->unsignedInteger('image_id')->nullable()->index('shops_image_id_foreign');
            $table->string('banner_url')->nullable();
            $table->dateTime('created_at')->nullable()->useCurrent();
            $table->dateTime('updated_at')->nullable()->useCurrent();
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
        Schema::dropIfExists('shops');
    }
};
