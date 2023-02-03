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
        Schema::create('top_banners', function (Blueprint $table) {
            $table->comment('');
            $table->increments('top_banner_id');
            $table->unsignedInteger('display_order')->nullable();
            $table->unsignedInteger('top_banner_type');
            $table->unsignedInteger('image_id')->nullable()->index('top_banners_image_id_foreign');
            $table->date('display_start_date')->nullable();
            $table->date('display_end_date')->nullable();
            $table->time('display_start_time')->nullable();
            $table->time('display_end_time')->nullable();
            $table->string('url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('top_banners');
    }
};
