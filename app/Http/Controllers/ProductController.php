<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel; 
use App\Models\categoryModel;

class ProductController extends Controller
{
    public function product()
    {
        $data = categoryModel::get();
        $product = productModel::get();
        return view('product', compact('data','product'));
    }
    public function add_category($name){
        categoryModel::insert([
            'name' => $name,
        ]);
    }

    public function add_product(Request $request){
        $imagetext = "N/A";
        // dd($request->all());
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('black/product'), $filename);
            $imagetext = $filename;
        }
        productModel::insert([
            'product_image' => $imagetext,
            'description' => $request->desc,
            'category' => $request->category,
            'size' => $request->size,
            'status' => $request->status,
            'barcode' => $request->barcode,
            'price' =>$request->price,

        ]);
        return back();
    }
 //   public function delete_function($id)
  //  {
      //      DB:delete('delete from product where id = ?', [$id]
       //     "return" redirect('product')->with('success','Data_Deleted');
 //   } 
}
