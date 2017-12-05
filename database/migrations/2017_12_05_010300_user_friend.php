<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserFriend extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
     Schema::create('friend_user', function(Blueprint $table) {
       $table->increments('id');
       $table->integer('friend_id')->unsigned()->index();
       $table->integer('user_id')->unsigned()->index();
       $table->foreign('friend_id')->references('id')->on('users')->onDelete('cascade');
       $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
     });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friend_user');
    }
}
