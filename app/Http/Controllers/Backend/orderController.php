<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = order::orderBy('id','desc')->where('order_status',1)->get();
        return view('backend.pages.history.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirmOrder(order $order, Request $request)
    {
        $order->order_status= 2;
        $order->save();
        $request->session()->flash('confirmed','Order Confirmed');
        return redirect()->route('pending.show');
    }

    //confirmed order start
    public function confirmed(){
        $orders = order::orderBy('id','desc')->where('order_status',2)->get();
        return view('backend.pages.history.confirmed.index',compact('orders'));
    }

     //confirmed order start
     public function delivered (){
        $orders = order::orderBy('id','desc')->where('order_status',3)->get();
        return view('backend.pages.history.delivered.index',compact('orders'));
    }
    
    
    public function deliveredOrder(order $order, Request $request)
    {
        $order->order_status= 3;
        $order->save();
        $request->session()->flash('delivered','Order Confirmed');
        return redirect()->route('pending.show');
    }


     //order cancelled
     public function cancel(){
        $orders = order::orderBy('id','desc')->where('order_status',4)->get();
        return view('backend.pages.history.cancel.index',compact('orders'));
    }

    public function cancelledOrder(order $order, Request $request)
    {
        $order->order_status= 4;
        $order->save();
        $request->session()->flash('cancelled','Order Confirmed');
        return redirect()->route('pending.show');
    }

    
}
