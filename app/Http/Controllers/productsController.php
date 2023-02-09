<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productsController extends Controller
{
    public function index(){
       $products=products::all(); 
        return view('other/products',[
            'products'=> $products,
        ]);
    }
    public function myproducts(){
        return view('other/myproducts');
     }
    public function userlist(){
        $userlist=users::all(); 
         return view('admin/userlist',[
             'userlist'=> $userlist,
         ]);
     }
     public function insert(Request $request){
        $products = new products();
        if($request->hasFile('back_side_image'))
        {

            $file = $request->file('back_side_image');
            $file = $request->file('front_side_image');
            $file = $request->file('other_side_image');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('images/products'.$filename);
            $products->back_side_image;
            $products->other_side_image;
            $products->product_location;
        }

        $products->product_name = $request -> input('product_name');
        $products->product_location = $request -> input('product_location');
        $products->seller_name = $request -> input('seller_name');
        $products->save();
        return redirect('/products')->with('message',"product added succesful");
       // return redirect('/products')->back()->with('message', 'IT WORKS!');
     }
}
