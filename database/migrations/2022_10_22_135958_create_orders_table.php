<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('fullname',50)->nullable();
            $table->string('email',100)->nullable();
            $table->string('phone_num',20)->nullable();
            $table->string('diachi',250)->nullable();
            $table->longText('note');//ghi chu cua khach hang
            $table->timestamp('order_date');
            $table->integer('order_status');//tinh trang don hang
            $table->integer('total_money');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
