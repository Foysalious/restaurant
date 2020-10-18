<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Chef;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = Chef::orderBy('id','desc')->get();
        return view('backend.pages.chef.manage',compact('chefs'));
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
        $chef = new Chef();

        $chef->description = $request->description;
        $chef->name = $request->name;
        $chef->designation = $request->designation;
        
        if( $request->image ){
            $image  = $request->file('image');
            $img    = rand(0, 100) . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/chef/' . $img);
            Image::make($image)->save($location);
            $chef->image = $img;
        }
       
        $chef->save();
        Toastr::success('Chef Created');

        return redirect()->route('chefShow');
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
    public function update(Chef $chef,Request $request)
    {
        if( $request->image ){
            if( File::exists('images/chef/'. $chef->image) ){
                File::delete('images/chef/'. $chef->image);
            }
            $image  = $request->file('image');
            $img    = rand(0, 100) . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/chef/' . $img);
            Image::make($image)->save($location);
            $chef->image = $img;
        }

        $chef->name=$request->name;
        $chef->designation=$request->designation;
        $chef->description=$request->description;

        $chef->save();

        Toastr::success('Chef Updated');

        return redirect()->route('chefShow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        if( File::exists('images/chef/'. $chef->image) ){
            File::delete('images/chef/'. $chef->image);
        }
        $chef->delete();
        Toastr::error('chef Deleted');
        return redirect()->route('chefShow');
    }
}
