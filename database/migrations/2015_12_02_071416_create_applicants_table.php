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

            $table->string('address');
            $table->string('gender');
            $table->string('email');
            $table->integer('phone');
            $table->string('education');
            $table->string('citizenship');
            $table->string('age');
            $table->string('bloodgroup');
            $table->string('institution');
            $table->string('trainer');
            $table->string('vehicle_type');
            $table->string('date');
            $table->string('fee');
            
            $table->string('status');
            $table->string('license_type');
            //image
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
