<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('backend.product.allproduct',compact('products'));
    }
    public function addproduct(){

        return view('backend.product.addproduct');
    }
    public function storeproduct(Request $request){
        $product = new product();
        if(isset($request->image)){
            $filename = time().'.'.$request->image->extension();
            $filepath = public_path('uploads/products');
            $request->image->move($filepath, $filename);
            $product->image = $filename;
          
            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->save();
            return redirect()->back();
        }

    }
        public function updateproduct(Request $request,$id){
            $product = product::find($id);
            if(isset($request->image)){
                $filename = time().'.'.$request->image->extension();
                $filepath = public_path('uploads/products');
                $request->image->move($filepath, $filename);
                $product->image = $filename;
            $product->name = $request->name;
            $product->price = $request->price;
            $product->description = $request->description;
            $product->save();
            return redirect()->back();
        }

        }

        
        public function editproduct($id){
            $products = product::find($id);
            return view('backend.product.editproduct',compact('products'));
        }
        public function deleteproduct($id){
            $product = product::find($id);
            $product->delete();
            return redirect()->back();
        }



      
   
        
    
}
