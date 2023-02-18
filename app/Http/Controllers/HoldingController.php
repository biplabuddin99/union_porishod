<?php

namespace App\Http\Controllers;

use App\Models\Holding;
use Illuminate\Http\Request;
use App\Http\Requests\HoldingCreateRequest;
use PhpParser\Node\Stmt\Return_;
use App\Http\Traits\ImageHandleTraits;
use Brian2694\Toastr\Facades\Toastr;
use Exception;

class HoldingController extends Controller
{
    use ImageHandleTraits;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hold=Holding::get(['id','head_household','phone','total_tax']);
        return view('holding.index',compact('hold'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Return view('holding.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HoldingCreateRequest $request)
    {
        try{
            $holding=new Holding;
            $holding->form_no=$request->form_no;
            $holding->holding_date=$request->holding_date;
            $holding->head_household=$request->head_household;
            $holding->father_name=$request->father_name;
            $holding->mother_name=$request->mother_name;
            $holding->husband_wife=$request->husband_wife;
            $holding->new_holding_no=$request->new_holding_no;
            $holding->previous_holding_no=$request->previous_holding_no;
            $holding->village=$request->village;
            $holding->ward_no=$request->ward_no;
            $holding->birth_date=$request->birth_date;
            $holding->voter_id_no=$request->voter_id_no;
            $holding->phone=$request->phone;
            $holding->email=$request->email;
            $holding->marital_status=$request->marital_status;
            $holding->gender=$request->gender;
            $holding->digital_birth_cer=$request->digital_birth_cer;
            $holding->paved_bathroom=$request->paved_bathroom;
            $holding->expatriate=$request->expatriate;
            $holding->power_connection=$request->power_connection;
            $holding->tube_well=$request->tube_well;
            $holding->bank=$request->bank;
            $holding->edu_qual=implode(',',$request->edu_qual);
            $holding->family_male=$request->family_male;
            $holding->family_female=$request->family_female;
            $holding->family_total=$request->family_total;
            $holding->single_joint_family=$request->single_joint_family;
            $holding->religion=$request->religion;
            $holding->mobile_bank=implode(',',$request->mobile_bank);
            $holding->government_facilities=implode(',',$request->government_facilities);
            $holding->family_status=$request->family_status;
            $holding->digital_devices=implode(',',$request->digital_devices);
            $holding->telecommunications=implode(',',$request->telecommunications);
            $holding->source_income=implode(',',$request->source_income);
            $holding->business_taxes=implode(',',$request->business_taxes);
            $holding->business_amount_taxes=$request->business_amount_taxes;
            $holding->sources_other_taxes=$request->sources_other_taxes;
            $holding->other_taxes_amount=$request->other_taxes_amount;
            $holding->residence_type=implode(',',$request->residence_type);
            $holding->approximate_price_house=$request->approximate_price_house;
            $holding->annual_taxable_value=$request->annual_taxable_value;
            $holding->taxable_value_house=$request->taxable_value_house;
            $holding->annual_tax_amount=$request->annual_tax_amount;
            $holding->total_tax=$request->total_tax;

            if($request->has('signature_informant'))
            $holding->signature_informant=$this->resizeImage($request->signature_informant,'uploads/holding',true,200,200,false);

            if($request->has('signature_collector'))
            $holding->signature_collector=$this->resizeImage($request->signature_collector,'uploads/holding',true,200,200,false);

            $holding->save();
            Toastr::success('holding Created Successfully!');
            return redirect(route('holding.index'));
            // dd($request);
        }
        catch (Exception $e){
            return back()->withInput();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Holding  $holding
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hold = Holding::findOrFail(encryptor('decrypt',$id));
        // $ed=$hold->edu_qual;
        // $edu=explode(',',$array['ed']);
        // return $edu;
        return view('holding.show',compact('hold'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Holding  $holding
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hold=Holding::findOrFail(encryptor('decrypt',$id));
        return view('holding.edit',compact('hold'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Holding  $holding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $holding=Holding::findOrFail(encryptor('decrypt',$id));
            $holding->form_no=$request->form_no;
            $holding->holding_date=$request->holding_date;
            $holding->head_household=$request->head_household;
            $holding->father_name=$request->father_name;
            $holding->mother_name=$request->mother_name;
            $holding->husband_wife=$request->husband_wife;
            $holding->new_holding_no=$request->new_holding_no;
            $holding->previous_holding_no=$request->previous_holding_no;
            $holding->village=$request->village;
            $holding->ward_no=$request->ward_no;
            $holding->birth_date=$request->birth_date;
            $holding->voter_id_no=$request->voter_id_no;
            $holding->phone=$request->phone;
            $holding->email=$request->email;
            $holding->marital_status=$request->marital_status;
            $holding->gender=$request->gender;
            $holding->digital_birth_cer=$request->digital_birth_cer;
            $holding->paved_bathroom=$request->paved_bathroom;
            $holding->expatriate=$request->expatriate;
            $holding->power_connection=$request->power_connection;
            $holding->tube_well=$request->tube_well;
            $holding->bank=$request->bank;
            $holding->edu_qual=implode(',',$request->edu_qual);
            $holding->family_male=$request->family_male;
            $holding->family_female=$request->family_female;
            $holding->family_total=$request->family_total;
            $holding->single_joint_family=$request->single_joint_family;
            $holding->religion=$request->religion;
            $holding->mobile_bank=implode(',',$request->mobile_bank);
            $holding->government_facilities=implode(',',$request->government_facilities);
            $holding->family_status=$request->family_status;
            $holding->digital_devices=implode(',',$request->digital_devices);
            $holding->telecommunications=implode(',',$request->telecommunications);
            $holding->source_income=implode(',',$request->source_income);
            $holding->business_taxes=implode(',',$request->business_taxes);
            $holding->business_amount_taxes=$request->business_amount_taxes;
            $holding->sources_other_taxes=$request->sources_other_taxes;
            $holding->other_taxes_amount=$request->other_taxes_amount;
            $holding->residence_type=implode(',',$request->residence_type);
            $holding->approximate_price_house=$request->approximate_price_house;
            $holding->annual_taxable_value=$request->annual_taxable_value;
            $holding->taxable_value_house=$request->taxable_value_house;
            $holding->annual_tax_amount=$request->annual_tax_amount;
            $holding->total_tax=$request->total_tax;

            $path='uploads/holding';

            if($request->has('signature_informant') && $request->signature_informant)
            if($this->deleteImage($holding->signature_informant,$path))
                $holding->signature_informant=$this->resizeImage($request->signature_informant,$path,true,200,200,false);

            if($request->has('signature_collector') && $request->signature_collector)
            if($this->deleteImage($holding->signature_collector,$path))
                $holding->signature_collector=$this->resizeImage($request->signature_collector,$path,true,200,200,false);

            $holding->save();
            Toastr::success('holding Created Successfully!');
            return redirect(route('holding.index'));
            // dd($request);
        }
        catch (Exception $e){
            return back()->withInput();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Holding  $holding
     * @return \Illuminate\Http\Response
     */
    public function destroy(Holding $holding)
    {
        //
    }
}
