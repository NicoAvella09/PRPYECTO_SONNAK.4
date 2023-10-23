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
        Schema::table('treatment', function (Blueprint $table) {
            $table->foreign(['crop_id'], 'fk_Tratamiento_Cosechas1')->references(['id'])->on('crops')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['supply_id'], 'fk_Tratamiento_Insumos1')->references(['id'])->on('supplies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('treatment', function (Blueprint $table) {
            $table->dropForeign('fk_Tratamiento_Cosechas1');
            $table->dropForeign('fk_Tratamiento_Insumos1');
        });
    }
};
