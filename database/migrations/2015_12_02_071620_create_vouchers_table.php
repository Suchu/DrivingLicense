<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->date('voucher_date');
            $table->integer('voucher_id');
            $table->string('fee');
            $table->string('voucher_image');
            $table->string('verification');//true or false
            $table->date('ver_date');
            $table->integer('ver_UID');
            $table->integer('applicants_id');
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
        Schema::drop('vouchers');
    }
}
