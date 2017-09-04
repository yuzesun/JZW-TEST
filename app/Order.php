<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{
    //
    protected $fillable=[
        'po',
        'order_date',
        'customer_name',
        'city',
        'state',
        'zip_code',
        'logo',
        'factory',
        'forwarder',
        'freight',
        'port',
        'value',
        'shipping_date',
        'arrival_date',
        'payment_status',
        'payment_status_customer',
        'payment_date_customer',
        'shipping_status',
        'note',
    ];


}

