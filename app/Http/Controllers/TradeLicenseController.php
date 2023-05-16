<?php

namespace App\Http\Controllers;

use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\Thana;
use App\Models\TradeLicense;
use App\Models\Ward_no;
use App\Models\MobileBank;
use App\Models\DigitalDevice;
use App\Models\EducationalQualification;
use App\Models\GovernmentFacility;
use App\Models\Profession;
use App\Models\BusinessType;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use App\Models\All_onlineApplications;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

class TradeLicenseController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function primaryIndex($id)
    {
        $trade=TradeLicense::where('id',Crypt::decrypt($id))->first();
        $districts=District::where('id',$trade->business_district_id)->select('id','name','name_bn')->first();
        $upazilas=Upazila::where('id',$trade->business_upazila_id)->select('id','name','name_bn')->first();
        $unions=Union::where('id',$trade->business_union_id)->select('id','name','name_bn')->first();
        $wards=Ward_no::where('id',$trade->business_ward_id)->select('id','ward_name','ward_name_bn')->first();
        $Mobile = explode(',', $trade->mobile_bank);
        $Digital_devices = explode(',', $trade->digital_devices);
        $Govt_fac = explode(',', $trade->government_facilities);
        return view('trade_license.primary_index',compact('trade','Mobile','Govt_fac','Digital_devices','districts','upazilas','unions','wards'));
    }
    public function index()
    {
        $trade=TradeLicense::where('status',1)->get();
        return view('trade_license.index',compact('trade'));
    }

    public function profile()
    {
        $trade=TradeLicense::where('status',2)->get();
        return view('trade_license.profile',compact('trade'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $trade=TradeLicense::findOrFail(encryptor('decrypt',$id));
            $trade->tradelicense_renewal_year=$request->tradelicense_renewal_year;
            $trade->signboard_tax=$request->signboard_tax;
            $trade->trade_license_renewal_fee=$request->trade_license_renewal_fee;
            $trade->withholding_tax_levied_annually=$request->withholding_tax_levied_annually;
            $trade->service_charge=$request->service_charge;
            $trade->approval_date=Carbon::parse($request->approval_date)->format('Y-m-d');
            $trade->cancel_reason=$request->cancel_reason;
            if($request->status==2)
            $trade->form_no='0'.Carbon::now()->format('y').'-'. str_pad((TradeLicense::whereYear('created_at', Carbon::now()->year)->where('status',2)->count() + 1),3,"0",STR_PAD_LEFT);
            $trade->status=$request->status;
            $trade->approved_by=currentUserId();
            $trade->updated_by=currentUserId();
            $trade->save();
            Toastr::success('প্রোফাইলে যুক্ত করা হয়েছে!');
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
        $mobile_bank=MobileBank::orderBy('created_at')->get();
        $digital_device=DigitalDevice::orderBy('created_at')->get();
        $edu_q=EducationalQualification::orderBy('created_at')->get();
        $gov_f=GovernmentFacility::orderBy('created_at')->get();
        $profession=Profession::orderBy('created_at')->get();
        $ward=Ward_no::all();
        $districts=District::select('id','name','name_bn')->get();
        return view('trade_license.create_page1',compact('mobile_bank','digital_device','edu_q','gov_f','profession','ward','districts'));
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
            // $trade->form_no=$request->form_no;
            $trade->trade_date=Carbon::parse($request->trade_date)->format('Y-m-d');
            $trade->head_institution=$request->head_institution;
            $trade->father_name=$request->father_name;
            $trade->mother_name=$request->mother_name;
            $trade->husband_wife=$request->husband_wife;
            $trade->birth_date=Carbon::parse($request->birth_date)->format('Y-m-d');
            $trade->voter_id_no=$request->voter_id_no;
            $trade->birth_registration_id=$request->birth_registration_id;
            $trade->gender=$request->gender;
            $trade->religion=$request->religion;
            $trade->bank_acc=$request->bank_acc;
            $trade->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $trade->phone=$request->phone;
            $trade->email=$request->email;
            $trade->house_holding_number=$request->house_holding_number;
            $trade->street_nm=$request->street_nm;
            $trade->village_name=$request->village_name;
            $trade->ward_id=$request->ward_id;
            $trade->post_office=$request->post_office;
            $trade->union_id=$request->union_id;
            $trade->upazila_id=$request->upazila_id;
            $trade->district_id=$request->district_id;
            $trade->status=0;
            $trade->created_by=currentUserId();
            $trade->save();
            return redirect(route('tradesecondpart.form',Crypt::encrypt($trade->id)));

        } catch (Exception $e) {
            Toastr::info('আবার চেষ্টা করুন!');
            dd($e);
        }
    }

    public function FormPartFirstUp(Request $request, $encrypted_id)
    {
        $trade = TradeLicense::findOrFail(Crypt::decrypt($encrypted_id));
        $wards=Ward_no::select('id','ward_name','ward_name_bn')->get();
        $Mobile_bank = explode(',', $trade->mobile_bank);
        return view('trade_license.edit_firstpart',compact('trade','Mobile_bank','wards'));
    }

    public function FormPartFirstUpdate(Request $request, $encrypted_id)
    {
        try{
            $trade= TradeLicense::findOrFail(Crypt::decrypt($encrypted_id));
            // $trade->form_no=$request->form_no;
            $trade->trade_date=Carbon::parse($request->trade_date)->format('Y-m-d');
            $trade->head_institution=$request->head_institution;
            $trade->father_name=$request->father_name;
            $trade->mother_name=$request->mother_name;
            $trade->husband_wife=$request->husband_wife;
            $trade->birth_date=Carbon::parse($request->birth_date)->format('Y-m-d');
            $trade->voter_id_no=$request->voter_id_no;
            $trade->birth_registration_id=$request->birth_registration_id;
            $trade->gender=$request->gender;
            $trade->religion=$request->religion;
            $trade->bank_acc=$request->bank_acc;
            $trade->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $trade->phone=$request->phone;
            $trade->email=$request->email;
            $trade->house_holding_number=$request->house_holding_number;
            $trade->street_nm=$request->street_nm;
            $trade->village_name=$request->village_name;
            $trade->ward_id=$request->ward_id;
            $trade->post_office=$request->post_office;
            $trade->union_id=$request->union_id;
            $trade->upazila_id=$request->upazila_id;
            $trade->district_id=$request->district_id;
            $trade->status=0;
            $trade->created_by=currentUserId();
            $trade->save();
            return redirect(route('tradesecondpart.form',Crypt::encrypt($trade->id)));
        }
        catch (Exception $e){
            return back()->withInput();
        }
    }

    public function FormPartSecond($encrypted_id)
    {
        $business=BusinessType::orderBy('created_at')->get();
        $ward=Ward_no::all();
        $districts=District::select('id','name','name_bn')->get();
        $trade = TradeLicense::findOrFail(Crypt::decrypt($encrypted_id));
        return view('trade_license.create_page2',compact('trade','ward','districts','business'));
    }

    public function FormPartSecondUpdate(Request $request, $encrypted_id)
    {
        try{
            $trade = TradeLicense::findOrFail(Crypt::decrypt($encrypted_id));
            // হোল্ডিং নাম্বার আবেদনের অন্যান্য তথ্য
            $trade->business_name=$request->business_name;
            $trade->type_ownership_organization=$request->type_ownership_organization;
            $trade->e_tin_number=$request->e_tin_number;
            $trade->business_organization_type=$request->business_organization_type;
            $trade->estimated_capital_business=$request->estimated_capital_business;
            $trade->business_type=$request->business_type;
            $trade->institution_holding_number=$request->institution_holding_number;
            $trade->business_post_office=$request->business_post_office;
            $trade->business_district_id=$request->business_district_id;
            $trade->business_upazila_id=$request->business_upazila_id;
            $trade->business_union_id=$request->business_union_id;
            $trade->business_ward_id=$request->business_ward_id;
            $trade->business_village_name=$request->business_village_name;
            $trade->business_street_nm=$request->business_street_nm;

            if($request->has('image'))
            $trade->image=$this->resizeImage($request->image,'uploads/trade',true,300,300,false);

            if($request->has('nid_image'))
            $trade->nid_image=$this->resizeImage($request->nid_image,'uploads/trade',true,500,500,false);

            if($request->has('image_holding'))
            $trade->image_holding=$this->resizeImage($request->image_holding,'uploads/trade',true,500,700,false);
            $trade->status=1;
            $trade->chairman_id=request()->session()->get('upsetting')?request()->session()->get('upsetting')->chairman_id:"1";
            $trade->save();

            Toastr::success('ট্রেড লাইসেন্স সফলভাবে সম্পন্ন হয়েছে!');
            return redirect(route('trade_primary.list',Crypt::encrypt($trade->id)));
            // dd($request);
        }
        catch (Exception $e){
            return back()->withInput();
        }
    }

    public function show($id)
    {
        $trade=TradeLicense::findOrFail(encryptor('decrypt',$id));
        $districts=District::where('id',$trade->business_district_id)->select('id','name','name_bn')->first();
        $upazilas=Upazila::where('id',$trade->business_upazila_id)->select('id','name','name_bn')->first();
        $unions=Union::where('id',$trade->business_union_id)->select('id','name','name_bn')->first();
        $wards=Ward_no::where('id',$trade->business_ward_id)->select('id','ward_name','ward_name_bn')->first();
        // return $district;
        // return $trade;
        return view('trade_license.show_print_preview',compact('trade','districts','upazilas','wards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TradeLicense  $tradeLicense
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $districts=District::select('id','name','name_bn')->get();
        $wards=Ward_no::select('id','ward_name','ward_name_bn')->get();
        $trade=TradeLicense::findOrFail(encryptor('decrypt',$id));
        $upazilas=Upazila::where('id',$trade->upazila_id)->select('id','name','name_bn')->get();
        $unions=Union::where('id',$trade->union_id)->select('id','name','name_bn')->get();
        // return $upazilas;
        $Govt_fac = explode(',', $trade->government_facilities);
        $Mobile_bank = explode(',', $trade->mobile_bank);
        $Digital_devices = explode(',', $trade->digital_devices);
        return view('trade_license.edit',compact('trade','Govt_fac','Mobile_bank','Digital_devices','districts','upazilas','wards','unions'));
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
            $trade->holding_date=Carbon::parse($request->holding_date)->format('Y-m-d');
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
            $trade->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $trade->digital_devices=$request->digital_devices?implode(',',$request->digital_devices):'';

             // ট্রেড লাইসেন্স আবেদনের অন্যান্য তথ্য
            $trade->business_name=$request->business_name;
            $trade->owner_proprietor=$request->owner_proprietor;
            $trade->trade_husband_name=$request->trade_husband_name;
            $trade->type_ownership_organization=$request->type_ownership_organization;
            $trade->trade_fathername=$request->trade_fathername;
            $trade->trade_mothername=$request->trade_mothername;
            $trade->trade_license_renewal=$request->trade_license_renewal;
            $trade->business_organization_structure=$request->business_organization_structure;
            $trade->business_type=$request->business_type;
            $trade->trade_license_renewal_fee=$request->trade_license_renewal_fee;
            $trade->business_estimated_capital=$request->business_estimated_capital;
            $trade->annual_business_tax_levied=$request->annual_business_tax_levied;
            // $trade->annual_business_tax_collected=$request->annual_business_tax_collected;
            // $trade->annual_business_tax_due=$request->annual_business_tax_due;
            // $trade->holding_tax_update=$request->holding_tax_update;
            $trade->vehicle_establishment_holding_no=$request->vehicle_establishment_holding_no;
            $trade->street_nm=$request->street_nm;
            $trade->village_name=$request->village_name;
            $trade->ward_id=$request->ward_id;
            $trade->union_id=$request->union_id;
            $trade->post_office=$request->post_office;
            $trade->upazila_id=$request->upazila_id;
            $trade->district_id=$request->district_id;
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
    public function destroy( $id)
    {
        $trade= TradeLicense::findOrFail(encryptor('decrypt',$id));
        $trade->delete();
        return redirect()->back();
    }

    public function tax()
    {
        $trade=TradeLicense::where('status',2)->where('withholding_tax_levied_annually','>','0')->get();
        // $wards=Ward_no::where('id',$trade->business_ward_id)->select('id','ward_name','ward_name_bn')->get();
        return view('trade_license.tax_list',compact('trade'));
    }
}
