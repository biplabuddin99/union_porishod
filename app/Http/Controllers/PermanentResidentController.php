<?php

namespace App\Http\Controllers;

use App\Models\PermanentResident;
use Illuminate\Http\Request;
use App\Models\Ward_no;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use App\Models\MobileBank;
use App\Models\DigitalDevice;
use App\Models\EducationalQualification;
use App\Models\GovernmentFacility;
use App\Models\Profession;
use Exception;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class PermanentResidentController extends Controller
{
    use ImageHandleTraits;
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
        $mobile_bank=MobileBank::orderBy('created_at')->get();
        $digital_device=DigitalDevice::orderBy('created_at')->get();
        $edu_q=EducationalQualification::orderBy('created_at')->get();
        $gov_f=GovernmentFacility::orderBy('created_at')->get();
        $profession=Profession::orderBy('created_at')->get();
        return view('permanent_resident.create_page1',compact('edu_q','profession','gov_f','digital_device','mobile_bank'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $permanent=new PermanentResident;
            // $permanent->form_no=$request->form_no;
            $permanent->apply_date=Carbon::parse($request->apply_date)->format('Y-m-d');
            $permanent->applicant_name=$request->applicant_name;
            $permanent->father_name=$request->father_name;
            $permanent->mother_name=$request->mother_name;
            $permanent->husband_wife=$request->husband_wife;
            $permanent->birth_date=Carbon::parse($request->birth_date)->format('Y-m-d');
            $permanent->voter_id_no=$request->voter_id_no;
            $permanent->birth_registration_id=$request->birth_registration_id;
            $permanent->gender=$request->gender;
            $permanent->religion=$request->religion;
            $permanent->marital_status=$request->marital_status;
            $permanent->freedom_fighter=$request->freedom_fighter;
            $permanent->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $permanent->digital_devices=$request->digital_devices?implode(',',$request->digital_devices):'';
            $permanent->government_facilities=$request->government_facilities?implode(',',$request->government_facilities):'';
            $permanent->edu_qual=$request->edu_qual;
            $permanent->source_income=$request->source_income;
            $permanent->phone=$request->phone;
            $permanent->email=$request->email;
            $permanent->bank_acc=$request->bank_acc;
            $permanent->status=0;
            $permanent->created_by=currentUserId();
            $permanent->save();
            return redirect(route('charactersecondpart.form',Crypt::encrypt($permanent->id)));
        }catch (Exception $e){
            Toastr::success('দয়করে আবার চেষ্টা করুন!');
            return back()->withInput();
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermanentResident  $permanentResident
     * @return \Illuminate\Http\Response
     */
    public function show(PermanentResident $permanentResident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermanentResident  $permanentResident
     * @return \Illuminate\Http\Response
     */
    public function edit(PermanentResident $permanentResident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermanentResident  $permanentResident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PermanentResident $permanentResident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermanentResident  $permanentResident
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermanentResident $permanentResident)
    {
        //
    }
}
