<?php

namespace App\Http\Controllers;

use App\Models\AttestationFamilymember;
use App\Models\AttestationFamilymemberChild;
use App\Models\Ward_no;
use Illuminate\Http\Request;
use App\Models\All_onlineApplications;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class AttestationFamilymemberController extends Controller
{
    use ImageHandleTraits;

    public function profile()
    {
        $attestation=AttestationFamilymember::where('status',1)->get();
        return view('attestation_familymember.profile',compact('attestation'));
    }

    public function add_profile(Request $request, $id)
    {
        try{
            $attestation=AttestationFamilymember::findOrFail(encryptor('decrypt',$id));
            $attestation->status=$request->status;
            $attestation->save();
            Toastr::success('প্রোফাইলে যুক্ত করা হয়েছে!');
            return redirect(route(currentUser().'.attestation.index'));
        }
        catch (Exception $e){
            return back()->withInput();

        }

    }

    public function index()
    {
        $attestation = AttestationFamilymember::where('status',0)->get();
        return view('attestation_familymember.index',compact('attestation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wards=Ward_no::where('id',$hold->ward_id)->select('id','ward_name','ward_name_bn')->first();
        return view('attestation_familymember.create',compact('wards'));
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
            $p=new AttestationFamilymember;
            $all= All_onlineApplications::where('id',$request->all_aplication)->first();
            // $p->form_no=$request->form_no;
            $p->holding_date=$all->holding_date;
            $p->head_household=$all->head_household;
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
            $Govt_fac = explode(',', $all->government_facilities);
            $p->government_facilities=implode(',',$Govt_fac);

            // ্পরিবার সদস্যদের প্রত্যয়ন পত্র অন্যান্য তথ্য
            $p->familyhead_name=$request->familyhead_name;
            $p->father_husband=$request->father_husband;
            $p->attesteation_mother_name=$request->attesteation_mother_name;
            $p->house_holding_no=$request->house_holding_no;
            $p->total_family_members=$request->total_family_members;
            $p->street_nm=$request->street_nm;
            $p->village_name=$request->village_name;
            $p->ward_no=$request->ward_no;
            $p->union_id=$request->union_id;
            $p->post_office=$request->post_office;
            $p->upazila_id=$request->upazila_id;
            $p->district_id=$request->district_id;
            $p->created_by=currentUserId();
            $p->status=0;
            if($request->has('image'))
            $p->image=$this->resizeImage($request->image,'uploads/attestation',true,300,300,false);

            if($request->has('nid_image'))
            $p->nid_image=$this->resizeImage($request->nid_image,'uploads/attestation',true,500,500,false);

            if($request->has('holding_image'))
            $p->holding_image=$this->resizeImage($request->holding_image,'uploads/attestation',true,500,700,false);

            if($request->has('image_death_certificate'))
            $p->image_death_certificate=$this->resizeImage($request->image_death_certificate,'uploads/attestation',true,500,700,false);

            if($p->save()){
                if($request->cname){
                    foreach($request->cname as $key => $value){
                        // dd($request->all());
                        if($value){
                        $cwarisan = new AttestationFamilymemberChild;
                        $cwarisan->familymember_id=$p->id;
                        $cwarisan->name=$request->cname[$key];
                        $cwarisan->ralation=$request->crelation[$key];
                        $cwarisan->birth_date=$request->cbirth_date[$key];
                        $cwarisan->cnid=$request->cnid[$key];
                        $cwarisan->comment=$request->comment[$key];
                        $cwarisan->save();
                    }
                    }
                }
                Toastr::success('পরিবার সদস্যের প্রত্যয়নপত্র সফলভাবে তৈরি করা ্হয়েছে!!');
                return redirect()->route(currentUser().'.attesteation.index');
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttestationFamilymember  $attestationFamilymember
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attestation=AttestationFamilymember::findOrFail(encryptor('decrypt',$id));
        return view('attestation_familymember.show',compact('attestation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttestationFamilymember  $attestationFamilymember
     * @return \Illuminate\Http\Response
     */
    public function edit(AttestationFamilymember $attestationFamilymember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AttestationFamilymember  $attestationFamilymember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AttestationFamilymember $attestationFamilymember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttestationFamilymember  $attestationFamilymember
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttestationFamilymember $attestationFamilymember)
    {
        //
    }
}
