@extends('layout.app')

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-warning"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: rgb(12, 12, 11); padding-top: 5px;">ওয়ারিশান ফরম আপডেট করুন</h4>
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
                          <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.warishan.update',encryptor('encrypt',$warishan->id))}}">
                              @csrf
                              @method('patch')
                              <div class="row">
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div> --}}
                                
                                    
                                    <div class="col-sm-2 col-lg-2">
                                        <label  class="form-label" for="holding_date">তারিখ :-</label>
                                    </div>
                                    <div class="col-sm-2 col-lg-2 ms-0 ps-0">
                                        <input class="form-control datepicker" name="holding_date" value="{{ old('holding_date',$warishan->holding_date) }}" id="holding_date" type="text">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label  class="form-label" for="head_household">আবেদনকারীর নাম  :-</label>
                                        <input class="form-control @error('head_household') is-invalid @enderror" type="text"
                                        name="head_household" value="{{ old('head_household',$warishan->head_household) }}" id="head_household" placeholder="আবেদনকারীর নাম">
                                        @if($errors->has('head_household'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('head_household') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="husband_wife">স্বামী/স্ত্রীর নাম :- </label>
                                        <input class="form-control" type="text"
                                        name="husband_wife" value="{{ old('husband_wife',$warishan->husband_wife) }}" id="husband_wife" value="{{ old('') }}" placeholder="পিতা/ স্বামী">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label  class="form-label" for="mother_name">মাতার নাম :-</label>
                                        <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                        name="mother_name" value="{{ old('mother_name',$warishan->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
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
                                            <option value="1" {{ old('gender', $warishan->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                            <option value="2" {{ old('gender', $warishan->gender)=="2" ? "selected":""}}>মহিলা</option>
                                            <option value="3" {{ old('gender', $warishan->gender)=="3" ? "selected":""}}>তৃতীয় লিঙ্গ</option>
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
                                        name="birth_date" id="birth_date" value="{{ old('birth_date',$warishan->birth_date) }}"  type="text" placeholder="মাস-দিন-সাল">
                                        @if($errors->has('birth_date'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('birth_date') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="voter_id_no">ভোটার আইডি নং :-</label>
                                        <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$warishan->voter_id_no) }}" placeholder="ভোটার আইডি নং">
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
                                        name="birth_registration_id" value="{{ old('birth_registration_id',$warishan->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
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
                                            <option value="1" {{ old('religion', $warishan->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                            <option value="2" {{ old('religion', $warishan->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                            <option value="3" {{ old('religion', $warishan->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                            <option value="4" {{ old('religion', $warishan->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                            <option value="5" {{ old('religion', $warishan->religion)=="5" ? "selected":""}}>উপজাতি</option>
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
                                        name="phone" id="phone" value="{{ old('phone',$warishan->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
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
                                            <option value="1" {{ old('edu_qual', $warishan->edu_qual)=="1" ? "selected":""}}>স্ব-শিক্ষিত</option>
                                            <option value="2" {{ old('edu_qual', $warishan->edu_qual)=="2" ? "selected":""}}>প্রাথমিক</option>
                                            <option value="3" {{ old('edu_qual', $warishan->edu_qual)=="3" ? "selected":""}}>মাধ্যমিক</option>
                                            <option value="4" {{ old('edu_qual', $warishan->edu_qual)=="4" ? "selected":""}}>উচ্চ-মাধ্যমিক</option>
                                            <option value="5" {{ old('edu_qual', $warishan->edu_qual)=="5" ? "selected":""}}>উচ্চতর-ডিগ্রী</option>
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
                                        <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$warishan->email) }}" placeholder=".....@mail.com">
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="source_inc">পেশা বা আয়ের উৎস :-</label>
                                        <select name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1" {{ old('source_income', $warishan->source_income)=="1" ? "selected":""}}>শিক্ষক</option>
                                            <option value="2" {{ old('source_income', $warishan->source_income)=="2" ? "selected":""}}>শিক্ষার্থী</option>
                                            <option value="3" {{ old('source_income', $warishan->source_income)=="3" ? "selected":""}}>সরকারি চাকুরীজীবি</option>
                                            <option value="4" {{ old('source_income', $warishan->source_income)=="4" ? "selected":""}}>বে-সরকারি চাকুরীজীবি</option>
                                            <option value="5" {{ old('source_income', $warishan->source_income)=="5" ? "selected":""}}>গৃহীনি</option>
                                            <option value="6" {{ old('source_income', $warishan->source_income)=="6" ? "selected":""}}>কৃষক</option>
                                            <option value="7" {{ old('source_income', $warishan->source_income)=="7" ? "selected":""}}>ব্যবসা</option>
                                            <option value="8" {{ old('source_income', $warishan->source_income)=="8" ? "selected":""}}>প্রকৌশলি</option>
                                            <option value="9" {{ old('source_income', $warishan->source_income)=="9" ? "selected":""}}>আইনজীবী</option>
                                            <option value="10" {{ old('source_income', $warishan->source_income)=="10" ? "selected":""}}>চিকিৎসক</option>
                                            <option value="11" {{ old('source_income', $warishan->source_income)=="11" ? "selected":""}}>সেবিকা</option>
                                            <option value="12" {{ old('source_income', $warishan->source_income)=="12" ? "selected":""}}>দলিল লেখক</option>
                                            <option value="13" {{ old('source_income', $warishan->source_income)=="13" ? "selected":""}}>শ্রমিক</option>
                                            <option value="14" {{ old('source_income', $warishan->source_income)=="14" ? "selected":""}}>ঠিকাদার</option>
                                            <option value="15" {{ old('source_income', $warishan->source_income)=="15" ? "selected":""}}>মৎস চাষী</option>
                                            <option value="16" {{ old('source_income', $warishan->source_income)=="16" ? "selected":""}}>গাড়ি চালক</option>
                                            <option value="17" {{ old('source_income', $warishan->source_income)=="17" ? "selected":""}}>প্রবাসী</option>
                                            <option value="18" {{ old('source_income', $warishan->source_income)=="18" ? "selected":""}}>অন্যান্য</option>
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
                                            <option value="1" {{ old('marital_status', $warishan->marital_status)=="1" ? "selected":""}}>বিবাহিত</option>
                                            <option value="2" {{ old('marital_status', $warishan->marital_status)=="2" ? "selected":""}}>অবিবাহিত</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="internet" for="cars">ইন্টারনেট সংযোগ:- </label>
                                        <select name="internet_connection" id="internet" class="form-select">
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1" {{ old('internet_connection', $warishan->internet_connection)=="1" ? "selected":""}}>আছে</option>
                                            <option value="2" {{ old('internet_connection', $warishan->internet_connection)=="2" ? "selected":""}}>নাই</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label class="form-label" for="tube_well">নলকূপ :- </label>
                                        <select name="tube_well" id="tube_well" class="form-select">
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1"{{ old('tube_well', $warishan->tube_well)=="1" ? "selected":""}}>আছে</option>
                                            <option value="2"{{ old('tube_well', $warishan->tube_well)=="2" ? "selected":""}}>নাই</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="disline_connection">ডিসলাইন সংযোগ:- </label>
                                        <select name="disline_connection" id="disline_connection" class="form-select">
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1" {{ old('disline_connection', $warishan->disline_connection)=="1" ? "selected":""}}>আছে</option>
                                            <option value="2" {{ old('disline_connection', $warishan->disline_connection)=="2" ? "selected":""}}>নাই</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label class="form-label" for="paved_bathroom">বাথরুম:-</label>
                                        <select name="paved_bathroom" id="paved_bathroom" class="form-select">
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1" {{ old('paved_bathroom', $warishan->paved_bathroom)=="1" ? "selected":""}}>কাঁচা</option>
                                            <option value="2" {{ old('paved_bathroom', $warishan->paved_bathroom)=="2" ? "selected":""}}>পাকা</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label" for="arsenic_free">আর্সেনিকমুক্ত:- </label>
                                        <select name="arsenic_free" id="arsenic_free" class="form-select">
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1" {{ old('arsenic_free', $warishan->arsenic_free)=="1" ? "selected":""}}>আছে</option>
                                            <option value="2" {{ old('arsenic_free', $warishan->arsenic_free)=="2" ? "selected":""}}>নাই</option>
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
                                        <label  class="form-label" for="warishan_person_name">ওয়ারিশান ব্যাক্তির নাম:-</label>
                                        <input class="form-control @error('warishan_person_name') is-invalid @enderror"
                                        name="warishan_person_name" id="warishan_person_name" value="{{ old('warishan_person_name',$warishan->warishan_person_name) }}"  type="text" placeholder="ওয়ারিশান ব্যাক্তির নাম">
                                        @if($errors->has('warishan_person_name'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('warishan_person_name') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="father_husband">পিতা/স্বামীর নাম:-</label>
                                        <input class="form-control @error('father_husband') is-invalid @enderror"
                                        name="father_husband" id="father_husband" value="{{ old('father_husband',$warishan->father_husband) }}"  type="text" placeholder="পিতা/স্বামীর নাম">
                                        @if($errors->has('father_husband'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('father_husband') }}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label  class="form-label" for="warishan_mother_name">মাতার নাম:-</label>
                                        <input class="form-control"
                                        name="warishan_mother_name" id="warishan_mother_name" value="{{ old('warishan_mother_name',$warishan->warishan_mother_name) }}"  type="text" placeholder="মাতার নাম">
                                        {{-- @if($errors->has('warishan_mother_name'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('warishan_mother_name') }}
                                        </small>
                                        @endif --}}
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="date_death_warishan">ওয়ারিশাান ব্যাক্তির মৃত্যু তারিখ :-</label>
                                        <input class="form-control datepicker" name="date_death_warishan" value="{{ old('date_death_warishan',$warishan->date_death_warishan) }}" id="date_death_warishan" type="text" placeholder="যদি মারা যায়">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label  class="form-label" for="update_holding_tax">হালনাগাদ হোল্ডিং কর:-</label>
                                        <select name="update_holding_tax" class="form-select @error('update_holding_tax') is-invalid @enderror">
                                            <option value="">নির্বাচন করুন</option>
                                            <option value="1">আছে</option>
                                            <option value="2">নাই</option>
                                        </select>
                                        @if($errors->has('update_holding_tax'))
                                        <small class="d-block text-danger text-center">
                                            {{ $errors->first('update_holding_tax') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="wife_number">ওয়ারিশান ব্যাক্তির স্ত্রী কয়জন?:-</label>
                                        <input id="wife_count" onkeyup="addNumbers()" class="form-control @error('wife_number') is-invalid @enderror"
                                        name="wife_number" id="wife_number" value="{{ old('wife_number',$warishan->wife_number) }}"  type="number" placeholder="স্ত্রী সংখ্যা দিন">
                                        @if($errors->has('wife_number'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('wife_number') }}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label  class="form-label" for="estimated_value_house">ওয়ারিশান ব্যাক্তির সন্তান কয়জন?:-</label>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input class="form-check-input" type="checkbox" value="1" id="son">
                                                        <label class="form-check-label" for="son">ছেলে</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" id="sons" onkeyup="addNumbers()" class="form-control" name="son" min="0" value="{{ old('son',$warishan->son) }}" placeholder="সংখ্যা দিন">
                                                    </div>
                                                </div>
    
                                            </div>
                                            <div class="col-6">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <input class="form-check-input" type="checkbox" value="2" id="daughter">
                                                        <label class="form-check-label" for="daughter">মেয়ে</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" id="daughters" onkeyup="addNumbers()" class="form-control" name="daughter" value="{{ old('daughter',$warishan->daughter) }}" min="0" placeholder="সংখ্যা দিন">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <input class="form-control @error('estimated_value_house') is-invalid @enderror"
                                        name="estimated_value_house" id="estimated_value_house" value="{{ old('estimated_value_house') }}"  type="text" placeholder="বাড়ির আনুমানিক মূল্য"> --}}
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="total_warishan_members">উক্তব্যাক্তির মোট ওয়ারিশ সদস্য:-</label>
                                        <input readonly class="form-control @error('total_warishan_members') is-invalid @enderror"
                                        name="total_warishan_members" id="total_warishan" value="{{ old('total_warishan_members',$warishan->total_warishan_members) }}"  type="number" placeholder="মোট ওয়ারিশ সদস্য সংখ্যা">
                                        @if($errors->has('total_warishan_members'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('total_warishan_members') }}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="row m-3">
                                    <h4 class="" style="color: rgb(13, 134, 29); padding-top: 5px;">বাংলাদেশের ওয়ারিশান আইন অনুযায়ী ওয়ারিশান সদস্যদের বিবরণ সমূহঃ- </h4>
                                </div>
                                <div class="col-12 ">
                                    <table class="table table-hover mt-4 table-bordered" id="account">
                                        <thead>
                                            <tr>
                                                <th>সদস্য নং</th>
                                                <th>ওয়ারিশানদের নাম</th>
                                                <th>সম্পর্ক</th>
                                                <th>জন্ম তারিখ</th>
                                                <th>ভোটার আইডি</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table">
                                            @if ($warishan->warisan_children)
                                            @foreach ($warishan->warisan_children as $c)
                                                <tr>
                                                    <td class="smember" style='text-align:center;'>{{++$loop->index}}</td>
                                                    <td style='text-align:left;'>
                                                        <input type='text' name='cname[]' class='form-control' value='{{ $c->name }}' style='border:none;' maxlength='100' placeholder="নাম"/>
                                                    </td>
                                                    <td style='text-align:left;'>
                                                        <select class='cls_debit form-control' name="crelation[]" style='border:none;'>
                                                            <option value="">সম্পর্ক</option>
                                                            <option value="1"  {{ old('crelation', $c->ralation)=="1" ? "selected":""}}>স্ত্রী</option>
                                                            <option value="2" {{ old('crelation', $c->ralation)=="2" ? "selected":""}}>ছেলে</option>
                                                            <option value="3" {{ old('crelation', $c->ralation)=="3" ? "selected":""}}>মেয়ে</option>
                                                            <option value="4" {{ old('crelation', $c->ralation)=="4" ? "selected":""}}>অন্যান্য</option>
                                                        </select>
                                                    </td>
                                                    <td style='text-align:left;'>
                                                        <input class="form-control" name="cbirth_date[]" style='border:none;' value="{{ old('cbirth_date',$c->birth_date) }}" id="cbirth_date" type="date" placeholder="জন্ম তারিখ">
                                                    </td>
                                                    <td style='text-align:left;'>
                                                        <input class="form-control" name="cnid[]" id="cnid" style='border:none;' value="{{ old('cnid',$c->cnid) }}"  type="text" placeholder="ভোটার আইডি">
                                                    </td>
                                                </tr>
                                            @endforeach  
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row m-3">
                                    <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকৃত ওয়ারিশানের স্থায়ী ঠিকানা সমূহঃ </h4>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label  class="form-label" for="house_holding_no">বাড়ির হেল্ডিং নম্বর:-</label>
                                        <input class="form-control @error('house_holding_no') is-invalid @enderror"
                                        name="house_holding_no" id="house_holding_no" value="{{ old('house_holding_no',$warishan->house_holding_no) }}"  type="text" placeholder="ইউনিয়ন পরিষদ কতৃক পূরণকৃত">
                                        {{-- @if($errors->has('house_holding_no'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('house_holding_no') }}
                                        </small>
                                        @endif --}}
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="street_nm">রাস্তা/পাড়া/মহল্লা:-</label>
                                        <input class="form-control @error('street_nm') is-invalid @enderror"
                                        name="street_nm" id="street_nm" value="{{ old('street_nm',$warishan->street_nm) }}"  type="text" placeholder="রাস্তা/পাড়া/মহল্লা">
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
                                        name="village_name" id="village_name" value="{{ old('village_name',$warishan->village_name) }}"  type="text" placeholder="গ্রামের নাম">
                                        {{-- @if($errors->has('village_name'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('village_name') }}
                                        </small>
                                        @endif --}}
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="ward_no">ওয়ার্ড:-</label>
                                        <input class="form-control @error('ward_no') is-invalid @enderror"
                                        name="ward_no" id="ward_no" value="{{ old('ward_no',$warishan->ward_no) }}"  type="text" placeholder="ওয়ার্ড">
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
                                        name="name_union_parishad" id="name_union_parishad" value="{{ old('name_union_parishad',$warishan->name_union_parishad) }}"  type="text" placeholder="ইউনিয়ন পরিষদের নাম">
                                        {{-- @if($errors->has('name_union_parishad'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('name_union_parishad') }}
                                        </small>
                                        @endif --}}
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="post_office">ডাকঘর:-</label>
                                        <input class="form-control @error('post_office') is-invalid @enderror"
                                        name="post_office" id="post_office" value="{{ old('post_office',$warishan->post_office) }}"  type="text" placeholder="ডাকঘর">
                                        @if($errors->has('post_office'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('post_office') }}
                                        </small>
                                        @endif
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <label  class="form-label" for="upazila_thana">উপজেলা/থানা:-</label>
                                        <input class="form-control @error('upazila_thana') is-invalid @enderror"
                                        name="upazila_thana" id="upazila_thana" value="{{ old('upazila_thana',$warishan->upazila_thana) }}"  type="text" placeholder="উপজেলা/থানা">
                                        {{-- @if($errors->has('upazila_thana'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('upazila_thana') }}
                                        </small>
                                        @endif --}}
                                    </div>
                                    <div class="col-6">
                                        <label  class="form-label" for="district">জেলা:-</label>
                                        <input class="form-control @error('district') is-invalid @enderror"
                                        name="district" id="district" value="{{ old('district',$warishan->district) }}"  type="text" placeholder="জেলা">
                                        @if($errors->has('district'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('district') }}
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
                                        <label  class="form-label" for="holding_image">বাড়ি/প্রতিষ্ঠানের হোল্ডিং করের কপি:-</label>
                                        <input class="form-control" type="file" name="holding_image" id="holding_image" value="{{ old('holding_image') }}" placeholder="">
                                    </div>
                                </div>
                                <div class="row border border-2 m-2 p-3">
                                    <div class="col-6">
                                        <label  class="form-label" for="image">ছবি যদি থাকে তার কপি :-</label>
                                        <input class="form-control"
                                        name="image" id="image" value="{{ old('image') }}"  type="file" placeholder="">
                                    </div>
                                    <div class="col-6 float-right">
                                        <label  class="form-label" for="image_death_certificate">ওয়ারিশান ব্যাক্তির মৃত্যু নিবন্ধন সনদের কপি :-</label>
                                        <input class="form-control" type="file" name="image_death_certificate" id="image_death_certificate" value="{{ old('image_death_certificate') }}" placeholder="">
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-sm-3 text-end">
                                        <button type="submit" style="background-color: rgb(214, 153, 153);">Submit</button>
                                        <span class="btn or">or</span>
                                        <button type="reset" style="background-color: rgb(214, 153, 153);">Cancel</button>
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

@endsection
@push('scripts')
<script>
          function addNumbers() {
        var wife_count = document.getElementById("wife_count").value?parseFloat(document.getElementById("wife_count").value):0;
        var sons = document.getElementById("sons").value?parseFloat(document.getElementById("sons").value):0;
        var daughters = document.getElementById("daughters").value?parseFloat(document.getElementById("daughters").value):0;
        var result = wife_count + sons + daughters;

        document.getElementById("total_warishan").value = result;
        repeatRows(result)
      }

      function repeatRows(e) {
        //const Total_warishan = document.getElementById('total_warishan');
        const tableElement = document.getElementById('table');

        // Clear existing rows
        while (tableElement.rows.length > 1) {
          tableElement.deleteRow(1);
        }

        // Repeat rows based on input value
        const repeatCount = e;
        for (let is = 0; is < (repeatCount-1); is++) {
          const clonedRow = tableElement.rows[0].cloneNode(true);
          tableElement.appendChild(clonedRow);
          const serial=document.getElementsByClassName("smember");
          serial[is].innerHTML = is + 1;
          
        }
      }
</script>
@endpush
