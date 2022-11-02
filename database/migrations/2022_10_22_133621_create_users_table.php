<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('fullname',50)->nullable();
            $table->string('email',100)->nullable();
            $table->string('phone_num',20)->nullable();
            $table->string('diachi',250)->nullable();
            $table->string('password',32)->nullable();
            $table->integer('role_id');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->rememberToken();
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
