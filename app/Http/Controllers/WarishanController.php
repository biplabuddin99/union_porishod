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
use Exception;

class WarishanController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            $warishan->status=$request->status;
            $warishan->save();
            Toastr::success('প্রোপাইলে যুক্ত করা হয়েছে!');
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
        $division = Division::all();
        $district = District::all();
        $thana = Thana::all();
        $word = Ward_no::all();
        return view('warishan.create',compact('division','district','thana','word'));
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
            $p=new Warishan;
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

            // ্ওয়ারিশান আবেদনের অন্যান্য তথ্য
            $p->warishan_person_name=$request->warishan_person_name;
            $p->father_husband=$request->father_husband;
            $p->warishan_mother_name=$request->warishan_mother_name;
            $p->date_death_warishan=$request->date_death_warishan;
            $p->update_holding_tax=$request->update_holding_tax;
            $p->wife_number=$request->wife_number;
            $p->son=$request->son;
            $p->daughter=$request->daughter;
            $p->total_warishan_members=$request->total_warishan_members;
            $p->house_holding_no=$request->house_holding_no;
            $p->street_nm=$request->street_nm;
            $p->village_name=$request->village_name;
            $p->ward_no=$request->ward_no;
            $p->name_union_parishad=$request->name_union_parishad;
            $p->post_office=$request->post_office;
            $p->upazila_thana=$request->upazila_thana;
            $p->district=$request->district;
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
                        $cwarisan->save();
                    }
                    }
                }
                Toastr::success('ওয়ারিশান সফলভাবে তৈরি করা ্হয়েছে!!');
                return redirect()->route(currentUser().'.warishan.index');
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
     * @param  \App\Models\Warishan  $warishan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warisan=Warishan::findOrFail(encryptor('decrypt',$id));
        return view('warishan.show',compact('warisan'));
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
        return view('warishan.edit',compact('division','district','thana','warishan','word'));
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
            $p->update_holding_tax=$request->update_holding_tax;
            $p->wife_number=$request->wife_number;
            $p->son=$request->son;
            $p->daughter=$request->daughter;
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
