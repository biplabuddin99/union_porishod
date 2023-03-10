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
use App\Models\All_onlineApplications;
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
        $trade=TradeLicense::where('status',0)->get();
        return view('trade_license.index',compact('trade'));
    }

    public function profile()
    {
        $trade=TradeLicense::where('status',1)->get();
        return view('trade_license.profile',compact('trade'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $trade=TradeLicense::findOrFail(encryptor('decrypt',$id));
            $trade->status=$request->status;
            $trade->save();
            Toastr::success('প্রোপাইলে যুক্ত করা হয়েছে!');
            return redirect(route(currentUser().'.trade.index'));
            // dd($request);
        }
        catch (Exception $e){
            return back()->withInput();

        }

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
            $all= All_onlineApplications::where('id',$request->all_aplication)->first();
            // $trade->form_no=$request->form_no;
            $trade->holding_date=$all->holding_date;
            $trade->head_household=$all->head_household;
            $trade->husband_wife=$all->husband_wife;
            $trade->mother_name=$all->mother_name;
            $trade->gender=$all->gender;
            $trade->birth_date=$all->birth_date;
            $trade->voter_id_no=$all->voter_id_no;
            $trade->birth_registration_id=$all->birth_registration_id;
            $trade->religion=$all->religion;
            $trade->phone=$all->phone;
            $trade->edu_qual=$all->edu_qual;
            $trade->email=$all->email;
            $trade->source_income=$all->source_income;
            $trade->marital_status=$all->marital_status;
            $trade->internet_connection=$all->internet_connection;
            $trade->tube_well=$all->tube_well;
            $trade->disline_connection=$all->disline_connection;
            $trade->paved_bathroom=$all->paved_bathroom;
            $trade->arsenic_free=$all->arsenic_free;
            $Govt_fac = explode(',', $all->government_facilities);
            $trade->government_facilities=implode(',',$Govt_fac);

             // ট্রেড লাইসেন্স আবেদনের অন্যান্য তথ্য
            $trade->business_name=$request->business_name;
            $trade->owner_proprietor=$request->owner_proprietor;
            $trade->father_husband=$request->father_husband;
            $trade->trade_license_renewal=$request->trade_license_renewal;
            $trade->business_organization_structure=$request->business_organization_structure;
            $trade->business_type=$request->business_type;
            $trade->trade_license_renewal_fee=$request->trade_license_renewal_fee;
            $trade->business_estimated_capital=$request->business_estimated_capital;
            $trade->annual_business_tax_levied=$request->annual_business_tax_levied;
            $trade->annual_business_tax_collected=$request->annual_business_tax_collected;
            $trade->annual_business_tax_due=$request->annual_business_tax_due;
            $trade->holding_tax_update=$request->holding_tax_update;
            $trade->vehicle_establishment_holding_no=$request->vehicle_establishment_holding_no;
            $trade->street_nm=$request->street_nm;
            $trade->village_name=$request->village_name;
            $trade->ward_no=$request->ward_no;
            $trade->name_union_parishad=$request->name_union_parishad;
            $trade->post_office=$request->post_office;
            $trade->upazila_thana=$request->upazila_thana;
            $trade->district=$request->district;
            $trade->status=0;

            if($request->has('image'))
            $trade->image=$this->resizeImage($request->image,'uploads/trade_license/image',true,300,300,false);

            if($request->has('nid_image'))
            $trade->nid_image=$this->resizeImage($request->nid_image,'uploads/trade_license/nid',true,500,500,false);

            if($request->has('image_holding'))
            $trade->image_holding=$this->resizeImage($request->image_holding,'uploads/trade_license/holding',true,500,700,false);
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
        $Govt_fac = explode(',', $trade->government_facilities);
        return view('trade_license.edit',compact('trade','Govt_fac','division','district','thana','ward'));
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
            $trade->holding_date=$request->holding_date;
            $trade->head_household=$request->head_household;
            $trade->husband_wife=$request->husband_wife;
            $trade->mother_name=$request->mother_name;
            $trade->gender=$request->gender;
            $trade->birth_date=$request->birth_date;
            $trade->voter_id_no=$request->voter_id_no;
            $trade->birth_registration_id=$request->birth_registration_id;
            $trade->religion=$request->religion;
            $trade->phone=$request->phone;
            $trade->edu_qual=$request->edu_qual;
            $trade->email=$request->email;
            $trade->source_income=$request->source_income;
            $trade->marital_status=$request->marital_status;
            $trade->internet_connection=$request->internet_connection;
            $trade->tube_well=$request->tube_well;
            $trade->disline_connection=$request->disline_connection;
            $trade->paved_bathroom=$request->paved_bathroom;
            $trade->arsenic_free=$request->arsenic_free;
            // $Govt_fac = explode(',', $request->government_facilities);
            $trade->government_facilities=implode(',',$request->government_facilities);

             // ট্রেড লাইসেন্স আবেদনের অন্যান্য তথ্য
            $trade->business_name=$request->business_name;
            $trade->owner_proprietor=$request->owner_proprietor;
            $trade->father_husband=$request->father_husband;
            $trade->trade_license_renewal=$request->trade_license_renewal;
            $trade->business_organization_structure=$request->business_organization_structure;
            $trade->business_type=$request->business_type;
            $trade->trade_license_renewal_fee=$request->trade_license_renewal_fee;
            $trade->business_estimated_capital=$request->business_estimated_capital;
            $trade->annual_business_tax_levied=$request->annual_business_tax_levied;
            $trade->annual_business_tax_collected=$request->annual_business_tax_collected;
            $trade->annual_business_tax_due=$request->annual_business_tax_due;
            $trade->holding_tax_update=$request->holding_tax_update;
            $trade->vehicle_establishment_holding_no=$request->vehicle_establishment_holding_no;
            $trade->street_nm=$request->street_nm;
            $trade->village_name=$request->village_name;
            $trade->ward_no=$request->ward_no;
            $trade->name_union_parishad=$request->name_union_parishad;
            $trade->post_office=$request->post_office;
            $trade->upazila_thana=$request->upazila_thana;
            $trade->district=$request->district;
            $trade->status=0;

            $path='uploads/trade_license/nid';
            $path1='uploads/trade_license/image';
            $path2='uploads/trade_license/holding';

            if($request->has('nid_image') && $request->nid_image)
            if($this->deleteImage($trade->nid_image,$path))
                $trade->nid_image=$this->resizeImage($request->nid_image,$path,true,200,200,false);

            if($request->has('image') && $request->image)
            if($this->deleteImage($trade->image,$path1))
                $trade->image=$this->resizeImage($request->image,$path1,true,200,200,false);

            if($request->has('image_holding') && $request->image_holding)
            if($this->deleteImage($trade->image_holding,$path2))
                $trade->image_holding=$this->resizeImage($request->image_holding,$path2,true,200,200,false);
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
