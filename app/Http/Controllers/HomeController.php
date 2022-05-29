<?php

namespace App\Http\Controllers;

use App\Models\productModel;

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
        
        return view('dashboard', compact('data'));
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
}
