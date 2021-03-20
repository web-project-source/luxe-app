<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
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
            $table->timestamps();
            $table->unsignedBigInteger('productId');
            $table->unsignedBigInteger('userId'); 
            $table->unsignedBigInteger('statusId');
            $table->integer('totalQty');
            $table->integer('rejectQty');
                        

            $table->foreign('productId')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('userId')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('statusId')
                ->references('id')
                ->on('status')
                ->onDelete('cascade');

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
