@extends('layout.app')
@section('pageTitle',trans('নতুন হোল্ডিং'))

@section('content')

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{route(currentUser().'.holding.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-3 offset-1">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div>
                                <div class="col-3 offset-1 float-right">
                                    <label  class="form-label" for="holding_date">তারিখ :-</label>
                                    <input class="form-control datepicker" name="holding_date" value="{{ old("holding_date") }}" id="holding_date" type="text" placeholder="মাস-দিন-বছর">
                                </div>
                            </div>
                            <div class="row m-2">
                                <label  class="form-label" for="head_household">বাড়ির প্রধানের নাম  :-</label>
                                <input class="form-control" type="text"
                                name="head_household" value="{{ old('head_household') }}" id="head_household" placeholder="বাড়ির প্রধানের নাম" required>
                            </div>
                            <div class="row m-2">
                                <label  class="form-label" for="father_name">পিতার নাম :-</label>
                                <input class="form-control" type="text"
                                name="father_name" value="{{ old('father_name') }}" id="father_name" placeholder="পিতার নাম" required>
                            </div>
                            <div class="row m-2">
                                <label  class="form-label" for="mother_name">মাতার নাম :-</label>
                                <input class="form-control" type="text"
                                name="mother_name" value="{{ old('mother_name') }}" id="mother_name" placeholder="মাতার নাম">
                            </div>
                            <div class="row m-2">
                                <label  class="form-label" for="husband_wife">স্বামী/স্ত্রীর নাম :- </label>
                                <input class="form-control" type="text"
                                name="husband_wife" value="{{ old('husband_wife') }}" id="husband_wife" value="{{ old('') }}" placeholder="পিতা/ স্বামী">
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="new_holding_no">নতুন হোল্ডিং নম্বর :-</label>
                                    <input class="form-control"
                                    name="new_holding_no" id="new_holding_no" value="{{ old('new_holding_no') }}"  type="text" placeholder="নতুন হোল্ডিং নম্বর">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="previous_holding_no">আগের হোল্ডিং নম্বর  :-</label>
                                    <input class="form-control" type="text" name="previous_holding_no" id="previous_holding_no" value="{{ old('previous_holding_no') }}" placeholder="আগের হোল্ডিং নম্বর">
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="village">গ্রাম/পাড়া/মহল্লা :-</label>
                                    <input class="form-control"
                                    name="village" id="village" value="{{ old('village') }}"  type="text" placeholder="গ্রাম/পাড়া/মহল্লা">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="ward_no">ওয়ার্ড নং :-</label>
                                    <input class="form-control" type="text" name="ward_no" id="ward_no" value="{{ old('ward_no') }}" placeholder="ওয়ার্ড নং">
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="birth_date">জন্ম তারিখ :-</label>
                                    <input class="form-control datepicker"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date') }}"  type="text" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="voter_id_no">ভোটার আইডি নং :-</label>
                                    <input class="form-control" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no') }}" placeholder="ভোটার আইডি নং">
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="phone">মোবাইল নম্বর :-</label>
                                    <input class="form-control"
                                    name="phone" id="phone" value="{{ old('phone') }}"  type="text" placeholder="">
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
                                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status" value="1" {{old('marital_status') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="marital_status">বিবাহিত</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="marital_status" id="marital_status" value="2" {{old('marital_status') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="marital_status">অবিবাহিত</label>
                                    </div>
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="gender">লিঙ্গের অবস্থা :-</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender" value="1" {{old('gender') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="gender">পুরুষ</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2" {{old('gender') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="inlineRadio2">মহিলা</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="3" {{old('gender') == '3' ? 'checked' : ''}}>
                                        <label  class="form-label" for="inlineRadio2">হিজলা</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="digital_birth_cer">ডিজিটাল জন্মনিবন্ধন :-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="digital_birth_cer" id="digital_birth_cer" value="1" {{old('digital_birth_cer') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="digital_birth_cer">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="digital_birth_cer" id="digital_birth_cer" value="2" {{old('digital_birth_cer') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="digital_birth_cer">নাই</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="paved_bathroom">পাকা বাথরুম:-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paved_bathroom" id="paved_bathroom" value="1" {{old('paved_bathroom') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="paved_bathroom">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="paved_bathroom" id="paved_bathroom" value="2" {{old('paved_bathroom') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="paved_bathroom">নাই</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="expatriate">বিদেশে থাকে/প্রবাসী :-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expatriate" id="expatriate" value="1" {{old('expatriate') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="expatriate">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="expatriate" id="expatriate" value="2" {{old('expatriate') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="expatriate">নাই</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="power_connection">বিদ্যুৎ সংযোগ:-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="power_connection" id="power_connection" value="1" {{old('power_connection') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="power_connection">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="power_connection" id="power_connection" value="2" {{old('power_connection') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="power_connection">নাই</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="tube_well">নলকূপ :-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tube_well" id="tube_well" value="1" {{old('tube_well') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="tube_well">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="tube_well" id="tube_well" value="2" {{old('tube_well') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="tube_well">নাই</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="bank">ব্যাংক হিসেব:-  </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bank" id="bank" value="1" {{old('bank') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="bank">আছে</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="bank" id="bank" value="2" {{old('bank') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="bank">নাই</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="edu_qual">শিক্ষাগত যোগ্যতা :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="1" {{old('edu_qual') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="edu_qual">স্ব-শিক্ষিত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="2" {{old('edu_qual') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="edu_qual">প্রাথমিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="3" {{old('edu_qual') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="edu_qual">মাধ্যমিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="4" {{old('edu_qual') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="edu_qual">উচ্চ-মাধ্যমিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="edu_qual[]" id="edu_qual" value="5" {{old('edu_qual') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="edu_qual">উচ্চতর-ডিগ্রী</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="family_male">পরিবারের সদস্য :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-control" type="text" name="family_male" id="family_male" placeholder="পুরুষ সদস্য" value="{{ old('family_male') }}" />
                                        {{-- <label  class="form-label" for="inlineCheckbox1">পুরুষ সদস্য</label> --}}
                                    </div>

                                    <div class="col-2">
                                        <input class="form-control" type="text" name="family_female" id="family_female" placeholder="নারী সদস্য" value="{{ old('family_female') }}" />
                                        {{-- <label  class="form-label" for="inlineCheckbox2">নারী সদস্য</label> --}}
                                    </div>

                                    <div class="col-2">
                                        <input class="form-control" type="text" name="family_total" id="family_total" placeholder="মোট সদস্য" value="{{ old('family_total') }}"/>
                                        {{-- <label  class="form-label" for="inlineCheckbox3">মোট সদস্য</label> --}}
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="single_joint_family" type="radio" id="single_joint_family" value="1" {{old('single_joint_family') == '1' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="single_joint_family">একক পরিবার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="single_joint_family" type="radio" id="single_joint_family" value="2" {{old('single_joint_family') == '2' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="single_joint_family">যৌথ পরিবার</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="religion">ধর্ম :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" name="religion" type="radio" id="religion" value="1" {{old('religion') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="religion">ইসলাম</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="religion" type="radio" id="religion" value="2" {{old('religion') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="religion">হিন্দু</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="religion" type="radio" id="religion" value="3" {{old('religion') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="religion">বৌদ্ধ</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="religion" type="radio" id="religion" value="4" {{old('religion') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="religion">খ্রিষ্টান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="religion" type="radio" id="religion" value="5" {{old('religion') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="religion">অন্যান্য</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="mobile_bank"> মোবাইল ব্যাংক:-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="1" {{old('mobile_bank') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="mobile_bank">নগদ</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="2" {{old('mobile_bank') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="mobile_bank">বিকাশ</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="3" {{old('mobile_bank') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="mobile_bank">রকেট</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="4" {{old('mobile_bank') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="mobile_bank">উপায়</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank" value="5" {{old('mobile_bank') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="mobile_bank">অন্যান্য</label>
                                    </div>
                                </div>

                            </div>
                            <div class="border border-2 m-2 p-3">
                                {{-- <legend class="">সরকারি সুবিধা:-</legend> --}}
                                <label  class="form-label" for="government_facilities">সরকারি সুবিধা:- </label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities" value="1" {{old('government_facilities') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="government_facilities">ভিজিএফ কার্ড</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities" value="2" {{old('government_facilities') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="government_facilities">বয়স্ক ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities" value="3" {{old('government_facilities') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities">মাতৃত্বকালীন ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities" value="4" {{old('government_facilities') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities">প্রতিবন্ধী ভাতা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities" value="5" {{old('government_facilities') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="government_facilities">বিধবা ভাতা</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="family_status"> পারিবারিক অবস্থা :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status" value="1" {{old('government_facilities') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="family_status">হতদরিদ্র</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status" value="2" {{old('government_facilities') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="family_status">নিন্ম-মধ্যবৃত্ত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status" value="3" {{old('government_facilities') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="family_status">মধ্যবৃত্ত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status" value="4" {{old('government_facilities') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="family_status">উচ্চ-মধ্যবৃত্ত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="radio" name="family_status" id="family_status" value="5" {{old('government_facilities') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="family_status">উচ্চবৃত্ত</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for=""> ডিজিটাল ডিভাইস :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="1" {{old('digital_devices') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="digital_devices">নরমাল মোবাইল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="2" {{old('digital_devices') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="digital_devices">স্মার্ট ফোন</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="3" {{old('digital_devices') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="digital_devices">কম্পিউটার/ল্যাপটপ</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="4" {{old('digital_devices') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="digital_devices">ইন্টারনেট</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices" value="5" {{old('digital_devices') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="digital_devices">টিভি</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for="telecommunications"> টেলিযোগাযোগ :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="1" {{old('telecommunications') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="telecommunications">টেলিটক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="2" {{old('telecommunications') == '2' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="telecommunications">গ্রামীন</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="3" {{old('telecommunications') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="telecommunications">এয়ারটেল/রবি</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="4" {{old('telecommunications') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="telecommunications">বাংলালিংক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="telecommunications[]" id="telecommunications" value="5" {{old('telecommunications') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="telecommunications">টিএনটি</label>
                                    </div>
                                </div>

                            </div>
                            <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="source_income"> পেশা বা আয়ের উৎস :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="1" {{old('source_income') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income">চাকুরি<small>(সরকারি)</small></label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="2" {{old('source_income') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income">চাকুরি<small>(বে-সরকারি)</small></label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="3" {{old('source_income') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">ব্যবসা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="4" {{old('source_income') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">কৃষি</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="5" {{old('source_income') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">শিক্ষক</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="6" {{old('source_income') == '6' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income">প্রকৌশলি</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="7" {{old('source_income') == '7' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income">আইনজীবী</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="8" {{old('source_income') == '8' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">চিকিৎসক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="9" {{old('source_income') == '9' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">শ্রমিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="10" {{old('source_income') == '10' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">খাবার হোটেল</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="11" {{old('source_income') == '11' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income">মৎস  খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="12" {{old('source_income') == '12' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income">ক্ষুদ্র ও কুটির শিল্প</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="13" {{old('source_income') == '13' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">গবাদি পশুর খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="14" {{old('source_income') == '14' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">গাড়ী চালক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="15" {{old('source_income') == '15' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income"> ঠিকাদার</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="16" {{old('source_income') == '16' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income">মাঝারি শিল্প</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="17" {{old('source_income') == '17' ? 'checked' : ''}} />
                                        <label  class="form-label" for="source_income">নারী উদ্যোক্তা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="18" {{old('source_income') == '18' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">হাঁস-মুরগির খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="19" {{old('source_income') == '19' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income">প্রবাসী</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="source_income[]" id="source_income" value="20" {{old('source_income') == '20' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="source_income"> অন্যান্য</label>
                                    </div>
                                </div>

                            </div>
                            <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="business_taxes">ব্যবসায়িক করের উৎস  :-</label>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="1" {{old('business_taxes') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">কৃষি খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="2" {{old('business_taxes') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">মৎস খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="3" {{old('business_taxes') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">দুগ্ধ খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="4" {{old('business_taxes') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">হাঁস-মুরগীর খামার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="5" {{old('business_taxes') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">গবাদি পশুর খামার</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="6" {{old('business_taxes') == '6' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">মুদির দোকান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="7" {{old('business_taxes') == '7' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">আর্থিক প্রতিষ্ঠান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="8" {{old('business_taxes') == '8' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">ক্ষুদ্র ও কুটির শিল্প</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="9" {{old('business_taxes') == '9' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">মাঝারি শিল্প</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="10" {{old('business_taxes') == '10' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">খাবার হোটেল</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="11" {{old('business_taxes') == '11' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">প্রকৌশলী</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="12" {{old('business_taxes') == '12' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">আইনজীবি</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="13" {{old('business_taxes') == '13' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes"> চিকিৎসক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="14" {{old('business_taxes') == '14' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">ক্লিনিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="15" {{old('business_taxes') == '15' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">ঔষদের দোকান</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="16" {{old('business_taxes') == '16' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">আবাসিক হোটেল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="17" {{old('business_taxes') == '17' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">মিষ্টির দোকান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="18" {{old('business_taxes') == '18' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">বে-সরকারি হাসপাতাল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="19" {{old('business_taxes') == '19' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">বে-সরকারি স্কুল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="20" {{old('business_taxes') == '20' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes"> কোচিং সেন্টার</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="21" {{old('business_taxes') == '21' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">খাবারের হোটেল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="22" {{old('business_taxes') == '22' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">হিমাগার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="23" {{old('business_taxes') == '23' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">ধান ভাঙানোর কল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="24" {{old('business_taxes') == '24' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">আটার কল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="25" {{old('business_taxes') == '25' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">তেলের কল</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="26" {{old('business_taxes') == '26' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">স’মিল</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="27" {{old('business_taxes') == '27' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">বিউটি পার্লার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="28" {{old('business_taxes') == '28' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">হেয়ার কাট সেলুন</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="29" {{old('business_taxes') == '29' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">লন্ড্রীর দোকান</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="30" {{old('business_taxes') == '30' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">ইঞ্জিনিয়রিং ফার্ম</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="31" {{old('business_taxes') == '31' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">শিল্প কারখানা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="32" {{old('business_taxes') == '32' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">ইট ভাটা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="33" {{old('business_taxes') == '33' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes"> কনসালটেন্সি ফার্ম</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="34" {{old('business_taxes') == '34' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">গুদাম</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="35" {{old('business_taxes') == '35' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">রিক্মার মালিক</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="36" {{old('business_taxes') == '36' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">বাজার ইজারা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="37" {{old('business_taxes') == '37' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">টেম্পের মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="38" {{old('business_taxes') == '38' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">বাসের মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="39" {{old('business_taxes') == '39' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">ট্রাকের মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="40" {{old('business_taxes') == '40' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes"> পরিবহন এজেন্সী</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="41" {{old('business_taxes') == '41' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">নৌযানের মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="42" {{old('business_taxes') == '42' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">অটো রিক্সার মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="43" {{old('business_taxes') == '43' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">স্টীমার/কার্গোর মালিক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="44" {{old('business_taxes') == '44' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">শিশু পার্ক</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="45" {{old('business_taxes') == '45' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes"> বিনোদন পার্ক</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="46" {{old('business_taxes') == '46' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">পশু জবাইয়</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="47" {{old('business_taxes') == '47' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes">১ম শ্রেণীর ঠিকাদার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="48" {{old('business_taxes') == '48' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">২য় শ্রেণীর ঠিকাদার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="49" {{old('business_taxes') == '49' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes">৩য় শ্রেণীর ঠিকাদার</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="business_taxes[]" id="business_taxes" value="50" {{old('business_taxes') == '50' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes"> অন্যান্য</label>
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <label  class="form-label" for="" class="col-sm-2 offset-2 col-form-label text-end">করের পরিমান :-</label>
                                    <div class="col-sm-6">
                                        <input type="text" value="{{ old('business_amount_taxes') }}" class="form-control"
                                            placeholder="করের পরিমান" name="business_amount_taxes">
                                    </div>টাকা
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
                                        <input class="form-check-input" type="checkbox" name="residence_type[]" id="residence_type" value="1" {{old('residence_type') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="residence_type">কাচা-ঘর</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="residence_type[]" id="residence_type" value="2" {{old('residence_type') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="residence_type">টিনসেট</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="residence_type[]" id="residence_type" value="3" {{old('residence_type') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="residence_type">আধা-পাকা</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="residence_type[]" id="residence_type" value="4" {{old('residence_type') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="residence_type">পাকা ইমারত</label>
                                    </div>

                                    <div class="col-2">
                                        <input class="form-check-input" type="checkbox" name="residence_type[]" id="residence_type" value="5" {{old('residence_type') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="residence_type"></label>
                                    </div>
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
                            </div>>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
