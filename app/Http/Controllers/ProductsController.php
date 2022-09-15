<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
  //index
  public function index()
  {
    return view('Index');
  }


  // show products
  public function show()
  {
    $products = Products::all();
    return view('Show')->with("allProducts", $products);
  }
  public function UserShow()
  {
    $products = Products::all();
    return view('UserShow')->with("allProducts", $products);
  }


  public function insert()
  {
    return view('Insert');
  }




  public function store(Request $request)
  {
    // dump or die
    //dd($request);
    $validatedData = $request->validate([
      'id'=>'required|unique:products',
      'name' => 'required|max:255',
      'detail' => 'required',
    ]);
   // dd($validatedData);
    Products::create([
      'id' => $request->id,
      'name' => $request->name,
      'detail' => $request->detail
    ]);
    return redirect()->back();
    // return redirect('/');
  }


  public function delete($id)
  {
    // print_r($id);
    $f = Products::where('id', $id)->delete();
    echo "deleting the record.............";
    if ($f) {
      return redirect()->back();
    }
  }


  public function update($id)
  {
    $product = Products::where('id', $id)->first();
    // print_r($product);
    return view('Update')->with("product", $product);
  }



  public function update_by_id(Request $request, $id)
  {
    // dd($request);
    // echo $id;
    $product = Products::where('id', $id)->first();
    $product->name = $request->name;
    $product->detail = $request->detail;
    $product->save();
    return redirect('/show');
  }
  
}
