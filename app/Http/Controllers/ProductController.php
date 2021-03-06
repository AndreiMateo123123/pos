<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productModel; 
use App\Models\categoryModel;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

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
            'color' =>$request->color,
            'quantity' =>$request->quantity,

        ]);
        return back();
    }
    public function addtocart($id){
        Cart::insert([
            'product_id' => $id,
            'quantity' => 1,
            'user-id' => Auth::user()->id,
            'phase' => 0,

        ]);
        return back();
    }
    public function removetocart($id){
        Cart::where('id', $id)->delete();
        return back();
    }

    public function payment(Request $request){
        $payment = $request->payment;
        $data = Cart::selectRaw('carts.id as cart_id, product_id, carts.quantity as client_quantity, product.quantity as store_quantity, product_image, description, category, price, size, status, barcode, color')->join('product', 'carts.product_id', '=', 'product.id')->where('phase', 0)->get();
        
        foreach($data as $item){
            Cart::where('id',$item->cart_id)->update(['phase' => 1]);
            $getproduct = productModel::where('id', $item->product_id)->first();
            $newdata = $getproduct->quantity - $item->client_quantity;
            productModel::where('id', $item->product_id)->update(['quantity' => $newdata]);
        }
        return view('reciept',compact('data','payment'));
    }
    public function changequantity($id, $val){
        Cart::where('id',$id)->update(['quantity' => $val,]);

        return 'success';
    }

    // public function increaseQuantity($id)
    // {
    //     $this->(event: 'increaseQuantity',$id);
    // }

    // public function increaseQuantity($id,$qty) {
    //     if ($qty !=1) {
    //         Cart::where ('product_id','$id')->updated(['qty'=>$qty -1]);
    //     }else{
    //         Cart::where('product_id',$id)->delete();
    //     }
    //     $this->emit(event: 'updateCart');
    // }
 //   public function delete_function($id)
  //  {
      //      DB:delete('delete from product where id = ?', [$id]
       //     "return" redirect('product')->with('success','Data_Deleted');
 //   } 
}
