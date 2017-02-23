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
        'cust_number',
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
        'shipping_status',
    ];


}

