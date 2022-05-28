<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel; 

class ProductController extends Controller
{
   public function save(Request $Request){
        $vallidator = \Validator::make($request->all(),[
            'product_name'=>'required|string|unique:propducs',
            'pruduct_image'=>'required|image'
        ]);

        if(!$validator->passes()){
            return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        }else{

        }
    

   }
}
