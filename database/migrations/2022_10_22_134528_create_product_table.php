<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categories_id');
            $table->string('name_product',250)->nullable();
            $table->integer('price');//gia goc
            $table->integer('price_discount');//gia khuyen mai
            $table->string('thumbnail_url',500)->nullable();
            $table->integer('product_status');
            $table->string('description');//ghi chu
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('delete_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
