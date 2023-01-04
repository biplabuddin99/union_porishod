@extends('layout.app')
@section('pageTitle',trans('নতুন হোল্ডিং'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="card">
        <div class="row">
            <div class="col-3 offset-1">
                <label for="form_no">ফরম নং -</label>
                <input class="form-control" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
            </div>
            <div class="col-3 offset-1 float-right">
                <label for="holding_date">তারিখ :-</label>
                <input class="form-control datepicker" name="holding_date" value="{{ old("holding_date") }}" id="holding_date" type="text" placeholder="মাস-দিন-বছর">
            </div>
        </div>
        <div class="row m-2">
            <label for="head_household">বাড়ির প্রধানের নাম  :-</label>
            <input class="form-control" type="text"
            name="head_household" value="{{ old('head_household') }}" id="head_household" placeholder="বাড়ির প্রধানের নাম" required>
        </div>
        <div class="row m-2">
            <label for="father_name">পিতার নাম :-</label>
            <input class="form-control" type="text"
            name="father_name" value="{{ old('father_name') }}" id="father_name" placeholder="পিতার নাম" required>
        </div>
        <div class="row m-2">
            <label for="mother_name">মাতার নাম :-</label>
            <input class="form-control" type="text"
            name="mother_name" value="{{ old('mother_name') }}" id="mother_name" placeholder="মাতার নাম">
        </div>
        <div class="row m-2">
            <label for="husband_wife">স্বামী/স্ত্রীর নাম :- </label>
            <input class="form-control" type="text"
            name="husband_wife" value="{{ old('husband_wife') }}" id="husband_wife" value="{{ old('') }}" placeholder="পিতা/ স্বামী">
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="new_holding_no">নতুন হোল্ডিং নম্বর :-</label>
                <input class="form-control"
                name="new_holding_no" id="new_holding_no" value="{{ old('new_holding_no') }}"  type="text" placeholder="নতুন হোল্ডিং নম্বর">
            </div>
            <div class="col-6 float-right">
                <label for="previous_holding_no">আগের হোল্ডিং নম্বর  :-</label>
                <input class="form-control" type="text" name="previous_holding_no" id="previous_holding_no" value="{{ old('previous_holding_no') }}" placeholder="আগের হোল্ডিং নম্বর">
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="village">গ্রাম/পাড়া/মহল্লা :-</label>
                <input class="form-control"
                name="village" id="village" value="{{ old('village') }}"  type="text" placeholder="গ্রাম/পাড়া/মহল্লা">
            </div>
            <div class="col-6 float-right">
                <label for="ward_no">ওয়ার্ড নং :-</label>
                <input class="form-control" type="text" name="ward_no" id="ward_no" value="{{ old('ward_no') }}" placeholder="ওয়ার্ড নং">
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="birth_date">জন্ম তারিখ :-</label>
                <input class="form-control datepicker"
                name="birth_date" id="birth_date" value="{{ old('birth_date') }}"  type="text" placeholder="">
            </div>
            <div class="col-6 float-right">
                <label for="voter_id_no">ভোটার আইডি নং :-</label>
                <input class="form-control" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no') }}" placeholder="ভোটার আইডি নং">
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="phone">মোবাইল নম্বর :-</label>
                <input class="form-control"
                name="phone" id="phone" value="{{ old('phone') }}"  type="text" placeholder="">
            </div>
            <div class="col-6 float-right">
                <label for="email">ই-মেইল <small>(যদি থাকে)</small> :-</label>
                <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" placeholder=".....@mail.com">
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="marital_status">বৈবাহিক অবস্থা :-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="marital_status" id="marital_status" value="{{ old('marital_status') }}">
                    <label class="form-check-label" for="marital_status">বিবাহিত</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="marital_status" id="marital_status" value="{{ old('marital_status') }}">
                    <label class="form-check-label" for="marital_status">অবিবাহিত</label>
                </div>
            </div>
            <div class="col-6 float-right">
                <label for="gender">লিঙ্গের অবস্থা :-</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1" {{old('gender') == '1' ? 'checked' : ''}}>
                    <label class="form-check-label" for="gender">পুরুষ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2" {{old('gender') == '2' ? 'checked' : ''}}>
                    <label class="form-check-label" for="inlineRadio2">মহিলা</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="3" {{old('gender') == '3' ? 'checked' : ''}}>
                    <label class="form-check-label" for="inlineRadio2">হিজলা</label>
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="digital_birth_cer">ডিজিটাল জন্মনিবন্ধন :-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="digital_birth_cer" id="digital_birth_cer" value="1" {{old('digital_birth_cer') == '1' ? 'checked' : ''}}>
                    <label class="form-check-label" for="digital_birth_cer">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="digital_birth_cer" id="digital_birth_cer" value="2" {{old('digital_birth_cer') == '2' ? 'checked' : ''}}>
                    <label class="form-check-label" for="digital_birth_cer">নাই</label>
                </div>
            </div>
            <div class="col-6">
                <label for="paved_bathroom">পাকা বাথরুম:-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="paved_bathroom" id="paved_bathroom" value="1" {{old('paved_bathroom') == '1' ? 'checked' : ''}}>
                    <label class="form-check-label" for="paved_bathroom">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="paved_bathroom" id="paved_bathroom" value="2" {{old('paved_bathroom') == '2' ? 'checked' : ''}}>
                    <label class="form-check-label" for="paved_bathroom">নাই</label>
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="expatriate">বিদেশে থাকে/প্রবাসী :-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="expatriate" id="expatriate" value="1" {{old('expatriate') == '1' ? 'checked' : ''}}>
                    <label class="form-check-label" for="expatriate">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="expatriate" id="expatriate" value="2" {{old('expatriate') == '2' ? 'checked' : ''}}>
                    <label class="form-check-label" for="expatriate">নাই</label>
                </div>
            </div>
            <div class="col-6">
                <label for="power_connection">বিদ্যুৎ সংযোগ:-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="power_connection" id="power_connection" value="1" {{old('power_connection') == '1' ? 'checked' : ''}}>
                    <label class="form-check-label" for="power_connection">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="power_connection" id="power_connection" value="2" {{old('power_connection') == '2' ? 'checked' : ''}}>
                    <label class="form-check-label" for="power_connection">নাই</label>
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="tube_well">নলকূপ :-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tube_well" id="tube_well" value="1" {{old('tube_well') == '1' ? 'checked' : ''}}>
                    <label class="form-check-label" for="tube_well">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tube_well" id="tube_well" value="2" {{old('tube_well') == '2' ? 'checked' : ''}}>
                    <label class="form-check-label" for="tube_well">নাই</label>
                </div>
            </div>
            <div class="col-6">
                <label for="bank">ব্যাংক হিসেব:-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bank" id="bank" value="1" {{old('bank') == '1' ? 'checked' : ''}}>
                    <label class="form-check-label" for="bank">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bank" id="bank" value="2" {{old('bank') == '2' ? 'checked' : ''}}>
                    <label class="form-check-label" for="bank">নাই</label>
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="edu_qual">শিক্ষাগত যোগ্যতা :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="1" {{old('edu_qual') == '1' ? 'checked' : ''}} />
                    <label class="form-check-label" for="edu_qual">স্ব-শিক্ষিত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="2" {{old('edu_qual') == '2' ? 'checked' : ''}} />
                    <label class="form-check-label" for="edu_qual">প্রাথমিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="3" {{old('edu_qual') == '3' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="edu_qual">মাধ্যমিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="4" {{old('edu_qual') == '4' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="edu_qual">উচ্চ-মাধ্যমিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="5" {{old('edu_qual') == '5' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="edu_qual">উচ্চতর-ডিগ্রী</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="family_male">পরিবারের সদস্য :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-control" type="text" name="family_male" id="family_male" placeholder="পুরুষ সদস্য" value="{{ old('family_male') }}" />
                    {{-- <label class="form-check-label" for="inlineCheckbox1">পুরুষ সদস্য</label> --}}
                </div>

                <div class="col-2">
                    <input class="form-control" type="text" name="family_female" id="family_female" placeholder="নারী সদস্য" value="{{ old('family_female') }}" />
                    {{-- <label class="form-check-label" for="inlineCheckbox2">নারী সদস্য</label> --}}
                </div>

                <div class="col-2">
                    <input class="form-control" type="text" name="family_total" id="family_total" placeholder="মোট সদস্য" value="{{ old('family_total') }}"/>
                    {{-- <label class="form-check-label" for="inlineCheckbox3">মোট সদস্য</label> --}}
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="single_joint_family" type="radio" id="single_joint_family" value="1" {{old('single_joint_family') == '1' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="single_joint_family">একক পরিবার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="single_joint_family" type="radio" id="single_joint_family" value="2" {{old('single_joint_family') == '2' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="single_joint_family">যৌথ পরিবার</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="religion">ধর্ম :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="religion" value="1" {{old('religion') == '1' ? 'checked' : ''}} />
                    <label class="form-check-label" for="religion">ইসলাম</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="religion" value="2" {{old('religion') == '2' ? 'checked' : ''}} />
                    <label class="form-check-label" for="religion">হিন্দু</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="religion" value="3" {{old('religion') == '3' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="religion">বৌদ্ধ</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="religion" value="4" {{old('religion') == '4' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="religion">খ্রিষ্টান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="religion" value="5" {{old('religion') == '5' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="religion">অন্যান্য</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="mobile_bank"> মোবাইল ব্যাংক:-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="1" {{old('mobile_bank') == '1' ? 'checked' : ''}} />
                    <label class="form-check-label" for="mobile_bank">নগদ</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="2" {{old('mobile_bank') == '2' ? 'checked' : ''}} />
                    <label class="form-check-label" for="mobile_bank">বিকাশ</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="3" {{old('mobile_bank') == '3' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="mobile_bank">রকেট</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="4" {{old('mobile_bank') == '4' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="mobile_bank">উপায়</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="5" {{old('mobile_bank') == '5' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="mobile_bank">অন্যান্য</label>
                </div>
            </div>

        </div>
        <div class="border border-2 m-2 p-3">
            {{-- <legend class="">সরকারি সুবিধা:-</legend> --}}
            <label for="government_facilities">সরকারি সুবিধা:- </label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="government_facilities" id="government_facilities" value="1" {{old('government_facilities') == '1' ? 'checked' : ''}} />
                    <label class="form-check-label" for="government_facilities">ভিজিএফ কার্ড</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="government_facilities" id="government_facilities" value="2" {{old('government_facilities') == '2' ? 'checked' : ''}} />
                    <label class="form-check-label" for="government_facilities">বয়স্ক ভাতা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="government_facilities" id="government_facilities" value="3" {{old('government_facilities') == '3' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="government_facilities">মাতৃত্বকালীন ভাতা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="government_facilities" id="government_facilities" value="4" {{old('government_facilities') == '4' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="government_facilities">প্রতিবন্ধী ভাতা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="government_facilities" id="government_facilities" value="5" {{old('government_facilities') == '5' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="government_facilities">বিধবা ভাতা</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="family_status"> পারিবারিক অবস্থা :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="radio" name="family_status" id="family_status" value="1" {{old('government_facilities') == '1' ? 'checked' : ''}} />
                    <label class="form-check-label" for="family_status">হতদরিদ্র</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="radio" name="family_status" id="family_status" value="2" {{old('government_facilities') == '2' ? 'checked' : ''}} />
                    <label class="form-check-label" for="family_status">নিন্ম-মধ্যবৃত্ত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="radio" name="family_status" id="family_status" value="3" {{old('government_facilities') == '3' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="family_status">মধ্যবৃত্ত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="radio" name="family_status" id="family_status" value="4" {{old('government_facilities') == '4' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="family_status">উচ্চ-মধ্যবৃত্ত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="radio" name="family_status" id="family_status" value="5" {{old('government_facilities') == '5' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="family_status">উচ্চবৃত্ত</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for=""> ডিজিটাল ডিভাইস :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="1" {{old('digital_devices') == '1' ? 'checked' : ''}} />
                    <label class="form-check-label" for="digital_devices">নরমাল মোবাইল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="2" {{old('digital_devices') == '2' ? 'checked' : ''}} />
                    <label class="form-check-label" for="digital_devices">স্মার্ট ফোন</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="3" {{old('digital_devices') == '3' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="digital_devices">কম্পিউটার/ল্যাপটপ</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="4" {{old('digital_devices') == '4' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="digital_devices">ইন্টারনেট</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="5" {{old('digital_devices') == '5' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="digital_devices">টিভি</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="telecommunications"> টেলিযোগাযোগ :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="1" {{old('telecommunications') == '1' ? 'checked' : ''}} />
                    <label class="form-check-label" for="telecommunications">টেলিটক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="2" {{old('telecommunications') == '2' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="telecommunications">গ্রামীন</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="3" {{old('telecommunications') == '3' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="telecommunications">এয়ারটেল/রবি</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="4" {{old('telecommunications') == '4' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="telecommunications">বাংলালিংক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="5" {{old('telecommunications') == '5' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="telecommunications">টিএনটি</label>
                </div>
            </div>

        </div>
        <div class="border border-2 m-2 p-3">
            <label for="source_income"> পেশা বা আয়ের উৎস :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="1" {{old('source_income') == '1' ? 'checked' : ''}} />
                    <label class="form-check-label" for="source_income">চাকুরি<small>(সরকারি)</small></label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="2" {{old('source_income') == '2' ? 'checked' : ''}} />
                    <label class="form-check-label" for="source_income">চাকুরি<small>(বে-সরকারি)</small></label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="3" {{old('source_income') == '3' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">ব্যবসা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="4" {{old('source_income') == '4' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">কৃষি</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="5" {{old('source_income') == '5' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">শিক্ষক</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="6" {{old('source_income') == '6' ? 'checked' : ''}} />
                    <label class="form-check-label" for="source_income">প্রকৌশলি</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="7" {{old('source_income') == '7' ? 'checked' : ''}} />
                    <label class="form-check-label" for="source_income">আইনজীবী</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="8" {{old('source_income') == '8' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">চিকিৎসক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="9" {{old('source_income') == '9' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">শ্রমিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="10" {{old('source_income') == '10' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">খাবার হোটেল</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="11" {{old('source_income') == '11' ? 'checked' : ''}} />
                    <label class="form-check-label" for="source_income">মৎস  খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="12" {{old('source_income') == '12' ? 'checked' : ''}} />
                    <label class="form-check-label" for="source_income">ক্ষুদ্র ও কুটির শিল্প</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="13" {{old('source_income') == '13' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">গবাদি পশুর খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="14" {{old('source_income') == '14' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">গাড়ী চালক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="15" {{old('source_income') == '15' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income"> ঠিকাদার</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="16" {{old('source_income') == '16' ? 'checked' : ''}} />
                    <label class="form-check-label" for="source_income">মাঝারি শিল্প</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="17" {{old('source_income') == '17' ? 'checked' : ''}} />
                    <label class="form-check-label" for="source_income">নারী উদ্যোক্তা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="18" {{old('source_income') == '18' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">হাঁস-মুরগির খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="19" {{old('source_income') == '19' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income">প্রবাসী</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="20" {{old('source_income') == '20' ? 'checked' : ''}}/>
                    <label class="form-check-label" for="source_income"> অন্যান্য</label>
                </div>
            </div>

        </div>
        <div class="border border-2 m-2 p-3">
            <label for="business_taxes">ব্যবসায়িক করের উৎস  :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">কৃষি খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">মৎস খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">দুগ্ধ খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">হাঁস-মুরগীর খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">গবাদি পশুর খামার</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">মুদির দোকান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">আর্থিক প্রতিষ্ঠান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ক্ষুদ্র ও কুটির শিল্প</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">মাঝারি শিল্প</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">খাবার হোটেল</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">প্রকৌশলী</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">আইনজীবি</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> চিকিৎসক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ক্লিনিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ঔষদের দোকান</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">আবাসিক হোটেল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">মিষ্টির দোকান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">বে-সরকারি হাসপাতাল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">বে-সরকারি স্কুল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> কোচিং সেন্টার</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">খাবারের হোটেল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">হিমাগার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ধান ভাঙানোর কল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">আটার কল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">তেলের কল</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">স’মিল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">বিউটি পার্লার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">হেয়ার কাট সেলুন</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">লন্ড্রীর দোকান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ইঞ্জিনিয়রিং ফার্ম</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">শিল্প কারখানা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">ইট ভাটা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> কনসালটেন্সি ফার্ম</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">গুদাম</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">রিক্মার মালিক</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">বাজার ইজারা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">টেম্পের মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">বাসের মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ট্রাকের মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> পরিবহন এজেন্সী</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">নৌযানের মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">অটো রিক্সার মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">স্টীমার/কার্গোর মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">শিশু পার্ক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> বিনোদন পার্ক</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">পশু জবাইয়</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">১ম শ্রেণীর ঠিকাদার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">২য় শ্রেণীর ঠিকাদার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">৩য় শ্রেণীর ঠিকাদার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> অন্যান্য</label>
                </div>
            </div>
            <div class="row m-2">
                <label for="" class="col-sm-2 offset-2 col-form-label text-end">করের পরিমান :-</label>
                <div class="col-sm-6">
                    <input type="text" value="{{ old('') }}" class="form-control"
                        placeholder="করের পরিমান" name="">
                </div>টাকা
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="">অন্যান্য করের উৎস :-</label>
            <div class="row m-2">
                <div class="col-6">
                    <input type="checkbox">
                    <input name="" id="" value="{{ old('') }}"  type="text" placeholder="অন্যান্য কর">
                </div>
                <div class="col-6 float-right">
                    <label for="">করের পরিমান  :-</label>
                    <input type="text" name="" id="" value="{{ old('') }}" placeholder="করের পরিমান"> টাকা
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <label for=""> বসত বাড়ির ধরন :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">কাচা-ঘর</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">টিনসেট</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">আধা-পাকা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">পাকা ইমারত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"></label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="">হোল্ডিং ট্যাক্স :-</label>
            <div class="row">
                <div class="col-6">
                    <label for="">বাড়ির আনুমানিক দাম :-</label>
                    <input name="" id="" value="{{ old('') }}"  type="text" placeholder=""> টাকা
                </div>
                <div class="col-6 float-right">
                    <label for="">বার্ষিক করযোগ্য মূল্য :-</label>
                    <input type="text" name="" id="" value="{{ old('') }}" placeholder=""> টাকা
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">বাড়ির করযোগ্য মূল্য :-</label>
                    <input
                    name="" id="" value="{{ old('') }}"  type="text" placeholder=""> টাকা
                </div>
                <div class="col-6 float-right">
                    <label for="">বাষিক করের পরিমান :-</label>
                    <input type="text" name="" id="" value="{{ old('') }}" placeholder=""> টাকা
                </div>
            </div>
        </div>
        <div class="row m-2 border border-2 p-3">
            <label for="">সর্বমোট ট্যাক্স :-</label>
            <label for="" class="col-sm-6 col-form-label text-end">হোল্ডিং ট্যাক্স + ব্যাবসায়িক ট্যাক্স + অন্যান্য ট্যাক্স :-</label>
            <div class="col-sm-4">
                <input type="text" value="{{ old('') }}" class="form-control"
                    placeholder="করের পরিমান" name="">
            </div>টাকা
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">তথ্য প্রদানকারীর স্বাক্ষর :-</label>
                <input class="form-control"
                name="" id="" value="{{ old('') }}"  type="file" placeholder="">
            </div>
            <div class="col-6 float-right">
                <label for="">তথ্য সংগ্রহকারীর স্বাক্ষর :-</label>
                <input class="form-control" type="file" name="" id="" value="{{ old('') }}" placeholder="">
            </div>
        </div>
    </div>
</section>
<!-- Bordered table end -->

@endsection
