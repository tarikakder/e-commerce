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
        if(!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->string('transactionProd');
                $table->integer('basket_id')->unsigned();
                $table->string('userID');
                $table->string('productID');
                $table->string('address');
                $table->dateTime('orderDate');
                $table->decimal('order_amount', 5, 4);
                $table->unique('basket_id');
                $table->foreign('basket_id')->references('id')->on('basket')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
};
