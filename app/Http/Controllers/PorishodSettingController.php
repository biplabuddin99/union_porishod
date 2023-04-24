<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PorishodSetting;
use App\Models\Chairman;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Upazila;
use App\Models\Settings\Location\Union;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;
use Session;

class PorishodSettingController extends Controller
{
    use ImageHandleTraits;
    public function index()
    {
        $porishod=PorishodSetting::first();
        return view('porishod_settings.index',compact('porishod'));
    }

    public function create()
    {
        $districts=District::select('id','name','name_bn')->get();
        return view('porishod_settings.create',compact('districts'));
    }
    public function edit($id)
    {
        $porishod=PorishodSetting::findOrFail(encryptor('decrypt',$id));
        $districts=District::select('id','name','name_bn')->get();
        $upazilas=Upazila::select('id','name','name_bn')->where('district_id',$porishod->district_id)->get();
        $unions=Union::select('id','name','name_bn')->where('upazila_id',$porishod->upazila_id)->get();
        $chairman=Chairman::select('id','name')->orderBy('act_start','DESC')->get();
        return view('porishod_settings.edit',compact('porishod','districts','upazilas','unions','chairman'));
    }

    public function update(Request $request,$id)
    {
        try{
            $porishods=PorishodSetting::findOrFail(encryptor('decrypt',$id));
            
            $path='uploads/logo_folder';
            if($request->has('logo') && $request->logo)
                if($this->deleteImage($porishods->logo,$path))
                    $porishods->logo=$this->resizeImage($request->logo,$path,true,200,200,false);

            if($request->has('formlogo') && $request->formlogo)
                if($this->deleteImage($porishods->formlogo,$path))
                    $porishods->formlogo=$this->resizeImage($request->formlogo,$path,true,300,300,true);

            $porishods->slogan=$request->slogan;
            $porishods->chairman_id=$request->chairman_id;
            $porishods->website=$request->website;
            $porishods->contact_no=$request->contact_no;
            $porishods->email=$request->email;
            $porishods->fb_page=$request->fb_page;
            $porishods->youtube=$request->youtube;
            $porishods->twitter=$request->twitter;

            $porishods->union_id=$request->union_id;
            $porishods->district_id=$request->district_id;
            $porishods->upazila_id=$request->upazila_id;
            if($porishods->save()){
                Toastr::success('পরিষদ সেটিং সফলভাবে আপডেট হয়েছে!');
                request()->session()->put('upsetting', $porishods);
                return redirect(route(currentUser().'.porishodsettiong.index'));
            }
        }catch(Exception $e){
            //dd($e);
            return redirect()->back()->withInput();
            Toastr::success('আবার চেষ্টা করুন!');
        }
}
}
