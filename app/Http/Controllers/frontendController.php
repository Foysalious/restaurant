<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;

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
}
