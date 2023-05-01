<?php

namespace App\Http\Controllers;

use App\Models\Holding;
use Illuminate\Http\Request;
use App\Http\Requests\HoldingCreateRequest;
use PhpParser\Node\Stmt\Return_;
use App\Http\Traits\ImageHandleTraits;
use App\Models\All_onlineApplications;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use App\Models\Ward_no;
use Exception;
use PDF;
use Carbon\Carbon;

class HoldingController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function primaryIndex($id)
    {
        $hold=Holding::where('id',$id)->first();
        $districts=District::select('id','name','name_bn')->get();
        $upazilas=Upazila::where('id',$hold->upazila_id)->select('id','name','name_bn')->get();
        $unions=Union::where('id',$hold->union_id)->select('id','name','name_bn')->get();
        $wards=Ward_no::select('id','ward_name','ward_name_bn')->get();
        $Mobile = explode(',', $hold->mobile_bank);
        $Digital_devices = explode(',', $hold->digital_devices);
        $Govt_fac = explode(',', $hold->government_facilities);
        $Business_tax = explode(',', $hold->business_taxes);
        return view('holding.primary_index',compact('hold','Mobile','Govt_fac','Digital_devices','Business_tax','districts'));
    }

    // public function generatePDF()
    // {
    //     $hold=Holding::first();
    //     $Mobile = explode(',', $hold->mobile_bank);
    //     $Digital_devices = explode(',', $hold->digital_devices);
    //     $Govt_fac = explode(',', $hold->government_facilities);
    //     $Business_tax = explode(',', $hold->business_taxes);
    //     $pdf = PDF::loadView('holding.primary_index',compact('hold','Mobile','Govt_fac','Digital_devices','Business_tax'));
    //     return $pdf->download('holding.pdf');
    // }
    public function index()
    {
        $hold=Holding::where('status',0)->get();
        return view('holding.index',compact('hold'));
    }
    public function profile()
    {
        $hold=Holding::where('status',1)->get();
        return view('holding.profile',compact('hold'));
    }
    public function cancel()
    {
        $hold=Holding::where('status',2)->get();
        return view('holding.cancel',compact('hold'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $holding=Holding::findOrFail(encryptor('decrypt',$id));
            $holding->holding_certificate_fee=$request->holding_certificate_fee;
            $holding->tax_levied_annually_house=$request->tax_levied_annually_house;
            $holding->approval_date=Carbon::parse($request->approval_date)->format('Y-m-d');
            $holding->cancel_reason=$request->cancel_reason;

            if($request->status==1)
                $holding->form_no='0'.Carbon::now()->format('y').'-'. str_pad((Holding::whereYear('created_at', Carbon::now()->year)->where('status',1)->count() + 1),3,"0",STR_PAD_LEFT);

            $holding->status=$request->status;
            $holding->approved_by=currentUserId();
            $holding->updated_by=currentUserId();
            $holding->house_holding_no=$request->house_holding_no;
            $holding->save();
            Toastr::success('প্রোফাইলে যুক্ত করা হয়েছে!');
            return redirect(route(currentUser().'.holding.index'));
        }
        catch (Exception $e){
            // dd($e);
            Toastr::error('অনুগ্রহপূর্বক আবার চেষ্টা করুন!');
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
        Return view('holding.create');
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
            $holding=new Holding;
            $all= All_onlineApplications::where('id',$request->all_aplication)->first();
            // $holding->form_no=$request->form_no;
            $holding->holding_date=$all->holding_date;
            $holding->head_household=$all->head_household;
            $holding->husband_wife=$all->husband_wife;
            $holding->father_name=$all->father_name;
            $holding->freedom_fighter=$all->freedom_fighter;
            $holding->mother_name=$all->mother_name;
            $holding->gender=$all->gender;
            $holding->birth_date=$all->birth_date;
            $holding->voter_id_no=$all->voter_id_no;
            $holding->birth_registration_id=$all->birth_registration_id;
            $holding->religion=$all->religion;
            $holding->phone=$all->phone;
            $holding->edu_qual=$all->edu_qual;
            $holding->email=$all->email;
            $holding->source_income=$all->source_income;
            $holding->marital_status=$all->marital_status;
            $holding->internet_connection=$all->internet_connection;
            $holding->tube_well=$all->tube_well;
            $holding->disline_connection=$all->disline_connection;
            $holding->paved_bathroom=$all->paved_bathroom;
            $holding->bank_acc=$all->bank_acc;
            $holding->arsenic_free=$all->arsenic_free;
            $Govt_fac = explode(',', $all->government_facilities);
            $holding->government_facilities=implode(',',$Govt_fac);
            $Mobile = explode(',', $all->mobile_bank);
            $holding->mobile_bank=implode(',',$Mobile);
            $Digital_devices = explode(',', $all->digital_devices);
            $holding->digital_devices=implode(',',$Digital_devices);

            // হোল্ডিং নাম্বার আবেদনের অন্যান্য তথ্য
            $holding->residence_type=$request->residence_type;
            $holding->house_room=$request->house_room;
            $holding->family_status=$request->family_status;
            // $holding->main_source_income=$request->main_source_income;
            $holding->business_taxes=$request->business_taxes?implode(',',$request->business_taxes):'';
            $holding->percentage_house_land=$request->percentage_house_land;
            $holding->percentage_cultivated_land=$request->percentage_cultivated_land;
            $holding->estimated_value_house=$request->estimated_value_house;
            $holding->tax_levied_annually_house=$request->tax_levied_annually_house;
            // $holding->annual_tax_collected_house=$request->annual_tax_collected_house;
            // $holding->annual_house_tax_arrears=$request->annual_house_tax_arrears;
            // আবেদনকারীর স্থায়ী ঠিকানা সমূহ
            $holding->house_holding_no=$request->house_holding_no;
            $holding->num_male=$request->num_male;
            $holding->num_female=$request->num_female;
            $holding->num_male_vot=$request->num_male_vot;
            $holding->num_female_vot=$request->num_female_vot;
            $holding->street_nm=$request->street_nm;
            $holding->village_name=$request->village_name;
            $holding->ward_id=$request->ward_id;
            $holding->union_id=$request->union_id;
            $holding->post_office=$request->post_office;
            $holding->upazila_id=$request->upazila_id;
            $holding->district_id=$request->district_id;
            $holding->status=0;
            $holding->chairman_id=request()->session()->get('upsetting')?request()->session()->get('upsetting')->chairman_id:"1";
            $holding->created_by=currentUserId();
            if($request->has('image'))
            $holding->image=$this->resizeImage($request->image,'uploads/holding',true,300,300,false);

            if($request->has('nid_image'))
            $holding->nid_image=$this->resizeImage($request->nid_image,'uploads/holding',true,500,500,false);

            if($request->has('birth_registration_image'))
            $holding->birth_registration_image=$this->resizeImage($request->birth_registration_image,'uploads/holding',true,500,700,false);

            $holding->save();
            Toastr::success('হোল্ডিং সফলভাবে সম্পন্ন হয়েছে!');
            return redirect(route('hold_primary.list',$holding->id));
            // dd($request);
        }
        catch (Exception $e){
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Holding  $holding
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hold = Holding::findOrFail(encryptor('decrypt',$id));
        $Govt_fac = explode(',', $hold->government_facilities);
        return view('holding.show',compact('hold','Govt_fac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holding  $holding
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hold=Holding::findOrFail(encryptor('decrypt',$id));
        $districts=District::select('id','name','name_bn')->get();
        $upazilas=Upazila::where('id',$hold->upazila_id)->select('id','name','name_bn')->get();
        $unions=Union::where('id',$hold->union_id)->select('id','name','name_bn')->get();
        $wards=Ward_no::select('id','ward_name','ward_name_bn')->get();
        $Govt_fac = explode(',', $hold->government_facilities);
        $Mobile_bank = explode(',', $hold->mobile_bank);
        $Digital_devices = explode(',', $hold->digital_devices);
        $Business_taxes = explode(',', $hold->business_taxes);
        return view('holding.edit',compact('hold','Govt_fac','Mobile_bank','Digital_devices','Business_taxes','districts','upazilas','unions','wards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Holding  $holding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $holding=Holding::findOrFail(encryptor('decrypt',$id));
            $holding->holding_date=Carbon::parse($request->holding_date)->format('Y-m-d');
            $holding->head_household=$request->head_household;
            $holding->husband_wife=$request->husband_wife;
            $holding->father_name=$request->father_name;
            $holding->freedom_fighter=$request->freedom_fighter;
            $holding->mother_name=$request->mother_name;
            $holding->gender=$request->gender;
            $holding->birth_date=$request->birth_date;
            $holding->voter_id_no=$request->voter_id_no;
            $holding->birth_registration_id=$request->birth_registration_id;
            $holding->religion=$request->religion;
            $holding->phone=$request->phone;
            $holding->edu_qual=$request->edu_qual;
            $holding->email=$request->email;
            $holding->source_income=$request->source_income;
            $holding->marital_status=$request->marital_status;
            $holding->internet_connection=$request->internet_connection;
            $holding->tube_well=$request->tube_well;
            $holding->disline_connection=$request->disline_connection;
            $holding->paved_bathroom=$request->paved_bathroom;
            $holding->arsenic_free=$request->arsenic_free;
            // $Govt_fac = explode(',', $request->government_facilities);
            $holding->government_facilities=$request->government_facilities?implode(',',$request->government_facilities):'';
            $holding->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $holding->digital_devices=$request->digital_devices?implode(',',$request->digital_devices):'';

            // হোল্ডিং নাম্বার আবেদনের অন্যান্য তথ্য
            $holding->residence_type=$request->residence_type;
            $holding->house_room=$request->house_room;
            $holding->family_status=$request->family_status;
            // $holding->main_source_income=$request->main_source_income;
            $holding->business_taxes=$request->business_taxes?implode(',',$request->business_taxes):'';
            $holding->percentage_house_land=$request->percentage_house_land;
            $holding->percentage_cultivated_land=$request->percentage_cultivated_land;
            $holding->estimated_value_house=$request->estimated_value_house;
            $holding->tax_levied_annually_house=$request->tax_levied_annually_house;
            // $holding->annual_tax_collected_house=$request->annual_tax_collected_house;
            // $holding->annual_house_tax_arrears=$request->annual_house_tax_arrears;
            // আবেদনকারীর স্থায়ী ঠিকানা সমূহ
            $holding->house_holding_no=$request->house_holding_no;
            $holding->num_male=$request->num_male;
            $holding->num_female=$request->num_female;
            $holding->num_male_vot=$request->num_male_vot;
            $holding->num_female_vot=$request->num_female_vot;
            $holding->street_nm=$request->street_nm;
            $holding->village_name=$request->village_name;
            $holding->ward_id=$request->ward_id;
            $holding->union_id=$request->union_id;
            $holding->post_office=$request->post_office;
            $holding->upazila_id=$request->upazila_id;
            $holding->district_id=$request->district_id;

            $path='uploads/holding';

            if($request->has('birth_registration_image') && $request->birth_registration_image)
            if($this->deleteImage($holding->birth_registration_image,$path))
                $holding->birth_registration_image=$this->resizeImage($request->birth_registration_image,$path,true,200,200,false);

            if($request->has('image') && $request->image)
            if($this->deleteImage($holding->image,$path))
                $holding->image=$this->resizeImage($request->image,$path,true,200,200,false);

            if($request->has('nid_image') && $request->nid_image)
            if($this->deleteImage($holding->nid_image,$path))
                $holding->nid_image=$this->resizeImage($request->nid_image,$path,true,200,200,false);

            if($holding->save()){
                    Toastr::success('হোল্ডিং আপডেট সফলভাবে সম্পন্ন হয়েছে!');
                if($holding->status==0)
                    return redirect(route(currentUser().'.holding.index'));
                else
                    return redirect(route(currentUser().'.hold_profile.list'));

            }
            
            // dd($request);
        }
        catch (Exception $e){
            return back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holding  $holding
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Holding::findOrFail(encryptor('decrypt',$id));
        $cat->delete();
        return redirect()->back();
    }

    public function tax()
    {
        $hold=Holding::where('status',1)->where('tax_levied_annually_house','>','0')->get();
        return view('holding.tax_list',compact('hold'));
    }
}
