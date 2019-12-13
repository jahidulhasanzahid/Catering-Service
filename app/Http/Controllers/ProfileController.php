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
                  ->select('carts.user_id','carts.product_id','carts.product_quantity','carts.order_id','products.*','orders.*')
                  ->get();

      $infos = DB::table('userinfos')->where('UserID',Auth::User()->id)->get();
      $products = DB::table('products')->where('shop_id',Auth::user()->id)->get();
    	return view('profile',compact('orders','infos','products'));
    }



    public function profileupdate(Request $request){
          $userID = $request->userID;
          //dd($userID);
          $id = 0;
          $data = DB::table('userinfos')->where('userID',$userID)->get();
          foreach($data as $dd){
            $id = $dd->userID;
          }
          //dd($id);
          if (Auth::user()->id == $id) {
              $updatePro = DB::table('userinfos')
                  ->where('userID', Auth::user()->id)
                  ->update(['shopName' => $request->shopName,'address' => $request->address, 'phone'=>$request->phone,'foodTypeOne'=> $request->foodTypeOne,'foodTypeTwo' =>$request->foodTypeTwo, 'foodTypeThree' =>$request->foodTypeThree, 'foodTypeFour' =>$request->foodTypeFour, 'foodTypeFive' =>$request->foodTypeFive]);
            }
            else{

            $data = new Userinfo();
            $data->userID = Auth::user()->id;
            $data->shopName = $request->shopName;
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->foodTypeOne = $request->foodTypeOne;
            $data->foodTypeTwo = $request->foodTypeTwo;
            $data->foodTypeThree = $request->foodTypeThree;
            $data->foodTypeFour = $request->foodTypeFour;
            $data->foodTypeFive = $request->foodTypeFive;
          
            $data->save();

        }
      
            session()->flash('success', 'Your Profile Update successfully !!');
            return back();
    }
}
