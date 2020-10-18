<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gallery;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;


class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = gallery::orderBy('id','desc')->get();
        return view('backend.pages.gallery.manage',compact('gallerys'));
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
        $gallery = new gallery();
      
     
        if( $request->image ){
            $image  = $request->file('image');
            $img    = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/gallery/' . $img);
            Image::make($image)->save($location);
            $gallery->image = $img;
        }
        
        $gallery->save();
        Toastr::success('Gallery Image Created');

        return redirect()->route('galleryShow');
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
    public function update(gallery $gallery,Request $request)
    {
        if( $request->image ){
            if( File::exists('images/gallery/'. $gallery->image) ){
                File::delete('images/gallery/'. $gallery->image);
            }
            $image  = $request->file('image');
            $img    = time() .Str::random(12). '.' . $image->getClientOriginalExtension();
            $location = public_path('images/gallery/' . $img);
            Image::make($image)->save($location);
            $gallery->image = $img;
        }
        $gallery->save();
        Toastr::success('Image Updated');
        return redirect()->route('galleryShow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        if( File::exists('images/gallery/'. $gallery->image) ){
            File::delete('images/gallery/'. $gallery->image);
        }
        $gallery->delete();
        Toastr::error('gallery Deleted');
        return redirect()->route('galleryShow');
    }
}
