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
            $table->unsignedInteger('shop_id')->nullable()->index('items_shop_id_foreign');
            $table->string('jan_code', 13)->nullable();
            $table->unsignedInteger('brand_id')->nullable()->index('items_brand_id_foreign');
            $table->unsignedInteger('category_id')->nullable()->index('category_id');
            $table->unsignedInteger('sub_category_id')->nullable();
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
            $table->unsignedInteger('delivery_type_id')->nullable();
            $table->unsignedInteger('item_size_id')->nullable();
            $table->boolean('is_consolidate_exclude')->nullable();
            $table->boolean('is_purchase_limit')->nullable();
            $table->unsignedInteger('purchase_limit_condition_id')->nullable();
            $table->integer('purchase_limit')->nullable();
            $table->boolean('has_youtube')->nullable();
            $table->string('youtube_tag', 1000)->nullable();
            $table->boolean('has_color')->nullable();
            $table->boolean('has_size')->nullable();
            $table->boolean('has_option')->nullable();
            $table->boolean('has_check')->nullable();
            $table->string('one_stories_url', 200)->nullable();
            $table->unsignedInteger('filter_color_id')->nullable();
            $table->unsignedInteger('filter_tag_id')->nullable();
            $table->unsignedInteger('stock')->default(0);
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
        Schema::dropIfExists('items');
    }
};
