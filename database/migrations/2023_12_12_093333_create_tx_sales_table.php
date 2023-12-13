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
        Schema::create('tx_sales', function (Blueprint $table) {
            $table->string('sales_id')->primary();
            $table->string('sales_no');
            $table->string('customer_id');
            $table->string('salesman_id');
            $table->string('create_by');
            $table->date('input_date');

            $table->foreign('customer_id')->references('customer_id')->on('ms_customers');
            $table->foreign('salesman_id')->references('salesman_id')->on('ms_salesmans');
            $table->foreign('create_by')->references('user_id')->on('ms_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tx_sales');
    }
};
