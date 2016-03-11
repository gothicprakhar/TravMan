<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');//customer hwo booked package.
            $table->integer('cid');//agent's id whose customer has booked package
            $table->string('name');
            $table->string('email');
            $table->string('payment_id');
            $table->string('package_id');
            $table->string('phone_no');
            $table->timestamps();

            $table->foreign('cid')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('booking');
    }
}
