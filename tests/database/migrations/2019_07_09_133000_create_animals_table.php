<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('picture')->nullable();
            $table->boolean('tatoo')->nullable();
            $table->boolean('microship')->nullable();
            $table->boolean('collar')->nullable();
            $table->text('comment')->nullable();
            $table->string('localisation')->nullable();
            $table->unsignedBigInteger('status_id_fk');
            $table->unsignedBigInteger('user_id_fk')->nullable();
            $table->unsignedBigInteger('color_eyes_id_fk')->nullable();
            $table->unsignedBigInteger('color_id_fk');
            $table->unsignedBigInteger('size_id_fk');
            $table->unsignedBigInteger('fur_size_id_fk');
            $table->unsignedBigInteger('gender_id_fk')->nullable();
            $table->unsignedBigInteger('age_id_fk')->nullable();
            $table->unsignedBigInteger('race_id_fk');
            $table->foreign('status_id_fk')->references('id')->on('status');
            $table->foreign('user_id_fk')->references('id')->on('users');
            $table->foreign('color_eyes_id_fk')->references('id')->on('color_eyes');
            $table->foreign('color_id_fk')->references('id')->on('colors');
            $table->foreign('size_id_fk')->references('id')->on('sizes');
            $table->foreign('fur_size_id_fk')->references('id')->on('fur_sizes');
            $table->foreign('gender_id_fk')->references('id')->on('genders');
            $table->foreign('age_id_fk')->references('id')->on('ages');
            $table->foreign('race_id_fk')->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
