@extends('layout.app')

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-warning"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: rgb(12, 12, 11); padding-top: 5px;">ট্রেড লাইসেন্স আপডেট করুন</h4>
            </div>
        </div>
    </div>
</section>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route(currentUser().'.trade.update',encryptor('encrypt',$trade->id))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div> --}}
                                
                                
                                <div class="col-sm-2 col-lg-2">
                                    <label  class="form-label" for="holding_date">তারিখ :-</label>
                                </div>
                                <div class="col-sm-2 col-lg-2 ms-0 ps-0">
                                    <input class="form-control datepicker" name="holding_date" value="{{ old('holding_date',$trade->holding_date) }}" id="holding_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="head_household">আবেদনকারীর নাম  :-</label>
                                    <input class="form-control @error('head_household') is-invalid @enderror" type="text"
                                    name="head_household" value="{{ old('head_household',$trade->head_household) }}" id="head_household" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('head_household'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('head_household') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="husband_wife">স্বামী/স্ত্রীর নাম :- </label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife',$trade->husband_wife) }}" id="husband_wife" value="{{ old('') }}" placeholder="পিতা/ স্বামী">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="mother_name">মাতার নাম :-</label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name',$trade->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
                                    @if($errors->has('mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('mother_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="gender1" for="cars">লিঙ্গের অবস্থা :-</label>
                                    <select name="gender" id="gender1" class="form-select @error('gender') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('gender', $trade->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                        <option value="2" {{ old('gender', $trade->gender)=="2" ? "selected":""}}>মহিলা</option>
                                        <option value="3" {{ old('gender', $trade->gender)=="3" ? "selected":""}}>তৃতীয় লিঙ্গ</option>
                                    </select>
                                    @if($errors->has('gender'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('gender') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="birth_date">জন্ম তারিখ :-</label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date',$trade->birth_date) }}"  type="text" placeholder="মাস-দিন-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="voter_id_no">ভোটার আইডি নং :-</label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$trade->voter_id_no) }}" placeholder="ভোটার আইডি নং">
                                    @if($errors->has('voter_id_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_id_no') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="birth_registration_id">জন্ম নিবন্ধন আইডি:-</label>
                                    <input class="form-control @error('birth_registration_id') is-invalid @enderror" type="text"
                                    name="birth_registration_id" value="{{ old('birth_registration_id',$trade->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
                                    @if($errors->has('birth_registration_id'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_registration_id') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="rel">ধর্ম :-</label>
                                    <select name="religion" class="form-select @error('religion') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('religion', $trade->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                        <option value="2" {{ old('religion', $trade->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                        <option value="3" {{ old('religion', $trade->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                        <option value="4" {{ old('religion', $trade->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                        <option value="5" {{ old('religion', $trade->religion)=="5" ? "selected":""}}>উপজাতি</option>
                                    </select>
                                    @if($errors->has('religion'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('religion') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="phone">মোবাইল নম্বর :-</label>
                                    <input class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" id="phone" value="{{ old('phone',$trade->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
                                    @if($errors->has('phone'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('phone') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="edu_qual0">শিক্ষাগত যোগ্যতা :-</label>
                                    <select name="edu_qual" class="form-select @error('edu_qual') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('edu_qual', $trade->edu_qual)=="1" ? "selected":""}}>স্ব-শিক্ষিত</option>
                                        <option value="2" {{ old('edu_qual', $trade->edu_qual)=="2" ? "selected":""}}>প্রাথমিক</option>
                                        <option value="3" {{ old('edu_qual', $trade->edu_qual)=="3" ? "selected":""}}>মাধ্যমিক</option>
                                        <option value="4" {{ old('edu_qual', $trade->edu_qual)=="4" ? "selected":""}}>উচ্চ-মাধ্যমিক</option>
                                        <option value="5" {{ old('edu_qual', $trade->edu_qual)=="5" ? "selected":""}}>উচ্চতর-ডিগ্রী</option>
                                    </select>
                                    @if($errors->has('edu_qual'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('edu_qual') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="email">ই-মেইল <small>(যদি থাকে)</small> :-</label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$trade->email) }}" placeholder=".....@mail.com">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="source_inc">পেশা বা আয়ের উৎস :-</label>
                                    <select name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('source_income', $trade->source_income)=="1" ? "selected":""}}>শিক্ষক</option>
                                        <option value="2" {{ old('source_income', $trade->source_income)=="2" ? "selected":""}}>শিক্ষার্থী</option>
                                        <option value="3" {{ old('source_income', $trade->source_income)=="3" ? "selected":""}}>সরকারি চাকুরীজীবি</option>
                                        <option value="4" {{ old('source_income', $trade->source_income)=="4" ? "selected":""}}>বে-সরকারি চাকুরীজীবি</option>
                                        <option value="5" {{ old('source_income', $trade->source_income)=="5" ? "selected":""}}>গৃহীনি</option>
                                        <option value="6" {{ old('source_income', $trade->source_income)=="6" ? "selected":""}}>কৃষক</option>
                                        <option value="7" {{ old('source_income', $trade->source_income)=="7" ? "selected":""}}>ব্যবসা</option>
                                        <option value="8" {{ old('source_income', $trade->source_income)=="8" ? "selected":""}}>প্রকৌশলি</option>
                                        <option value="9" {{ old('source_income', $trade->source_income)=="9" ? "selected":""}}>আইনজীবী</option>
                                        <option value="10" {{ old('source_income', $trade->source_income)=="10" ? "selected":""}}>চিকিৎসক</option>
                                        <option value="11" {{ old('source_income', $trade->source_income)=="11" ? "selected":""}}>সেবিকা</option>
                                        <option value="12" {{ old('source_income', $trade->source_income)=="12" ? "selected":""}}>দলিল লেখক</option>
                                        <option value="13" {{ old('source_income', $trade->source_income)=="13" ? "selected":""}}>শ্রমিক</option>
                                        <option value="14" {{ old('source_income', $trade->source_income)=="14" ? "selected":""}}>ঠিকাদার</option>
                                        <option value="15" {{ old('source_income', $trade->source_income)=="15" ? "selected":""}}>মৎস চাষী</option>
                                        <option value="16" {{ old('source_income', $trade->source_income)=="16" ? "selected":""}}>গাড়ি চালক</option>
                                        <option value="17" {{ old('source_income', $trade->source_income)=="17" ? "selected":""}}>প্রবাসী</option>
                                        <option value="18" {{ old('source_income', $trade->source_income)=="18" ? "selected":""}}>অন্যান্য</option>
                                    </select>
                                    @if($errors->has('source_income'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('source_income') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="marit" for="cars">বৈবাহিক অবস্থা :- </label>
                                    <select name="marital_status" id="marit" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('marital_status', $trade->marital_status)=="1" ? "selected":""}}>বিবাহিত</option>
                                        <option value="2" {{ old('marital_status', $trade->marital_status)=="2" ? "selected":""}}>অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="internet" for="cars">ইন্টারনেট সংযোগ:- </label>
                                    <select name="internet_connection" id="internet" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('internet_connection', $trade->internet_connection)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('internet_connection', $trade->internet_connection)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="tube_well">নলকূপ :- </label>
                                    <select name="tube_well" id="tube_well" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1"{{ old('tube_well', $trade->tube_well)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2"{{ old('tube_well', $trade->tube_well)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="disline_connection">ডিসলাইন সংযোগ:- </label>
                                    <select name="disline_connection" id="disline_connection" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('disline_connection', $trade->disline_connection)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('disline_connection', $trade->disline_connection)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="paved_bathroom">বাথরুম:-</label>
                                    <select name="paved_bathroom" id="paved_bathroom" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('paved_bathroom', $trade->paved_bathroom)=="1" ? "selected":""}}>কাঁচা</option>
                                        <option value="2" {{ old('paved_bathroom', $trade->paved_bathroom)=="2" ? "selected":""}}>পাকা</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="arsenic_free">আর্সেনিকমুক্ত:- </label>
                                    <select name="arsenic_free" id="arsenic_free" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('arsenic_free', $trade->arsenic_free)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('arsenic_free', $trade->arsenic_free)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="border border-2 m-2 p-3">
                                <div class="row m-2">
                                    <label  class="form-label" for="government_facilities">সরকারি সুবিধা:- </label>
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities1" value="1" @if(in_array(1, $Govt_fac)) checked @endif />
                                        <label  class="form-label" for="government_facilities1">ভিজিএফ কার্ড</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities2" value="2" @if(in_array(2, $Govt_fac)) checked @endif />
                                        <label  class="form-label" for="government_facilities2">বয়স্ক ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities3" value="3" @if(in_array(3, $Govt_fac)) checked @endif />
                                        <label  class="form-label" for="government_facilities3">মাতৃত্বকালীন ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities4" value="4" @if(in_array(4, $Govt_fac)) checked @endif />
                                        <label  class="form-label" for="government_facilities4">প্রতিবন্ধী ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities5" value="5" @if(in_array(5, $Govt_fac)) checked @endif />
                                        <label  class="form-label" for="government_facilities5">বিধবা ভাতা</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="business_name">ব্যবসা প্রতিষ্ঠানের নাম:-</label>
                                    <input class="form-control @error('business_name') is-invalid @enderror"
                                    name="business_name" id="business_name" value="{{ old('business_name',$trade->business_name) }}"  type="text" placeholder="ব্যবসা প্রতিষ্ঠানের নাম">
                                    @if($errors->has('business_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="owner_proprietor">মালিক/প্রোপাইটরের নাম:-</label>
                                    <input class="form-control @error('owner_proprietor') is-invalid @enderror"
                                    name="owner_proprietor" id="owner_proprietor" value="{{ old('owner_proprietor',$trade->owner_proprietor) }}"  type="text" placeholder="মালিক/প্রোপাইটরের নাম">
                                    @if($errors->has('owner_proprietor'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('owner_proprietor') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="father_husband">পিতা/স্বমীর নাম:-</label>
                                    <input class="form-control"
                                    name="father_husband" id="father_husband" value="{{ old('father_husband',$trade->father_husband) }}"  type="text" placeholder="পিতা/স্বমীর নাম">
                                    {{-- @if($errors->has('father_husband'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_husband') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="trade_license_renewal">ট্রেড লােইসেন্স নবায়ন:-</label>
                                    <select name="trade_license_renewal" class="form-select">
                                        <option value="">অর্থ বছর</option>
                                        <option value="1" {{ old('trade_license_renewal', $trade->trade_license_renewal)=="1" ? "selected":""}}>অর্থ বছর ২০২৩-২০২৪</option>
                                        <option value="2" {{ old('trade_license_renewal', $trade->trade_license_renewal)=="2" ? "selected":""}}>অর্থ বছর ২০২৪-২০২৫</option>
                                        <option value="3" {{ old('trade_license_renewal', $trade->trade_license_renewal)=="3" ? "selected":""}}>অর্থ বছর ২০২৫-২০২৬</option>
                                        <option value="4" {{ old('trade_license_renewal', $trade->trade_license_renewal)=="4" ? "selected":""}}>অর্থ বছর ২০২৬-২০২৭</option>
                                        <option value="5" {{ old('trade_license_renewal', $trade->trade_license_renewal)=="5" ? "selected":""}}>অর্থ বছর ২০২৭-২০২৮</option>
                                        <option value="6" {{ old('trade_license_renewal', $trade->trade_license_renewal)=="6" ? "selected":""}}>অর্থ বছর ২০২৮-২০২৯</option>
                                    </select>
                                    {{-- @if($errors->has('trade_license_renewal'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('trade_license_renewal') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="business_organization_structure">ব্যবসা প্রতিষ্ঠানের কাঠামো:-</label>
                                    <select name="business_organization_structure" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('business_organization_structure', $trade->business_organization_structure)=="1" ? "selected":""}}>কাঁচাঘর</option>
                                        <option value="2" {{ old('business_organization_structure', $trade->business_organization_structure)=="2" ? "selected":""}}>টিনসেট</option>
                                        <option value="3" {{ old('business_organization_structure', $trade->business_organization_structure)=="3" ? "selected":""}}>আধা-পাকা</option>
                                        <option value="4" {{ old('business_organization_structure', $trade->business_organization_structure)=="4" ? "selected":""}}>পাকা-ইমারত</option>
                                        <option value="5" {{ old('business_organization_structure', $trade->business_organization_structure)=="5" ? "selected":""}}>২য় তলা বাড়ি</option>
                                        <option value="6" {{ old('business_organization_structure', $trade->business_organization_structure)=="6" ? "selected":""}}>৩য় তলা বাড়ি</option>
                                    </select>
                                    {{-- @if($errors->has('business_organization_structure'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('business_organization_structure') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_type">ব্যবসায়িক ধরন:-</label>
                                    <input class="form-control @error('business_type') is-invalid @enderror"
                                    name="business_type" id="business_type" value="{{ old('business_type',$trade->business_type) }}"  type="text" placeholder="ব্যবসায়িক ধরন">
                                    @if($errors->has('business_type'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_type') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="trade_license_renewal_fee">ট্রেড লাইসেন্স নবায়ন ফি:-</label>
                                    <input class="form-control @error('trade_license_renewal_fee') is-invalid @enderror"
                                    name="trade_license_renewal_fee" id="trade_license_renewal_fee" value="{{ old('trade_license_renewal_fee',$trade->trade_license_renewal_fee) }}"  type="text" placeholder="ট্রেড লাইসেন্স নবায়ন ফি">
                                    {{-- @if($errors->has('trade_license_renewal_fee'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('trade_license_renewal_fee') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_estimated_capital">ব্যবসায়িক আনুমানিক মূলধন:-</label>
                                    <input class="form-control @error('business_estimated_capital') is-invalid @enderror"
                                    name="business_estimated_capital" id="business_estimated_capital" value="{{ old('business_estimated_capital',$trade->business_estimated_capital) }}"  type="text" placeholder="ব্যবসায়িক আনুমানিক মূলধন">
                                    @if($errors->has('business_estimated_capital'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_estimated_capital') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="annual_business_tax_levied">ব্যবসায়িক বার্ষিক র্ধাযকৃত কর:-</label>
                                    <input class="form-control @error('annual_business_tax_levied') is-invalid @enderror"
                                    name="annual_business_tax_levied" id="annual_business_tax_levied" value="{{ old('annual_business_tax_levied',$trade->annual_business_tax_levied) }}"  type="text" placeholder="ব্যবসায়িক বার্ষিক র্ধাযকৃত কর">
                                    {{-- @if($errors->has('annual_business_tax_levied'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_business_tax_levied') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="annual_business_tax_collected">ব্যবসায়িক বার্ষিক আদায়কৃত কর:-</label>
                                    <input class="form-control @error('annual_business_tax_collected') is-invalid @enderror"
                                    name="annual_business_tax_collected" id="annual_business_tax_collected" value="{{ old('annual_business_tax_collected',$trade->annual_business_tax_collected) }}"  type="text" placeholder="ব্যবসায়িক বার্ষিক আদায়কৃত কর">
                                    @if($errors->has('annual_business_tax_collected'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_business_tax_collected') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="annual_business_tax_due">ব্যবসায়িক বার্ষিক বকেয়া কর:-</label>
                                    <input class="form-control @error('annual_business_tax_due') is-invalid @enderror"
                                    name="annual_business_tax_due" id="annual_business_tax_due" value="{{ old('annual_business_tax_due',$trade->annual_business_tax_due) }}"  type="text" placeholder="বাড়ির বার্ষিক আদায়কৃত কর">
                                    {{-- @if($errors->has('annual_business_tax_due'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_business_tax_due') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="holding_tax_update">হালনাগাদ হেল্ডিং কর:-</label>
                                    <select name="holding_tax_update" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('holding_tax_update',$trade->holding_tax_update)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('holding_tax_update',$trade->holding_tax_update)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                    {{-- @if($errors->has('holding_tax_update'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('holding_tax_update') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-3">
                                <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকারীর স্থায়ী ঠিকানা সমূহঃ </h4>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="vehicle_establishment_holding_no">গাড়ি/প্রতিষ্ঠানের হেল্ডিং নম্বর:-</label>
                                    <input class="form-control @error('vehicle_establishment_holding_no') is-invalid @enderror"
                                    name="vehicle_establishment_holding_no" id="vehicle_establishment_holding_no" value="{{ old('vehicle_establishment_holding_no',$trade->vehicle_establishment_holding_no) }}"  type="text" placeholder="ইউনিয়ন পরিষদ কতৃক পূরণকৃত">
                                    {{-- @if($errors->has('vehicle_establishment_holding_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('vehicle_establishment_holding_no') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="street_nm">রাস্তা/পাড়া/মহল্লা:-</label>
                                    <input class="form-control @error('street_nm') is-invalid @enderror"
                                    name="street_nm" id="street_nm" value="{{ old('street_nm',$trade->street_nm) }}"  type="text" placeholder="রাস্তা/পাড়া/মহল্লা">
                                    @if($errors->has('street_nm'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('street_nm') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="village_name">গ্রামের নাম:-</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name',$trade->village_name) }}"  type="text" placeholder="গ্রামের নাম">
                                    {{-- @if($errors->has('village_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('village_name') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="ward_no">ওয়ার্ড:-</label>
                                    <input class="form-control @error('ward_no') is-invalid @enderror"
                                    name="ward_no" id="ward_no" value="{{ old('ward_no',$trade->ward_no) }}"  type="text" placeholder="ওয়ার্ড">
                                    @if($errors->has('ward_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('ward_no') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="name_union_parishad">ইউনিয়ন পরিষদের নাম:-</label>
                                    <input class="form-control @error('name_union_parishad') is-invalid @enderror"
                                    name="name_union_parishad" id="name_union_parishad" value="{{ old('name_union_parishad',$trade->name_union_parishad) }}"  type="text" placeholder="ইউনিয়ন পরিষদের নাম">
                                    {{-- @if($errors->has('name_union_parishad'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('name_union_parishad') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="post_office">ডাকঘর:-</label>
                                    <input class="form-control @error('post_office') is-invalid @enderror"
                                    name="post_office" id="post_office" value="{{ old('post_office',$trade->post_office) }}"  type="text" placeholder="ডাকঘর">
                                    @if($errors->has('post_office'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('post_office') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-lg-6 col-md-4 col-sm-4">
                                    <label for="district">জেলা:-</label>
                                    <select id="district_id" name="district_id" class="form-select search_district_eid">
                                        <option value="">নির্বাচন করুন</option>
                                        @foreach ($districts as $district)
                                        <option value="{{ $district->id }}"{{$trade->district_id == $district->id ? 'selected' : ''}}>{{ $district->name_bn }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('district'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('district') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-4">
                                    <label  class="form-label" for="upazila_thana">উপজেলা/থানা:-</label>
                                    <select id="upazila_id" name="upazila_id" class="form-select search_district_eid">
                                        <option value="">নির্বাচন করুন</option>
                                    </select>
                                    {{-- @if($errors->has('upazila_thana'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('upazila_thana') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-3">
                                <h5 class="" style="color: rgb(13, 134, 29); padding-top: 5px;">অতিরিক্ত সংযোজনঃ- </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">ভোটার আইডির রঙিন কপি :-</label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="image_holding">বাড়ি/প্রতিষ্ঠানের হোল্ডিং করের কপি :-</label>
                                    <input class="form-control" type="file" name="image_holding" id="image_holding" value="{{ old('image_holding') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                    <div class="image-overlay">
                                        <label  class="form-label" for="image">সদ্য তোলা রঙিন ছবি:-</label>
                                            <input type="file" name="image" value="" data-default-file="{{ asset('uploads/trade_license/image') }}/{{ $trade->image }}" class="form-control dropify">
                                        <div class="overlay">
                                            <div class="text-center">ছবি দিতে ক্লিক করুন</div>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" class="btn btn-primary" name="submit" value="আপডেট">
                                        <input type="button" class="btn default cancel btn-info" value="বাতিল">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // District wise Upazilla Change
    $(document).ready(function() {
        $('.search_district_eid').select2();
        $('#district_id').on('change', function() {
            var district_id = $(this).val();
            console.log();
            if (district_id) {
                $.ajax({
                    url: "{{ url('/upzilla/ajax') }}/" + district_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // console.log(data)
                        var d = $('#upazila_id').empty();
                        $.each(data, function(key, value) {
                            $('#upazila_id').append('<option value="' + value.id + '">' + value.name_bn + '</option>');
                        });
                    },
                });
            }
        });
    });
</script>
@endsection
