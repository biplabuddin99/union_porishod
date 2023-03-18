<?php

namespace App\Http\Controllers;

use App\Models\OtherInformation;
use Illuminate\Http\Request;

class OtherInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $other=OtherInformation::all();
        return view('other_information.index',compact('other'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OtherInformation  $otherInformation
     * @return \Illuminate\Http\Response
     */
    public function show(OtherInformation $otherInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OtherInformation  $otherInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(OtherInformation $otherInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OtherInformation  $otherInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OtherInformation $otherInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OtherInformation  $otherInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(OtherInformation $otherInformation)
    {
        //
    }
}
