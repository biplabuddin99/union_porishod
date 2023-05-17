<?php

namespace App\Http\Controllers;

use App\Models\Warishan;
use Illuminate\Http\Request;
use App\Models\Ward_no;
use App\Models\WarisanChild;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Thana;
use App\Models\All_onlineApplications;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use Exception;
use Carbon\Carbon;
use App\Models\EducationalQualification;
use App\Models\Profession;

class WarishanController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function primaryIndex($id)
    {
        $warishan=Warishan::where('id',$id)->first();
        $districts=District::where('id',$warishan->district_id)->select('id','name','name_bn')->first();
        $upazilas=Upazila::where('id',$warishan->upazila_id)->select('id','name','name_bn')->first();
        $wards=Ward_no::where('id',$warishan->ward_id)->select('id','ward_name','ward_name_bn')->first();
        $unions=Union::where('id',$warishan->union_id)->select('id','name','name_bn')->first();
        $Mobile = explode(',', $warishan->mobile_bank);
        $Digital_devices = explode(',', $warishan->digital_devices);
        $Govt_fac = explode(',', $warishan->government_facilities);
        $Business_tax = explode(',', $warishan->business_taxes);
        return view('warishan.primary_index',compact('warishan','Mobile','Govt_fac','Digital_devices','Business_tax','districts','upazilas','unions','wards'));
    }

    public function index()
    {
        $warishan = Warishan::where('status',0)->get();
        return view('warishan.index',compact('warishan'));
    }

    public function profile()
    {
        $warishan=Warishan::where('status',1)->get();
        return view('warishan.profile',compact('warishan'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $warishan=Warishan::findOrFail(encryptor('decrypt',$id));
            $warishan->warisan_certificate_fee=$request->warisan_certificate_fee;
            $warishan->approval_date=$request->approval_date;
            $warishan->cancel_reason=$request->cancel_reason;
            $warishan->status=$request->cancel_reason==""?1:2;
            $warishan->save();
            Toastr::success('প্রোফাইলে যুক্ত করা হয়েছে!');
            return redirect(route(currentUser().'.warishan.index'));
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
        $edu_q=EducationalQualification::orderBy('created_at')->get();
        $profession=Profession::orderBy('created_at')->get();
        return view('warishan.create_page1',compact('edu_q','profession'));
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
            $warisan=new Warishan;
            // $warisan->form_no=$request->form_no;
            $warisan->apply_date=Carbon::parse($request->apply_date)->format('Y-m-d');
            $warisan->applicant_name=$request->applicant_name;
            $warisan->father_name=$request->father_name;
            $warisan->mother_name=$request->mother_name;
            $warisan->husband_wife=$request->husband_wife;
            $warisan->birth_date=Carbon::parse($request->birth_date)->format('Y-m-d');
            $warisan->voter_id_no=$request->voter_id_no;
            $warisan->birth_registration_id=$request->birth_registration_id;
            $warisan->gender=$request->gender;
            $warisan->religion=$request->religion;
            $warisan->marital_status=$request->marital_status;
            $warisan->freedom_fighter=$request->freedom_fighter;
            $warisan->edu_qual=$request->edu_qual;
            $warisan->source_income=$request->source_income;
            $warisan->phone=$request->phone;
            $warisan->email=$request->email;
            $warisan->num_male=$request->num_male;
            $warisan->num_female=$request->num_female;
            $warisan->status=0;
            $warisan->created_by=currentUserId();
            $warisan->save();
            return redirect(route('warishansecondpart.form',Crypt::encrypt($warisan->id)));
            $all= All_onlineApplications::where('id',$request->all_aplication)->first();
            // $p->form_no=$request->form_no;
            $p->holding_date=$all->holding_date;
            $p->head_household=$all->head_household;
            $p->father_name=$all->father_name;
            $p->husband_wife=$all->husband_wife;
            $p->mother_name=$all->mother_name;
            $p->gender=$all->gender;
            $p->birth_date=$all->birth_date;
            $p->voter_id_no=$all->voter_id_no;
            $p->birth_registration_id=$all->birth_registration_id;
            $p->religion=$all->religion;
            $p->phone=$all->phone;
            $p->edu_qual=$all->edu_qual;
            $p->email=$all->email;
            $p->source_income=$all->source_income;
            $p->marital_status=$all->marital_status;
            $p->internet_connection=$all->internet_connection;
            $p->tube_well=$all->tube_well;
            $p->disline_connection=$all->disline_connection;
            $p->paved_bathroom=$all->paved_bathroom;
            $p->arsenic_free=$all->arsenic_free;
            $p->freedom_fighter=$all->freedom_fighter;
            $Govt_fac = explode(',', $all->government_facilities);
            $p->government_facilities=implode(',',$Govt_fac);
            $Mobile = explode(',', $all->mobile_bank);
            $p->mobile_bank=implode(',',$Mobile);
            $Digital_devices = explode(',', $all->digital_devices);
            $p->digital_devices=implode(',',$Digital_devices);

            // ্ওয়ারিশান আবেদনের অন্যান্য তথ্য
            $p->warishan_person_name=$request->warishan_person_name;
            $p->father_husband=$request->father_husband;
            $p->warishan_mother_name=$request->warishan_mother_name;
            $p->date_death_warishan=$request->date_death_warishan;
            // $p->update_holding_tax=$request->update_holding_tax;
            // $p->wife_number=$request->wife_number;
            // $p->son=$request->son;
            // $p->daughter=$request->daughter;
            $p->total_warishan_members=$request->total_warishan_members;
            $p->house_holding_no=$request->house_holding_no;
            $p->street_nm=$request->street_nm;
            $p->village_name=$request->village_name;
            $p->ward_id=$request->ward_id;
            $p->union_id=$request->union_id;
            $p->post_office=$request->post_office;
            $p->upazila_id=$request->upazila_id;
            $p->district_id=$request->district_id;
            $p->status=0;
            if($request->has('image'))
            $p->image=$this->resizeImage($request->image,'uploads/warishan',true,300,300,false);

            if($request->has('nid_image'))
            $p->nid_image=$this->resizeImage($request->nid_image,'uploads/warishan',true,500,500,false);

            if($request->has('holding_image'))
            $p->holding_image=$this->resizeImage($request->holding_image,'uploads/warishan',true,500,700,false);

            if($request->has('image_death_certificate'))
            $p->image_death_certificate=$this->resizeImage($request->image_death_certificate,'uploads/warishan',true,500,700,false);

            if($p->save()){
                if($request->cname){
                    foreach($request->cname as $key => $value){
                        // dd($request->all());
                        if($value){
                        $cwarisan = new WarisanChild;
                        $cwarisan->warisan_id=$p->id;
                        $cwarisan->name=$request->cname[$key];
                        $cwarisan->ralation=$request->crelation[$key];
                        $cwarisan->birth_date=$request->cbirth_date[$key];
                        $cwarisan->cnid=$request->cnid[$key];
                        $cwarisan->ccomments=$request->ccomments[$key];
                        $cwarisan->save();
                    }
                    }
                }
                Toastr::success('ওয়ারিশান সফলভাবে তৈরি করা ্হয়েছে!!');
                return redirect(route('warishan_primary.list',$p->id));
            }else{
                Toastr::success('দয়করে আবার চেষ্টা করুন!');
                return redirect()->back();

            }
        }catch (Exception $e){
            Toastr::success('দয়করে আবার চেষ্টা করুন!');
            dd($e);
            return back()->withInput();
        }
    }

    public function FormPartSecond($encrypted_id)
    {
        $warisan = Warishan::findOrFail(Crypt::decrypt($encrypted_id));
        return view('warishan.create_page2',compact('warisan'));
    }

    public function FormPartSecondUpdate(Request $request, $encrypted_id)
    {
        try{
            $warisan = Warishan::findOrFail(Crypt::decrypt($encrypted_id));
            // আবেদনের অন্যান্য তথ্য
            $warisan->warishan_person_name=$request->warishan_person_name;
            $warisan->warisan_father_name=$request->warisan_father_name;
            $warisan->warishan_mother_name=$request->warishan_mother_name;
            $warisan->warisan_husband_wife=$request->warisan_husband_wife;
            $warisan->date_death_warishan=$request->date_death_warishan;
            $warisan->total_warishan_members=$request->total_warishan_members;
            $warisan->house_holding_number=$request->house_holding_number;
            $warisan->street_nm=$request->street_nm;
            $warisan->village_name=$request->village_name;
            $warisan->ward_id=$request->ward_id;
            $warisan->post_office=$request->post_office;
            $warisan->union_id=$request->union_id;
            $warisan->upazila_id=$request->upazila_id;
            $warisan->district_id=$request->district_id;

            if($request->has('image'))
            $warisan->image=$this->resizeImage($request->image,'uploads/warisan',true,300,300,false);

            if($request->has('nid_image'))
            $warisan->nid_image=$this->resizeImage($request->nid_image,'uploads/warisan',true,500,500,false);

            if($request->has('image_death_certificate'))
            $warisan->image_death_certificate=$this->resizeImage($request->image_death_certificate,'uploads/warisan',true,500,700,false);
            $warisan->status=1;
            $warisan->chairman_id=request()->session()->get('upsetting')?request()->session()->get('upsetting')->chairman_id:"1";
            if($warisan->save()){
                if($request->cname){
                    foreach($request->cname as $key => $value){
                        // dd($request->all());
                        if($value){
                        $cwarisan = new WarisanChild;
                        $cwarisan->warisan_id=$warisan->id;
                        $cwarisan->name=$request->cname[$key];
                        $cwarisan->ralation=$request->crelation[$key];
                        $cwarisan->birth_date=$request->cbirth_date[$key];
                        $cwarisan->cnid=$request->cnid[$key];
                        $cwarisan->ccomments=$request->ccomments[$key];
                        $cwarisan->save();
                    }
                    }
                }
                Toastr::success('ওয়ারিশান সফলভাবে তৈরি করা ্হয়েছে!!');
                return redirect(route('warishan_primary.list',Crypt::encrypt($warisan->id)));
            }else{
                Toastr::success('দয়করে আবার চেষ্টা করুন!');
                return redirect()->back();

            }
        }
        catch (Exception $e){
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warishan  $warishan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warisan=Warishan::findOrFail(encryptor('decrypt',$id));
        $districts=District::where('id',$warisan->district_id)->select('id','name','name_bn')->first();
        $upazilas=Upazila::where('id',$warisan->upazila_id)->select('id','name','name_bn')->first();
        $wards=Ward_no::where('id',$warisan->ward_id)->select('id','ward_name','ward_name_bn')->first();
        return view('warishan.show',compact('warisan','districts','upazilas','wards'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warishan  $warishan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Division::all();
        $district = District::all();
        $thana = Thana::all();
        $word = Ward_no::all();
        $warishan = Warishan::findOrFail(encryptor('decrypt',$id));
        $Govt_fac = explode(',', $warishan->government_facilities);
        return view('warishan.edit',compact('division','district','thana','warishan','word','Govt_fac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warishan  $warishan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $p=Warishan::findOrFail(encryptor('decrypt',$id));

            $p->warishan_person_name=$request->warishan_person_name;
            $p->father_husband=$request->father_husband;
            $p->mother_name=$request->mother_name;
            $p->date_death_warishan=$request->date_death_warishan;
            // $p->update_holding_tax=$request->update_holding_tax;
            // $p->wife_number=$request->wife_number;
            // $p->son=$request->son;
            // $p->daughter=$request->daughter;
            $p->total_warishan_members=$request->total_warishan_members;
            $p->house_holding_no=$request->house_holding_no;
            $p->street_nm=$request->street_nm;
            $p->village_name=$request->village_name;
            $p->ward_no=$request->ward_no;
            $p->name_union_parishad=$request->name_union_parishad;
            $p->post_office=$request->post_office;
            $p->upazila_thana=$request->upazila_thana;
            $p->district=$request->district;
            if($request->has('image'))
            $p->image=$this->resizeImage($request->image,'uploads/warishan',true,300,300,false);

            if($request->has('nid_image'))
            $p->nid_image=$this->resizeImage($request->nid_image,'uploads/warishan',true,500,500,false);

            if($request->has('holding_image'))
            $p->holding_image=$this->resizeImage($request->holding_image,'uploads/warishan',true,500,700,false);

            if($request->has('image_death_certificate'))
            $p->image_death_certificate=$this->resizeImage($request->image_death_certificate,'uploads/warishan',true,500,700,false);
            if($p->save()){
            Toastr::success('Warishan Updated Successfully!');
            return redirect()->route(currentUser().'.warishan.index');
            }else{
            Toastr::success('Please try Again!');
            return redirect()->back();
            }

        }
        catch (Exception $e){
            Toastr::success('Please try Again!');
            dd($e);
            return back()->withInput();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warishan  $warishan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p= Warishan::findOrFail(encryptor('decrypt',$id));
        $p->delete();
        return redirect()->back();
    }
}
