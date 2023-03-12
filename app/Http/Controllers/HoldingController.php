<?php

namespace App\Http\Controllers;

use App\Models\Holding;
use Illuminate\Http\Request;
use App\Http\Requests\HoldingCreateRequest;
use PhpParser\Node\Stmt\Return_;
use App\Http\Traits\ImageHandleTraits;
use App\Models\All_onlineApplications;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class HoldingController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function add_profile(Request $request, $id)
    {
        try{
            $holding=Holding::findOrFail(encryptor('decrypt',$id));
            $holding->status=$request->status;
            $holding->save();
            Toastr::success('প্রোপাইলে যুক্ত করা হয়েছে!');
            return redirect(route(currentUser().'.holding.index'));
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
            $holding->arsenic_free=$all->arsenic_free;
            $Govt_fac = explode(',', $all->government_facilities);
            $holding->government_facilities=implode(',',$Govt_fac);

            // হোল্ডিং নাম্বার আবেদনের অন্যান্য তথ্য
            $holding->residence_type=$request->residence_type;
            $holding->house_room=$request->house_room;
            $holding->family_status=$request->family_status;
            $holding->main_source_income=$request->main_source_income;
            $holding->percentage_house_land=$request->percentage_house_land;
            $holding->percentage_cultivated_land=$request->percentage_cultivated_land;
            $holding->estimated_value_house=$request->estimated_value_house;
            $holding->tax_levied_annually_house=$request->tax_levied_annually_house;
            $holding->annual_tax_collected_house=$request->annual_tax_collected_house;
            $holding->annual_house_tax_arrears=$request->annual_house_tax_arrears;
            // আবেদনকারীর স্থায়ী ঠিকানা সমূহ
            $holding->house_holding_no=$request->house_holding_no;
            $holding->street_nm=$request->street_nm;
            $holding->village_name=$request->village_name;
            $holding->ward_no=$request->ward_no;
            $holding->name_union_parishad=$request->name_union_parishad;
            $holding->post_office=$request->post_office;
            $holding->upazila_thana=$request->upazila_thana;
            $holding->district=$request->district;
            $holding->status=0;
            if($request->has('image'))
            $holding->image=$this->resizeImage($request->image,'uploads/holding',true,300,300,false);

            if($request->has('nid_image'))
            $holding->nid_image=$this->resizeImage($request->nid_image,'uploads/holding',true,500,500,false);

            if($request->has('birth_registration_image'))
            $holding->birth_registration_image=$this->resizeImage($request->birth_registration_image,'uploads/holding',true,500,700,false);

            $holding->save();
            Toastr::success('হোল্ডিং সফলভাবে সম্পন্ন হয়েছে!');
            return redirect(route(currentUser().'.holding.index'));
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
        $education = explode(',', $hold->edu_qual);
        $Mobile = explode(',', $hold->mobile_bank);
        $Govt_fac = explode(',', $hold->government_facilities);
        $Digital_div = explode(',', $hold->digital_devices);
        $Telecommunic = explode(',', $hold->telecommunications);
        $Source_inc = explode(',', $hold->source_income);
        $Business_tax = explode(',', $hold->business_taxes);
        $Residence = explode(',', $hold->residence_type);
        return view('holding.show',compact('hold','education','Mobile','Govt_fac','Digital_div','Telecommunic','Source_inc','Business_tax','Residence'));
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
        $education = explode(',', $hold->edu_qual);
        $Mobile = explode(',', $hold->mobile_bank);
        $Govt_fac = explode(',', $hold->government_facilities);
        $Digital_div = explode(',', $hold->digital_devices);
        $Telecommunic = explode(',', $hold->telecommunications);
        $Source_inc = explode(',', $hold->source_income);
        $Business_tax = explode(',', $hold->business_taxes);
        $Residence = explode(',', $hold->residence_type);
        return view('holding.edit',compact('hold','education','Mobile','Govt_fac','Digital_div','Telecommunic','Source_inc','Business_tax','Residence'));
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
            $holding->form_no=$request->form_no;
            $holding->holding_date=$request->holding_date;
            $holding->head_household=$request->head_household;
            $holding->father_name=$request->father_name;
            $holding->mother_name=$request->mother_name;
            $holding->husband_wife=$request->husband_wife;
            $holding->new_holding_no=$request->new_holding_no;
            $holding->previous_holding_no=$request->previous_holding_no;
            $holding->village=$request->village;
            $holding->ward_no=$request->ward_no;
            $holding->birth_date=$request->birth_date;
            $holding->voter_id_no=$request->voter_id_no;
            $holding->phone=$request->phone;
            $holding->email=$request->email;
            $holding->marital_status=$request->marital_status;
            $holding->gender=$request->gender;
            $holding->digital_birth_cer=$request->digital_birth_cer;
            $holding->paved_bathroom=$request->paved_bathroom;
            $holding->expatriate=$request->expatriate;
            $holding->power_connection=$request->power_connection;
            $holding->tube_well=$request->tube_well;
            $holding->bank=$request->bank;
            $holding->edu_qual=implode(',',$request->edu_qual);
            $holding->family_male=$request->family_male;
            $holding->family_female=$request->family_female;
            $holding->family_total=$request->family_total;
            $holding->single_joint_family=$request->single_joint_family;
            $holding->religion=$request->religion;
            $holding->mobile_bank=implode(',',$request->mobile_bank);
            $holding->government_facilities=implode(',',$request->government_facilities);
            $holding->family_status=$request->family_status;
            $holding->digital_devices=implode(',',$request->digital_devices);
            $holding->telecommunications=implode(',',$request->telecommunications);
            $holding->source_income=implode(',',$request->source_income);
            $holding->business_taxes=implode(',',$request->business_taxes);
            $holding->business_amount_taxes=$request->business_amount_taxes;
            $holding->sources_other_taxes=$request->sources_other_taxes;
            $holding->other_taxes_amount=$request->other_taxes_amount;
            $holding->residence_type=implode(',',$request->residence_type);
            $holding->approximate_price_house=$request->approximate_price_house;
            $holding->annual_taxable_value=$request->annual_taxable_value;
            $holding->taxable_value_house=$request->taxable_value_house;
            $holding->annual_tax_amount=$request->annual_tax_amount;
            $holding->total_tax=$request->total_tax;

            $path='uploads/holding';

            if($request->has('signature_informant') && $request->signature_informant)
            if($this->deleteImage($holding->signature_informant,$path))
                $holding->signature_informant=$this->resizeImage($request->signature_informant,$path,true,200,200,false);

            if($request->has('image') && $request->image)
            if($this->deleteImage($holding->image,$path))
                $holding->image=$this->resizeImage($request->image,$path,true,200,200,false);

            if($request->has('signature_collector') && $request->signature_collector)
            if($this->deleteImage($holding->signature_collector,$path))
                $holding->signature_collector=$this->resizeImage($request->signature_collector,$path,true,200,200,false);

            $holding->save();
            Toastr::success('holding Update Successfully!');
            return redirect(route('holding.index'));
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
}
