<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('image');
            $table->string('per_address');
            $table->string('temp_address');
            //$table->string('image_name')->unique();
            $table->string('occupation');
            $table->string('gender');
            $table->string('email');
            $table->integer('phone');
            $table->integer('mobile');
            $table->string('education');
            $table->integer('citizenship');
            $table->string('age');
            $table->string('bloodgroup');
            $table->string('relative');
            $table->string('institution');
            $table->string('trainer');
            $table->string('vehicle_type');
            $table->string('date');
            $table->string('fee');
            
            $table->string('status');
            $table->string('license_type');
            
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
        Schema::drop('applicants');
    }
}
