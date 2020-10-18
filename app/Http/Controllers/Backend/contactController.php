<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\contact;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = contact::orderBy('id','desc')->get();
        return view('backend.pages.contact.manage',compact('contacts'));
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
        $contact = new contact();
        $contact->address=$request->address;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->website=$request->website;
        $contact->facebook=$request->facebook;
        $contact->twitter=$request->twitter;
        $contact->instagram	=$request->instagram;
        $contact->youtube	=$request->youtube;

        $contact->save();
        Toastr::success('contact Created');

        return redirect()->route('contactShow');

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
    public function update(contact $contact,Request $request)
    {
        $contact->address=$request->address;
        $contact->phone=$request->phone;
        $contact->email=$request->email;
        $contact->website=$request->website;
        $contact->facebook=$request->facebook;
        $contact->twitter=$request->twitter;
        $contact->instagram	=$request->instagram;
        $contact->youtube	=$request->youtube;

        $contact->save();
        Toastr::success('contact Created');

        return redirect()->route('contactShow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        $contact->delete();
        Toastr::error('contact Deleted');
        return redirect()->route('contactShow');
    }
}
