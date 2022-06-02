<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use App\Models\categoryModel;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = productModel::get();
        $cat = categoryModel::get();
        $cartdata = Cart::where('user-id', Auth::user()->id)->where('phase', 0)->get();

        return view('dashboard', compact('data','cat','cartdata'));
    }
    public function dashdata($id)
    {
        $data = productModel::where('category',$id)->get();
        $cat = categoryModel::get();
        $cartdata = Cart::where('user-id', Auth::user()->id)->get();

        return view('dashboarddata', compact('data','cat','cartdata'));
    }
    public function cart()
    {

        $data = Cart::selectRaw('carts.id as cart_id, carts.quantity as client_quantity, product.quantity as store_quantity, product_image, description, category, price, size, status, barcode, color')->join('product', 'carts.product_id', '=', 'product.id')->where('phase', 0)->get();
        // dd($data);
        return view('cart', compact('data'));
    }
    
    public function salesreport()
    {
        $data = Cart::selectRaw('carts.id as cart_id, carts.quantity as client_quantity, product.quantity as store_quantity, product_image, description, category, price, size, status, barcode, color')->join('product', 'carts.product_id', '=', 'product.id')->where('phase', 1)->get();
        return view('salesreport',  compact('data'));
    }
    public function payment()
    {
        return view('payment');
    }
    public function cancelorder()
    {
        return view('cancelorder');
    }
    public function order()
    {
        return view('order');
    }
}
