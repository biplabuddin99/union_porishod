<?php

namespace App\Http\Controllers;

use App\Models\MaternityAllowance;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Thana;
use App\Models\Ward_no;
use Illuminate\Http\Request;
use App\Http\Requests\MaternityAllowanceCreate;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class MaternityAllowanceController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maternity=MaternityAllowance::all();
        return view('maternity_allowance.index',compact('maternity'));
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
        return view('maternity_allowance.create',compact('district','thana','ward'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaternityAllowanceCreate $request)
    {
        try{
            $p=new MaternityAllowance;
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
            $p->image=$this->resizeImage($request->image,'uploads/maternityallowance',true,300,300,false);

            if($p->save()){
            Toastr::success('নতুন মাতৃত্বকালীন আবেদন সফলভাবে সম্পন্ন হয়েছে!!');
            return redirect()->route(currentUser().'.maternityallowance.index');
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
     * @param  \App\Models\MaternityAllowance  $maternityAllowance
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maternity = MaternityAllowance::findOrFail(encryptor('decrypt',$id));
        $district=District::all();
        $thana=Thana::all();
        $ward=Ward_no::all();
        return view('maternity_allowance.show',compact('maternity','district','thana','ward'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaternityAllowance  $maternityAllowance
     * @return \Illuminate\Http\Response
     */
    public function edit(MaternityAllowance $maternityAllowance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaternityAllowance  $maternityAllowance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaternityAllowance $maternityAllowance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaternityAllowance  $maternityAllowance
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaternityAllowance $maternityAllowance)
    {
        //
    }
}
