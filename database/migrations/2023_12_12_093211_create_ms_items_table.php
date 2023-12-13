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
        Schema::create('ms_items', function (Blueprint $table) {
            $table->string('item_id')->primary();
            $table->string('item_name');
            $table->string('category');
            $table->string('input_by');
            $table->date('input_date');

            $table->foreign('input_by')->references('user_id')->on('ms_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ms_items');
    }
};
