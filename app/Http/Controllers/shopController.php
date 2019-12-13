<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class shopController extends Controller
{
    public function shop(){
    	return view('shops');
    }
}
