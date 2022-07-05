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
        if(!Schema::hasTable('product')) {
            Schema::create('product', function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug', 160);
                $table->string('product_name', 160);
                $table->string('product_description');
                $table->string('product_amount', 6, 3);
                $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('updated_date')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
                $table->timestamp('deleted_date')->nullable();
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
        Schema::dropIfExists('product');
    }
};
