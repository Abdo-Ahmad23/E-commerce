<?php

namespace App\Http\Controllers;

use App\AddProduct;
use App\Order;
use CreateAddProductsTable;
use Illuminate\Http\Request;
// use App\Http\Controllers\Auth;
// use Illuminate\Validation\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::all();
        // dd($orders);

    return view('order.index',compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $products=AddProduct::all();
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //validate
         $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:3',
            'address' => 'required|min:3',
            'location'=>'required',
            'amount'=>'required|numeric',


        ]);
        /// create
        session_start();
        $order = $request->all();
        $order['product_id']=$_SESSION['product_name'];
        Order::create($order);


        /// redirect
        return redirect(route('order.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:3',
            'address' => 'required|min:3',
            'location'=>'required',
            'amount'=>'required|numeric',
            'product_id'=>'numeric'

        ]);

        /// find
        $order = Order::find($id);

        /// update
        $updatedOrder = $request->all();
        $order->update($updatedOrder);

        /// redirect
        return redirect(route('order.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //find
        $order = Order::find($order->id);


        /// delete
        $order->delete();


        /// redirect
        return redirect(route('order.index'));
    }
}