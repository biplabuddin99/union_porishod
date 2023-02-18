<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PorishodSetting;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class PorishodSettingController extends Controller
{
    public function index()
    {
        $porishod=PorishodSetting::all();
        return view('porishod_settings.index',compact('porishod'));
    }

    public function create()
    {
        return view('porishod_settings.create');
    }
    public function edit($id)
    {
        $porishod=PorishodSetting::findOrFail(encryptor('decrypt',$id));
        return view('porishod_settings.edit',compact('porishod'));
    }

    public function update(Request $request,$id)
    {
        try{
            $porishods=PorishodSetting::findOrFail(encryptor('decrypt',$id));
            $porishods->division_name_en=$request->divisionName;
            $porishods->division_name_bn=$request->divisionBn;
            $porishods->district_name_en=$request->districtName;
            $porishods->district_name_bn=$request->districtBn;
            $porishods->postoffice_name_en=$request->postofficeName;
            $porishods->postoffice_name_bn=$request->postofficeBn;
            $porishods->save();
            Toastr::success('পরিষদ সেটিং সফলভাবে আপডেট হয়েছে!');
            return redirect(route(currentUser().'.porishodsettiong.index'));
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput();
            Toastr::success('আবার চেষ্টা করুন!');
        }
}
}
