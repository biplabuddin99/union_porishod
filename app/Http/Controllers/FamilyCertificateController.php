<?php

namespace App\Http\Controllers;

use App\Models\FamilyCertificate;
use App\Models\EducationalQualification;
use App\Models\Profession;
use App\Models\Settings\Location\District;
use App\Models\Ward_no;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class FamilyCertificateController extends Controller
{
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
            // $family->status=0;
            // $family->created_by=currentUserId();
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
