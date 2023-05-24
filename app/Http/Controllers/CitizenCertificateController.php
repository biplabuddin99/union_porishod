<?php

namespace App\Http\Controllers;

use App\Models\CitizenCertificate;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\Thana;
use App\Models\Ward_no;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use App\Models\MobileBank;
use App\Models\DigitalDevice;
use App\Models\EducationalQualification;
use App\Models\GovernmentFacility;
use App\Models\Profession;
use Exception;
use Illuminate\Http\Request;
use App\Models\All_onlineApplications;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class CitizenCertificateController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function primaryIndex($id)
    {
        $citizen=CitizenCertificate::where('id',$id)->first();
        $districts=District::where('id',$citizen->district_id)->select('id','name','name_bn')->first();
        $upazilas=Upazila::where('id',$citizen->upazila_id)->select('id','name','name_bn')->first();
        $unions=Union::where('id',$citizen->union_id)->select('id','name','name_bn')->first();
        $wards=Ward_no::select('id','ward_name','ward_name_bn')->first();
        $Mobile = explode(',', $citizen->mobile_bank);
        $Digital_devices = explode(',', $citizen->digital_devices);
        $Govt_fac = explode(',', $citizen->government_facilities);
        $Business_tax = explode(',', $citizen->business_taxes);
        return view('citizen_certificate.primary_index',compact('citizen','Mobile','Govt_fac','Digital_devices','Business_tax','districts','upazilas','unions','wards'));
    }

    public function index()
    {
        $citizen=CitizenCertificate::where('status',0)->get();
        return view('citizen_certificate.index',compact('citizen'));
    }

    public function profile()
    {
        $citizen=CitizenCertificate::where('status',1)->get();
        return view('citizen_certificate.profile',compact('citizen'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $citizen=CitizenCertificate::findOrFail(encryptor('decrypt',$id));
            $citizen->citizen_certificate_fee=$request->citizen_certificate_fee;
            $citizen->approval_date=$request->approval_date;
            $citizen->cancel_reason=$request->cancel_reason;
            $citizen->status=$request->cancel_reason==""?1:2;
            $citizen->save();
            Toastr::success('প্রোফাইলে যুক্ত করা হয়েছে!');
            return redirect(route(currentUser().'.citizen.index'));
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
        $mobile_bank=MobileBank::orderBy('created_at')->get();
        $digital_device=DigitalDevice::orderBy('created_at')->get();
        $edu_q=EducationalQualification::orderBy('created_at')->get();
        $gov_f=GovernmentFacility::orderBy('created_at')->get();
        $profession=Profession::orderBy('created_at')->get();
        return view('citizen_certificate.create_page1',compact('edu_q','profession','gov_f','digital_device','mobile_bank'));
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
            $citizen=new CitizenCertificate;
            // $citizen->form_no=$request->form_no;
            $citizen->apply_date=Carbon::parse($request->apply_date)->format('Y-m-d');
            $citizen->applicant_name=$request->applicant_name;
            $citizen->father_name=$request->father_name;
            $citizen->mother_name=$request->mother_name;
            $citizen->husband_wife=$request->husband_wife;
            $citizen->birth_date=Carbon::parse($request->birth_date)->format('Y-m-d');
            $citizen->voter_id_no=$request->voter_id_no;
            $citizen->birth_registration_id=$request->birth_registration_id;
            $citizen->gender=$request->gender;
            $citizen->religion=$request->religion;
            $citizen->marital_status=$request->marital_status;
            $citizen->freedom_fighter=$request->freedom_fighter;
            $citizen->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $citizen->digital_devices=$request->digital_devices?implode(',',$request->digital_devices):'';
            $citizen->government_facilities=$request->government_facilities?implode(',',$request->government_facilities):'';
            $citizen->edu_qual=$request->edu_qual;
            $citizen->source_income=$request->source_income;
            $citizen->phone=$request->phone;
            $citizen->email=$request->email;
            $citizen->bank_acc=$request->bank_acc;
            $citizen->status=0;
            $citizen->created_by=currentUserId();
            $citizen->save();
            return redirect(route('familysecondpart.form',Crypt::encrypt($citizen->id)));
        }catch (Exception $e){
            Toastr::success('দয়করে আবার চেষ্টা করুন!');
            return back()->withInput();
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CitizenCertificate  $citizenCertificate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citizen=CitizenCertificate::findOrFail(encryptor('decrypt',$id));
        return view('citizen_certificate.show',compact('citizen'));
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
        $Govt_fac = explode(',', $citizen->government_facilities);
        return view('citizen_certificate.edit',compact('citizen','Govt_fac','division','district','thana','ward'));
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
           // $citizen->form_no=$request->form_no;
           $citizen->holding_date=Carbon::parse($request->holding_date)->format('Y-m-d');
           $citizen->head_household=$request->head_household;
           $citizen->husband_wife=$request->husband_wife;
           $citizen->father_name=$request->father_name;
           $citizen->freedom_fighter=$request->freedom_fighter;
           $citizen->mother_name=$request->mother_name;
           $citizen->gender=$request->gender;
           $citizen->birth_date=$request->birth_date;
           $citizen->voter_id_no=$request->voter_id_no;
           $citizen->birth_registration_id=$request->birth_registration_id;
           $citizen->religion=$request->religion;
           $citizen->phone=$request->phone;
           $citizen->edu_qual=$request->edu_qual;
           $citizen->email=$request->email;
           $citizen->source_income=$request->source_income;
           $citizen->marital_status=$request->marital_status;
           $citizen->internet_connection=$request->internet_connection;
           $citizen->tube_well=$request->tube_well;
           $citizen->disline_connection=$request->disline_connection;
           $citizen->paved_bathroom=$request->paved_bathroom;
           $citizen->arsenic_free=$request->arsenic_free;
        //    $Govt_fac = explode(',', $all->government_facilities);
           $citizen->government_facilities=implode(',',$request->government_facilities);
           $citizen->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
           $citizen->digital_devices=$request->digital_devices?implode(',',$request->digital_devices):'';

           // নাগরিক ‍সনদ আবেদনের অন্যান্য তথ্য
           $citizen->permanent_resident=$request->permanent_resident;
           $citizen->citizen_bangladesh=$request->citizen_bangladesh;
           $citizen->voters_union=$request->voters_union;
           $citizen->involved_anti_state=$request->involved_anti_state;
           $citizen->update_holdingtax=$request->update_holdingtax;
           $citizen->house_holding_no=$request->house_holding_no;
           $citizen->street_nm=$request->street_nm;
           $citizen->village_name=$request->village_name;
           $citizen->ward_id=$request->ward_id;
           $citizen->union_id=$request->union_id;
           $citizen->post_office=$request->post_office;
           $citizen->upazila_id=$request->upazila_id;
           $citizen->district_id=$request->district_id;
           $citizen->status=0;

            $path='uploads/citizen_certificate/nid';
           $path1='uploads/citizen_certificate/image';
           $path2='uploads/citizen_certificate/citizen';
           $path3='uploads/citizen_certificate/birth';

           if($request->has('nid_image') && $request->nid_image)
           if($this->deleteImage($citizen->nid_image,$path))
               $citizen->nid_image=$this->resizeImage($request->nid_image,$path,true,200,200,false);

            if($request->has('image') && $request->image)
           if($this->deleteImage($citizen->image,$path1))
               $citizen->image=$this->resizeImage($request->image,$path1,true,200,200,false);

            if($request->has('holding_image') && $request->holding_image)
           if($this->deleteImage($citizen->holding_image,$path2))
               $citizen->holding_image=$this->resizeImage($request->holding_image,$path2,true,200,200,false);

            if($request->has('image_birth_certificate') && $request->image_birth_certificate)
           if($this->deleteImage($citizen->image_birth_certificate,$path3))
               $citizen->image_birth_certificate=$this->resizeImage($request->image_birth_certificate,$path3,true,200,200,false);

            if($citizen->save()){
                Toastr::success('নাগরিক সনদ সফলভাবে আপডেট করা হয়েছে!!');
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
    public function destroy($id)
    {
        $citizen= CitizenCertificate::findOrFail(encryptor('decrypt',$id));
        $citizen->delete();
        return redirect()->back();
    }
}
