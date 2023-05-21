<?php

namespace App\Http\Controllers;

use App\Models\FamilyCertificate;
use App\Models\EducationalQualification;
use App\Models\Profession;
use App\Models\Settings\Location\District;
use App\Models\Ward_no;
use App\Models\FamilyMemberChild;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;

class FamilyCertificateController extends Controller
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
        $edu_q=EducationalQualification::orderBy('created_at')->get();
        $profession=Profession::orderBy('created_at')->get();
        return view('familycertificate.create_page1',compact('edu_q','profession'));
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
            $family=new FamilyCertificate;
            // $family->form_no=$request->form_no;
            $family->apply_date=Carbon::parse($request->apply_date)->format('Y-m-d');
            $family->applicant_name=$request->applicant_name;
            $family->father_name=$request->father_name;
            $family->mother_name=$request->mother_name;
            $family->husband_wife=$request->husband_wife;
            $family->birth_date=Carbon::parse($request->birth_date)->format('Y-m-d');
            $family->voter_id_no=$request->voter_id_no;
            $family->birth_registration_id=$request->birth_registration_id;
            $family->gender=$request->gender;
            $family->religion=$request->religion;
            $family->marital_status=$request->marital_status;
            $family->freedom_fighter=$request->freedom_fighter;
            $family->edu_qual=$request->edu_qual;
            $family->source_income=$request->source_income;
            $family->phone=$request->phone;
            $family->email=$request->email;
            $family->status=0;
            $family->created_by=currentUserId();
            $family->save();
            return redirect(route('familysecondpart.form',Crypt::encrypt($family->id)));
        }catch (Exception $e){
            Toastr::success('দয়করে আবার চেষ্টা করুন!');
            return back()->withInput();
            dd($e);
        }
    }

    public function FormPartSecond($encrypted_id)
    {
        $family = FamilyCertificate::findOrFail(Crypt::decrypt($encrypted_id));
        $ward=Ward_no::all();
        $districts=District::select('id','name','name_bn')->get();
        return view('familycertificate.create_page2',compact('family','ward','districts'));
    }

        public function FormPartSecondUpdate(Request $request, $encrypted_id)
    {
        try{
            $family = FamilyCertificate::findOrFail(Crypt::decrypt($encrypted_id));
            // আবেদনের অন্যান্য তথ্য
            $family->name_head_family=$request->name_head_family;
            $family->comments_permanent_union=$request->comments_permanent_union;
            $family->relationship_applicant=$request->relationship_applicant;
            $family->num_male=$request->num_male;
            $family->num_female=$request->num_female;
            $family->num_male_vot=$request->num_male_vot;
            $family->num_female_vot=$request->num_female_vot;
            $family->house_holding_number=$request->house_holding_number;
            $family->street_nm=$request->street_nm;
            $family->village_name=$request->village_name;
            $family->ward_id=$request->ward_id;
            $family->post_office=$request->post_office;
            $family->union_id=$request->union_id;
            $family->upazila_id=$request->upazila_id;
            $family->district_id=$request->district_id;

            if($request->has('image'))
            $family->image=$this->resizeImage($request->image,'uploads/warishan',true,300,300,false);

            if($request->has('nid_image'))
            $family->nid_image=$this->resizeImage($request->nid_image,'uploads/warishan',true,500,500,false);

            if($request->has('digital_birth_certificate'))
            $family->digital_birth_certificate=$this->resizeImage($request->digital_birth_certificate,'uploads/warishan',true,500,700,false);
            $family->status=1;
            $family->chairman_id=request()->session()->get('upsetting')?request()->session()->get('upsetting')->chairman_id:"1";
            if($family->save()){
                if($request->cname){
                    foreach($request->cname as $key => $value){
                        // dd($request->all());
                        if($value){
                        $cwarisan = new FamilyMemberChild;
                        $cwarisan->family_certificate_id=$family->id;
                        $cwarisan->name=$request->cname[$key];
                        $cwarisan->ralation=$request->crelation[$key];
                        $cwarisan->birth_date=$request->cbirth_date[$key];
                        $cwarisan->cnid=$request->cnid[$key];
                        $cwarisan->ccomments=$request->ccomments[$key];
                        $cwarisan->save();
                    }
                    }
                }
                Toastr::success('পরিবারের সনদ সফলভাবে তৈরি করা হয়েছে!!');
                return redirect(route('warishan_primary.list',Crypt::encrypt($family->id)));
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
     * @param  \App\Models\FamilyCertificate  $familyCertificate
     * @return \Illuminate\Http\Response
     */
    public function show(FamilyCertificate $familyCertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FamilyCertificate  $familyCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit(FamilyCertificate $familyCertificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FamilyCertificate  $familyCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FamilyCertificate $familyCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FamilyCertificate  $familyCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(FamilyCertificate $familyCertificate)
    {
        //
    }
}
