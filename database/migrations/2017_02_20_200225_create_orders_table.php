<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('po')->unique()->nullable();
            $table->date('order_date')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('logo')->nullable();
            $table->string('factory')->nullable();
            $table->string('forwarder')->nullable();
            $table->float('freight')->nullable();
            $table->string('port')->nullable();
            $table->float('value')->nullable();
            $table->date('shipping_date')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('shipping_status')->nullable();
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
        Schema::drop('orders');
    }


}

