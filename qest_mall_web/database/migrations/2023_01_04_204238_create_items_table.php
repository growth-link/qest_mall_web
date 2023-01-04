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
        Schema::create('items', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->integer('shop_id')->nullable();
            $table->string('jan_code', 13)->nullable();
            $table->integer('brand_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->string('name', 50)->nullable();
            $table->string('detail_title', 100)->nullable();
            $table->string('detail', 2000)->nullable();
            $table->string('information', 2000)->nullable();
            $table->string('item_no', 100)->nullable();
            $table->string('model_no', 100)->nullable();
            $table->boolean('is_maker_request_price')->nullable();
            $table->integer('open_price')->nullable();
            $table->integer('normal_price')->nullable();
            $table->integer('tax')->nullable();
            $table->dateTime('start_datetime')->nullable();
            $table->dateTime('end_datetime')->nullable();
            $table->boolean('can_reserve')->nullable();
            $table->dateTime('reserve_start_datetime')->nullable();
            $table->boolean('is_postage_free')->nullable();
            $table->integer('delivery_type_id')->nullable();
            $table->integer('item_size_id')->nullable();
            $table->boolean('is_consolidate_exclude')->nullable();
            $table->boolean('is_purchase_limit')->nullable();
            $table->integer('purchase_limit_condition_id')->nullable();
            $table->integer('purchase_limit')->nullable();
            $table->boolean('has_youtube')->nullable();
            $table->string('youtube_tag', 1000)->nullable();
            $table->boolean('has_color')->nullable();
            $table->boolean('has_size')->nullable();
            $table->boolean('has_option')->nullable();
            $table->boolean('has_check')->nullable();
            $table->string('one_stories_url', 200)->nullable();
            $table->integer('filter_color_id')->nullable();
            $table->integer('filter_tag_id')->nullable();
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
        Schema::dropIfExists('items');
    }
};
