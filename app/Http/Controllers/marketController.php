<?php

namespace App\Http\Controllers;

use App\Models\markets;
use Illuminate\Http\Request;
use App\Models\users;

class marketController extends Controller
{
    public function index(){
        $markets=markets::all(); 
         return view('other/markets',[
             'markets'=> $markets,
         ]);
     }
     public function userlist(){
         $userlist=users::all(); 
          return view('admin/userlist',[
              'userlist'=> $userlist,
          ]);
      }
      public function insert(Request $request){
         $markets = new markets();
         $markets->customer_name = $request -> input('product_name');
         $markets->location = $request -> input('location');
         $markets->product_name = $request -> input('customer_name');
         $markets->units = $request -> input('units');
         $markets->save();
         return redirect('other/markets')->with('status',"product added succesful");
      }
}
