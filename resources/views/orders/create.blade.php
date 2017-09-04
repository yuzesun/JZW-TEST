@extends('layouts.app')

@section('content')

    <div class="container">
    <br><br><br><br>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{url('/orders')}}">Order</a></li>
            <li class="breadcrumb-item active">Create Order</li>
        </ol>

    {!! Form::open(['url' => 'orders']) !!}
    <div class="form-group">
        {!! Form::label('po', 'Purchase Order Number:') !!}
        {!! Form::text('po',null,['class'=>'form-control','autocomplete'=>'off']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('order_date', 'Order Date:') !!}<br>
        {!! Form::date('order_date',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('customer_name', 'Customer Name:') !!} <br>
        {!! Form::radio('customer_name', 'ABC', true) !!} ABC &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('customer_name', 'Beacon') !!} Beacon &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('customer_name', 'Home Depot') !!} Home Depot &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('customer_name', 'Tighton') !!} Tighton &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('customer_name', 'Spec Building Material') !!} Spec Building Material  &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('customer_name', 'REESE') !!} REESE &nbsp;&nbsp;&nbsp;
        {!! Form::radio('customer_name', 'MABP') !!} MABP &nbsp;&nbsp;&nbsp;
        {!! Form::radio('customer_name', 'Travis') !!} Travis &nbsp;&nbsp;&nbsp;
    </div>
    <div class="form-group">
        {!! Form::label('city', 'Arrival City:') !!}
        {!! Form::text('city',null,['class'=>'form-control', 'autocomplete'=>'off']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('state', 'Arrival State:') !!}
        {!! Form::text('state',null,['class'=>'form-control', 'autocomplete'=>'off']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('zip_code', 'Arrival Zip Code:') !!}
        {!! Form::text('zip_code',null,['class'=>'form-control', 'autocomplete'=>'off']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('logo', 'Box Logo:') !!} <br>
        {!! Form::radio('logo', 'ABC', true) !!} ABC &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('logo', 'PEAK') !!} PEAK &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('logo', 'JZW') !!} JZW &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('logo', 'Tighton') !!} Tighton &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('logo', 'REESE') !!} Reese &nbsp;&nbsp;&nbsp;
        {!! Form::radio('logo', 'Travis') !!} Travis &nbsp;&nbsp;&nbsp;
        {!! Form::radio('logo', 'White Box with Black Description') !!} White Box with Black Description &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="form-group">
        {!! Form::label('factory', 'Manufacturer:') !!}<br>
        {!! Form::radio('factory', 'Hong Yuan', true) !!} Hong Yuan &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('factory', 'Zhu Cheng') !!} Zhu Cheng &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('factory', 'Wu Lian') !!} Wu Lian &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('factory', 'Yao Shu Mei') !!} Yao Shu Mei &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('factory', 'Cheshire') !!} Cheshire &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('factory', 'Harvest') !!} Harvest &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('factory', 'Product & Energy') !!} Product & Energy &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('factory', 'Lin Yi') !!} Lin Yi

    </div>
    <div class="form-group">
        {!! Form::label('forwarder', 'Forwarder:') !!} <br>
        {!! Form::radio('forwarder', 'Sai', true) !!} Sai &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('forwarder', 'Bob') !!} Bob &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('forwarder', 'Emily') !!} Emily &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('forwarder', 'Evan') !!} Evan &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('forwarder', 'Ryan') !!} Ryan &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('forwarder', 'Werner') !!} Werner &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="form-group">
        {!! Form::label('freight', 'Freight Rate:') !!}
        {!! Form::text('freight',null,['class'=>'form-control', 'autocomplete'=>'off']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('port', 'Shipping Port:') !!} <br>
        {!! Form::radio('port', 'Qingdao', true) !!} Qingdao &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('port', 'Tianjin') !!} Tianjin &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('port', 'Nanjing') !!} Nanjing &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('port', 'Huangpu') !!} Huangpu &nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="form-group">
        {!! Form::label('value', 'Shipment Value:') !!}
        {!! Form::text('value',null,['class'=>'form-control', 'autocomplete'=>'off']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('shipping_date', 'Shipping Date:') !!}
        {!! Form::date('shipping_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('arrival_date', 'Arrival Date:') !!}
        {!! Form::date('arrival_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('payment_status', 'Payment Status (Factory): ') !!}<br>
        {!! Form::radio('payment_status', 'Not Paid', true) !!} Not Paid &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('payment_status', 'Paid') !!} Paid  &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('payment_status', 'Prepaid') !!} Prepaid
    </div>
    <div class="form-group">
        {!! Form::label('shipping_status', 'Shipping Status:') !!}<br>
        {!! Form::radio('shipping_status', 'Not Yet Shipped', true) !!} Not Yet Shipped &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('shipping_status', 'On the Ocean') !!} On the Ocean &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('shipping_status', 'Arrived in U.S.') !!} Arrived in U.S. &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('shipping_status', 'Delivered') !!} Delivered
    </div>
    <div class="form-group">
        {!! Form::label('payment_status_customer', 'Payment Status (Customer): ') !!}<br>
        {!! Form::radio('payment_status_customer', 'Not Paid', true) !!} Not Paid &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('payment_status_customer', 'Paid') !!} Paid  &nbsp;&nbsp;&nbsp;&nbsp;
        {!! Form::radio('payment_status_customer', '50% Prepaid') !!} 50% Prepaid
    </div>
    <div class="form-group">
        {!! Form::label('payment_date_customer', 'Customer Payment Date:') !!}
        {!! Form::date('payment_date_customer',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('note', 'Note:') !!}
        {!! Form::text('note',null,['class'=>'form-control', 'autocomplete'=>'off']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
    </div>
@stop


