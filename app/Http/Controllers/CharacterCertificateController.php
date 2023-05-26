<?php

namespace App\Http\Controllers;

use App\Models\CharacterCertificate;
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

class CharacterCertificateController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function primaryIndex($id)
    {
        $character=CharacterCertificate::where('id',Crypt::decrypt($id))->first();
        $Mobile = explode(',', $character?->mobile_bank);
        $Digital_devices = explode(',', $character?->digital_devices);
        $Govt_fac = explode(',', $character?->government_facilities);
        return view('character_certificate.primary_index',compact('character','Mobile','Govt_fac','Digital_devices'));
    }

    public function index()
    {
        $chatacter=CharacterCertificate::where('status',1)->get();
        return view('character_certificate.index',compact('chatacter'));
    }

    public function profile()
    {
        $chatacter=CharacterCertificate::where('status',2)->get();
        return view('character_certificate.profile',compact('chatacter'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $chatacter=CharacterCertificate::findOrFail(encryptor('decrypt',$id));
            $chatacter->certificate_fee=$request->certificate_fee;
            $chatacter->service_charge=$request->service_charge;
            $chatacter->as_i_know=$request->as_i_know;
            $chatacter->of_the_union=$request->of_the_union;
            $chatacter->approval_date=Carbon::parse($request->approval_date)->format('Y-m-d');
            $chatacter->cancel_reason=$request->cancel_reason;

            if($request->status==2)
                $chatacter->form_no='0'.Carbon::now()->format('y').'-'. str_pad((CharacterCertificate::whereYear('created_at', Carbon::now()->year)->where('status',2)->count() + 1),3,"0",STR_PAD_LEFT);
            $chatacter->status=$request->status;
            $chatacter->approved_by=currentUserId();
            $chatacter->save();
            Toastr::success('প্রোফাইলে যুক্ত করা হয়েছে!');
            return redirect(route(currentUser().'.chatacter.index'));
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
        return view('character_certificate.create_page1',compact('edu_q','profession','gov_f','digital_device','mobile_bank'));
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
            $character=new CharacterCertificate;
            // $character->form_no=$request->form_no;
            $character->apply_date=Carbon::parse($request->apply_date)->format('Y-m-d');
            $character->applicant_name=$request->applicant_name;
            $character->father_name=$request->father_name;
            $character->mother_name=$request->mother_name;
            $character->husband_wife=$request->husband_wife;
            $character->birth_date=Carbon::parse($request->birth_date)->format('Y-m-d');
            $character->voter_id_no=$request->voter_id_no;
            $character->birth_registration_id=$request->birth_registration_id;
            $character->gender=$request->gender;
            $character->religion=$request->religion;
            $character->marital_status=$request->marital_status;
            $character->freedom_fighter=$request->freedom_fighter;
            $character->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $character->digital_devices=$request->digital_devices?implode(',',$request->digital_devices):'';
            $character->government_facilities=$request->government_facilities?implode(',',$request->government_facilities):'';
            $character->edu_qual=$request->edu_qual;
            $character->source_income=$request->source_income;
            $character->phone=$request->phone;
            $character->email=$request->email;
            $character->bank_acc=$request->bank_acc;
            $character->status=0;
            $character->created_by=currentUserId();
            $character->save();
            return redirect(route('charactersecondpart.form',Crypt::encrypt($character->id)));
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
        $character = CharacterCertificate::findOrFail(Crypt::decrypt($encrypted_id));
        return view('character_certificate.create_page2',compact('character','ward','districts'));
    }

    public function FormPartSecondUpdate(Request $request, $encrypted_id)
    {
        try{
            $character = CharacterCertificate::findOrFail(Crypt::decrypt($encrypted_id));
            // আবেদনের অন্যান্য তথ্য
            $character->permanent_resident=$request->permanent_resident;
            $character->citizen_bangladesh=$request->citizen_bangladesh;
            $character->voters_union=$request->voters_union;
            $character->voter_no=$request->voter_no;
            $character->involved_anti_state=$request->involved_anti_state;
            $character->house_holding_no=$request->house_holding_no;
            $character->post_office=$request->post_office;
            $character->district_id=$request->district_id;
            $character->upazila_id=$request->upazila_id;
            $character->union_id=$request->union_id;
            $character->ward_id=$request->ward_id;
            $character->village_name=$request->village_name;
            $character->street_nm=$request->street_nm;

            if($request->has('image'))
            $character->image=$this->resizeImage($request->image,'uploads/character',true,300,300,false);

            if($request->has('nid_image'))
            $character->nid_image=$this->resizeImage($request->nid_image,'uploads/character',true,500,500,false);

            if($request->has('digital_birth_certificate'))
            $character->digital_birth_certificate=$this->resizeImage($request->digital_birth_certificate,'uploads/character',true,500,700,false);
            $character->status=1;
            $character->chairman_id=request()->session()->get('upsetting')?request()->session()->get('upsetting')->chairman_id:"1";
            $character->save();
                Toastr::success('চারিত্রিক সনদ সফলভাবে তৈরি করা হয়েছে!!');
                return redirect(route('character_primary.list',Crypt::encrypt($character->id)));
        }
        catch (Exception $e){
            dd($e);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CharacterCertificate  $characterCertificate
     * @return \Illuminate\Http\Response
     */
    public function show(CharacterCertificate $characterCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CharacterCertificate  $characterCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(CharacterCertificate $characterCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CharacterCertificate  $characterCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CharacterCertificate $characterCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CharacterCertificate  $characterCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharacterCertificate $characterCertificate)
    {
        //
    }
}
