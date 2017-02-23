@extends('app')

@section('content')

    <h1>Order</h1>
    <a href="{{url('/orders/create')}}" class="btn btn-success">Create Order</a>

    <div class="col-md-offset-8 col-lg-offset-8 col-xs-offset-8">
        {{ Form::open(['method'=> 'GET']) }}
            {{Form::input('search','q', null, ['placeholder' => 'Purchase order number...'])}}
        {{ Form::close() }}
    </div>

    <hr>
    <table class="table table-striped table-bordered table-hover text-center">
        <thead>
        <tr class="warning">
            <th class="text-center">Order Number</th>
            <th class="text-center">Order Date</th>
            <th class="text-center">City</th>
            <th class="text-center">Arrival Date</th>
            <th class="text-center">Manufacturer</th>
            <th class="text-center">Payment Status</th>
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
                <td style="vertical-align: middle">{{ $order->arrival_date}}</td>
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

        </tbody>

    </table>
@endsection

