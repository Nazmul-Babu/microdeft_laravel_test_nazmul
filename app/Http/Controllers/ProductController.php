<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProduct(){
        $product=Product::all();
        return view('Products',compact('product'));
    }
    public function CreateProduct(){
        $this->validate(request(),[
            'name'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);

        $imageExtension=request()->file('image')->extension();
        $imageName='product'.'_'.uniqid().'_'.$imageExtension;
        request()->file('image')->move('product_image');
        Product::create([
            'name'=>request('name'),
            'image'=>$imageName,
            'price'=>request('price'),

        ]);
        return redirect()->back();
    }
    public function editProduct($id){
        $product=Product::find($id);
        $product::update([
          
        ]);
    }
}
