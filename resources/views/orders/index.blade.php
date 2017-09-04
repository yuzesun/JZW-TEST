@extends('layouts.app')

@section('content')

<div class="container">
    <br><br><br><br><br>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item active">Orders</li>
    </ol>
    <a href="{{url('/orders/create')}}" class="btn btn-success">Create Order</a>
    <div class="col-md-offset-8 col-lg-offset-8 col-xs-offset-8 form-inline">
            {{ Form::open(['method'=> 'GET', 'action' => 'OrderController@searchOrder']) }}
                {{Form::input('search','q', null, ['placeholder' => 'Purchase order number...','class'=>'form-control', 'autocomplete'=>'off'])}}
                {!! Form::submit('Search', ['class' => 'btn btn-default']) !!}
            {{ Form::close() }}
    </div> <br>
    <div class="col-md-offset-8 col-lg-offset-8 col-xs-offset-8">
        <a type="button" class="btn btn-default" href="{{ action('OrderController@index') }}">View All Orders</a>
    </div>
    <hr>
    @if(sizeOf($orders) != 0)
        <table class="table table-striped table-bordered table-hover text-center">
            <thead>
            <tr class="warning">
                <th class="text-center">Order Number</th>
                <th class="text-center">Order Date</th>
                <th class="text-center">City</th>
                <th class="text-center">Arrival Date</th>
                <th class="text-center">Manufacturer</th>
                <th class="text-center">Payment Status (Factory)</th>
                <th class="text-center">Shipping Status</th>
                <th class="text-center" colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td style="vertical-align: middle">{{ $order->po }}</td>
                    <td style="vertical-align: middle"><?php echo date("m/d/Y", strtotime($order->order_date)); ?></td>
                    <td style="vertical-align: middle">{{ $order->city }}</td>
                    <td style="vertical-align: middle"><?php echo date("m/d/Y", strtotime($order->arrival_date)); ?></td>
                    <td style="vertical-align: middle">{{ $order->factory }}</td>
                    <td style="vertical-align: middle">{{ $order->payment_status }}</td>
                    <td style="vertical-align: middle">{{ $order->shipping_status }}</td>
                    <td style="vertical-align: middle"><a href="{{route('orders.show',$order->id)}}" class="btn btn-primary">Details</a></td>
                    <td style="vertical-align: middle"><a href="{{route('orders.edit',$order->id)}}" class="btn btn-warning">Update</a></td>
                    <td style="vertical-align: middle">
                        {!! Form::open(['method' => 'DELETE', 'route'=>['orders.destroy', $order->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            {{$orders->links()}}
            </tbody>
        </table>
    @else
        <p>No Order is stored in the system yet.</p>
    @endif
    {{$orders->links()}}
</div>

@endsection

