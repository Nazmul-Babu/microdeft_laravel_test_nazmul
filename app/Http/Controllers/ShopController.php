<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function ShowShop(){
        return view('Shop');
    }
    public function createShop(){
        $this->validate(request(),[
         'name'=>'required'
        ]);
        Shop::create([
           'name'=>request('name')
        ]);
        return redirect()->back();
    }
}
