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

            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->text('address');
            $table->text('location');
            $table->string('amount');
            $table->string('price');
            $table->string('product_id');
            // $table->unsignedBigInteger('product_id');

            // $table->foreign('product_id')->references('id')->on('add_products')->onDelete('cascade');

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
Schema::dropIfExists('orders');
}
}