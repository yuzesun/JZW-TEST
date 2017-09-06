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
            $table->string('po')->unique();
            $table->date('order_date');
            $table->string('customer_name');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('logo');
            $table->string('factory');
            $table->string('forwarder');
            $table->float('freight');
            $table->string('port');
            $table->float('value');
            $table->date('shipping_date');
            $table->date('arrival_date');
            $table->string('payment_status');
            $table->string('shipping_status');
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

