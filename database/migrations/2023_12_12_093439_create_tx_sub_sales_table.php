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
        Schema::create('tx_sub_sales', function (Blueprint $table) {
            $table->id();
            $table->string('sales_id');
            $table->string('item_id');
            $table->integer('qty_sales');
            $table->integer('unit_price');

            $table->foreign('sales_id')->references('sales_id')->on('tx_sales');
            $table->foreign('item_id')->references('item_id')->on('ms_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tx_sub_sales');
    }
};
