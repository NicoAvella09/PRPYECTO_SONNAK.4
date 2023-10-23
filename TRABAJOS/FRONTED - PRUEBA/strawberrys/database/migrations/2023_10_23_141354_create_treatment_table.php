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
        Schema::create('treatment', function (Blueprint $table) {
            $table->integer('supply_use_quantity');
            $table->string('supply_service', 45);
            $table->integer('stock_supplie');
            $table->integer('crop_id')->index('fk_Tratamiento_Cosechas1_idx');
            $table->integer('supply_id')->index('fk_Tratamiento_Insumos1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treatment');
    }
};
