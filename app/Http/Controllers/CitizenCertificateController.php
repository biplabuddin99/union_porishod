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
use Illuminate\Support\Facades\Crypt;

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
        $citizen=CitizenCertificate::where('id',Crypt::decrypt($id))->first();
        $Mobile = explode(',', $citizen?->mobile_bank);
        $Digital_devices = explode(',', $citizen?->digital_devices);
        $Govt_fac = explode(',', $citizen?->government_facilities);
        return view('citizen_certificate.primary_index',compact('citizen','Mobile','Govt_fac','Digital_devices'));
    }

    public function index()
    {
        $citizen=CitizenCertificate::where('status',1)->get();
        return view('citizen_certificate.index',compact('citizen'));
    }

    public function profile()
    {
        $citizen=CitizenCertificate::where('status',2)->get();
        return view('citizen_certificate.profile',compact('citizen'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $citizen=CitizenCertificate::findOrFail(encryptor('decrypt',$id));
            $citizen->certificate_fee=$request->certificate_fee;
            $citizen->service_charge=$request->service_charge;
            $citizen->number_family_members=$request->number_family_members;
            $citizen->of_the_union=$request->of_the_union;
            $citizen->approval_date=Carbon::parse($request->approval_date)->format('Y-m-d');
            $citizen->cancel_reason=$request->cancel_reason;

            if($request->status==2)
                $citizen->form_no='0'.Carbon::now()->format('y').'-'. str_pad((CitizenCertificate::whereYear('created_at', Carbon::now()->year)->where('status',2)->count() + 1),3,"0",STR_PAD_LEFT);

            $citizen->status=$request->status;
            $citizen->approved_by=currentUserId();
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
            return redirect(route('citizensecondpart.form',Crypt::encrypt($citizen->id)));
        }catch (Exception $e){
            Toastr::success('দয়করে আবার চেষ্টা করুন!');
            return back()->withInput();
            dd($e);
        }
    }

    public function FormPartFirstUp(Request $request, $encrypted_id)
    {
        $citizen = CitizenCertificate::findOrFail(Crypt::decrypt($encrypted_id));
        $Mobile_bank = explode(',', $citizen?->mobile_bank);
        $Digital_devices = explode(',', $citizen?->digital_devices);
        $Govt_fac = explode(',', $citizen?->government_facilities);
        return view('citizen_certificate.edit_firstpart',compact('citizen','Mobile_bank','Digital_devices','Govt_fac'));
    }

    public function FormPartFirstUpdate(Request $request, $encrypted_id)
    {
        try{
            $citizen= CitizenCertificate::findOrFail(Crypt::decrypt($encrypted_id));
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
            return redirect(route('citizensecondpart.form',Crypt::encrypt($citizen->id)));
        }
        catch (Exception $e){
            return back()->withInput();
        }
    }

    public function FormPartSecond($encrypted_id)
    {
        $ward=Ward_no::all();
        $districts=District::select('id','name','name_bn')->get();
        $citizen = CitizenCertificate::findOrFail(Crypt::decrypt($encrypted_id));
        return view('citizen_certificate.create_page2',compact('citizen','ward','districts'));
    }

    public function FormPartSecondUpdate(Request $request, $encrypted_id)
    {
        try{
            $citizen = CitizenCertificate::findOrFail(Crypt::decrypt($encrypted_id));
            // আবেদনের অন্যান্য তথ্য
            $citizen->permanent_resident=$request->permanent_resident;
            $citizen->citizen_bangladesh=$request->citizen_bangladesh;
            $citizen->voters_union=$request->voters_union;
            $citizen->voter_no=$request->voter_no;
            $citizen->involved_anti_state=$request->involved_anti_state;
            $citizen->house_holding_no=$request->house_holding_no;
            $citizen->post_office=$request->post_office;
            $citizen->district_id=$request->district_id;
            $citizen->upazila_id=$request->upazila_id;
            $citizen->union_id=$request->union_id;
            $citizen->ward_id=$request->ward_id;
            $citizen->village_name=$request->village_name;
            $citizen->street_nm=$request->street_nm;
            $citizen->prhouse_holding_number=$request->prhouse_holding_number;
            $citizen->prstreet_nm=$request->prstreet_nm;
            $citizen->prvillage_name=$request->prvillage_name;
            $citizen->prward_id=$request->prward_id;
            $citizen->prpost_office=$request->prpost_office;
            $citizen->prunion_id=$request->prunion_id;
            $citizen->prupazila_id=$request->prupazila_id;
            $citizen->prdistrict_id=$request->prdistrict_id;

            if($request->has('image'))
            $citizen->image=$this->resizeImage($request->image,'uploads/citizen',true,300,300,false);

            if($request->has('nid_image'))
            $citizen->nid_image=$this->resizeImage($request->nid_image,'uploads/citizen',true,500,500,false);

            if($request->has('digital_birth_certificate'))
            $citizen->digital_birth_certificate=$this->resizeImage($request->digital_birth_certificate,'uploads/citizen',true,500,700,false);
            $citizen->status=1;
            $citizen->chairman_id=request()->session()->get('upsetting')?request()->session()->get('upsetting')->chairman_id:"1";
            $citizen->save();
                Toastr::success('নাগরিক সনদ সফলভাবে তৈরি করা হয়েছে!!');
                return redirect(route('citizen_primary.list',Crypt::encrypt($citizen->id)));
        }
        catch (Exception $e){
            return back()->withInput();
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
        $districts=District::where('id',$citizen->prdistrict_id)->select('id','name','name_bn')->first();
        $upazilas=Upazila::where('id',$citizen->prupazila_id)->select('id','name','name_bn')->first();
        $unions=Union::where('id',$citizen->prunion_id)->select('id','name','name_bn')->first();
        $wards=Ward_no::where('id',$citizen->prward_id)->select('id','ward_name','ward_name_bn')->first();
        return view('citizen_certificate.show',compact('citizen','wards','upazilas','districts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CitizenCertificate  $citizenCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $citizen=CitizenCertificate::findOrFail(encryptor('decrypt',$id));
        $Mobile_bank = explode(',', $citizen?->mobile_bank);
        $Digital_devices = explode(',', $citizen?->digital_devices);
        $Govt_fac = explode(',', $citizen?->government_facilities);
        $ward=Ward_no::all();
        $districts=District::select('id','name','name_bn')->get();
        $upazilas=Upazila::select('id','name','name_bn')->get();
        $unions=Union::select('id','name','name_bn')->get();
        return view('citizen_certificate.edit',compact('citizen','Mobile_bank','Digital_devices','Govt_fac','ward','districts','upazilas','unions'));
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

           // নাগরিক ‍সনদ আবেদনের অন্যান্য তথ্য
            $citizen->permanent_resident=$request->permanent_resident;
            $citizen->citizen_bangladesh=$request->citizen_bangladesh;
            $citizen->voters_union=$request->voters_union;
            $citizen->voter_no=$request->voter_no;
            $citizen->involved_anti_state=$request->involved_anti_state;
            $citizen->house_holding_no=$request->house_holding_no;
            $citizen->post_office=$request->post_office;
            $citizen->district_id=$request->district_id;
            $citizen->upazila_id=$request->upazila_id;
            $citizen->union_id=$request->union_id;
            $citizen->ward_id=$request->ward_id;
            $citizen->village_name=$request->village_name;
            $citizen->street_nm=$request->street_nm;
            $citizen->prhouse_holding_number=$request->prhouse_holding_number;
            $citizen->prstreet_nm=$request->prstreet_nm;
            $citizen->prvillage_name=$request->prvillage_name;
            $citizen->prward_id=$request->prward_id;
            $citizen->prpost_office=$request->prpost_office;
            $citizen->prunion_id=$request->prunion_id;
            $citizen->prupazila_id=$request->prupazila_id;
            $citizen->prdistrict_id=$request->prdistrict_id;
            $citizen->updated_by=currentUserId();

            $path='uploads/citizen';

            if($request->has('digital_birth_certificate') && $request->digital_birth_certificate)
            if($this->deleteImage($citizen->digital_birth_certificate,$path))
                $citizen->digital_birth_certificate=$this->resizeImage($request->digital_birth_certificate,$path,true,200,200,false);

            if($request->has('image') && $request->image)
            if($this->deleteImage($citizen->image,$path))
                $citizen->image=$this->resizeImage($request->image,$path,true,200,200,false);

            if($request->has('nid_image') && $request->nid_image)
            if($this->deleteImage($citizen->nid_image,$path))
                $citizen->nid_image=$this->resizeImage($request->nid_image,$path,true,200,200,false);

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
