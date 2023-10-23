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
        Schema::create('performances', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('performance_name', 45);
            $table->string('performance_category', 45);
            $table->integer('stock_performance');
            $table->string('performance_photo', 45);
            $table->integer('product_unit_prince');
            $table->integer('products_id')->index('fk_performances_products1_idx');
            $table->integer('customers_id')->index('fk_performances_customers1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('performances');
    }
};
