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
        Schema::create('supplies', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('type_supply', 45);
            $table->integer('supply_cost');
            $table->string('admisson_date', 45);
            $table->string('expiration_date', 45);
            $table->integer('providers_id')->index('fk_supplies_providers1_idx');
            $table->integer('resources_id')->index('fk_supplies_resources1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplies');
    }
};
