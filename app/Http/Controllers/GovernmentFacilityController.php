<?php

namespace App\Http\Controllers;

use App\Models\GovernmentFacility;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;


class GovernmentFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $govt=GovernmentFacility::all();
        return view('holding-supporting.govt_facilities.index',compact('govt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holding-supporting.govt_facilities.create');
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
            $p=new GovernmentFacility;
            $p->name=$request->name;
            $p->description=$request->description;
            if($p->save()){
            Toastr::success('Create Successfully!');
            return redirect()->route(currentUser().'.govtfacility.index');
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
     * @param  \App\Models\GovernmentFacility  $governmentFacility
     * @return \Illuminate\Http\Response
     */
    public function show(GovernmentFacility $governmentFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GovernmentFacility  $governmentFacility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d=GovernmentFacility::findOrFail(encryptor('decrypt',$id));
        return view('holding-supporting.govt_facilities.edit',compact('d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GovernmentFacility  $governmentFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try{
            $p=GovernmentFacility::findOrFail(encryptor('decrypt',$id));;
            $p->name=$request->name;
            $p->description=$request->description;
            if($p->save()){
            Toastr::success('Update Successfully!');
            return redirect()->route(currentUser().'.govtfacility.index');
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
     * @param  \App\Models\GovernmentFacility  $governmentFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p= GovernmentFacility::findOrFail(encryptor('decrypt',$id));
        $p->delete();
        return redirect()->back();
    }
}
