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
        Schema::create('a_purchase_histories', function (Blueprint $table) {
            $table->comment('');
            $table->increments('id');
            $table->unsignedInteger('item_id')->nullable()->default(0)->index('a_purchase_histories_item_id_foreign');
            $table->unsignedInteger('purchase_quantity')->nullable()->default(0);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('a_purchase_histories');
    }
};
