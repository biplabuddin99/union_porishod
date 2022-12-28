<?php

namespace App\Http\Controllers;

use App\Models\Warishan;
use Illuminate\Http\Request;
use App\Models\Ward_no;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Thana;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class WarishanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warishan = Warishan::all();
        return view('warishan.index',compact('warishan'));
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

            $p->warishan_person_name=$request->warishan_person_name;
            $p->dath_date=$request->dath_date;
            $p->fatherOrMother=$request->fatherOrMother;
            $p->village=$request->village;
            $p->ward_no_id=$request->wordNo;
            $p->division_id=$request->divisionName;
            $p->district_id=$request->districtName;
            $p->thana_id=$request->thana;
            
            if($p->save()){
            Toastr::success('Warishan Create Successfully!');
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
     * Display the specified resource.
     *
     * @param  \App\Models\Warishan  $warishan
     * @return \Illuminate\Http\Response
     */
    public function show(Warishan $warishan)
    {
        //
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
            $p->dath_date=$request->dath_date;
            $p->fatherOrMother=$request->fatherOrMother;
            $p->village=$request->village;
            $p->ward_no_id=$request->wordNo;
            $p->division_id=$request->divisionName;
            $p->district_id=$request->districtName;
            $p->thana_id=$request->thana;
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
