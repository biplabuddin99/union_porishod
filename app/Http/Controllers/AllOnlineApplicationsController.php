<?php

namespace App\Http\Controllers;

use App\Models\All_onlineApplications;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;

class AllOnlineApplicationsController extends Controller
{

    public function index()
    {
        //
    }
    public function loadUpazillaAjax($district_id)
    {
        $upazilas = Upazila::where('district_id', $district_id)->select('id','name','name_bn')->get();
        return response()->json($upazilas, 200);
    }

    public function create()
    {
        return view('allaplicaltion.create');
    }

    public function application_check($type)
    {
        $all= All_onlineApplications::where('id',$type)->first();
        // dd($all);
        switch ($all->type_application) {
        case 1:
           return view('holding.create',compact('all'));
           break;
        case 2:
            $districts=District::select('id','name','name_bn')->get();
            // return $districts;
            return view('trade_license.create',compact('all','districts'));
            break;
        case 3:
            return view('warishan.create',compact('all'));
            break;
        case 4:
            return view('citizen_certificate.create',compact('all'));
            break;
        case 5:
            return view('vgfcard.create',compact('all'));
            break;
        case 6:
            return view('oldage_allowance.create');
            break;
        case 7:
            return view('disability.create');
            break;
        case 8:
            return view('widow_allowance.create');
            break;
        case 9:
            return view('other_information.create',compact('all'));
            break;
        default:
            return view('other_information.create',compact('all'));
        }
    }


    public function store(Request $request)
    {
        try{
            $all_onlineApplications=new All_onlineApplications;
            $all_onlineApplications->form_no=$request->form_no;
            $all_onlineApplications->holding_date=$request->holding_date;
            $all_onlineApplications->head_household=$request->head_household;
            $all_onlineApplications->husband_wife=$request->husband_wife;
            $all_onlineApplications->mother_name=$request->mother_name;
            $all_onlineApplications->gender=$request->gender;
            $all_onlineApplications->birth_date=$request->birth_date;
            $all_onlineApplications->voter_id_no=$request->voter_id_no;
            $all_onlineApplications->birth_registration_id=$request->birth_registration_id;
            $all_onlineApplications->religion=$request->religion;
            $all_onlineApplications->phone=$request->phone;
            $all_onlineApplications->edu_qual=$request->edu_qual;
            $all_onlineApplications->email=$request->email;
            $all_onlineApplications->source_income=$request->source_income;
            $all_onlineApplications->marital_status=$request->marital_status;
            $all_onlineApplications->internet_connection=$request->internet_connection;
            $all_onlineApplications->tube_well=$request->tube_well;
            $all_onlineApplications->disline_connection=$request->disline_connection;
            $all_onlineApplications->paved_bathroom=$request->paved_bathroom;
            $all_onlineApplications->arsenic_free=$request->arsenic_free;
            $all_onlineApplications->government_facilities=$request->government_facilities?implode(',',$request->government_facilities):'';
            $all_onlineApplications->type_application=$request->type_application;
    
            $all_onlineApplications->save();
                return redirect(route('aplication.application_check',$all_onlineApplications));
            }
        catch (Exception $e){
            return back()->withInput();

        }
    }


    public function show(All_onlineApplications $all_onlineApplications)
    {
        //
    }


    public function edit($id)
    {
        $all= All_onlineApplications::where('id',$id)->first();
        $Govt_fac = explode(',', $all->government_facilities);
        return view('allaplicaltion.edit',compact('all','Govt_fac'));
    }


    public function update(Request $request,$id)
    {
        try{
            $all_onlineApplications= All_onlineApplications::where('id',$id)->first();
            $all_onlineApplications->form_no=$request->form_no;
            $all_onlineApplications->holding_date=$request->holding_date;
            $all_onlineApplications->head_household=$request->head_household;
            $all_onlineApplications->husband_wife=$request->husband_wife;
            $all_onlineApplications->mother_name=$request->mother_name;
            $all_onlineApplications->gender=$request->gender;
            $all_onlineApplications->birth_date=$request->birth_date;
            $all_onlineApplications->voter_id_no=$request->voter_id_no;
            $all_onlineApplications->birth_registration_id=$request->birth_registration_id;
            $all_onlineApplications->religion=$request->religion;
            $all_onlineApplications->phone=$request->phone;
            $all_onlineApplications->edu_qual=$request->edu_qual;
            $all_onlineApplications->email=$request->email;
            $all_onlineApplications->source_income=$request->source_income;
            $all_onlineApplications->marital_status=$request->marital_status;
            $all_onlineApplications->internet_connection=$request->internet_connection;
            $all_onlineApplications->tube_well=$request->tube_well;
            $all_onlineApplications->disline_connection=$request->disline_connection;
            $all_onlineApplications->paved_bathroom=$request->paved_bathroom;
            $all_onlineApplications->arsenic_free=$request->arsenic_free;
            $all_onlineApplications->government_facilities=$request->government_facilities?implode(',',$request->government_facilities):'';
            $all_onlineApplications->type_application=$request->type_application;
    
            $all_onlineApplications->save();
                return redirect(route('aplication.application_check',$all_onlineApplications));
            }
        catch (Exception $e){
            return back()->withInput();

        }

    }


    public function destroy(All_onlineApplications $all_onlineApplications)
    {
        //
    }
}
