<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('phone');
            $table->text('address');
            $table->timestamp('last_connected')->nullable();
            $table->unsignedMediumInteger('city_id_fk');
            $table->foreign('city_id_fk')->references('id')->on('cities');
            $table->mediumInteger('city_zip_code_fk');
            $table->foreign('city_zip_code_fk')->references('zip_code')->on('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
