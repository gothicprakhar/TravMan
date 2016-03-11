<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @retun void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid');
            $table->string('name');
            $table->string('user_name')->unique();
            $table->string('email')->unique();


            $table->string('password');
            $table->string('gender');
            $table->string('address');
            $table->integer('phone_no');
            $table->string('active-flag');
            $table->string('password',20);
            $table->string('gender');
            $table->string('address');
            $table->integer('phone_no');
            $table->integer('active_flag'); //0 for paid 1 for unpaid

            $table->string('role');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
