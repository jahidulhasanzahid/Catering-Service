<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Admin;
use DB;

class AdminController extends Controller
{
    public function __construct()
      {
        $this->middleware('auth:admin');
      }

    public function index(){
    	return view('backend.index');
    }


    public function userList(){
    	$users = User::where('status', 'pending')->where('type', '2')->orderBy('id','desc')->get();
    	return view('backend.user-list',compact('users'));
    }

    public function userListUpdate(Request $request, $id){

      $user = User::find($id);
      $user->status = 'Active';

      $user->save();

      session()->flash('success', 'User Active Now');
      return redirect()->back();
    }
    

    public function shoplist(){
      $shops = DB::table('userinfos')->get();
      return view('backend.shop-list',compact('shops'));
    }

     public function shoplistdelete($id)
    {
    
    $shop = Cart::find($id);
    if (!is_null($shop)) {
      $shop->delete();
    }else {
      return redirect()->route('admin.sholist');
    }
    session()->flash('success', 'Shop has deleted !!');
    return back();
    }


    public function messages(){
      $messagess = DB::table('contacts')->get();
      return view('backend.messages',compact('messagess'));
    }


}
