<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\menu;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = menu::orderBy('id','asc')->get();
        return view('backend.pages.menu.manage',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new menu();
        $menu->category_id=$request->category_id;
        $menu->name=$request->name;
        $menu->description=$request->description;
        $menu->price=$request->price;
        if( $request->image ){
            $image  = $request->file('image');
            $img    = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/menu/' . $img);
            Image::make($image)->save($location);
            $menu->image = $img;
        }
        $menu->save();
        Toastr::success('Banner Image Created');

        return redirect()->route('menuShow');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(menu $menu,Request $request)
    {
        $menu->category_id=$request->category_id;
        $menu->name=$request->name;
        $menu->description=$request->description;
        $menu->price=$request->price;

        if( $request->image ){
            if( File::exists('images/menu/'. $menu->image) ){
                File::delete('images/menu/'. $menu->image);
            }
            $image  = $request->file('image');
            $img    = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/menu/' . $img);
            Image::make($image)->save($location);
            $menu->image = $img;
        }

        $menu->save();
        Toastr::success('Menu Updated');
        return redirect()->route('menuShow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(menu $menu)
    {
        if( File::exists('images/menu/'. $menu->image) ){
            File::delete('images/menu/'. $menu->image);
        }
        $menu->delete();
        Toastr::error('menu Deleted');
        return redirect()->route('menuShow');
    }
}
