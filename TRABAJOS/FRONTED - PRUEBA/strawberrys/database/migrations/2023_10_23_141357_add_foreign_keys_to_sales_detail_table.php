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
        Schema::table('sales_detail', function (Blueprint $table) {
            $table->foreign(['performances_id'], 'fk_sales_detail_performances1')->references(['id'])->on('performances')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['sales_id'], 'fk_sales_detail_sales1')->references(['id'])->on('sales')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales_detail', function (Blueprint $table) {
            $table->dropForeign('fk_sales_detail_performances1');
            $table->dropForeign('fk_sales_detail_sales1');
        });
    }
};
