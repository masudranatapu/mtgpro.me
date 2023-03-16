<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriberProductTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriber_product_type', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_type_id')->nullable();
            $table->unsignedInteger('subscriber_id')->nullable();
            $table->foreign('product_type_id')->references('product_type_id')
                ->on('product_type')->onDelete('cascade');
            $table->foreign('subscriber_id')->references('id')
                ->on('subscribers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subscriber_product_type');
    }
}
