<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
    public function index()
    {
        if(Auth::user()->type == 1){
           return view('home');
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
