<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;
use File;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function welcome(){
         $product = Product::orderBy('id','desc')->get();
         return view('welcome')->with('product',$product);
    }


    public function contact(){
        return view('contact');
    }

    public function index()
    {
        if(Auth::user()->type == 1){
        $user = User::orderBy('id','desc')->get();
        $product = Product::orderBy('id','desc')->get();
        return view('home')->with('user',$user)->with('product',$product);
        }
        else{
            return back();
        }
    }
    public function index2()
    {
       if(Auth::user()->type == 2){
           return view('home2');
        }
        else{
            return back();
        }
    }
}
