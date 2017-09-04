@extends('layouts.app')


@section('content')

    <div class="container">
        <br><br><br><br><br>
        <hr>

        <h5 class="text-center">JZW International Tracking System</h5>
        <br>

        @if(sizeOf($orders) != 0)
            <table class="table table-striped table-bordered table-hover text-center">
                @foreach ($orders as $order)
                    <tr>
                        <th class="text-center warning">Order Number</th>
                        <td style="vertical-align: middle">{{ $order->po }}</td>
                    </tr>
                    <tr>
                        <th class="text-center warning">Logo</th>
                        <td style="vertical-align: middle">{{ $order->logo }}</td>
                    </tr>
                    <tr>
                        <th class="text-center warning">Delivery Location</th>
                        <td style="vertical-align: middle">{{ $order->city }}, {{ $order->state }} {{ $order->zip_code }}</td>
                    </tr>
                    <tr>
                        <th class="text-center warning">Order Status</th>
                        <th class="text-center" style="vertical-align: middle">{{ $order->shipping_status }}</th>
                    </tr>
                    <tr>
                        <th class="text-center warning">ETD</th>
                        <td style="vertical-align: middle"><?php echo date("m/d/Y", strtotime($order->shipping_date)); ?></td>
                    </tr>
                    <tr>
                        <th class="text-center warning">ETA</th>
                        <td style="vertical-align: middle"><?php echo date("m/d/Y", strtotime($order->arrival_date)); ?></td>
                    </tr>
                    <tr>
                        <th class="text-center warning">Note</th>
                        <td style="vertical-align: middle">{{ $order->note }}</td>
                    </tr>
                @endforeach
            </table>
            <p class="text-center">* Feel free to contact us if there is anything wrong with the shipment.</p>
        @else
            <div class="alert alert-warning" role="alert">
            Try again! Purchase Order cannot be found.<br>
            If you have any further concerns, please contact us at 402-719-6969 or sunzjw@gmail.com.
            </div>
        @endif
        {{$orders->links()}}
    </div>

@endsection

