<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;

class shopController extends Controller
{
    public function shop(){

    	$shops = DB::table('userinfos')->get();
    	return view('shops',compact('shops'));
    }
}
