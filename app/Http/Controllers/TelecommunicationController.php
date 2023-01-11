<?php

namespace App\Http\Controllers;

use App\Models\Telecommunication;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class TelecommunicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $telecom=Telecommunication::all();
        return view('holding-supporting.telecomunication.index',compact('telecom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holding-supporting.telecomunication.create');
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
            $p=new Telecommunication;
            $p->name=$request->name;
            $p->description=$request->description;
            if($p->save()){
            Toastr::success('Create Successfully!');
            return redirect()->route(currentUser().'.telecomunication.index');
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
     * @param  \App\Models\Telecommunication  $telecommunication
     * @return \Illuminate\Http\Response
     */
    public function show(Telecommunication $telecommunication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Telecommunication  $telecommunication
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d=Telecommunication::findOrFail(encryptor('decrypt',$id));
        return view('holding-supporting.telecomunication.edit',compact('d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Telecommunication  $telecommunication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try{
            $p=Telecommunication::findOrFail(encryptor('decrypt',$id));;
            $p->name=$request->name;
            $p->description=$request->description;
            if($p->save()){
            Toastr::success('Update Successfully!');
            return redirect()->route(currentUser().'.telecomunication.index');
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
     * @param  \App\Models\Telecommunication  $telecommunication
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p= Telecommunication::findOrFail(encryptor('decrypt',$id));
        $p->delete();
        return redirect()->back();
    }
}
