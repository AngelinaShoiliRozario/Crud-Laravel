<?php

namespace App\Http\Controllers;

use App\People;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PeopleController extends Controller
{
  public function UserShow()
  { 
    $product = Products::all();
    return view('UserShow')->with('allProducts', $product);
  }
  public function Save(Request $r)
  { 
    People::create([
      'name' => $r->name,
      'email' => $r->email,
      'password' => $r->password,
      'isAdmin' => $r->isAdmin,
    ]);
    return redirect()->back();
  }
  public function CheckRole(Request $request)
  { 

    $selected = People::where('email',$request->email)->first();
    //dd($selected);
    if($selected){
      
      if($selected->password == $request->password){
      Session::put('LoginUser',$selected->name);
      if($selected->isAdmin=='1'){
        Session::put('role','Admin');
      }else{
        Session::put('role','User');
      }
      return redirect()->back();
      }else{
        return redirect()->back()->with('failed','Please Enter correct Password');
      }
    }else{
      return redirect()->back()->with('failed','Please Enter correct email address');
    }  
  }
}
