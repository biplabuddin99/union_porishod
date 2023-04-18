@extends('layout.app')
{{-- @section('pageTitle',trans('হোল্ডিং আপডেট')) --}}

@section('content')
<section style="margin-top: 50px;"></section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-warning"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: rgb(12, 12, 11); padding-top: 5px;">হোল্ডিং আপডেট করুন</h4>
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
                        <form action="{{route(currentUser().'.holding.update',encryptor('encrypt',$hold->id))}}" method="POST" enctype="multipart/form-data">
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
                                    <input class="form-control datepicker" name="holding_date" value="{{ old('holding_date',$hold->holding_date) }}" id="holding_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="head_household">আবেদনকারীর নাম  :-</label>
                                    <input class="form-control @error('head_household') is-invalid @enderror" type="text"
                                    name="head_household" value="{{ old('head_household',$hold->head_household) }}" id="head_household" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('head_household'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('head_household') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="husband_wife">স্বামী/স্ত্রীর নাম :- </label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife',$hold->husband_wife) }}" id="husband_wife" value="{{ old('') }}" placeholder="পিতা/ স্বামী">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="father_name">পিতার নাম :-</label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                    name="father_name" value="{{ old('father_name',$hold->father_name) }}" id="father_name" placeholder="পিতার নাম">
                                    @if($errors->has('father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="birth_date">জন্ম তারিখ :-</label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date',$hold->birth_date) }}"  type="text" placeholder="মাস-দিন-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="mother_name">মাতার নাম :-</label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name',$hold->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
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
                                        <option value="1" {{ old('gender', $hold->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                        <option value="2" {{ old('gender', $hold->gender)=="2" ? "selected":""}}>মহিলা</option>
                                        <option value="3" {{ old('gender', $hold->gender)=="3" ? "selected":""}}>তৃতীয় লিঙ্গ</option>
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
                                    <label  class="form-label" for="rel">মুক্তিযোদ্ধা :-</label>
                                    <select name="freedom_fighter" class="form-select @error('freedom_fighter') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('freedom_fighter', $hold->freedom_fighter)=="1" ? "selected":""}}>বীর মুক্তিযোদ্ধা</option>
                                        <option value="2" {{ old('freedom_fighter', $hold->freedom_fighter)=="2" ? "selected":""}}>বীরাঙ্গনা</option>
                                        <option value="3" {{ old('freedom_fighter', $hold->freedom_fighter)=="3" ? "selected":""}}>নাই</option>
                                    </select>
                                    @if($errors->has('freedom_fighter'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('freedom_fighter') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="voter_id_no">ভোটার আইডি নং :-</label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$hold->voter_id_no) }}" placeholder="ভোটার আইডি নং">
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
                                    name="birth_registration_id" value="{{ old('birth_registration_id',$hold->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
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
                                        <option value="1" {{ old('religion', $hold->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                        <option value="2" {{ old('religion', $hold->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                        <option value="3" {{ old('religion', $hold->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                        <option value="4" {{ old('religion', $hold->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                        <option value="5" {{ old('religion', $hold->religion)=="5" ? "selected":""}}>উপজাতি</option>
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
                                    name="phone" id="phone" value="{{ old('phone',$hold->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
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
                                        <option value="1" {{ old('edu_qual', $hold->edu_qual)=="1" ? "selected":""}}>স্ব-শিক্ষিত</option>
                                        <option value="2" {{ old('edu_qual', $hold->edu_qual)=="2" ? "selected":""}}>প্রাথমিক</option>
                                        <option value="3" {{ old('edu_qual', $hold->edu_qual)=="3" ? "selected":""}}>মাধ্যমিক</option>
                                        <option value="4" {{ old('edu_qual', $hold->edu_qual)=="4" ? "selected":""}}>উচ্চ-মাধ্যমিক</option>
                                        <option value="5" {{ old('edu_qual', $hold->edu_qual)=="5" ? "selected":""}}>উচ্চতর-ডিগ্রী</option>
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
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$hold->email) }}" placeholder=".....@mail.com">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="source_inc">পেশা :-</label>
                                    <select name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('source_income', $hold->source_income)=="1" ? "selected":""}}>শিক্ষক</option>
                                        <option value="2" {{ old('source_income', $hold->source_income)=="2" ? "selected":""}}>শিক্ষার্থী</option>
                                        <option value="3" {{ old('source_income', $hold->source_income)=="3" ? "selected":""}}>সরকারি চাকুরীজীবি</option>
                                        <option value="4" {{ old('source_income', $hold->source_income)=="4" ? "selected":""}}>বে-সরকারি চাকুরীজীবি</option>
                                        <option value="5" {{ old('source_income', $hold->source_income)=="5" ? "selected":""}}>গৃহীনি</option>
                                        <option value="6" {{ old('source_income', $hold->source_income)=="6" ? "selected":""}}>কৃষক</option>
                                        <option value="7" {{ old('source_income', $hold->source_income)=="7" ? "selected":""}}>ব্যবসা</option>
                                        <option value="8" {{ old('source_income', $hold->source_income)=="8" ? "selected":""}}>প্রকৌশলি</option>
                                        <option value="9" {{ old('source_income', $hold->source_income)=="9" ? "selected":""}}>আইনজীবী</option>
                                        <option value="10" {{ old('source_income', $hold->source_income)=="10" ? "selected":""}}>চিকিৎসক</option>
                                        <option value="11" {{ old('source_income', $hold->source_income)=="11" ? "selected":""}}>সেবিকা</option>
                                        <option value="12" {{ old('source_income', $hold->source_income)=="12" ? "selected":""}}>দলিল লেখক</option>
                                        <option value="13" {{ old('source_income', $hold->source_income)=="13" ? "selected":""}}>শ্রমিক</option>
                                        <option value="14" {{ old('source_income', $hold->source_income)=="14" ? "selected":""}}>ঠিকাদার</option>
                                        <option value="15" {{ old('source_income', $hold->source_income)=="15" ? "selected":""}}>মৎস চাষী</option>
                                        <option value="16" {{ old('source_income', $hold->source_income)=="16" ? "selected":""}}>গাড়ি চালক</option>
                                        <option value="17" {{ old('source_income', $hold->source_income)=="17" ? "selected":""}}>প্রবাসী</option>
                                        <option value="18" {{ old('source_income', $hold->source_income)=="18" ? "selected":""}}>অন্যান্য</option>
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
                                        <option value="1" {{ old('marital_status', $hold->marital_status)=="1" ? "selected":""}}>বিবাহিত</option>
                                        <option value="2" {{ old('marital_status', $hold->marital_status)=="2" ? "selected":""}}>অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="internet" for="cars">ইন্টারনেট সংযোগ:- </label>
                                    <select name="internet_connection" id="internet" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('internet_connection', $hold->internet_connection)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('internet_connection', $hold->internet_connection)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="tube_well">নলকূপ :- </label>
                                    <select name="tube_well" id="tube_well" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1"{{ old('tube_well', $hold->tube_well)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2"{{ old('tube_well', $hold->tube_well)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="disline_connection">ডিসলাইন সংযোগ:- </label>
                                    <select name="disline_connection" id="disline_connection" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('disline_connection', $hold->disline_connection)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('disline_connection', $hold->disline_connection)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="paved_bathroom">বাথরুম:-</label>
                                    <select name="paved_bathroom" id="paved_bathroom" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('paved_bathroom', $hold->paved_bathroom)=="1" ? "selected":""}}>কাঁচা</option>
                                        <option value="2" {{ old('paved_bathroom', $hold->paved_bathroom)=="2" ? "selected":""}}>পাকা</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="arsenic_free">আর্সেনিকমুক্ত:- </label>
                                    <select name="arsenic_free" id="arsenic_free" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('arsenic_free', $hold->arsenic_free)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('arsenic_free', $hold->arsenic_free)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="mobile_bank"><b>মোবাইল ব্যাংক</b></label>
                                <div class="row m-2">
                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank1" value="1" @if(in_array(1, $Mobile_bank)) checked @endif/>
                                        <label  class="form-label" for="mobile_bank1">নগদ</label>
                                    </div>

                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank2" value="2" @if(in_array(2, $Mobile_bank)) checked @endif/>
                                        <label  class="form-label" for="mobile_bank2">বিকাশ</label>
                                    </div>

                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank3" value="3" @if(in_array(3, $Mobile_bank)) checked @endif/>
                                        <label  class="form-label" for="mobile_bank3">রকেট</label>
                                    </div>

                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank4" value="4" @if(in_array(4, $Mobile_bank)) checked @endif/>
                                        <label  class="form-label" for="mobile_bank4">উপায়</label>
                                    </div>

                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank5" value="5" @if(in_array(5, $Mobile_bank)) checked @endif/>
                                        <label  class="form-label" for="mobile_bank5">অন্যান্য</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for=""><b>ডিজিটাল ডিভাইস</b></label>
                                <div class="row m-2">
                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices1" value="1" @if(in_array(1, $Digital_devices)) checked @endif/>
                                        <label  class="form-label" for="digital_devices1">স্মার্ট ফোন</label>
                                    </div>

                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices2" value="2" @if(in_array(2, $Digital_devices)) checked @endif/>
                                        <label  class="form-label" for="digital_devices2">ল্যাপটপ</label>
                                    </div>

                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices3" value="3" @if(in_array(3, $Digital_devices)) checked @endif/>
                                        <label  class="form-label" for="digital_devices3">কম্পিউটার</label>
                                    </div>

                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices4" value="4" @if(in_array(4, $Digital_devices)) checked @endif/>
                                        <label  class="form-label" for="digital_devices4">অন্যান্য</label>
                                    </div>

                                    {{-- <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices5" value="5" {{old('digital_devices') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="digital_devices5">টিভি</label>
                                    </div> --}}
                                </div>

                            </div>
                            <div class="border border-2 m-2 p-3">
                                <div class="row m-2">
                                    <label  class="form-label" for="government_facilities">সরকারি সুবিধা:- </label>
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities1" value="1" @if(in_array(1, $Govt_fac)) checked @endif />
                                        <label  class="form-label" for="government_facilities1">ভিজিডি কার্ড</label>
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
                                    <div class="col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities6" value="6" @if(in_array(6, $Govt_fac)) checked @endif/>
                                        <label  class="form-label" for="government_facilities6">রেশন কার্ড</label>
                                    </div>
                                    <div class="col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities7" value="7" @if(in_array(7, $Govt_fac)) checked @endif/>
                                        <label  class="form-label" for="government_facilities7">মুক্তিযোদ্ধা ভাতা</label>
                                    </div>
                                </div>

                            </div>

                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="residence_type">বাড়ির ধরন :-</label>
                                    <select name="residence_type" class="form-select @error('residence_type') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('residence_type', $hold->residence_type)=="1" ? "selected":""}}>কাঁচা-ঘর</option>
                                        <option value="2" {{ old('residence_type', $hold->residence_type)=="2" ? "selected":""}}>টিনসেট</option>
                                        <option value="3" {{ old('residence_type', $hold->residence_type)=="3" ? "selected":""}}>আধা-পাকা</option>
                                        <option value="4" {{ old('residence_type', $hold->residence_type)=="4" ? "selected":""}}>পাকা ইমারত</option>
                                        <option value="5" {{ old('residence_type', $hold->residence_type)=="5" ? "selected":""}}>২য় তলা বাড়ী</option>
                                        <option value="6" {{ old('residence_type', $hold->residence_type)=="6" ? "selected":""}}>৩য় তলা বাড়ী</option>
                                    </select>
                                    @if($errors->has('residence_type'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('residence_type') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="house_room">বাড়ির রুম/ঘর:-</label>
                                    <input class="form-control @error('house_room') is-invalid @enderror"
                                    name="house_room" id="house_room" value="{{ old('house_room',$hold->house_room) }}"  type="number" placeholder="বাড়ির রুম/ঘর">
                                    @if($errors->has('house_room'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_room') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="family_status">পারিবারিক অবস্থা :-</label>
                                    <select name="family_status" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('family_status', $hold->family_status)=="1" ? "selected":""}}>হতদরিদ্র</option>
                                        <option value="2" {{ old('family_status', $hold->family_status)=="2" ? "selected":""}}>নিন্ম-মধ্যবৃত্ত</option>
                                        <option value="3" {{ old('family_status', $hold->family_status)=="3" ? "selected":""}}>মধ্যবৃত্ত</option>
                                        <option value="4" {{ old('family_status', $hold->family_status)=="4" ? "selected":""}}>উচ্চ-মধ্যবৃত্ত</option>
                                        <option value="5" {{ old('family_status', $hold->family_status)=="5" ? "selected":""}}>উচ্চবৃত্ত</option>
                                    </select>
                                    {{-- @if($errors->has('family_status'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('family_status') }}
                                    </small>
                                    @endif --}}
                                </div>
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="main_source_income">আয়ের প্রধান উৎস :-</label>
                                    <select name="main_source_income" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('main_source_income', $hold->main_source_income)=="1" ? "selected":""}}>চাকুরী <sub>(সরকারী)</sub></option>
                                        <option value="2" {{ old('main_source_income', $hold->main_source_income)=="2" ? "selected":""}}>চাকুরী <sub>(বেসরকারী)</sub></option>
                                        <option value="3" {{ old('main_source_income', $hold->main_source_income)=="3" ? "selected":""}}>প্রবাসী</option>
                                        <option value="4" {{ old('main_source_income', $hold->main_source_income)=="4" ? "selected":""}}>শিক্ষক</option>
                                        <option value="5" {{ old('main_source_income', $hold->main_source_income)=="5" ? "selected":""}}>শ্রমিক</option>
                                        <option value="6" {{ old('main_source_income', $hold->main_source_income)=="6" ? "selected":""}}>কৃষি খামার</option>
                                        <option value="7" {{ old('main_source_income', $hold->main_source_income)=="7" ? "selected":""}}>মৎস খামার</option>
                                        <option value="8" {{ old('main_source_income', $hold->main_source_income)=="8" ? "selected":""}}>দুগ্ধ খামার</option>
                                        <option value="9" {{ old('main_source_income', $hold->main_source_income)=="9" ? "selected":""}}>হাঁস-মুরগীর খামার</option>
                                        <option value="10" {{ old('main_source_income', $hold->main_source_income)=="10" ? "selected":""}}>গবাদি পশুর খামার</option>
                                        <option value="11" {{ old('main_source_income', $hold->main_source_income)=="11" ? "selected":""}}>মুদির দোকান</option>
                                        <option value="12" {{ old('main_source_income', $hold->main_source_income)=="12" ? "selected":""}}>আর্থিক প্রতিষ্ঠান</option>
                                        <option value="13" {{ old('main_source_income', $hold->main_source_income)=="13" ? "selected":""}}>ক্ষুদ্র ও কুটির শিল্প</option>
                                        <option value="14" {{ old('main_source_income', $hold->main_source_income)=="14" ? "selected":""}}>মাঝারি শিল্প</option>
                                        <option value="15" {{ old('main_source_income', $hold->main_source_income)=="15" ? "selected":""}}>খাবার হোটেল</option>
                                        <option value="16" {{ old('main_source_income', $hold->main_source_income)=="16" ? "selected":""}}>প্রকৌশলী</option>
                                        <option value="17" {{ old('main_source_income', $hold->main_source_income)=="17" ? "selected":""}}>আইনজীবী</option>
                                        <option value="18" {{ old('main_source_income', $hold->main_source_income)=="18" ? "selected":""}}>চিকিৎসক</option>
                                        <option value="19" {{ old('main_source_income', $hold->main_source_income)=="19" ? "selected":""}}>ক্লিনিক</option>
                                        <option value="20" {{ old('main_source_income', $hold->main_source_income)=="20" ? "selected":""}}>ঔষদের দোকান</option>
                                        <option value="21" {{ old('main_source_income', $hold->main_source_income)=="21" ? "selected":""}}>আবাসিক হোটেল</option>
                                        <option value="22" {{ old('main_source_income', $hold->main_source_income)=="22" ? "selected":""}}>মিষ্টির দোকান</option>
                                        <option value="23" {{ old('main_source_income', $hold->main_source_income)=="23" ? "selected":""}}>বে-সরকারি হাসপাতাল</option>
                                        <option value="24" {{ old('main_source_income', $hold->main_source_income)=="24" ? "selected":""}}>বে-সরকারি স্কুল</option>
                                        <option value="25" {{ old('main_source_income', $hold->main_source_income)=="25" ? "selected":""}}>কোচিং সেন্টার</option>
                                        <option value="26" {{ old('main_source_income', $hold->main_source_income)=="26" ? "selected":""}}>খাবার হোটেল</option>
                                        <option value="27" {{ old('main_source_income', $hold->main_source_income)=="27" ? "selected":""}}>হিমাগার</option>
                                        <option value="28" {{ old('main_source_income', $hold->main_source_income)=="28" ? "selected":""}}>ধান ভাঙানোর কল</option>
                                        <option value="29" {{ old('main_source_income', $hold->main_source_income)=="29" ? "selected":""}}>আটার কল</option>
                                        <option value="30" {{ old('main_source_income', $hold->main_source_income)=="30" ? "selected":""}}>তেলের কল</option>
                                        <option value="31" {{ old('main_source_income', $hold->main_source_income)=="31" ? "selected":""}}>স’ মিল</option>
                                        <option value="32" {{ old('main_source_income', $hold->main_source_income)=="32" ? "selected":""}}>বিউটি পার্লার</option>
                                        <option value="33" {{ old('main_source_income', $hold->main_source_income)=="33" ? "selected":""}}>হেয়ার কাট সেলুন</option>
                                        <option value="34" {{ old('main_source_income', $hold->main_source_income)=="34" ? "selected":""}}>লন্ড্রীর দোকান</option>
                                        <option value="35" {{ old('main_source_income', $hold->main_source_income)=="35" ? "selected":""}}>ইন্জিনিয়ারিং ফার্ম</option>
                                        <option value="36" {{ old('main_source_income', $hold->main_source_income)=="36" ? "selected":""}}>শিল্প কারখানা</option>
                                        <option value="37" {{ old('main_source_income', $hold->main_source_income)=="37" ? "selected":""}}>ইট ভাটা</option>
                                        <option value="38" {{ old('main_source_income', $hold->main_source_income)=="38" ? "selected":""}}>কনসালটেন্সি ফার্ম</option>
                                        <option value="39" {{ old('main_source_income', $hold->main_source_income)=="39" ? "selected":""}}>গুদাম</option>
                                        <option value="40" {{ old('main_source_income', $hold->main_source_income)=="40" ? "selected":""}}>রিক্সার মালিক</option>
                                        <option value="41" {{ old('main_source_income', $hold->main_source_income)=="41" ? "selected":""}}>বাজার ইজারা</option>
                                        <option value="42" {{ old('main_source_income', $hold->main_source_income)=="42" ? "selected":""}}>টেম্পোর মালিক</option>
                                        <option value="43" {{ old('main_source_income', $hold->main_source_income)=="43" ? "selected":""}}>বাসের মালিক</option>
                                        <option value="44" {{ old('main_source_income', $hold->main_source_income)=="44" ? "selected":""}}>ট্রাকের মালিক</option>
                                        <option value="45" {{ old('main_source_income', $hold->main_source_income)=="45" ? "selected":""}}>পরিবহন এজেন্সি</option>
                                        <option value="46" {{ old('main_source_income', $hold->main_source_income)=="46" ? "selected":""}}>নৌযানের মালিক</option>
                                        <option value="47" {{ old('main_source_income', $hold->main_source_income)=="47" ? "selected":""}}>অটো-রিক্সার মালিক</option>
                                        <option value="48" {{ old('main_source_income', $hold->main_source_income)=="48" ? "selected":""}}>স্টীমার/কার্গোর মালিক</option>
                                        <option value="49" {{ old('main_source_income', $hold->main_source_income)=="49" ? "selected":""}}>শিশু পার্ক</option>
                                        <option value="50" {{ old('main_source_income', $hold->main_source_income)=="50" ? "selected":""}}>বিনোদন পার্ক</option>
                                        <option value="51" {{ old('main_source_income', $hold->main_source_income)=="51" ? "selected":""}}>জবাই পশু</option>
                                        <option value="52" {{ old('main_source_income', $hold->main_source_income)=="52" ? "selected":""}}>ঠিকাদার</option>
                                        <option value="53" {{ old('main_source_income', $hold->main_source_income)=="53" ? "selected":""}}>গাড়ী চালক</option>
                                        <option value="54" {{ old('main_source_income', $hold->main_source_income)=="54" ? "selected":""}}>অন্যান্য</option>
                                    </select>
                                    @if($errors->has('main_source_income'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('main_source_income') }}
                                    </small>
                                    @endif
                                </div> --}}
                                <div class="col-6">
                                    <label  class="form-label" for="percentage_house_land">বাড়ির জমি শতাংশ:-</label>
                                    <input class="form-control @error('percentage_house_land') is-invalid @enderror"
                                    name="percentage_house_land" id="percentage_house_land" value="{{ old('percentage_house_land',$hold->percentage_house_land) }}"  type="text" placeholder="বাড়ির জমি শতাংশ">
                                    {{-- @if($errors->has('percentage_house_land'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('percentage_house_land') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="percentage_cultivated_land">আবাদী জমি শতাংশ:-</label>
                                    <input class="form-control @error('percentage_cultivated_land') is-invalid @enderror"
                                    name="percentage_cultivated_land" id="percentage_cultivated_land" value="{{ old('percentage_cultivated_land',$hold->percentage_cultivated_land) }}"  type="text" placeholder="আবাদী জমি শতাংশ">
                                    @if($errors->has('percentage_cultivated_land'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('percentage_cultivated_land') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="estimated_value_house">বাড়ির আনুমানিক মূল্য:-</label>
                                    <input class="form-control @error('estimated_value_house') is-invalid @enderror"
                                    name="estimated_value_house" id="estimated_value_house" value="{{ old('estimated_value_house',$hold->estimated_value_house) }}"  type="number" placeholder="বাড়ির আনুমানিক মূল্য">
                                    {{-- @if($errors->has('estimated_value_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('estimated_value_house') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="tax_levied_annually_house">বাড়ির বার্ষিক ধার্যকৃত কর:-</label>
                                    <input class="form-control @error('tax_levied_annually_house') is-invalid @enderror"
                                    name="tax_levied_annually_house" id="tax_levied_annually_house" value="{{ old('tax_levied_annually_house',$hold->tax_levied_annually_house) }}"  type="number" placeholder="বাড়ির বার্ষিক ধার্যকৃত কর">
                                    @if($errors->has('tax_levied_annually_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('tax_levied_annually_house') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="business_taxes"><b>কর/আয়ের উৎস</b></label>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes1" value="1" @if(in_array(1, $Business_taxes)) checked @endif />
                                        <label  class="form-label" for="business_taxes1">কৃষি খামার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes2" value="2" @if(in_array(2, $Business_taxes)) checked @endif />
                                        <label  class="form-label" for="business_taxes2">মৎস খামার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes3" value="3" @if(in_array(3, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes3">দুগ্ধ খামার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes4" value="4" @if(in_array(4, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes4">হাঁস-মুরগীর খামার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes5" value="5" @if(in_array(5, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes5">গবাদি পশুর খামার</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes6" value="6" @if(in_array(6, $Business_taxes)) checked @endif />
                                        <label  class="form-label" for="business_taxes6">মুদির দোকান</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes7" value="7" @if(in_array(7, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes7">আর্থিক প্রতিষ্ঠান</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes8" value="8" @if(in_array(8, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes8">ক্ষুদ্র ও কুটির শিল্প</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes9" value="9" @if(in_array(9, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes9">মাঝারি শিল্প</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes10" value="10" @if(in_array(10, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes10">খাবার হোটেল</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes11" value="11" @if(in_array(11, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes11">প্রকৌশলী</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes12" value="12" @if(in_array(12, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes12">আইনজীবি</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes13" value="13" @if(in_array(13, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes13"> চিকিৎসক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes14" value="14" @if(in_array(14, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes14">ক্লিনিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes15" value="15" @if(in_array(15, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes15">ঔষদের দোকান</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes16" value="16" @if(in_array(16, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes16">আবাসিক হোটেল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes17" value="17" @if(in_array(17, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes17">মিষ্টির দোকান</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes18" value="18" @if(in_array(18, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes18">বে-সরকারি হাসপাতাল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes19" value="19" @if(in_array(19, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes19">বে-সরকারি স্কুল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes20" value="20" @if(in_array(20, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes20"> কোচিং সেন্টার</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes21" value="21" @if(in_array(21, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes21">ঠিকাদার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes22" value="22" @if(in_array(22, $Business_taxes)) checked @endif />
                                        <label  class="form-label" for="business_taxes22">হিমাগার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes23" value="23" @if(in_array(23, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes23">ধান ভাঙানোর কল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes24" value="24" @if(in_array(24, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes24">আটার কল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes25" value="25" @if(in_array(25, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes25">তেলের কল</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes26" value="26" @if(in_array(26, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes26">স’মিল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes27" value="27" @if(in_array(27, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes27">বিউটি পার্লার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes28" value="28" @if(in_array(28, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes28">হেয়ার কাট সেলুন</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes29" value="29" @if(in_array(29, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes29">লন্ড্রীর দোকান</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes30" value="30" @if(in_array(30, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes30">ইঞ্জিনিয়রিং ফার্ম</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes31" value="31" @if(in_array(31, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes31">শিল্প কারখানা</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes32" value="32" @if(in_array(32, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes32">ইট ভাটা</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes33" value="33" @if(in_array(33, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes33"> কনসালটেন্সি ফার্ম</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes34" value="34" @if(in_array(34, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes34">গুদাম</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes35" value="35" @if(in_array(35, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes35">রিক্মার মালিক</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes36" value="36" @if(in_array(36, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes36">বাজার ইজারা</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes37" value="37" @if(in_array(37, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes37">টেম্পের মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes38" value="38" @if(in_array(38, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes38">বাসের মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes39" value="39" @if(in_array(39, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes39">ট্রাকের মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes40" value="40" @if(in_array(40, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes40"> পরিবহন এজেন্সী</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes41" value="41" @if(in_array(41, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes41">নৌযানের মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes42" value="42" @if(in_array(42, $Business_taxes)) checked @endif />
                                        <label  class="form-label" for="business_taxes42">অটো রিক্সার মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes43" value="43" @if(in_array(43, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes43">স্টীমার/কার্গোর মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes44" value="44" @if(in_array(44, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes44">শিশু পার্ক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes45" value="45" @if(in_array(45, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes45"> বিনোদন পার্ক</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    {{-- <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes46" value="46" {{old('business_taxes') == '46' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes46">পশু জবাইয়</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes47" value="47" {{old('business_taxes') == '47' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes47">ঠিকাদার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes48" value="48" {{old('business_taxes') == '48' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes48">২য় শ্রেণীর ঠিকাদার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes49" value="49" {{old('business_taxes') == '49' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes49">৩য় শ্রেণীর ঠিকাদার</label>
                                    </div> --}}

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes50" value="50" @if(in_array(50, $Business_taxes)) checked @endif/>
                                        <label  class="form-label" for="business_taxes50"> অন্যান্য</label>
                                    </div>
                                </div>
                                @if($errors->has('business_taxes'))
                                <small class="d-block text-danger text-center">
                                    {{ $errors->first('business_taxes') }}
                                </small>
                                @endif
                            </div>
                            {{-- <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="annual_tax_collected_house">বাড়ির বার্ষিক আদায়কৃত কর:-</label>
                                    <input class="form-control @error('annual_tax_collected_house') is-invalid @enderror"
                                    name="annual_tax_collected_house" id="annual_tax_collected_house" value="{{ old('annual_tax_collected_house',$hold->annual_tax_collected_house) }}"  type="text" placeholder="বাড়ির বার্ষিক আদায়কৃত কর">
                                    @if($errors->has('annual_tax_collected_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_tax_collected_house') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="annual_house_tax_arrears">বাড়ির বার্ষিক বকেয়া কর:-</label>
                                    <input class="form-control @error('annual_house_tax_arrears') is-invalid @enderror"
                                    name="annual_house_tax_arrears" id="annual_house_tax_arrears" value="{{ old('annual_house_tax_arrears',$hold->annual_house_tax_arrears) }}"  type="text" placeholder="বাড়ির বার্ষিক বকেয়া কর">
                                    @if($errors->has('annual_house_tax_arrears'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_house_tax_arrears') }}
                                    </small>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="row m-3">
                                <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকারীর স্থায়ী ঠিকানা সমূহঃ </h4>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="house_holding_no">বাড়ির হেল্ডিং নম্বর:-</label>
                                    <input class="form-control @error('house_holding_no') is-invalid @enderror"
                                    name="house_holding_no" id="house_holding_no" value="{{ old('house_holding_no',$hold->house_holding_no) }}"  type="text" placeholder="ইউনিয়ন পরিষদ কতৃক পূরণকৃত">
                                    {{-- @if($errors->has('house_holding_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_holding_no') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="post_office">ডাকঘর:-</label>
                                    <input class="form-control @error('post_office') is-invalid @enderror"
                                    name="post_office" id="post_office" value="{{ old('post_office',$hold->post_office) }}"  type="text" placeholder="ডাকঘর">
                                    @if($errors->has('post_office'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('post_office') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label for="district">জেলা:-</label>
                                    <select id="district_id" name="district_id" class="form-select search_district_eid">
                                        <option value="">নির্বাচন করুন</option>
                                        @foreach ($districts as $district)
                                        <option value="{{ $district->id }}"{{$hold->district_id == $district->id ? 'selected' : ''}}>{{ $district->name_bn }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('district'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('district') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="upazila_thana">উপজেলা/থানা:-</label>
                                    <select id="upazila_id" name="upazila_id" class="form-select search_district_eid">
                                        @foreach ($upazilas as $upazila)
                                        <option value="{{ $upazila->id }}"{{$hold->upazila_id == $upazila->id ? 'selected' : ''}}>{{ $upazila->name_bn }}</option>
                                        @endforeach
                                    </select>
                                    {{-- @if($errors->has('upazila_thana'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('upazila_thana') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="union_id">ইউনিয়ন পরিষদের নাম:-</label>
                                    <select id="union_id" name="union_id" class="form-select search_district_eid">
                                        @foreach ($unions as $union)
                                        <option value="{{ $union->id }}"{{$hold->union_id == $union->id ? 'selected' : ''}}>{{ $union->name_bn }}</option>
                                        @endforeach
                                    </select>
                                    {{-- @if($errors->has('upazila_thana'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('upazila_thana') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="ward_id">ওয়ার্ড:-</label>
                                    <select name="ward_id" class="form-select search_district" id="ward_id">
                                        <option value="" selected="selected">ওয়ার্ড নং</option>
                                        @forelse ($wards as $w)
                                        <option value="{{ $w->id }}" {{$hold->ward_id == $w->id ? 'selected' : ''}}>{{ $w->ward_name_bn }}</option>
                                        @empty
                                        <p>No Ward found</p>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="village_name">গ্রামের নাম:-</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name',$hold->village_name) }}"  type="text" placeholder="গ্রামের নাম">
                                    {{-- @if($errors->has('village_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('village_name') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="street_nm">রাস্তা/পাড়া/মহল্লা:-</label>
                                    <input class="form-control @error('street_nm') is-invalid @enderror"
                                    name="street_nm" id="street_nm" value="{{ old('street_nm',$hold->street_nm) }}"  type="text" placeholder="রাস্তা/পাড়া/মহল্লা">
                                    @if($errors->has('street_nm'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('street_nm') }}
                                    </small>
                                    @endif
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
                                    <label  class="form-label" for="birth_registration_image">জন্ম নিবন্ধনের রঙিন কপি :-</label>
                                    <input class="form-control" type="file" name="birth_registration_image" id="birth_registration_image" value="{{ old('birth_registration_image') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                <div class="image-overlay">
                                    <label  class="form-label" for="image">সদ্য তোলা রঙিন ছবি:-</label>
                                        <input type="file" name="image" value="" data-default-file="{{ asset('uploads/holding') }}/{{ $hold->image }}" class="form-control dropify">
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
