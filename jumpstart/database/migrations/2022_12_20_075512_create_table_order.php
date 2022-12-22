<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->foreignId("userID")->constrained('users', 'id')->onDelete('cascade');
            $table->foreignId("productID")->constrained('product', 'id')->onDelete('cascade');
            $table->integer("orderAmount");
            $table->dateTime("orderDateTime");
            $table->longText("orderNote")->nullable($value = true);
            $table->integer('shipmentID')->constrained('shipment', 'id')->onDelete('cascade')->nullable($value = true);
            $table->integer('paymentID')->constrained('payment', 'id')->onDelete('cascade')->nullable($value = true);
            $table->string("orderStatus");
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
        Schema::dropIfExists('order');
    }
};
