<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('member_id')->unsigned();
            $table->integer('permission_id')->unsigned();
            $table->timestamps();

            //id of different users
            $table->foreign('member_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            //id of permissions
           $table->foreign('permission_id')
                  ->references('id')
                  ->on('permission')
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
        Schema::drop('member');
    }
}
