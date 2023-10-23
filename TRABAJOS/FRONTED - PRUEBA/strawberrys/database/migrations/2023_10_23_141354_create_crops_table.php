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
        Schema::create('crops', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('type_crop', 45);
            $table->string('chemical', 45);
            $table->string('crop_look', 45);
            $table->integer('germination_day');
            $table->integer('sowing_date');
            $table->string('furrow_distance', 10);
            $table->string('distance_plant', 10);
            $table->integer('crop_day');
            $table->integer('product_weight');
            $table->integer('lots_id')->index('fk_crops_lots_idx');
            $table->integer('products_id')->index('fk_crops_products1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crops');
    }
};
