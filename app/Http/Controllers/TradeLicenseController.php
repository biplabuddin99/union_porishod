<?php

namespace App\Http\Controllers;

use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\Thana;
use App\Models\TradeLicense;
use App\Models\Ward_no;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class TradeLicenseController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trade=TradeLicense::all();
        return view('trade_license.index',compact('trade'));
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
        return view('trade_license.create',compact('division','district','thana','ward'));
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
            $trade=new TradeLicense();
            $trade->business_name=$request->business_name;
            $trade->proprietor_name=$request->proprietor_name;
            $trade->father_husband=$request->father_husband;
            $trade->estimated_price=$request->estimated_price;
            $trade->phone=$request->phone;
            $trade->date=$request->date;
            $trade->financial_year=$request->financial_year;
            $trade->organization_details=$request->organization_details;
            $trade->institution_address=$request->institution_address;
            $trade->id_no=$request->id_no;
            $trade->earned_free=$request->earned_free;
            $trade->village_road=$request->village_road;
            $trade->post_office=$request->post_office;
            $trade->thana_id=$request->thana_id;
            $trade->division_id=$request->division_id;
            $trade->ward_no_id=$request->ward_no_id;
            $trade->district_id=$request->district_id;

            if($request->has('image'))
            $trade->image=$this->resizeImage($request->image,'uploads/trade_license',true,200,200,false);
         if($request->has('id_no_img'))
            $trade->id_no_img=$this->resizeImage($request->id_no_img,'uploads/trade_license',true,200,200,false);
            $trade->status=1;
            if($trade->save()){
                Toastr::success('ট্রেড লাইসেন্স সফলভাবে তৈরি করা হয়েছে !!');
                return redirect()->route(currentUser().'.trade.index');
            }else{
                Toastr::info('আবার চেষ্টা করুন!');
                return redirect()->back();
                }

        } catch (Exception $e) {
            Toastr::info('আবার চেষ্টা করুন!');
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TradeLicense  $tradeLicense
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trade=TradeLicense::findOrFail(encryptor('decrypt',$id));
        return view('trade_license.show_print_preview',compact('trade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TradeLicense  $tradeLicense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division=Division::all();
        $district=District::all();
        $thana=Thana::all();
        $ward=Ward_no::all();
        $trade=TradeLicense::findOrFail(encryptor('decrypt',$id));
        return view('trade_license.edit',compact('trade','division','district','thana','ward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TradeLicense  $tradeLicense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try {
            $trade=TradeLicense::findOrFail(encryptor('decrypt',$id));;
            $trade->business_name=$request->business_name;
            $trade->proprietor_name=$request->proprietor_name;
            $trade->father_husband=$request->father_husband;
            $trade->estimated_price=$request->estimated_price;
            $trade->phone=$request->phone;
            $trade->date=$request->date;
            $trade->financial_year=$request->financial_year;
            $trade->organization_details=$request->organization_details;
            $trade->institution_address=$request->institution_address;
            $trade->id_no=$request->id_no;
            $trade->earned_free=$request->earned_free;
            $trade->village_road=$request->village_road;
            $trade->post_office=$request->post_office;
            $trade->thana_id=$request->thana_id;
            $trade->division_id=$request->division_id;
            $trade->ward_no_id=$request->ward_no_id;
            $trade->district_id=$request->district_id;

            if($request->has('image'))
            $trade->image=$this->resizeImage($request->image,'uploads/trade_license',true,200,200,false);
         if($request->has('id_no_img'))
            $trade->id_no_img=$this->resizeImage($request->id_no_img,'uploads/trade_license',true,200,200,false);
            $trade->status=1;
            if($trade->save()){
                Toastr::success('ট্রেড লাইসেন্স সফলভাবে আপডেট করা হয়েছে !!');
                return redirect()->route(currentUser().'.trade.index');
            }else{
                Toastr::info('আবার চেষ্টা করুন!');
                return redirect()->back();
                }

        } catch (Exception $e) {
            Toastr::info('আবার চেষ্টা করুন!');
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TradeLicense  $tradeLicense
     * @return \Illuminate\Http\Response
     */
    public function destroy(TradeLicense $tradeLicense)
    {
        //
    }
}
