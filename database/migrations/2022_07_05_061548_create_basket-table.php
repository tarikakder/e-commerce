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
        Schema::create('basket', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_date')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('deleted_date')->nullable();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket');
    }
};
