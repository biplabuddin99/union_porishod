<?php

namespace App\Http\Controllers;

use App\Models\setting;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

class SettingController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=setting::paginate(10);
        return view('setting.index',compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('setting.create');
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
            $data=new setting;
            $data->address=$request->address;
            $data->contact_no=$request->contact_no;
            $data->email_address=$request->email_address;
            $data->facebook_link=$request->facebook_link;
            $data->twitter_link=$request->twitter_link;
            $data->youtube_link=$request->youtube_link;
            $data->linkdin_link=$request->linkdin_link;
            $data->footer_top_p1_text=$request->footer_top_p1_text;
            $data->footer_top_p2_text=$request->footer_top_p2_text;
            $data->footer_top_p3_text=$request->footer_top_p3_text;
            if($request->has('header_logo'))
                $data->header_logo=$this->resizeImage($request->header_logo,'uploads/settings',true,200,200,false);

            if($request->has('footer_logo'))
                $data->footer_logo=$this->resizeImage($request->footer_logo,'uploads/settings',true,200,200,false);

            if($request->has('we_accept'))
                $data->we_accept=$this->resizeImage($request->we_accept,'uploads/settings',true,200,200,false);

            if($request->has('footer_top_p1_image'))
                $data->footer_top_p1_image=$this->resizeImage($request->footer_top_p1_image,'uploads/settings',true,200,200,false);

            if($request->has('footer_top_p2_image'))
                $data->footer_top_p2_image=$this->resizeImage($request->footer_top_p2_image,'uploads/settings',true,200,200,false);

            if($request->has('footer_top_p3_image'))
                $data->footer_top_p3_image=$this->resizeImage($request->footer_top_p3_image,'uploads/settings',true,200,200,false);

            if($data->save()){
            Toastr::success('Settings Create Successfully!');
            return redirect()->route(currentUser().'.settings.index');
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
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $settings=setting::findOrFail(encryptor('decrypt',$id));
        return view('setting.edit',compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $data=setting::findOrFail(encryptor('decrypt',$id));
            $data->address=$request->address;
            $data->contact_no=$request->contact_no;
            $data->email_address=$request->email_address;
            $data->facebook_link=$request->facebook_link;
            $data->twitter_link=$request->twitter_link;
            $data->youtube_link=$request->youtube_link;
            $data->linkdin_link=$request->linkdin_link;
            $data->footer_top_p1_text=$request->footer_top_p1_text;
            $data->footer_top_p2_text=$request->footer_top_p2_text;
            $data->footer_top_p3_text=$request->footer_top_p3_text;
            $path='uploads/settings';

            if($request->has('header_logo') && $request->header_logo)
            if($this->deleteImage($data->header_logo,$path))
                $data->header_logo=$this->resizeImage($request->header_logo,$path,true,200,200,false);

            if($request->has('footer_logo') && $request->footer_logo)
            if($this->deleteImage($data->footer_logo,$path))
                $data->footer_logo=$this->resizeImage($request->footer_logo,$path,true,200,200,false);

            if($request->has('we_accept') && $request->we_accept)
            if($this->deleteImage($data->we_accept,$path))
                $data->we_accept=$this->resizeImage($request->we_accept,$path,true,200,200,false);

            if($request->has('footer_top_p1_image') && $request->footer_top_p1_image)
            if($this->deleteImage($data->footer_top_p1_image,$path))
                $data->footer_top_p1_image=$this->resizeImage($request->footer_top_p1_image,$path,true,200,200,false);

            if($request->has('footer_top_p2_image') && $request->footer_top_p2_image)
            if($this->deleteImage($data->footer_top_p2_image,$path))
                $data->footer_top_p2_image=$this->resizeImage($request->footer_top_p2_image,$path,true,200,200,false);

            if($request->has('footer_top_p3_image') && $request->footer_top_p3_image)
            if($this->deleteImage($data->footer_top_p3_image,$path))
                $data->footer_top_p3_image=$this->resizeImage($request->footer_top_p3_image,$path,true,200,200,false);
                
            if($data->save()){
            Toastr::success('Settings Updated Successfully!');
            return redirect()->route(currentUser().'.settings.index');
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
     * @param  \App\Models\setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(setting $setting)
    {
        //
    }
}
