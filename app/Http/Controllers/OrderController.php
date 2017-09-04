<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;



class OrderController extends Controller
{

    public function index()
    {
        $orders=order::orderBy('order_date', 'DESC')->paginate(5);

        return view('orders.index',compact('orders'));
    }


    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $order= new Order($request->all());
        $order->save();
        return redirect('orders');
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show',compact('order'));
    }

    public function edit($id)
    {
        $order=Order::find($id);
        return view('orders.edit',compact('order'));
    }

    public function update($id,Request $request)
    {

        $order= new Order($request->all());
        $order=Order::find($id);
        $order->update($request->all());
        return redirect('orders');
    }

    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect('orders');
    }

    public function searchOrder(Request $request) {
        $query = $request->q;
        $orders = Order::where('po', 'LIKE', "%$query%")->paginate(5);
        return view('orders.index',compact('orders'));

    }

    public function searchGeneralOrder(Request $request) {
        $query = $request->q;
        $orders = Order::where('po', '=', $query)->paginate(5);
        return view('orders.customer-order-search-results',compact('orders'));
    }

}
