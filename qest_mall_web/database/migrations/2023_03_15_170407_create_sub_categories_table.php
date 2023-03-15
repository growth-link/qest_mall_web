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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->string('sub_category_name')->nullable();
            $table->string('url')->nullable();
            $table->unsignedInteger('image_id')->nullable()->index('sub_categories_image_id_foreign');
            $table->string('icon_url')->nullable();
            $table->string('top_banner_url')->nullable();
            $table->string('sp_top_banner_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_categories');
    }
};
