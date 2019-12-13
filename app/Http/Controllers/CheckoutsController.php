<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use Auth;
use App\Product;
use App\Setting;

class CheckoutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkouts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
      'name'  => 'required',
      'phone_no'  => 'required',
      'shipping_address'  => 'required',
    ]);

    $order = new Order();

    $order->name = $request->name;
    $order->email = $request->email;
    $order->phone_no = $request->phone_no;
    $order->shipping_address = $request->shipping_address;
    $order->message = $request->message;
    $order->ip_address = request()->ip();
    $order->shop_id = $request->shop_id;
    if (Auth::check()) {
      $order->user_id = Auth::id();
    }
    $order->shop_id = $request->shop_id;
    $order->save();

    foreach (Cart::totalCarts() as $cart) {
      $cart->order_id = $order->id;
      $cart->save();
    }

    session()->flash('success', 'Your order has taken successfully !!! Please wait admin will soon confirm it.');
    return view('order-confirm');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
     
        $order = Order::find($id);
            if (!is_null($order)) {
              $order->delete();
            }else {
              return redirect()->route('profile');
            }
            session()->flash('success', 'Order has deleted !!');
            return back();
    }
}
