<?php

namespace App\Http\Controllers;

use App\Models\All_onlineApplications;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Thana;
use App\Models\Settings\Location\Union;
use App\Models\Ward_no;
use App\Models\MobileBank;
use App\Models\DigitalDevice;
use App\Models\EducationalQualification;
use App\Models\GovernmentFacility;
use App\Models\Profession;

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
    public function loadUnionAjax($upazila_id)
    {
        $unions = Union::where('upazila_id', $upazila_id)->select('id','name','name_bn')->get();
        return response()->json($unions, 200);
    }

    public function create()
    {
        $mobile_bank=MobileBank::orderBy('created_at')->get();
        $digital_device=DigitalDevice::orderBy('created_at')->get();
        $edu_q=EducationalQualification::orderBy('created_at')->get();
        $gov_f=GovernmentFacility::orderBy('created_at')->get();
        $profession=Profession::orderBy('created_at')->get();
        return view('allaplicaltion.create',compact('mobile_bank','digital_device','edu_q','gov_f','profession'));
    }

    public function application_check($type)
    {
        $all= All_onlineApplications::where('id',$type)->first();
        // dd($all);
        switch ($all->type_application) {
        case 1:
            $ward=Ward_no::all();
            $districts=District::select('id','name','name_bn')->get();
           return view('holding.create',compact('all','ward','districts'));
           break;
        case 2:
            $ward=Ward_no::all();
            $districts=District::select('id','name','name_bn')->get();
            // return $districts;
            return view('trade_license.create',compact('all','districts','ward'));
            break;
        case 3:
            $ward=Ward_no::all();
            $districts=District::select('id','name','name_bn')->get();
            return view('warishan.create',compact('all','districts','ward'));
            break;
        case 4:
            $ward=Ward_no::all();
            $districts=District::select('id','name','name_bn')->get();
            return view('citizen_certificate.create',compact('all','districts','ward'));
            break;
        case 5:
            $ward=Ward_no::all();
            return view('attestation_familymember.create',compact('all','ward'));
            break;
        case 6:
            $district=District::all();
            $thana=Thana::all();
            $ward=Ward_no::all();
            return view('vgfcard.create',compact('all','district','thana','ward'));
            break;
            // $district=District::all();
            // $thana=Thana::all();
            // $ward=Ward_no::all();
            // return view('oldage_allowance.create',compact('all','district','thana','ward'));
            // break;
        // case 7:
        //     $district=District::all();
        //     $thana=Thana::all();
        //     $ward=Ward_no::all();
        //     return view('disability.create',compact('all','district','thana','ward'));
        //     break;
        // case 8:
        //     $district=District::all();
        //     $thana=Thana::all();
        //     $ward=Ward_no::all();
        //     return view('widow_allowance.create',compact('all','district','thana','ward'));
        //     break;
        // case 9:
        //     return view('attestation_familymember.create',compact('all'));
        //     break;
        default:
            return view('other_information.default',compact('all'));
        }
    }


    public function store(Request $request)
    {
        try{
            $data=new All_onlineApplications;
            $data->form_no=$request->form_no;
            $data->holding_date=$request->holding_date;
            $data->head_household=$request->head_household;
            $data->husband_wife=$request->husband_wife;
            $data->father_name=$request->father_name;
            $data->mother_name=$request->mother_name;
            $data->gender=$request->gender;
            $data->birth_date=$request->birth_date;
            $data->voter_id_no=$request->voter_id_no;
            $data->birth_registration_id=$request->birth_registration_id;
            $data->religion=$request->religion;
            $data->phone=$request->phone;
            $data->edu_qual=$request->edu_qual;
            $data->email=$request->email;
            $data->source_income=$request->source_income;
            $data->marital_status=$request->marital_status;
            $data->internet_connection=$request->internet_connection;
            $data->tube_well=$request->tube_well;
            $data->freedom_fighter=$request->freedom_fighter;
            $data->disline_connection=$request->disline_connection;
            $data->paved_bathroom=$request->paved_bathroom;
            $data->arsenic_free=$request->arsenic_free;
            $data->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $data->digital_devices=$request->digital_devices?implode(',',$request->digital_devices):'';
            $data->government_facilities=$request->government_facilities?implode(',',$request->government_facilities):'';
            $data->type_application=$request->type_application;
            $data->created_by=currentUserId();

            $data->save();
                return redirect(route('aplication.application_check',$data));
        }catch (Exception $e){
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
        $Mobile_bank = explode(',', $all->mobile_bank);
        $Digital_devices = explode(',', $all->digital_devices);
        $Govt_fac = explode(',', $all->government_facilities);
        return view('allaplicaltion.edit',compact('all','Mobile_bank','Digital_devices','Govt_fac'));
    }


    public function update(Request $request,$id)
    {
        try{
            $data= All_onlineApplications::where('id',$id)->first();
            $data->form_no=$request->form_no;
            $data->holding_date=$request->holding_date;
            $data->head_household=$request->head_household;
            $data->husband_wife=$request->husband_wife;
            $data->father_name=$request->father_name;
            $data->mother_name=$request->mother_name;
            $data->gender=$request->gender;
            $data->birth_date=$request->birth_date;
            $data->voter_id_no=$request->voter_id_no;
            $data->birth_registration_id=$request->birth_registration_id;
            $data->religion=$request->religion;
            $data->phone=$request->phone;
            $data->edu_qual=$request->edu_qual;
            $data->email=$request->email;
            $data->source_income=$request->source_income;
            $data->marital_status=$request->marital_status;
            $data->internet_connection=$request->internet_connection;
            $data->tube_well=$request->tube_well;
            $data->disline_connection=$request->disline_connection;
            $data->paved_bathroom=$request->paved_bathroom;
            $data->freedom_fighter=$request->freedom_fighter;
            $data->bank_acc=$request->bank_acc;
            $data->arsenic_free="";
            $data->mobile_bank=$request->mobile_bank?implode(',',$request->mobile_bank):'';
            $data->digital_devices=$request->digital_devices?implode(',',$request->digital_devices):'';
            $data->government_facilities=$request->government_facilities?implode(',',$request->government_facilities):'';
            $data->type_application=$request->type_application;
            $data->created_by=currentUserId();

            $data->save();
                return redirect(route('aplication.application_check',$data));
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
