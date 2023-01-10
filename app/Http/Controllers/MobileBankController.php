<?php

namespace App\Http\Controllers;

use App\Models\MobileBank;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class MobileBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $di=MobileBank::all();
        return view('holding-supporting.mobilebank.index',compact('di'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holding-supporting.mobilebank.create');
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
            $p=new MobileBank;
            $p->name=$request->name;
            $p->description=$request->description;
            if($p->save()){
            Toastr::success('Create Successfully!');
            return redirect()->route(currentUser().'.digitaldevice.index');
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
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function show(MobileBank $mobileBank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function edit(MobileBank $mobileBank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MobileBank $mobileBank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MobileBank  $mobileBank
     * @return \Illuminate\Http\Response
     */
    public function destroy(MobileBank $mobileBank)
    {
        //
    }
}
