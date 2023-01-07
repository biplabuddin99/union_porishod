<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Ward_no;
use App\Models\Settings\Location\Division;
use App\Models\Settings\Location\District;
use App\Models\Settings\Location\Thana;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Traits\ImageHandleTraits;
use Exception;

use function GuzzleHttp\Promise\all;

class ProfileController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();
        return view('Profile.index',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $division = Division::all();
        $district = District::all();
        $thana = Thana::all();
        $word = Ward_no::all();
        return view('Profile.create',compact('division','district','thana','word'));
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
            $p=new Profile;

            $p->applicantName=$request->applicantName;
            $p->FatherOrHusband=$request->FatherOrHusband;
            $p->mother_name=$request->Mother;
            $p->contact=$request->Contact;
            $p->id_no=$request->IdNo;
            $p->man=$request->man;
            $p->woman=$request->woman;
            $p->totalMember=$request->totalMember;
            $p->voterNumber=$request->voterNumber;
            $p->allowance=$request->allowance;
            $p->icomeSource=$request->icomeSource;
            $p->house_name=$request->house_name;
            $p->holding_no=$request->holding_no;
            $p->typeOfHouse=$request->typeOfHouse;
            $p->total_room=$request->total_room;
            $p->percetageOfHouseLand=$request->percetageOfHouseLand;
            $p->percetageOfPaddyLand=$request->percetageOfPaddyLand;
            $p->estimatedValuOfHouse=$request->estimatedValuOfHouse;
            $p->tax_levied=$request->tax_levied;
            $p->tax_collected=$request->tax_collected;
            $p->owing=$request->owing;
            $p->village=$request->vill;
            $p->postOffice=$request->post;
            $p->word_no=$request->wordNo;
            $p->division_id=$request->divisionName;
            $p->district_id=$request->districtName;
            $p->thana_id=$request->thana;
            $p->status=$request->status;
            if($request->has('image'))
                $p->image=$this->resizeImage($request->image,'uploads/profile',true,200,200,false);
            if($request->has('home_image'))
                $p->home_image=$this->resizeImage($request->home_image,'uploads/profile',true,200,200,false);

            if($p->save()){
            Toastr::success('Profile Create Successfully!');
            return redirect()->route(currentUser().'.profile.index');
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro = Profile::findOrFail(encryptor('decrypt',$id));
        
        return view('Profile.show',compact('pro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Division::all();
        $district = District::all();
        $thana = Thana::all();
        $word = Ward_no::all();
        $profile = Profile::findOrFail(encryptor('decrypt',$id));
        return view('Profile.edit',compact('division','district','thana','profile','word'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $p=Profile::findOrFail(encryptor('decrypt',$id));

            $p->applicantName=$request->applicantName;
            $p->FatherOrHusband=$request->FatherOrHusband;
            $p->mother_name=$request->Mother;
            $p->contact=$request->Contact;
            $p->id_no=$request->IdNo;
            $p->man=$request->man;
            $p->woman=$request->woman;
            $p->totalMember=$request->totalMember;
            $p->voterNumber=$request->voterNumber;
            $p->allowance=$request->allowance;
            $p->icomeSource=$request->icomeSource;
            $p->house_name=$request->house_name;
            $p->holding_no=$request->holding_no;
            $p->typeOfHouse=$request->typeOfHouse;
            $p->total_room=$request->total_room;
            $p->percetageOfHouseLand=$request->percetageOfHouseLand;
            $p->percetageOfPaddyLand=$request->percetageOfPaddyLand;
            $p->estimatedValuOfHouse=$request->estimatedValuOfHouse;
            $p->tax_levied=$request->tax_levied;
            $p->tax_collected=$request->tax_collected;
            $p->owing=$request->owing;
            $p->village=$request->vill;
            $p->postOffice=$request->post;
            $p->word_no=$request->wordNo;
            $p->division_id=$request->divisionName;
            $p->district_id=$request->districtName;
            $p->thana_id=$request->thana;
            $p->status=$request->status;

            $path='uploads/profile';

            if($request->has('image') && $request->image)
            if($this->deleteImage($p->image,$path))
                $p->image=$this->resizeImage($request->image,$path,true,200,200,false);

            if($request->has('home_image') && $request->home_image)
            if($this->deleteImage($p->home_image,$path))
                $p->home_image=$this->resizeImage($request->home_image,$path,true,200,200,false);

            if($p->save()){
            Toastr::success('Profile Updated Successfully!');
            return redirect()->route(currentUser().'.profile.index');
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p= Profile::findOrFail(encryptor('decrypt',$id));
        $p->delete();
        return redirect()->back();
    }
}
