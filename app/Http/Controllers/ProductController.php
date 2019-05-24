<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('product');
    }

    public function create(Request $request)
    {
        $product = new Products;
        $product->name = $request->name;
        $product->size = $request->size;
        $product->gender = $request->gender;
        $product->quantity = $request->quantity;
        $product->discount = $request->discount;
        $product->price = $request->price;
        if($request->hasFile('image')){
            $fileName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/'), $fileName);
            $product->image =  $fileName;
        }    
        if($product->save()){
            return redirect()->to("/addProduct")->with('success',"product added successfully");
        }else{
            return redirect()->to("/addProduct")->with('failed',"something went wrong");
        }
    }

    public function destroy($id=NULL)
    {
        $data = Products::where('id', '=', $id)->delete();
       
        return redirect()->to("/")->with('success', 'delete successfully');
    }
}
