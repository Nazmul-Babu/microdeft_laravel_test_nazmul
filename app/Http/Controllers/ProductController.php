<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowProduct(){
        return view('Products');
    }
    public function CreateProduct(){
        $this->validate(request(),[
            'name'=>'required',
            'price'=>'required',
            'image'=>'required|image',
        ]);

        $imageExtension=request()->file('image')->extension();
        $imageName='product'.'_'.uniqid().'_'.$imageExtension;
        request()->file('image')->move('product_image')
        Product::create([
            'name'=>request('name'),

        ])
    }
}
