<?php

namespace App\Http\Controllers;

use App\Models\CitizenCertificate;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\Thana;
use App\Models\Ward_no;
use Exception;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CitizenCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizen=CitizenCertificate::all();
        return view('citizen_certificate.index',compact('citizen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $division=Division::all();
        $district=District::all();
        $thana=Thana::all();
        $ward=Ward_no::all();
        return view('citizen_certificate.create',compact('division','district','thana','ward'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $citizen=new CitizenCertificate();
            $citizen->person_name=$request->person_name;
            $citizen->father=$request->father;
            $citizen->husband=$request->husband;
            $citizen->mother=$request->mother;
            $citizen->postoffice=$request->postoffice;
            $citizen->division_id=$request->division_id;
            $citizen->thana_id=$request->thana_id;
            $citizen->village=$request->village;
            $citizen->ward_no_id=$request->ward_no_id;
            $citizen->district_id=$request->district_id;
            $citizen->status=1;
            if($citizen->save()){
                Toastr::success('');
                return redirect()->route(currentUser().'.citizen.index');
            }else{
                Toastr::info('Please try Again!');
                return redirect()->back();
                }

        } catch (Exception $e) {
            Toastr::info('Please try Again!');
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CitizenCertificate  $citizenCertificate
     * @return \Illuminate\Http\Response
     */
    public function show(CitizenCertificate $citizenCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CitizenCertificate  $citizenCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division=Division::all();
        $district=District::all();
        $thana=Thana::all();
        $ward=Ward_no::all();
        $citizen=CitizenCertificate::findOrFail(encryptor('decrypt',$id));
        return view('citizen_certificate.edit',compact('citizen','division','district','thana','ward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CitizenCertificate  $citizenCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $citizen=CitizenCertificate::findOrFail(encryptor('decrypt',$id));
            $citizen->person_name=$request->person_name;
            $citizen->father=$request->father;
            $citizen->husband=$request->husband;
            $citizen->mother=$request->mother;
            $citizen->postoffice=$request->postoffice;
            $citizen->division_id=$request->division_id;
            $citizen->thana_id=$request->thana_id;
            $citizen->village=$request->village;
            $citizen->ward_no_id=$request->ward_no_id;
            $citizen->district_id=$request->district_id;
            $citizen->status=1;
            if($citizen->save()){
                Toastr::success('');
                return redirect()->route(currentUser().'.citizen.index');
            }else{
                Toastr::info('Please try Again!');
                return redirect()->back();
                }

        } catch (Exception $e) {
            Toastr::info('Please try Again!');
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CitizenCertificate  $citizenCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(CitizenCertificate $citizenCertificate)
    {
        //
    }
}
