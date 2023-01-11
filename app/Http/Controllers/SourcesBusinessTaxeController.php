<?php

namespace App\Http\Controllers;

use App\Models\SourcesBusinessTaxe;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class SourcesBusinessTaxeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sourcetax=SourcesBusinessTaxe::all();
        return view('holding-supporting.sourcesbusiness.index',compact('sourcetax'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('holding-supporting.sourcesbusiness.create');
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
            $p=new SourcesBusinessTaxe;
            $p->name=$request->name;
            $p->description=$request->description;
            $p->tax_amount=$request->tax_amount;
            $p->other_charge=$request->other_charge;
            if($p->save()){
            Toastr::success('Create Successfully!');
            return redirect()->route(currentUser().'.sourcebusiness.index');
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
     * @param  \App\Models\SourcesBusinessTaxe  $sourcesBusinessTaxe
     * @return \Illuminate\Http\Response
     */
    public function show(SourcesBusinessTaxe $sourcesBusinessTaxe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SourcesBusinessTaxe  $sourcesBusinessTaxe
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $d=SourcesBusinessTaxe::findOrFail(encryptor('decrypt',$id));
        return view('holding-supporting.sourcesbusiness.edit',compact('d'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SourcesBusinessTaxe  $sourcesBusinessTaxe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $p=SourcesBusinessTaxe::findOrFail(encryptor('decrypt',$id));
            $p->name=$request->name;
            $p->description=$request->description;
            $p->tax_amount=$request->tax_amount;
            $p->other_charge=$request->other_charge;
            if($p->save()){
            Toastr::success('Update Successfully!');
            return redirect()->route(currentUser().'.sourcebusiness.index');
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
     * @param  \App\Models\SourcesBusinessTaxe  $sourcesBusinessTaxe
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $p= SourcesBusinessTaxe::findOrFail(encryptor('decrypt',$id));
        $p->delete();
        return redirect()->back();
    }
}
