<?php

namespace App\Http\Controllers;

use App\Month;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $months = Month::OrderBy('id','Desc')->get();
        return view('Admin.Month.Index' , compact('months'));
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
        //
        $month = new Month();
            $month->name = $request->get('name');
            $month->month = $request->get('month');
            $month->year = $request->get('year');

            $month->save();

            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function show(Month $month)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function edit(Month $month)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Month $month)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Month  $month
     * @return \Illuminate\Http\Response
     */
    public function destroy(Month $month)
    {
        //
    }
}
