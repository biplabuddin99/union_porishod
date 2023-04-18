@extends('layout.app')
{{-- @section('pageTitle',trans('নতুন হোল্ডিং')) --}}

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">আবেদন ফরম</h4>
            </div>
            <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকৃত ব্যক্তির পরিচিতি</h4>
        </div>
    </div>
</section>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route(currentUser().'.allapplication.update',$all->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row m-2">
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div> --}}
                                <div class="col-6">
                                    <label  class="form-label" for="holding_date">তারিখ :-</label>
                                    <input class="form-control col-6 datepicker" name="holding_date" value="{{ old('holding_date',$all->holding_date) }}" id="holding_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="head_household">আবেদনকারীর নাম  :-</label>
                                    <input class="form-control @error('head_household') is-invalid @enderror" type="text"
                                    name="head_household" value="{{ old('head_household',$all->head_household) }}" id="head_household" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('head_household'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('head_household') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="husband_wife">স্বামী/স্ত্রীর নাম :- </label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife',$all->husband_wife) }}" id="husband_wife" value="{{ old('') }}" placeholder="পিতা/ স্বামী">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="father_name">পিতার নাম :-</label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                    name="father_name" value="{{ old('father_name',$all->father_name) }}" id="father_name" placeholder="পিতার নাম">
                                    @if($errors->has('father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="birth_date">জন্ম তারিখ :-</label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date',$all->birth_date) }}"  type="text" placeholder="মাস-দিন-সাল">
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
                                    name="mother_name" value="{{ old('mother_name',$all->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
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
                                        <option value="1" {{ old('gender', $all->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                        <option value="2" {{ old('gender', $all->gender)=="2" ? "selected":""}}>মহিলা</option>
                                        <option value="3" {{ old('gender', $all->gender)=="3" ? "selected":""}}>তৃতীয় লিঙ্গ</option>
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
                                        <option value="1" {{ old('freedom_fighter', $all->freedom_fighter)=="1" ? "selected":""}}>বীর মুক্তিযোদ্ধা</option>
                                        <option value="2" {{ old('freedom_fighter', $all->freedom_fighter)=="2" ? "selected":""}}>বীরাঙ্গনা</option>
                                        <option value="3" {{ old('freedom_fighter', $all->freedom_fighter)=="3" ? "selected":""}}>অন্যান্য</option>
                                    </select>
                                    @if($errors->has('freedom_fighter'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('freedom_fighter') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="voter_id_no">ভোটার আইডি নং :-</label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$all->voter_id_no) }}" placeholder="ভোটার আইডি নং">
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
                                    name="birth_registration_id" value="{{ old('birth_registration_id',$all->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
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
                                        <option value="1" {{ old('religion', $all->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                        <option value="2" {{ old('religion', $all->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                        <option value="3" {{ old('religion', $all->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                        <option value="4" {{ old('religion', $all->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                        <option value="5" {{ old('religion', $all->religion)=="5" ? "selected":""}}>উপজাতি</option>
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
                                    name="phone" id="phone" value="{{ old('phone',$all->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
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
                                        <option value="1" {{ old('edu_qual', $all->edu_qual)=="1" ? "selected":""}}>স্ব-শিক্ষিত</option>
                                        <option value="2" {{ old('edu_qual', $all->edu_qual)=="2" ? "selected":""}}>প্রাথমিক</option>
                                        <option value="3" {{ old('edu_qual', $all->edu_qual)=="3" ? "selected":""}}>মাধ্যমিক</option>
                                        <option value="4" {{ old('edu_qual', $all->edu_qual)=="4" ? "selected":""}}>উচ্চ-মাধ্যমিক</option>
                                        <option value="5" {{ old('edu_qual', $all->edu_qual)=="5" ? "selected":""}}>উচ্চতর-ডিগ্রী</option>
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
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$all->email) }}" placeholder=".....@mail.com">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="source_inc">পেশা :-</label>
                                    <select name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('source_income', $all->source_income)=="1" ? "selected":""}}>শিক্ষক</option>
                                        <option value="2" {{ old('source_income', $all->source_income)=="2" ? "selected":""}}>শিক্ষার্থী</option>
                                        <option value="3" {{ old('source_income', $all->source_income)=="3" ? "selected":""}}>সরকারি চাকুরীজীবি</option>
                                        <option value="4" {{ old('source_income', $all->source_income)=="4" ? "selected":""}}>বে-সরকারি চাকুরীজীবি</option>
                                        <option value="5" {{ old('source_income', $all->source_income)=="5" ? "selected":""}}>গৃহীনি</option>
                                        <option value="6" {{ old('source_income', $all->source_income)=="6" ? "selected":""}}>কৃষক</option>
                                        <option value="7" {{ old('source_income', $all->source_income)=="7" ? "selected":""}}>ব্যবসা</option>
                                        <option value="8" {{ old('source_income', $all->source_income)=="8" ? "selected":""}}>প্রকৌশলি</option>
                                        <option value="9" {{ old('source_income', $all->source_income)=="9" ? "selected":""}}>আইনজীবী</option>
                                        <option value="10" {{ old('source_income', $all->source_income)=="10" ? "selected":""}}>চিকিৎসক</option>
                                        <option value="11" {{ old('source_income', $all->source_income)=="11" ? "selected":""}}>সেবিকা</option>
                                        <option value="12" {{ old('source_income', $all->source_income)=="12" ? "selected":""}}>দলিল লেখক</option>
                                        <option value="13" {{ old('source_income', $all->source_income)=="13" ? "selected":""}}>শ্রমিক</option>
                                        <option value="14" {{ old('source_income', $all->source_income)=="14" ? "selected":""}}>ঠিকাদার</option>
                                        <option value="15" {{ old('source_income', $all->source_income)=="15" ? "selected":""}}>মৎস চাষী</option>
                                        <option value="16" {{ old('source_income', $all->source_income)=="16" ? "selected":""}}>গাড়ি চালক</option>
                                        <option value="17" {{ old('source_income', $all->source_income)=="17" ? "selected":""}}>প্রবাসী</option>
                                        <option value="18" {{ old('source_income', $all->source_income)=="18" ? "selected":""}}>অন্যান্য</option>
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
                                        <option value="1" {{ old('marital_status', $all->marital_status)=="1" ? "selected":""}}>বিবাহিত</option>
                                        <option value="2" {{ old('marital_status', $all->marital_status)=="2" ? "selected":""}}>অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="internet" for="cars">ইন্টারনেট সংযোগ:- </label>
                                    <select name="internet_connection" id="internet" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('internet_connection', $all->internet_connection)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('internet_connection', $all->internet_connection)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="tube_well">নলকূপ :- </label>
                                    <select name="tube_well" id="tube_well" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1"{{ old('tube_well', $all->tube_well)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2"{{ old('tube_well', $all->tube_well)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="disline_connection">ডিসলাইন সংযোগ:- </label>
                                    <select name="disline_connection" id="disline_connection" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('disline_connection', $all->disline_connection)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('disline_connection', $all->disline_connection)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="paved_bathroom">বাথরুম:-</label>
                                    <select name="paved_bathroom" id="paved_bathroom" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('paved_bathroom', $all->paved_bathroom)=="1" ? "selected":""}}>কাঁচা</option>
                                        <option value="2" {{ old('paved_bathroom', $all->paved_bathroom)=="2" ? "selected":""}}>পাকা</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="arsenic_free">আর্সেনিকমুক্ত:- </label>
                                    <select name="arsenic_free" id="arsenic_free" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('arsenic_free', $all->arsenic_free)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('arsenic_free', $all->arsenic_free)=="2" ? "selected":""}}>নাই</option>
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
                            <div class="row m-3">
                                <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আপনি কেন আবেদনটি করতে চান? </h4>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label for=""><h5 style="color: rgb(13, 134, 29);">আবেদনের ধরন</h5></label>
                                <div class="col-6">
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application1" value="1" {{old('type_application',$all->type_application) == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application1">হোল্ডিং নাম্বার</label>
                                    </div>
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application3" value="3" {{old('type_application',$all->type_application) == '3' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application3">ওয়ারিশান সনদ</label>
                                    </div>
                                    <div class="row  ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application9" value="5" {{old('type_application',$all->type_application) == '5' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application9">পরিবারিক সনদ</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application2" value="2" {{old('type_application',$all->type_application) == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application2">ট্রেড লাইসেন্স</label>
                                    </div>
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application4" value="4" {{old('type_application',$all->type_application) == '4' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application4">নাগরিক সনদ</label>
                                    </div>
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application5" value="6" {{old('type_application',$all->type_application) == '6' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application5">ভিজিএফ কার্ড</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <div class="row ps-5">
                                        <a class="mt-2" href="#">ভিজিডি কার্ড</a>
                                    </div>
                                    <div class="row ps-5">
                                        <a class="mt-2" href="#">ভিডব্লিউবি কার্ড</a>
                                    </div>
                                    <div class="row ps-5">
                                        <a class="mt-2" href="#">প্রতিবন্ধী ভাতা</a>
                                    </div>
                                    <div class="row ps-5">
                                        <a class="mt-2" href="#">মাতৃত্বকালীন ভাতা</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <a class="mt-2" href="#">রেশন কার্ড</a>
                                    </div>
                                    <div class="row">
                                        <a class="mt-2" href="#">বয়স্ক ভাতা</a>
                                    </div>
                                    <div class="row">
                                        <a class="mt-2" href="#">বিধবা ভাতা</a>
                                    </div>
                                    <div class="row">
                                        <a class="mt-2" href="#">অন্যান্য</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="col-2 offset-5">
                                    <button class="text-center" style="background-color: rgb(214, 153, 153); padding-top: 5px;">পরবর্তী</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
