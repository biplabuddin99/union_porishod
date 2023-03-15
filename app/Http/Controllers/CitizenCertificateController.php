<?php

namespace App\Http\Controllers;

use App\Models\CitizenCertificate;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\Thana;
use App\Models\Ward_no;
use Exception;
use Illuminate\Http\Request;
use App\Models\All_onlineApplications;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;

class CitizenCertificateController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $citizen->status=$request->status;
            $citizen->save();
            Toastr::success('প্রোপাইলে যুক্ত করা হয়েছে!');
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
        $division=Division::all();
        $district=District::all();
        $thana=Thana::all();
        $ward=Ward_no::all();
        return view('citizen_certificate.create',compact('division','district','thana','ward'));
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
            $citizen=new CitizenCertificate();
            $all= All_onlineApplications::where('id',$request->all_aplication)->first();
            // $citizen->form_no=$request->form_no;
            $citizen->holding_date=$all->holding_date;
            $citizen->head_household=$all->head_household;
            $citizen->husband_wife=$all->husband_wife;
            $citizen->mother_name=$all->mother_name;
            $citizen->gender=$all->gender;
            $citizen->birth_date=$all->birth_date;
            $citizen->voter_id_no=$all->voter_id_no;
            $citizen->birth_registration_id=$all->birth_registration_id;
            $citizen->religion=$all->religion;
            $citizen->phone=$all->phone;
            $citizen->edu_qual=$all->edu_qual;
            $citizen->email=$all->email;
            $citizen->source_income=$all->source_income;
            $citizen->marital_status=$all->marital_status;
            $citizen->internet_connection=$all->internet_connection;
            $citizen->tube_well=$all->tube_well;
            $citizen->disline_connection=$all->disline_connection;
            $citizen->paved_bathroom=$all->paved_bathroom;
            $citizen->arsenic_free=$all->arsenic_free;
            $Govt_fac = explode(',', $all->government_facilities);
            $citizen->government_facilities=implode(',',$Govt_fac);

            // নাগরিক ‍সনদ আবেদনের অন্যান্য তথ্য
            $citizen->permanent_resident=$request->permanent_resident;
            $citizen->citizen_bangladesh=$request->citizen_bangladesh;
            $citizen->voters_union=$request->voters_union;
            $citizen->involved_anti_state=$request->involved_anti_state;
            $citizen->update_holdingtax=$request->update_holdingtax;
            $citizen->house_holding_no=$request->house_holding_no;
            $citizen->street_nm=$request->street_nm;
            $citizen->village_name=$request->village_name;
            $citizen->ward_no=$request->ward_no;
            $citizen->name_union_parishad=$request->name_union_parishad;
            $citizen->post_office=$request->post_office;
            $citizen->upazila_thana=$request->upazila_thana;
            $citizen->district=$request->district;
            $citizen->status=0;
            if($request->has('image'))
            $citizen->image=$this->resizeImage($request->image,'uploads/citizen_certificate/image',true,300,300,false);

            if($request->has('nid_image'))
            $citizen->nid_image=$this->resizeImage($request->nid_image,'uploads/citizen_certificate/nid',true,500,500,false);

            if($request->has('holding_image'))
            $citizen->holding_image=$this->resizeImage($request->holding_image,'uploads/citizen_certificate/holding',true,500,700,false);

            if($request->has('image_birth_certificate'))
            $citizen->image_birth_certificate=$this->resizeImage($request->image_birth_certificate,'uploads/citizen_certificate/birth',true,500,700,false);
            if($citizen->save()){
                Toastr::success('নাগরিক সনদের আবেদন সফলভাবে সম্পন্ন হয়েছে!!');
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
           $citizen->holding_date=$request->holding_date;
           $citizen->head_household=$request->head_household;
           $citizen->husband_wife=$request->husband_wife;
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

           // নাগরিক ‍সনদ আবেদনের অন্যান্য তথ্য
           $citizen->permanent_resident=$request->permanent_resident;
           $citizen->citizen_bangladesh=$request->citizen_bangladesh;
           $citizen->voters_union=$request->voters_union;
           $citizen->involved_anti_state=$request->involved_anti_state;
           $citizen->update_holdingtax=$request->update_holdingtax;
           $citizen->house_holding_no=$request->house_holding_no;
           $citizen->street_nm=$request->street_nm;
           $citizen->village_name=$request->village_name;
           $citizen->ward_no=$request->ward_no;
           $citizen->name_union_parishad=$request->name_union_parishad;
           $citizen->post_office=$request->post_office;
           $citizen->upazila_thana=$request->upazila_thana;
           $citizen->district=$request->district;
           $citizen->status=0;

            $path='uploads/citizen_certificate/nid';
           $path1='uploads/citizen_certificate/image';
           $path2='uploads/citizen_certificate/holding';
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
