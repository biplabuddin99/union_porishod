<?php

namespace App\Http\Controllers;

use App\Models\SourceIncome;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class SourceIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $income=SourceIncome::all();
        return view('holding-supporting.source_income.index',compact('income'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holding-supporting.source_income.create');
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
            $p=new SourceIncome;
            $p->name=$request->name;
            $p->description=$request->description;
            if($p->save()){
            Toastr::success('Create Successfully!');
            return redirect()->route(currentUser().'.sourceincome.index');
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
     * @param  \App\Models\SourceIncome  $sourceIncome
     * @return \Illuminate\Http\Response
     */
    public function show(SourceIncome $sourceIncome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SourceIncome  $sourceIncome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d=SourceIncome::findOrFail(encryptor('decrypt',$id));
        return view('holding-supporting.source_income.edit',compact('d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SourceIncome  $sourceIncome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try{
            $p=SourceIncome::findOrFail(encryptor('decrypt',$id));;
            $p->name=$request->name;
            $p->description=$request->description;
            if($p->save()){
            Toastr::success('Update Successfully!');
            return redirect()->route(currentUser().'.sourceincome.index');
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
     * @param  \App\Models\SourceIncome  $sourceIncome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p= SourceIncome::findOrFail(encryptor('decrypt',$id));
        $p->delete();
        return redirect()->back();
    }
}
