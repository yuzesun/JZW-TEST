@extends('layouts.test')
@section('content')

    <div class="container">
    <br><br><br><br>

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{url('/orders')}}">Order</a></li>
        <li class="breadcrumb-item active">Details</li>
    </ol>

        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Order Number</td>
                <td><?php echo ($order['po']); ?></td>
            </tr>
            <tr>
                <td>Order Date</td>
                <td><?php echo date("m/d/Y",strtotime($order['order_date'])); ?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?php echo ($order['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($order['state']); ?></td>
            </tr>
            <tr>
                <td>Zip Code</td>
                <td><?php echo ($order['zip_code']); ?></td>
            </tr>
            <tr>
                <td>Box Logo</td>
                <td><?php echo ($order['logo']); ?></td>
            </tr>
            <tr>
                <td>Manufacturer</td>
                <td><?php echo ($order['factory']); ?></td>
            </tr>
            <tr>
                <td>Forwarder</td>
                <td><?php echo ($order['forwarder']); ?></td>
            </tr>
            <tr>
                <td>Freight</td>
                <td>$<?php echo number_format($order['freight'],2); ?></td>
            </tr>
            <tr>
                <td>Shipping Port</td>
                <td><?php echo ($order['port']); ?></td>
            </tr>
            <tr>
                <td>Shipment Value</td>
                <td>$<?php echo number_format($order['value'],2); ?></td>
            </tr>
            <tr>
                <td>Shipping Date</td>
                <td><?php echo date("m/d/Y",strtotime($order['shipping_date'])); ?></td>
            </tr>
            <tr>
                <td>Arrival Date</td>
                <td><?php echo date("m/d/Y",strtotime($order['arrival_date'])); ?></td>
            </tr>
            <tr>
                <td>Payment Status</td>
                <td><?php echo ($order['payment_status']); ?></td>
            </tr>
            <tr>
                <td>Shipping Status</td>
                <td><?php echo ($order['shipping_status']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>

@stop


