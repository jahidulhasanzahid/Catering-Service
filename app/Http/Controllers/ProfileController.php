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
use App\Userinfo;

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



    public function profileupdate(Request $request){
          $val = DB::table('userinfos')->where('userID',Auth::User()->id)->get();

            if (isset($val)) {
              $updatePro = DB::table('userinfos')
                  ->where('userID', Auth::user()->id)
                  ->update(['phone' => $request->phone,'shopName' => $request->shopName, 'address'=>$request->address,'foodTypeOne'=> $request->foodItemOne,'foodTypeTwo' =>$request->foodItemTwo, 'foodTypeThree' =>$request->foodItemThree, 'foodTypeFour' =>$request->foodItemFour, 'foodTypeFive' =>$request->foodItemFive]);
            }
            else{
            $data = new Userinfo();
            $data->userID = Auth::user()->id;
            $data->phone = $request->phone;
            $data->shopName = $request->shopName;
            $data->address = $request->address;
            $data->foodTypeOne = $request->foodItemOne;
            $data->foodTypeTwo = $request->foodItemTwo;
            $data->foodTypeThree = $request->foodItemThree;
            $data->foodTypeFour = $request->foodItemFour;
            $data->foodTypeFive = $request->foodItemFive;
          
            $data->save();
        }
            session()->flash('success', 'Your Profile Update successfully !!');
            return back();
    }
}
