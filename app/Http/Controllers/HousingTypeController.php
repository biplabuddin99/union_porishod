<?php

namespace App\Http\Controllers;

use App\Models\HousingType;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class HousingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $housing=HousingType::all();
        return view('holding-supporting.housing_type.index',compact('housing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holding-supporting.housing_type.create');
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
            $p=new HousingType;
            $p->name=$request->name;
            $p->description=$request->description;
            $p->tax_amount=$request->tax_amount;
            $p->other_charge=$request->other_charge;
            if($p->save()){
            Toastr::success('Create Successfully!');
            return redirect()->route(currentUser().'.housingtype.index');
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
     * @param  \App\Models\HousingType  $housingType
     * @return \Illuminate\Http\Response
     */
    public function show(HousingType $housingType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HousingType  $housingType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d=HousingType::findOrFail(encryptor('decrypt',$id));
        return view('holding-supporting.housing_type.edit',compact('d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HousingType  $housingType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try{
            $p=HousingType::findOrFail(encryptor('decrypt',$id));
            $p->name=$request->name;
            $p->description=$request->description;
            $p->tax_amount=$request->tax_amount;
            $p->other_charge=$request->other_charge;
            if($p->save()){
            Toastr::success('Update Successfully!');
            return redirect()->route(currentUser().'.housingtype.index');
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
     * @param  \App\Models\HousingType  $housingType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p= HousingType::findOrFail(encryptor('decrypt',$id));
        $p->delete();
        return redirect()->back();
    }
}
