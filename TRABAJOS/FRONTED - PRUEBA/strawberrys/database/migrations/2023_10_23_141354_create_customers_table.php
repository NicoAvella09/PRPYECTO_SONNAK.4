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
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('identification_card');
            $table->char('last_name', 40);
            $table->string('address', 45);
            $table->integer('phone');
            $table->date('birthdate');
            $table->string('customer_role', 45);
            $table->unsignedBigInteger('users_id')->index('fk_customers_users1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
