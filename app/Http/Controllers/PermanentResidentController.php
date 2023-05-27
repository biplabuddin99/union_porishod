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
    public function primaryIndex($id)
    {
        $permanent=PermanentResident::where('id',Crypt::decrypt($id))->first();
        $Mobile = explode(',', $permanent?->mobile_bank);
        $Digital_devices = explode(',', $permanent?->digital_devices);
        $Govt_fac = explode(',', $permanent?->government_facilities);
        return view('permanent_resident.primary_index',compact('permanent','Mobile','Govt_fac','Digital_devices'));
    }

    public function index()
    {
        $permanent=PermanentResident::where('status',1)->get();
        return view('permanent_resident.index',compact('permanent'));
    }

    public function profile()
    {
        $permanent=PermanentResident::where('status',2)->get();
        return view('permanent_resident.profile',compact('permanent'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $permanent=PermanentResident::findOrFail(encryptor('decrypt',$id));
            $permanent->certificate_fee=$request->certificate_fee;
            $permanent->service_charge=$request->service_charge;
            $permanent->as_i_know=$request->as_i_know;
            $permanent->of_the_union=$request->of_the_union;
            $permanent->approval_date=Carbon::parse($request->approval_date)->format('Y-m-d');
            $permanent->cancel_reason=$request->cancel_reason;

            if($request->status==2)
                $permanent->form_no='0'.Carbon::now()->format('y').'-'. str_pad((PermanentResident::whereYear('created_at', Carbon::now()->year)->where('status',2)->count() + 1),3,"0",STR_PAD_LEFT);
            $permanent->status=$request->status;
            $permanent->approved_by=currentUserId();
            $permanent->save();
            Toastr::success('প্রোফাইলে যুক্ত করা হয়েছে!');
            return redirect(route(currentUser().'.permanentresident.index'));
            // dd($request);
        }
        catch (Exception $e){
            dd($e);
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
            return redirect(route('permanentsecondpart.form',Crypt::encrypt($permanent->id)));
        }catch (Exception $e){
            Toastr::success('দয়করে আবার চেষ্টা করুন!');
            return back()->withInput();
            dd($e);
        }
    }

    public function FormPartSecond($encrypted_id)
    {
        $ward=Ward_no::all();
        $districts=District::select('id','name','name_bn')->get();
        $permanent = PermanentResident::findOrFail(Crypt::decrypt($encrypted_id));
        return view('permanent_resident.create_page2',compact('permanent','ward','districts'));
    }

    public function FormPartSecondUpdate(Request $request, $encrypted_id)
    {
        try{
            $permanent = PermanentResident::findOrFail(Crypt::decrypt($encrypted_id));
            // আবেদনের অন্যান্য তথ্য
            $permanent->permanent_resident=$request->permanent_resident;
            $permanent->citizen_bangladesh=$request->citizen_bangladesh;
            $permanent->voters_union=$request->voters_union;
            $permanent->voter_no=$request->voter_no;
            $permanent->involved_anti_state=$request->involved_anti_state;
            $permanent->house_holding_no=$request->house_holding_no;
            $permanent->post_office=$request->post_office;
            $permanent->district_id=$request->district_id;
            $permanent->upazila_id=$request->upazila_id;
            $permanent->union_id=$request->union_id;
            $permanent->ward_id=$request->ward_id;
            $permanent->village_name=$request->village_name;
            $permanent->street_nm=$request->street_nm;

            if($request->has('image'))
            $permanent->image=$this->resizeImage($request->image,'uploads/permanent',true,300,300,false);

            if($request->has('nid_image'))
            $permanent->nid_image=$this->resizeImage($request->nid_image,'uploads/permanent',true,500,500,false);

            if($request->has('digital_birth_certificate'))
            $permanent->digital_birth_certificate=$this->resizeImage($request->digital_birth_certificate,'uploads/permanent',true,500,700,false);
            $permanent->status=1;
            $permanent->chairman_id=request()->session()->get('upsetting')?request()->session()->get('upsetting')->chairman_id:"1";
            $permanent->save();
                Toastr::success('স্থায়ী বাসিন্দা সফলভাবে তৈরি করা হয়েছে!!');
                return redirect(route('permanent_primary.list',Crypt::encrypt($permanent->id)));
        }
        catch (Exception $e){
            dd($e);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermanentResident  $permanentResident
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permanent=PermanentResident::findOrFail(encryptor('decrypt',$id));
        return view('permanent_resident.show',compact('permanent'));
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
