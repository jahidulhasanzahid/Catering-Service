<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Product;
use Image;
use File;

class ProductController extends Controller
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


    public function ProductStore(Request $request){
    	$this->validate($request, [
      'shopName' => 'required',
      'foodItemName' => 'required',
      'category'	=> 'required',
      'image'  => 'required',
      'foodPrice' => 'required',
      'foodDetails' => 'required',
      
	    ],
	    [
	      'shopName.required'  => 'Please Provide a Shop Name',
	      'category.required'	=> 'Please Select a category',
	      'foodItemName.required'  => 'Please Give a Food Item Name',
	      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
	      'foodPrice.required'  => 'Please Give a Food Price',
	      'foodDetails.required'  => 'Please Give a Description',
	      
	    ]);

	    $product = new Product();
	    $product->shopName = $request->shopName;
	    $product->category = $request->category;
	    $product->foodItemName = $request->foodItemName;
	    
	    
	    //insert images also
	    if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $img = time() . '.'. $image->getClientOriginalExtension();
	        $location = public_path('images/product/' .$img);
	        Image::make($image)->save($location);
	        $product->image = $img;
	    }
	    
	    $product->foodPrice = $request->shopName;
	    $product->foodDetails = $request->shopName;
	    $product->save();

	    session()->flash('success', 'A new Food Item has added successfully !!');
	    return back();
	    }

}
