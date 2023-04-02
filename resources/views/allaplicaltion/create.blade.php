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
                        <form action="{{route(currentUser().'.allapplication.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div> --}}

                                <div class="col-sm-2 col-lg-2">
                                    <label  class="form-label" for="holding_date">তারিখ :-</label>
                                </div>
                                <div class="col-sm-2 col-lg-2 ms-0 ps-0">
                                    <input class="form-control datepicker" name="holding_date" value="<?php date_default_timezone_set('Asia/Dhaka'); $date = date('d-M-y'); echo $date; ?>" id="holding_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="head_household">আবেদনকারীর নাম  :-</label>
                                    <input class="form-control @error('head_household') is-invalid @enderror" type="text"
                                    name="head_household" value="{{ old('head_household') }}" id="head_household" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('head_household'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('head_household') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="husband_wife">স্বামী/স্ত্রীর নাম :- </label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife') }}" id="husband_wife" placeholder="পিতা/ স্বামী">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="mother_name">মাতার নাম :-</label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name') }}" id="mother_name" placeholder="মাতার নাম">
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
                                        <option value="1">পুরুষ</option>
                                        <option value="2">মহিলা</option>
                                        <option value="3">তৃতীয় লিঙ্গ</option>
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
                                    name="birth_date" id="birth_date" value="{{ old('birth_date') }}"  type="text" placeholder="মাস-দিন-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="voter_id_no">ভোটার আইডি নং :-</label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no') }}" placeholder="ভোটার আইডি নং">
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
                                    name="birth_registration_id" value="{{ old('birth_registration_id') }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
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
                                        <option value="1">ইসলাম</option>
                                        <option value="2">হিন্দু</option>
                                        <option value="3">বৌদ্ধ</option>
                                        <option value="4">খ্রিষ্টান</option>
                                        <option value="5">উপজাতি</option>
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
                                    name="phone" id="phone" value="{{ old('phone') }}"  type="text" placeholder="মোবাইল নম্বর">
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
                                        <option value="1">স্ব-শিক্ষিত</option>
                                        <option value="2">প্রাথমিক</option>
                                        <option value="3">মাধ্যমিক</option>
                                        <option value="4">উচ্চ-মাধ্যমিক</option>
                                        <option value="5">উচ্চতর-ডিগ্রী</option>
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
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" placeholder=".....@mail.com">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="source_inc">পেশা বা আয়ের উৎস :-</label>
                                    <select name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">শিক্ষক</option>
                                        <option value="2">শিক্ষার্থী</option>
                                        <option value="3">সরকারি চাকুরীজীবি</option>
                                        <option value="4">বে-সরকারি চাকুরীজীবি</option>
                                        <option value="5">গৃহীনি</option>
                                        <option value="6">কৃষক</option>
                                        <option value="7">ব্যবসা</option>
                                        <option value="8">প্রকৌশলি</option>
                                        <option value="9">আইনজীবী</option>
                                        <option value="10">চিকিৎসক</option>
                                        <option value="11">সেবিকা</option>
                                        <option value="12">দলিল লেখক</option>
                                        <option value="13">শ্রমিক</option>
                                        <option value="14">ঠিকাদার</option>
                                        <option value="15">মৎস চাষী</option>
                                        <option value="16">গাড়ি চালক</option>
                                        <option value="17">প্রবাসী</option>
                                        <option value="18">অন্যান্য</option>
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
                                        <option value="1">বিবাহিত</option>
                                        <option value="2">অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="internet" for="cars">ইন্টারনেট সংযোগ:- </label>
                                    <select name="internet_connection" id="internet" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="tube_well">নলকূপ :- </label>
                                    <select name="tube_well" id="tube_well" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="disline_connection">ডিসলাইন সংযোগ:- </label>
                                    <select name="disline_connection" id="disline_connection" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="paved_bathroom">বাথরুম:-</label>
                                    <select name="paved_bathroom" id="paved_bathroom" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">কাঁচা</option>
                                        <option value="2">পাকা</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="arsenic_free">আর্সেনিকমুক্ত:- </label>
                                    <select name="arsenic_free" id="arsenic_free" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="border border-2 m-2 p-3">
                                <div class="row m-2">
                                    <label  class="form-label" for="government_facilities">সরকারি সুবিধা:- </label>
                                    <div class="col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities1" value="1" {{old('government_facilities') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="government_facilities1">ভিজিএফ কার্ড</label>
                                    </div>

                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities2" value="2" {{old('government_facilities') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="government_facilities2">বয়স্ক ভাতা</label>
                                    </div>

                                    <div class="col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities3" value="3" {{old('government_facilities') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities3">মাতৃত্বকালীন ভাতা</label>
                                    </div>

                                    <div class="col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities4" value="4" {{old('government_facilities') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities4">প্রতিবন্ধী ভাতা</label>
                                    </div>

                                    <div class="col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities5" value="5" {{old('government_facilities') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities5">বিধবা ভাতা</label>
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
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application1" value="1" {{old('type_application') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application1">হোল্ডিং নাম্বার</label>
                                    </div>
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application3" value="3" {{old('type_application') == '3' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application3">ওয়ারিশান সনদ</label>
                                    </div>
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application5" value="5" {{old('type_application') == '5' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application5">ভিজিএফ কার্ড</label>
                                    </div>
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application7" value="7" {{old('type_application') == '7' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application7">প্রতিবন্ধী ভাতা</label>
                                    </div>
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application10" value="10" {{old('type_application') == '10' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application10">অন্যান্য</label>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application2" value="2" {{old('type_application') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application2">ট্রেড লাইসেন্স</label>
                                    </div>
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application4" value="4" {{old('type_application') == '4' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application4">নাগরিক সনদ</label>
                                    </div>
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application6" value="6" {{old('type_application') == '6' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application6">বয়স্ক ভাতা</label>
                                    </div>
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application8" value="8" {{old('type_application') == '8' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application8">বিধবা ভাতা</label>
                                    </div>
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application9" value="9" {{old('type_application') == '9' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application9">পরিবার সদস্যের প্রত্যয়ন</label>
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
