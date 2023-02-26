@extends('layout.app')
{{-- @section('pageTitle',trans('নতুন হোল্ডিং')) --}}

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-primary"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: white; padding-top: 5px;">নতুন হোল্ডিং আবেদন</h4>
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
                        <form action="{{route(currentUser().'.holding.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="holding_date">তারিখ :-</label>
                                    <input class="form-control col-6 datepicker" name="holding_date" value="{{ old("holding_date") }}" id="holding_date" type="text" placeholder="মাস-দিন-বছর">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8 m-0 p-0">
                                    <div class="row m-2">
                                        <label  class="form-label" for="head_household">বাড়ির প্রধানের নাম  :-</label>
                                        <input class="form-control @error('head_household') is-invalid @enderror" type="text"
                                        name="head_household" value="{{ old('head_household') }}" id="head_household" placeholder="বাড়ির প্রধানের নাম">
                                        @if($errors->has('head_household'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('head_household') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="row m-2">
                                        <label  class="form-label" for="father_name">পিতার নাম :-</label>
                                        <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                        name="father_name" value="{{ old('father_name') }}" id="father_name" placeholder="পিতার নাম">
                                        @if($errors->has('father_name'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('father_name') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="row m-2">
                                        <label  class="form-label" for="mother_name">মাতার নাম :-</label>
                                        <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                        name="mother_name" value="{{ old('mother_name') }}" id="mother_name" placeholder="মাতার নাম">
                                        @if($errors->has('mother_name'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('mother_name') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="row m-2">
                                        <label  class="form-label" for="husband_wife">স্বামী/স্ত্রীর নাম :- </label>
                                        <input class="form-control" type="text"
                                        name="husband_wife" value="{{ old('husband_wife') }}" id="husband_wife" value="{{ old('') }}" placeholder="পিতা/ স্বামী">
                                    </div>
                                </div>
                                <div class="col-md-4 text-center">
                                    <label for="cropzee-input">
                                        <div class="image-overlay mt-5">
                                                <input type="file" name="image" value="" data-default-file="{{ asset('uploads/holding/default.jpg') }}" class="form-control dropify">
                                            <div class="overlay">
                                                <div class="text">ছবি দিতে ক্লিক করুন</div>
                                            </div>
                                        </div>
                                    </label>
                                    {{-- <input id="cropzee-input" style="display: none;" name="photo" type="file" accept="image/*"> --}}
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="new_holding_no">নতুন হোল্ডিং নম্বর :-</label>
                                    <input class="form-control @error('new_holding_no') is-invalid @enderror"
                                    name="new_holding_no" id="new_holding_no" value="{{ old('new_holding_no') }}"  type="text" placeholder="নতুন হোল্ডিং নম্বর">
                                    @if($errors->has('new_holding_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('new_holding_no') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="previous_holding_no">আগের হোল্ডিং নম্বর  :-</label>
                                    <input class="form-control @error('previous_holding_no') is-invalid @enderror" type="text" name="previous_holding_no" id="previous_holding_no" value="{{ old('previous_holding_no') }}" placeholder="আগের হোল্ডিং নম্বর">
                                    @if($errors->has('previous_holding_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('previous_holding_no') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="village">গ্রাম/পাড়া/মহল্লা :-</label>
                                    <input class="form-control @error('village') is-invalid @enderror"
                                    name="village" id="village" value="{{ old('village') }}"  type="text" placeholder="গ্রাম/পাড়া/মহল্লা">
                                    @if($errors->has('village'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('village') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="ward_no">ওয়ার্ড নং :-</label>
                                    <input class="form-control @error('ward_no') is-invalid @enderror" type="text" name="ward_no" id="ward_no" value="{{ old('ward_no') }}" placeholder="ওয়ার্ড নং">
                                    @if($errors->has('ward_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('ward_no') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="birth_date">জন্ম তারিখ :-</label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date') }}"  type="text" placeholder="">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="voter_id_no">ভোটার আইডি নং :-</label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no') }}" placeholder="ভোটার আইডি নং">
                                    @if($errors->has('voter_id_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_id_no') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="phone">মোবাইল নম্বর :-</label>
                                    <input class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" id="phone" value="{{ old('phone') }}"  type="text" placeholder="">
                                    @if($errors->has('phone'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('phone') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="email">ই-মেইল <small>(যদি থাকে)</small> :-</label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" placeholder=".....@mail.com">
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="marital_status">বৈবাহিক অবস্থা :-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status1" value="1" {{old('marital_status') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="marital_status1">বিবাহিত</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status2" value="2" {{old('marital_status') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="marital_status2">অবিবাহিত</label>
                                    </div>
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="gender">লিঙ্গের অবস্থা :-</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender1" value="1" {{old('gender') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="gender1">পুরুষ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender2" value="2" {{old('gender') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="gender2">মহিলা</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="gender3" value="3" {{old('gender') == '3' ? 'checked' : ''}}>
                                        <label  class="form-label" for="gender3">হিজলা</label>
                                    </div>
                                    @if($errors->has('gender'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('gender') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="digital_birth_cer">ডিজিটাল জন্মনিবন্ধন :-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('digital_birth_cer') is-invalid @enderror" type="radio" name="digital_birth_cer" id="digital_birth_cer1" value="1" {{old('digital_birth_cer') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="digital_birth_cer1">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input @error('digital_birth_cer') is-invalid @enderror" type="radio" name="digital_birth_cer" id="digital_birth_cer2" value="2" {{old('digital_birth_cer') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="digital_birth_cer2">নাই</label>
                                    </div>
                                    @if($errors->has('digital_birth_cer'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('digital_birth_cer') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="paved_bathroom">পাকা বাথরুম:-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paved_bathroom" id="paved_bathroom1" value="1" {{old('paved_bathroom') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="paved_bathroom1">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paved_bathroom" id="paved_bathroom2" value="2" {{old('paved_bathroom') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="paved_bathroom2">নাই</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="expatriate">বিদেশে থাকে/প্রবাসী :-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expatriate" id="expatriate1" value="1" {{old('expatriate') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="expatriate1">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expatriate" id="expatriate2" value="2" {{old('expatriate') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="expatriate2">নাই</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="power_connection">বিদ্যুৎ সংযোগ:-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="power_connection" id="power_connection1" value="1" {{old('power_connection') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="power_connection1">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="power_connection" id="power_connection2" value="2" {{old('power_connection') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="power_connection2">নাই</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="tube_well">নলকূপ :-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tube_well" id="tube_well1" value="1" {{old('tube_well') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="tube_well1">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tube_well" id="tube_well2" value="2" {{old('tube_well') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="tube_well2">নাই</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="bank">ব্যাংক হিসেব:-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bank" id="bank1" value="1" {{old('bank') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="bank1">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bank" id="bank2" value="2" {{old('bank') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="bank2">নাই</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="edu_qual0">শিক্ষাগত যোগ্যতা :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('edu_qual') is-invalid @enderror" type="checkbox" name="edu_qual[]" id="edu_qual1" value="1" {{(!empty(old('edu_qual')) == '1' ? 'checked' : '')}} />
                                        <label  class="form-label" for="edu_qual1">স্ব-শিক্ষিত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('edu_qual') is-invalid @enderror" type="checkbox" name="edu_qual[]" id="edu_qual2" value="2" {{old('edu_qual') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="edu_qual2">প্রাথমিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('edu_qual') is-invalid @enderror" type="checkbox" name="edu_qual[]" id="edu_qual3" value="3" {{old('edu_qual') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="edu_qual3">মাধ্যমিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('edu_qual') is-invalid @enderror" type="checkbox" name="edu_qual[]" id="edu_qual4" value="4" {{old('edu_qual') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="edu_qual4">উচ্চ-মাধ্যমিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('edu_qual') is-invalid @enderror" type="checkbox" name="edu_qual[]" id="edu_qual5" value="5" {{old('edu_qual') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="edu_qual5">উচ্চতর-ডিগ্রী</label>
                                    </div>
                                </div>
                                @if($errors->has('edu_qual'))
                                <small class="d-block text-danger text-center">
                                    {{ $errors->first('edu_qual') }}
                                </small>
                                @endif

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="family_male">পরিবারের সদস্য :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-control" type="text" name="family_male" id="family_male0" placeholder="পুরুষ সদস্য" value="{{ old('family_male') }}" />
                                        {{-- <label  class="form-label" for="inlineCheckbox1">পুরুষ সদস্য</label> --}}
                                    </div>

                                    <div class="col-2">
                                        <input class="form-control" type="text" name="family_female" id="family_female1" placeholder="নারী সদস্য" value="{{ old('family_female') }}" />
                                        {{-- <label  class="form-label" for="inlineCheckbox2">নারী সদস্য</label> --}}
                                    </div>

                                    <div class="col-2">
                                        <input class="form-control" type="text" name="family_total" id="family_total2" placeholder="মোট সদস্য" value="{{ old('family_total') }}"/>
                                        {{-- <label  class="form-label" for="inlineCheckbox3">মোট সদস্য</label> --}}
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="single_joint_family" type="radio" id="single_joint_family1" value="1" {{old('single_joint_family') == '1' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="single_joint_family1">একক পরিবার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="single_joint_family" type="radio" id="single_joint_family2" value="2" {{old('single_joint_family') == '2' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="single_joint_family2">যৌথ পরিবার</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="religion">ধর্ম :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('religion') is-invalid @enderror" name="religion" type="radio" id="religion1" value="1" {{old('religion') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="religion1">ইসলাম</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('religion') is-invalid @enderror" name="religion" type="radio" id="religion2" value="2" {{old('religion') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="religion2">হিন্দু</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('religion') is-invalid @enderror" name="religion" type="radio" id="religion3" value="3" {{old('religion') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="religion3">বৌদ্ধ</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('religion') is-invalid @enderror" name="religion" type="radio" id="religion4" value="4" {{old('religion') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="religion4">খ্রিষ্টান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('religion') is-invalid @enderror" name="religion" type="radio" id="religion5" value="5" {{old('religion') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="religion5">অন্যান্য</label>
                                    </div>

                                    @if($errors->has('religion'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('religion') }}
                                    </small>
                                    @endif
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="mobile_bank"> মোবাইল ব্যাংক:-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank1" value="1" {{old('mobile_bank') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="mobile_bank1">নগদ</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank2" value="2" {{old('mobile_bank') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="mobile_bank2">বিকাশ</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank3" value="3" {{old('mobile_bank') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="mobile_bank3">রকেট</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank4" value="4" {{old('mobile_bank') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="mobile_bank4">উপায়</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank5" value="5" {{old('mobile_bank') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="mobile_bank5">অন্যান্য</label>
                                    </div>
                                </div>

                            </div>
                            <div class="border border-2 m-2 p-3">
                                {{-- <legend class="">সরকারি সুবিধা:-</legend> --}}
                                <label  class="form-label" for="government_facilities">সরকারি সুবিধা:- </label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities1" value="1" {{old('government_facilities') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="government_facilities1">ভিজিএফ কার্ড</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities2" value="2" {{old('government_facilities') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="government_facilities2">বয়স্ক ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities3" value="3" {{old('government_facilities') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities3">মাতৃত্বকালীন ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities4" value="4" {{old('government_facilities') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities4">প্রতিবন্ধী ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities5" value="5" {{old('government_facilities') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities5">বিধবা ভাতা</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="family_status"> পারিবারিক অবস্থা :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status1" value="1" {{old('family_status') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="family_status1">হতদরিদ্র</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status2" value="2" {{old('family_status') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="family_status2">নিন্ম-মধ্যবৃত্ত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status3" value="3" {{old('family_status') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="family_status3">মধ্যবৃত্ত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status4" value="4" {{old('family_status') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="family_status4">উচ্চ-মধ্যবৃত্ত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status5" value="5" {{old('family_status') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="family_status5">উচ্চবৃত্ত</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for=""> ডিজিটাল ডিভাইস :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices1" value="1" {{old('digital_devices') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="digital_devices1">নরমাল মোবাইল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices2" value="2" {{old('digital_devices') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="digital_devices2">স্মার্ট ফোন</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices3" value="3" {{old('digital_devices') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="digital_devices3">কম্পিউটার/ল্যাপটপ</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices4" value="4" {{old('digital_devices') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="digital_devices4">ইন্টারনেট</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices5" value="5" {{old('digital_devices') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="digital_devices5">টিভি</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="telecommunications"> টেলিযোগাযোগ :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications1" value="1" {{old('telecommunications') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="telecommunications1">টেলিটক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications2" value="2" {{old('telecommunications') == '2' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="telecommunications2">গ্রামীন</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications3" value="3" {{old('telecommunications') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="telecommunications3">এয়ারটেল/রবি</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications4" value="4" {{old('telecommunications') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="telecommunications4">বাংলালিংক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications5" value="5" {{old('telecommunications') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="telecommunications5">টিএনটি</label>
                                    </div>
                                </div>

                            </div>
                            <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="source_income"> পেশা বা আয়ের উৎস :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income1" value="1" {{old('source_income') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income1">চাকুরি<small>(সরকারি)</small></label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income2" value="2" {{old('source_income') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income2">চাকুরি<small>(বে-সরকারি)</small></label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income3" value="3" {{old('source_income') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income3">ব্যবসা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income4" value="4" {{old('source_income') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income4">কৃষি</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income5" value="5" {{old('source_income') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income5">শিক্ষক</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income6" value="6" {{old('source_income') == '6' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income6">প্রকৌশলি</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income7" value="7" {{old('source_income') == '7' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income7">আইনজীবী</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income8" value="8" {{old('source_income') == '8' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income8">চিকিৎসক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income9" value="9" {{old('source_income') == '9' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income9">শ্রমিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income10" value="10" {{old('source_income') == '10' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income10">খাবার হোটেল</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income11" value="11" {{old('source_income') == '11' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income11">মৎস  খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income12" value="12" {{old('source_income') == '12' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income12">ক্ষুদ্র ও কুটির শিল্প</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income13" value="13" {{old('source_income') == '13' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income13">গবাদি পশুর খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income14" value="14" {{old('source_income') == '14' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income14">গাড়ী চালক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income15" value="15" {{old('source_income') == '15' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income15"> ঠিকাদার</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income16" value="16" {{old('source_income') == '16' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income16">মাঝারি শিল্প</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income17" value="17" {{old('source_income') == '17' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income17">নারী উদ্যোক্তা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income18" value="18" {{old('source_income') == '18' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income18">হাঁস-মুরগির খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income19" value="19" {{old('source_income') == '19' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income19">প্রবাসী</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('source_income') is-invalid @enderror" type="checkbox" name="source_income[]" id="source_income20" value="20" {{old('source_income') == '20' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income20"> অন্যান্য</label>
                                    </div>
                                </div>
                                @if($errors->has('source_income'))
                                <small class="d-block text-danger text-center">
                                    {{ $errors->first('source_income') }}
                                </small>
                                @endif

                            </div>
                            <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="business_taxes">ব্যবসায়িক করের উৎস  :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes1" value="1" {{old('business_taxes') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes1">কৃষি খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes2" value="2" {{old('business_taxes') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes2">মৎস খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes3" value="3" {{old('business_taxes') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes3">দুগ্ধ খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes4" value="4" {{old('business_taxes') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes4">হাঁস-মুরগীর খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes5" value="5" {{old('business_taxes') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes5">গবাদি পশুর খামার</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes6" value="6" {{old('business_taxes') == '6' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes6">মুদির দোকান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes7" value="7" {{old('business_taxes') == '7' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes7">আর্থিক প্রতিষ্ঠান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes8" value="8" {{old('business_taxes') == '8' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes8">ক্ষুদ্র ও কুটির শিল্প</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes9" value="9" {{old('business_taxes') == '9' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes9">মাঝারি শিল্প</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes10" value="10" {{old('business_taxes') == '10' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes10">খাবার হোটেল</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes11" value="11" {{old('business_taxes') == '11' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes11">প্রকৌশলী</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes12" value="12" {{old('business_taxes') == '12' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes12">আইনজীবি</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes13" value="13" {{old('business_taxes') == '13' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes13"> চিকিৎসক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes14" value="14" {{old('business_taxes') == '14' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes14">ক্লিনিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes15" value="15" {{old('business_taxes') == '15' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes15">ঔষদের দোকান</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes16" value="16" {{old('business_taxes') == '16' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes16">আবাসিক হোটেল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes17" value="17" {{old('business_taxes') == '17' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes17">মিষ্টির দোকান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes18" value="18" {{old('business_taxes') == '18' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes18">বে-সরকারি হাসপাতাল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes19" value="19" {{old('business_taxes') == '19' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes19">বে-সরকারি স্কুল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes20" value="20" {{old('business_taxes') == '20' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes20"> কোচিং সেন্টার</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes21" value="21" {{old('business_taxes') == '21' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes21">খাবারের হোটেল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes22" value="22" {{old('business_taxes') == '22' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes22">হিমাগার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes23" value="23" {{old('business_taxes') == '23' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes23">ধান ভাঙানোর কল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes24" value="24" {{old('business_taxes') == '24' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes24">আটার কল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes25" value="25" {{old('business_taxes') == '25' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes25">তেলের কল</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes26" value="26" {{old('business_taxes') == '26' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes26">স’মিল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes27" value="27" {{old('business_taxes') == '27' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes27">বিউটি পার্লার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes28" value="28" {{old('business_taxes') == '28' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes28">হেয়ার কাট সেলুন</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes29" value="29" {{old('business_taxes') == '29' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes29">লন্ড্রীর দোকান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes30" value="30" {{old('business_taxes') == '30' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes30">ইঞ্জিনিয়রিং ফার্ম</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes31" value="31" {{old('business_taxes') == '31' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes31">শিল্প কারখানা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes32" value="32" {{old('business_taxes') == '32' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes32">ইট ভাটা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes33" value="33" {{old('business_taxes') == '33' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes33"> কনসালটেন্সি ফার্ম</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes34" value="34" {{old('business_taxes') == '34' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes34">গুদাম</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes35" value="35" {{old('business_taxes') == '35' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes35">রিক্মার মালিক</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes36" value="36" {{old('business_taxes') == '36' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes36">বাজার ইজারা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes37" value="37" {{old('business_taxes') == '37' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes37">টেম্পের মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes38" value="38" {{old('business_taxes') == '38' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes38">বাসের মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes39" value="39" {{old('business_taxes') == '39' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes39">ট্রাকের মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes40" value="40" {{old('business_taxes') == '40' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes40"> পরিবহন এজেন্সী</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes41" value="41" {{old('business_taxes') == '41' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes41">নৌযানের মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes42" value="42" {{old('business_taxes') == '42' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes42">অটো রিক্সার মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes43" value="43" {{old('business_taxes') == '43' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes43">স্টীমার/কার্গোর মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes44" value="44" {{old('business_taxes') == '44' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes44">শিশু পার্ক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes45" value="45" {{old('business_taxes') == '45' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes45"> বিনোদন পার্ক</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes46" value="46" {{old('business_taxes') == '46' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes46">পশু জবাইয়</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes47" value="47" {{old('business_taxes') == '47' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes47">১ম শ্রেণীর ঠিকাদার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes48" value="48" {{old('business_taxes') == '48' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes48">২য় শ্রেণীর ঠিকাদার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes49" value="49" {{old('business_taxes') == '49' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes49">৩য় শ্রেণীর ঠিকাদার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes50" value="50" {{old('business_taxes') == '50' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes50"> অন্যান্য</label>
                                    </div>
                                </div>
                                @if($errors->has('business_taxes'))
                                <small class="d-block text-danger text-center">
                                    {{ $errors->first('business_taxes') }}
                                </small>
                                @endif
                                <div class="row m-2">
                                    {{-- <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="অন্যান্য" name="" id="">
                                    </div> --}}
                                    <div class="col-sm-6">
                                        <label  class="form-label" for="" class="col-sm-2 offset-2 col-form-label text-end">করের পরিমান :-</label>
                                        <input type="text" value="{{ old('business_amount_taxes') }}"
                                            placeholder="করের পরিমান টাকা" class="form-control @error('business_amount_taxes') is-invalid @enderror" name="business_amount_taxes">
                                            @if($errors->has('business_amount_taxes'))
                                            <small class="d-block text-danger text-center">
                                                {{ $errors->first('business_amount_taxes') }}
                                            </small>
                                            @endif
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="">অন্যান্য করের উৎস :-</label>
                                <div class="row m-2">
                                    <div class="col-6">
                                        <input type="checkbox">
                                        <input name="sources_other_taxes" id="sources_other_taxes" value="{{ old('sources_other_taxes') }}"  type="text" placeholder="অন্যান্য কর">
                                    </div>
                                    <div class="col-6 float-right">
                                        <label  class="form-label" for="other_taxes_amount">করের পরিমান  :-</label>
                                        <input type="text" name="other_taxes_amount" id="other_taxes_amount" value="{{ old('other_taxes_amount') }}" placeholder="করের পরিমান"> টাকা
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="residence_type"> বসত বাড়ির ধরন :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input @error('residence_type') is-invalid @enderror" type="checkbox" name="residence_type[]" id="residence_type1" value="1" {{old('residence_type') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="residence_type1">কাচা-ঘর</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('residence_type') is-invalid @enderror" type="checkbox" name="residence_type[]" id="residence_type2" value="2" {{old('residence_type') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="residence_type2">টিনসেট</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('residence_type') is-invalid @enderror" type="checkbox" name="residence_type[]" id="residence_type3" value="3" {{old('residence_type') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="residence_type3">আধা-পাকা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('residence_type') is-invalid @enderror" type="checkbox" name="residence_type[]" id="residence_type4" value="4" {{old('residence_type') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="residence_type4">পাকা ইমারত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input @error('residence_type') is-invalid @enderror" type="checkbox" name="residence_type[]" id="residence_type5" value="5" {{old('residence_type') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="residence_type5"></label>
                                    </div>
                                    @if($errors->has('residence_type'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('residence_type') }}
                                    </small>
                                    @endif
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="approximate_price_house">হোল্ডিং ট্যাক্স :-</label>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">বাড়ির আনুমানিক দাম:-</label>
                                        <input name="approximate_price_house" id="approximate_price_house" value="{{ old('approximate_price_house') }}"  type="text" placeholder=""> টাকা
                                    </div>
                                    <div class="col-6 float-right">
                                        <label for="annual_taxable_value">বার্ষিক করযোগ্য মূল্য :-</label>
                                        <input type="text" name="annual_taxable_value" id="annual_taxable_value" value="{{ old('annual_taxable_value') }}" placeholder=""> টাকা
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label  class="form-label" for="taxable_value_house">বাড়ির করযোগ্য মূল্য :-</label>
                                        <input
                                        name="taxable_value_house" id="taxable_value_house" value="{{ old('taxable_value_house') }}"  type="text" placeholder=""> টাকা
                                    </div>
                                    <div class="col-6 float-right">
                                        <label  class="form-label" for="annual_tax_amount">বার্ষিক করের পরিমান :-</label>
                                        <input type="text" name="annual_tax_amount" id="annual_tax_amount" value="{{ old('annual_tax_amount') }}" placeholder=""> টাকা
                                    </div>
                                </div>
                            </div>
                            <div class="row m-2 border border-2 p-3">
                                <label for="">সর্বমোট ট্যাক্স :-</label>
                                <label for="total_tax" class="col-sm-6 col-form-label text-end">হোল্ডিং ট্যাক্স + ব্যাবসায়িক ট্যাক্স + অন্যান্য ট্যাক্স :-</label>
                                <div class="col-sm-4">
                                    <input type="text" value="{{ old('total_tax') }}" class="form-control"
                                        placeholder="করের পরিমান" name="total_tax">
                                </div>টাকা
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="">তথ্য প্রদানকারীর স্বাক্ষর :-</label>
                                    <input class="form-control"
                                    name="signature_informant" id="signature_informant" value="{{ old('signature_informant') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="signature_collector">তথ্য সংগ্রহকারীর স্বাক্ষর :-</label>
                                    <input class="form-control" type="file" name="signature_collector" id="signature_collector" value="{{ old('signature_collector') }}" placeholder="">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <span class="btn or">or</span>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
