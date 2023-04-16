<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PorishodSetting;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class PorishodSettingController extends Controller
{
    use ImageHandleTraits;
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
            $path='uploads/logo_folder';
            if($request->has('logo') && $request->logo)
            if($this->deleteImage($porishods->logo,$path))
            $porishods->logo=$this->resizeImage($request->logo,$path,true,200,200,false);
            $porishods->union_name=$request->union_name;
            $porishods->district_name=$request->district_name;
            $porishods->upazila_name=$request->upazila_name;
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
