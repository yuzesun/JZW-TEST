@extends('app')
@section('content')
    <h1>Create New Order</h1>
    {!! Form::open(['url' => 'orders']) !!}
    <div class="form-group">
        {!! Form::label('po', 'Purchase Order Number:') !!}
        {!! Form::text('po',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('order_date', 'Order Date:') !!}<br>
        {!! Form::date('order_date',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', 'Arrival City:') !!}
        {!! Form::text('city',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('state', 'Arrival State:') !!}
        {!! Form::text('state',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('zip_code', 'Arrival Zip Code:') !!}
        {!! Form::text('zip_code',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('logo', 'Box Logo:') !!}
        {!! Form::text('logo',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('factory', 'Manufacturer:') !!}
        {!! Form::text('factory',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('forwarder', 'Forwarder:') !!}
        {!! Form::text('forwarder',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('freight', 'Freight Rate:') !!}
        {!! Form::text('freight',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('port', 'Port:') !!}
        {!! Form::text('port',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('value', 'Shipment Value:') !!}
        {!! Form::text('value',null,['class'=>'form-control']) !!}
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
        {!! Form::label('payment_status', 'Payment Status:') !!}<br>
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
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop

