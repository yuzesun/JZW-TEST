<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;

class OrderController extends Controller
{

    public function index()
    {
        //$query = Request::get('q');
        //if ($query)
        //{
        //    $orders = Order::where('po','LIKE',"%$query%")->get();

        //}
        //else
        //{
        //    $orders=Order::all();
        //}

        $orders=Order::all();
        return view('orders.index',compact('orders'));
    }




    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
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

}
