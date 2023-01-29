<?php

namespace App\Http\Controllers;

use App\Models\DisabilityCertificate;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Thana;
use App\Models\Ward_no;
use Illuminate\Http\Request;
use App\Http\Requests\DisabilityCreate;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class DisabilityCertificateController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disability=DisabilityCertificate::all();
        return view('disability.index',compact('disability'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district=District::all();
        $thana=Thana::all();
        $ward=Ward_no::all();
        return view('disability.create',compact('district','thana','ward'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DisabilityCreate $request)
    {
        try{
            $p=new DisabilityCertificate;
            $p->name_en=$request->name_en;
            $p->name_bn=$request->name_bn;
            $p->national_id=$request->national_id;
            $p->birth_registration=$request->birth_registration;
            $p->passport_no=$request->passport_no;
            $p->birth_date=$request->birth_date;
            $p->father_name_en=$request->father_name_en;
            $p->father_name_bn=$request->father_name_bn;
            $p->mother_name_en=$request->mother_name_en;
            $p->mother_name_bn=$request->mother_name_bn;
            $p->occupation=$request->occupation;
            $p->resident=$request->resident;
            $p->educational_qualification=$request->educational_qualification;
            $p->religion=$request->religion;
            $p->gender=$request->gender;
            $p->marital_status=$request->marital_status;
            $p->present_village_en=$request->present_village_en;
            $p->present_village_bn=$request->present_village_bn;
            $p->present_rbs_en=$request->present_rbs_en;
            $p->present_rbs_bn=$request->present_rbs_bn;
            $p->present_holding_no=$request->present_holding_no;
            $p->present_ward_no=$request->present_ward_no;
            $p->present_district_id=$request->present_district_id;
            $p->present_upazila_id=$request->present_upazila_id;
            $p->present_postoffice_id=$request->present_postoffice_id;
            $p->permanent_village_en=$request->permanent_village_en;
            $p->permanent_village_bn=$request->permanent_village_bn;
            $p->permanent_rbs_en=$request->permanent_rbs_en;
            $p->permanent_rbs_bn=$request->permanent_rbs_bn;
            $p->permanent_holding_no=$request->permanent_holding_no;
            $p->permanent_ward_no=$request->permanent_ward_no;
            $p->permanent_district_id=$request->permanent_district_id;
            $p->permanent_upazila_id=$request->permanent_upazila_id;
            $p->permanent_postoffice_id=$request->permanent_postoffice_id;
            $p->mobile=$request->mobile;
            $p->email=$request->email;
            $p->comment_en=$request->comment_en;
            $p->comment_bn=$request->comment_bn;

            if($request->has('image'))
            $p->image=$this->resizeImage($request->image,'uploads/disablity',true,300,300,false);

            if($p->save()){
            Toastr::success('Create Successfully!');
            return redirect()->route(currentUser().'.disablity.index');
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
     * Display the specified resource.
     *
     * @param  \App\Models\DisabilityCertificate  $disabilityCertificate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disability = DisabilityCertificate::findOrFail(encryptor('decrypt',$id));
        return view('disability.show',compact('disability'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DisabilityCertificate  $disabilityCertificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disability=DisabilityCertificate::findOrFail(encryptor('decrypt',$id));
        $district=District::all();
        $thana=Thana::all();
        $ward=Ward_no::all();
        return view('disability.edit',compact('disability','district','thana','ward'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DisabilityCertificate  $disabilityCertificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DisabilityCertificate $disabilityCertificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DisabilityCertificate  $disabilityCertificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(DisabilityCertificate $disabilityCertificate)
    {
        //
    }
}
