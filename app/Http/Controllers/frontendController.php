<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlaceMail;
use App\Models\menu;
use App\Models\order;
use App\Models\orderItem;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Brian2694\Toastr\Facades\Toastr;
use App\Exports\ReportExport;
use Carbon\Carbon;
use Excel;



class frontendController extends Controller
{
    public function contact()
    {
        return view('frontend.contact');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function index()
    {
        return view('frontend.index');
    }

    public function menu()
    {
        return view('frontend.menu');
    }


    public function addToCart(Request $request){
        $id = $request->id;

        $menu = menu::find($id);

        
        $cart = [
            'id' => $menu->id,
            'image' => $menu->image,
            'name' => $menu->name,  
            'qty' => 1,
            'price' => $menu->price,
            'total' => $menu->price,
        ];

        $newCart = [];
        $ex = false;
        if( $request->session()->get('cart') ):
            $session_cart = $request->session()->get('cart');

            foreach( $session_cart as $single_cart ):
                if( $single_cart['id'] == $cart['id'] ):
                    $single_cart['qty']++;
                    $single_cart['total'] = $single_cart['price'] * $single_cart['qty'];
                    $ex = true;
                endif;

                array_push($newCart, $single_cart);
            endforeach;

            if( !$ex ):
                array_push($newCart,$cart);

            endif;

        else:
            array_push($newCart,$cart);
        endif;

        $request->session()->put('cart', $newCart);

        return $this->cartitem($request);

    }   

    public function cartitem(Request $request){
        $cart = $request->session()->get('cart') or null;
        return $cart;
    }


    public function delete_cart_item(Request $request, $id){
        $cart = $this->cartitem($request) or Null;

        $delete_id = $id;
        $newCart = [];
        if($cart){
            foreach($cart as $single_cart){
                if($single_cart['id'] != $delete_id){
                    array_push($newCart, $single_cart);
                }
            }
        }

        $request->session()->put('cart', $newCart);

        return $this->cartitem($request);
    }



    public function checkout(Request $request){
        $cart = $this->cartitem($request) or null;

        $order = new order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->total_price = 0;

        if($order->save()){
            foreach($cart as $cart_item){
                $item = new orderItem();
                $item->item = $cart_item['name'];
                $item->price = $cart_item['price'];
                $item->qty = $cart_item['qty'];
                $item->total = $cart_item['total'];
                $item->image = $cart_item['image'];
                $item->order()->associate($order);
                $order->total_price += $item->total;
                if($item->save()){
                    $order->save();
                }
            }
        }

        Mail::to($order->email)->send(new OrderPlaceMail($order,'Your order has been placed'));
        Mail::to('test@gmail.com')->send(new OrderPlaceMail($order,'Order placed'));
        
        Toastr::success('Order Placed,We will call you soon');
        return redirect()->route('menu');
    }
    
    
    public function export(){
        $data = order::whereDate('updated_at', Carbon::today())->where("order_status", 3)->get();
 
        $export = new ReportExport();
        return Excel::download($export->getDownloadByQuery($data), 'Todaysreport - '.Carbon::today()->toDateString().'.csv');


    }

    public function exportToDateFromDate(Request $request){
        $data = order::whereBetween('updated_at', [Carbon::parse($request->from),Carbon::parse($request->to)->addDay()])->orderBy('id','desc')->get();

        $export = new ReportExport();
        return Excel::download($export->getDownloadByQuery($data), 'DayWiseReport - '.Carbon::parse($request->from)->toDateString().' - '.Carbon::parse($request->to)->toDateString().'.csv');


    }

}
