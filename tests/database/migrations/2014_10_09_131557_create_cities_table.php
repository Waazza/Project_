<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
              $table->mediumIncrements('id');
              $table->string('region');
              $table->string('name');
              $table->string('simple_name');
              $table->string('real_name');
              $table->integer('zip_code');
              $table->integer('num_INSEE');
              $table->string('district');
              $table->string('long');
              $table->string('lat');
              $table->string('long_grd');
              $table->string('lat_grd');
              $table->string('long_dms');
              $table->string('lat_dms');
        });
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
