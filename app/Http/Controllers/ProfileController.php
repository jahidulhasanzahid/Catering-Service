<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use File;
use App\Cart;
use App\User;
use App\Order;
use App\Product;
use DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){

    	$orders = DB::table('carts')
                  ->join('orders','carts.order_id','=','orders.id')
                  ->join('users','carts.user_id','=','users.id')
                  ->join('products','carts.product_id','=','products.id')
                  ->select('orders.*','products.*')
                  ->get();

    	return view('profile',compact('orders'));
    }
}
