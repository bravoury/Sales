<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateWarehousesTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: warehouses
         */
        Schema::create('warehouses', function ($table) {
            $table->increments('id');
            $table->string('name', 50)->nullable();
            $table->float('origin_kg_fee')->nullable();
            $table->float('exchange_rate')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('warehouses');
    }
}
