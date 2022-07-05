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
    {if(!Schema::hasTable('basket_product')) {
        Schema::create('basket_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('basket_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('piece');
            $table->decimal('price', 5, 2);
            $table->string('status', 30);
            $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->foreign('basket_id')->references('id')->on('basket')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
        });
    };
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket_product');
    }
};
