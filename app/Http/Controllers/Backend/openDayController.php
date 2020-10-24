<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hours;
use Brian2694\Toastr\Facades\Toastr;

class openDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours = hours::orderBy('id','desc')->get();
        return view('backend.pages.hours.manage',compact('hours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hour = new hours();
        $hour->day=$request->day;
        $hour->time=$request->time;
       
        $hour->save();
        Toastr::success('Hour Created');

        return redirect()->route('hoursShow');
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(hours $hour,Request $request)
    {
        $hour->day=$request->day;
        $hour->time=$request->time;
       
        $hour->save();
        Toastr::success('Hour Updated');

        return redirect()->route('hoursShow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(hours $hours)
    {
        $hours->delete();
        Toastr::error('hour Deleted');
        return redirect()->route('hoursShow');
    }
}
