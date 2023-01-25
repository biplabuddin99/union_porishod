<?php

namespace App\Http\Controllers;

use App\Models\DisabilityCertificate;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Thana;
use App\Models\Ward_no;
use Illuminate\Http\Request;

class DisabilityCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district=District::all();
        $thana=Thana::all();
        $ward=Ward_no::all();
        return view('disability.create',compact('district','thana','ward'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DisabilityCertificate  $disabilityCertificate
     * @return \Illuminate\Http\Response
     */
    public function show(DisabilityCertificate $disabilityCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DisabilityCertificate  $disabilityCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(DisabilityCertificate $disabilityCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DisabilityCertificate  $disabilityCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisabilityCertificate $disabilityCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DisabilityCertificate  $disabilityCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisabilityCertificate $disabilityCertificate)
    {
        //
    }
}
