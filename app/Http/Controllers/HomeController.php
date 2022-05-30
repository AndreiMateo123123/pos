<?php

namespace App\Http\Controllers;

use App\Models\productModel;
use App\Models\categoryModel;

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
        
        return view('dashboard', compact('data','cat'));
    }
    public function dashdata($id)
    {
        $data = productModel::where('category',$id)->get();
        $cat = categoryModel::get();
        return view('dashboarddata', compact('data','cat'));
    }
    
    public function salesreport()
    {
        return view('salesreport');
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
