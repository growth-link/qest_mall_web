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
        Schema::create('categories', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable()->index('categories_parent_id_foreign');
            $table->string('category_name')->nullable();
            $table->unsignedInteger('image_id')->nullable()->index('categories_image_id_foreign');
            $table->boolean('fashion_minor_category_flag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
