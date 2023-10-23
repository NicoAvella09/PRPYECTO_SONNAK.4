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
        Schema::table('supplies', function (Blueprint $table) {
            $table->foreign(['providers_id'], 'fk_supplies_providers1')->references(['id'])->on('providers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['resources_id'], 'fk_supplies_resources1')->references(['id'])->on('resources')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplies', function (Blueprint $table) {
            $table->dropForeign('fk_supplies_providers1');
            $table->dropForeign('fk_supplies_resources1');
        });
    }
};
