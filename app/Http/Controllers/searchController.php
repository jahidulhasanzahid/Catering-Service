<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use Auth;
use DB;

class searchController extends Controller
{
    public function search(Request $request)
    {
      	$search = $request->search;

        $info = Product::orWhere('shopName', 'like', '%'.$search.'%')
        ->orWhere('category', 'like', '%'.$search.'%')
        ->orWhere('foodItemName', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->get();
        return view('search', compact('search', 'info'));
    }
}
