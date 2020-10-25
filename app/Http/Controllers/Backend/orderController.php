<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;
use  App\Mail\CancelOrder;
use  App\Mail\ConfirmOrder;
use  App\Mail\DeliveredOrder;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

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

    public function showInvoice(order $order){
        return view('backend.pages.history.invoice',compact('order'));
    }
    public function showConfirmedInvoice(order $order){
        return view('backend.pages.history.confirmed.invoice',compact('order'));
    }
    public function showCancelInvoice(order $order){
        return view('backend.pages.history.cancel.invoice',compact('order'));
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
        Mail::to($order->email)->send(new ConfirmOrder($order, 'Your order is confirmed'));
        Mail::to('test@gmail.com')->send(new ConfirmOrder($order, 'Order Confirmed'));
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
        Mail::to($order->email)->send(new DeliveredOrder($order,'Your order is delivered'));
        Mail::to('test@gmail.com')->send(new DeliveredOrder($order,'Order delivered'));
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
        Mail::to($order->email)->send(new CancelOrder($order,'Your order has been cancelled'));
        Mail::to('test@gmail.com')->send(new CancelOrder($order,'Order cancelled'));

        $request->session()->flash('cancelled','Order Confirmed');
        return redirect()->route('pending.show');
    }

    public function showDeliveredInvoice(order $order){
        return view('backend.pages.history.delivered.invoice',compact('order'));
    }
}
