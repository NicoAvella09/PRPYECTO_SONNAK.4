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
        Schema::table('losses', function (Blueprint $table) {
            $table->foreign(['crops_id'], 'fk_losses_crops1')->references(['id'])->on('crops')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('losses', function (Blueprint $table) {
            $table->dropForeign('fk_losses_crops1');
        });
    }
};
