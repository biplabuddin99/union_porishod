@extends('layout.app')
{{-- @section('pageTitle',trans('নতুন হোল্ডিং')) --}}

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">হোল্ডিং নাম্বার আবেদনের অন্যান্য তথ্য</h4>
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
                            <input type="hidden" name="all_aplication" value="{{$all->id}}">
                            @csrf
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="residence_type"><b>বাড়ির ধরন</b></label>
                                    <select name="residence_type" class="form-select @error('residence_type') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">কাচা-ঘর</option>
                                        <option value="2">টিনসেট</option>
                                        <option value="3">আধা-পাকা</option>
                                        <option value="4">পাকা ইমারত</option>
                                        <option value="5">২য় তলা বাড়ী</option>
                                        <option value="6">৩য় তলা বাড়ী</option>
                                    </select>
                                    @if($errors->has('residence_type'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('residence_type') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="house_room"><b>বাড়ির রুম/ঘর</b></label>
                                    <input class="form-control @error('house_room') is-invalid @enderror"
                                    name="house_room" id="house_room" value="{{ old('house_room') }}"  type="number" placeholder="বাড়ির রুম/ঘর">
                                    @if($errors->has('house_room'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_room') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="family_status"><b>পারিবারিক অবস্থা</b></label>
                                    <select name="family_status" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">হতদরিদ্র</option>
                                        <option value="2">নিন্ম-মধ্যবৃত্ত</option>
                                        <option value="3">মধ্যবৃত্ত</option>
                                        <option value="4">উচ্চ-মধ্যবৃত্ত</option>
                                        <option value="5">উচ্চবৃত্ত</option>
                                    </select>
                                    {{-- @if($errors->has('family_status'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('family_status') }}
                                    </small>
                                    @endif --}}
                                </div>
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="main_source_income">আয়ের প্রধান উৎস </label>
                                    <select name="main_source_income" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">চাকুরী <sub>(সরকারী)</sub></option>
                                        <option value="2">চাকুরী <sub>(বেসরকারী)</sub></option>
                                        <option value="3">প্রবাসী</option>
                                        <option value="4">শিক্ষক</option>
                                        <option value="5">শ্রমিক</option>
                                        <option value="6">কৃষি খামার</option>
                                        <option value="7">মৎস খামার</option>
                                        <option value="8">দুগ্ধ খামার</option>
                                        <option value="9">হাঁস-মুরগীর খামার</option>
                                        <option value="10">গবাদি পশুর খামার</option>
                                        <option value="11">মুদির দোকান</option>
                                        <option value="12">আর্থিক প্রতিষ্ঠান</option>
                                        <option value="13">ক্ষুদ্র ও কুটির শিল্প</option>
                                        <option value="14">মাঝারি শিল্প</option>
                                        <option value="15">খাবার হোটেল</option>
                                        <option value="16">প্রকৌশলী</option>
                                        <option value="17">আইনজীবী</option>
                                        <option value="18">চিকিৎসক</option>
                                        <option value="19">ক্লিনিক</option>
                                        <option value="20">ঔষদের দোকান</option>
                                        <option value="21">আবাসিক হোটেল</option>
                                        <option value="22">মিষ্টির দোকান</option>
                                        <option value="23">বে-সরকারি হাসপাতাল</option>
                                        <option value="24">বে-সরকারি স্কুল</option>
                                        <option value="25">কোচিং সেন্টার</option>
                                        <option value="26">খাবার হোটেল</option>
                                        <option value="27">হিমাগার</option>
                                        <option value="28">ধান ভাঙানোর কল</option>
                                        <option value="29">আটার কল</option>
                                        <option value="30">তেলের কল</option>
                                        <option value="31">স’ মিল</option>
                                        <option value="32">বিউটি পার্লার</option>
                                        <option value="33">হেয়ার কাট সেলুন</option>
                                        <option value="34">লন্ড্রীর দোকান</option>
                                        <option value="35">ইন্জিনিয়ারিং ফার্ম</option>
                                        <option value="36">শিল্প কারখানা</option>
                                        <option value="37">ইট ভাটা</option>
                                        <option value="38">কনসালটেন্সি ফার্ম</option>
                                        <option value="39">গুদাম</option>
                                        <option value="40">রিক্সার মালিক</option>
                                        <option value="41">বাজার ইজারা</option>
                                        <option value="42">টেম্পোর মালিক</option>
                                        <option value="43">বাসের মালিক</option>
                                        <option value="44">ট্রাকের মালিক</option>
                                        <option value="45">পরিবহন এজেন্সি</option>
                                        <option value="46">নৌযানের মালিক</option>
                                        <option value="47">অটো-রিক্সার মালিক</option>
                                        <option value="48">স্টীমার/কার্গোর মালিক</option>
                                        <option value="49">শিশু পার্ক</option>
                                        <option value="50">বিনোদন পার্ক</option>
                                        <option value="51">জবাই পশু</option>
                                        <option value="52">ঠিকাদার</option>
                                        <option value="53">গাড়ী চালক</option>
                                        <option value="54">অন্যান্য</option>
                                    </select>
                                    @if($errors->has('main_source_income'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('main_source_income') }}
                                    </small>
                                    @endif
                                </div> --}}
                                <div class="col-6">
                                    <label  class="form-label" for="percentage_house_land"><b>বাড়ির জমি শতাংশ</b></label>
                                    <input class="form-control @error('percentage_house_land') is-invalid @enderror"
                                    name="percentage_house_land" id="percentage_house_land" value="{{ old('percentage_house_land') }}"  type="text" placeholder="বাড়ির জমি শতাংশ">
                                    {{-- @if($errors->has('percentage_house_land'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('percentage_house_land') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="percentage_cultivated_land"><b>আবাদী জমি শতাংশ</b></label>
                                    <input class="form-control @error('percentage_cultivated_land') is-invalid @enderror"
                                    name="percentage_cultivated_land" id="percentage_cultivated_land" value="{{ old('percentage_cultivated_land') }}"  type="text" placeholder="আবাদী জমি শতাংশ">
                                    @if($errors->has('percentage_cultivated_land'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('percentage_cultivated_land') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="estimated_value_house"><b>বাড়ির আনুমানিক মূল্য</b></label>
                                    <input class="form-control @error('estimated_value_house') is-invalid @enderror"
                                    name="estimated_value_house" id="estimated_value_house" value="{{ old('estimated_value_house') }}"  type="number" placeholder="বাড়ির আনুমানিক মূল্য">
                                    {{-- @if($errors->has('estimated_value_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('estimated_value_house') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="tax_levied_annually_house"><b>বাড়ির বার্ষিক ধার্যকৃত কর</b></label>
                                    <input class="form-control @error('tax_levied_annually_house') is-invalid @enderror"
                                    name="tax_levied_annually_house" id="tax_levied_annually_house" value="{{ old('tax_levied_annually_house') }}"  type="number" placeholder="বাড়ির বার্ষিক ধার্যকৃত কর">
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
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes1" value="1" {{old('business_taxes') == '1' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes1">কৃষি খামার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes2" value="2" {{old('business_taxes') == '2' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes2">মৎস খামার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes3" value="3" {{old('business_taxes') == '3' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes3">দুগ্ধ খামার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes4" value="4" {{old('business_taxes') == '4' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes4">হাঁস-মুরগীর খামার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes5" value="5" {{old('business_taxes') == '5' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes5">গবাদি পশুর খামার</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes6" value="6" {{old('business_taxes') == '6' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes6">মুদির দোকান</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes7" value="7" {{old('business_taxes') == '7' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes7">আর্থিক প্রতিষ্ঠান</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes8" value="8" {{old('business_taxes') == '8' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes8">ক্ষুদ্র ও কুটির শিল্প</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes9" value="9" {{old('business_taxes') == '9' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes9">মাঝারি শিল্প</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes10" value="10" {{old('business_taxes') == '10' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes10">খাবার হোটেল</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes11" value="11" {{old('business_taxes') == '11' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes11">প্রকৌশলী</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes12" value="12" {{old('business_taxes') == '12' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes12">আইনজীবি</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes13" value="13" {{old('business_taxes') == '13' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes13"> চিকিৎসক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes14" value="14" {{old('business_taxes') == '14' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes14">ক্লিনিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes15" value="15" {{old('business_taxes') == '15' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes15">ঔষদের দোকান</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes16" value="16" {{old('business_taxes') == '16' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes16">আবাসিক হোটেল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes17" value="17" {{old('business_taxes') == '17' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes17">মিষ্টির দোকান</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes18" value="18" {{old('business_taxes') == '18' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes18">বে-সরকারি হাসপাতাল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes19" value="19" {{old('business_taxes') == '19' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes19">বে-সরকারি স্কুল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes20" value="20" {{old('business_taxes') == '20' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes20"> কোচিং সেন্টার</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes21" value="21" {{old('business_taxes') == '21' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes21">ঠিকাদার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes22" value="22" {{old('business_taxes') == '22' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes22">হিমাগার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes23" value="23" {{old('business_taxes') == '23' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes23">ধান ভাঙানোর কল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes24" value="24" {{old('business_taxes') == '24' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes24">আটার কল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes25" value="25" {{old('business_taxes') == '25' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes25">তেলের কল</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes26" value="26" {{old('business_taxes') == '26' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes26">স’মিল</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes27" value="27" {{old('business_taxes') == '27' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes27">বিউটি পার্লার</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes28" value="28" {{old('business_taxes') == '28' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes28">হেয়ার কাট সেলুন</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes29" value="29" {{old('business_taxes') == '29' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes29">লন্ড্রীর দোকান</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes30" value="30" {{old('business_taxes') == '30' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes30">ইঞ্জিনিয়রিং ফার্ম</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes31" value="31" {{old('business_taxes') == '31' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes31">শিল্প কারখানা</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes32" value="32" {{old('business_taxes') == '32' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes32">ইট ভাটা</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes33" value="33" {{old('business_taxes') == '33' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes33"> কনসালটেন্সি ফার্ম</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes34" value="34" {{old('business_taxes') == '34' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes34">গুদাম</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes35" value="35" {{old('business_taxes') == '35' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes35">রিক্মার মালিক</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes36" value="36" {{old('business_taxes') == '36' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes36">বাজার ইজারা</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes37" value="37" {{old('business_taxes') == '37' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes37">টেম্পের মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes38" value="38" {{old('business_taxes') == '38' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes38">বাসের মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes39" value="39" {{old('business_taxes') == '39' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes39">ট্রাকের মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes40" value="40" {{old('business_taxes') == '40' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes40"> পরিবহন এজেন্সী</label>
                                    </div>
                                </div>
                                <div class="row m-2" style="font-size: 13px;">
                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes41" value="41" {{old('business_taxes') == '41' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes41">নৌযানের মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes42" value="42" {{old('business_taxes') == '42' ? 'checked' : ''}} />
                                        <label  class="form-label" for="business_taxes42">অটো রিক্সার মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes43" value="43" {{old('business_taxes') == '43' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes43">স্টীমার/কার্গোর মালিক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes44" value="44" {{old('business_taxes') == '44' ? 'checked' : ''}}/>
                                        <label  class="form-label" for="business_taxes44">শিশু পার্ক</label>
                                    </div>

                                    <div class="col-lg-2 col-sm-6">
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes45" value="45" {{old('business_taxes') == '45' ? 'checked' : ''}}/>
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
                                        <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes50" value="50" {{old('business_taxes') == '50' ? 'checked' : ''}}/>
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
                                    <label  class="form-label" for="annual_tax_collected_house">বাড়ির বার্ষিক আদায়কৃত কর</label>
                                    <input class="form-control @error('annual_tax_collected_house') is-invalid @enderror"
                                    name="annual_tax_collected_house" id="annual_tax_collected_house" value="{{ old('annual_tax_collected_house') }}"  type="text" placeholder="বাড়ির বার্ষিক আদায়কৃত কর">
                                    @if($errors->has('annual_tax_collected_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_tax_collected_house') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="annual_house_tax_arrears">বাড়ির বার্ষিক বকেয়া কর</label>
                                    <input class="form-control @error('annual_house_tax_arrears') is-invalid @enderror"
                                    name="annual_house_tax_arrears" id="annual_house_tax_arrears" value="{{ old('annual_house_tax_arrears') }}"  type="text" placeholder="বাড়ির বার্ষিক বকেয়া কর">
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
                                    <label  class="form-label" for="house_holding_no">বাড়ির হেল্ডিং নম্বর</label>
                                    <input class="form-control @error('house_holding_no') is-invalid @enderror"
                                    name="house_holding_no" id="house_holding_no" value="{{ old('house_holding_no') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কতৃক পূরণকৃত">
                                    {{-- @if($errors->has('house_holding_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_holding_no') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="post_office">ডাকঘর</label>
                                    <input class="form-control @error('post_office') is-invalid @enderror"
                                    name="post_office" id="post_office" value="{{ old('post_office') }}"  type="text" placeholder="ডাকঘর">
                                    @if($errors->has('post_office'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('post_office') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label for="district">জেলা</label>
                                    <select id="district_id" name="district_id" class="form-select search_district">
                                        <option value="">নির্বাচন করুন</option>
                                        @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name_bn }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('district'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('district') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="upazila_thana">উপজেলা/থানা</label>
                                    <select id="upazila_id" name="upazila_id" class="form-select search_district">
                                        <option value="">নির্বাচন করুন</option>
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
                                    <label  class="form-label" for="union_parishad">ইউনিয়ন পরিষদের নাম</label>
                                    <select id="union_id" name="union_id" class="form-select search_district">
                                        <option value="">নির্বাচন করুন</option>
                                    </select>
                                    {{-- @if($errors->has('upazila_thana'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('upazila_thana') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="ward_id">ওয়ার্ড</label>
                                    <select name="ward_id" class="form-select search_district" id="ward_id">
                                        <option value="" selected="selected">ওয়ার্ড নং</option>
                                        @forelse ($ward as $w)
                                        <option value="{{ $w->id }}">{{ $w->ward_name_bn }}</option>
                                        @empty
                                        <p>No Ward found</p>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="village_name">গ্রামের নাম</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name') }}"  type="text" placeholder="গ্রামের নাম">
                                    {{-- @if($errors->has('village_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('village_name') }}
                                    </small>
                                    @endif --}}
                                </div>

                                <div class="col-6">
                                    <label  class="form-label" for="street_nm">রাস্তা/পাড়া/মহল্লা</label>
                                    <input class="form-control @error('street_nm') is-invalid @enderror"
                                    name="street_nm" id="street_nm" value="{{ old('street_nm') }}"  type="text" placeholder="রাস্তা/পাড়া/মহল্লা">
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
                                    <label  class="form-label" for="nid_image">ভোটার আইডির রঙিন কপি </label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="birth_registration_image">জন্ম নিবন্ধনের রঙিন কপি </label>
                                    <input class="form-control" type="file" name="birth_registration_image" id="birth_registration_image" value="{{ old('birth_registration_image') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                    <div class="image-overlay">
                                        <label  class="form-label" for="image">সদ্য তোলা রঙিন ছবি</label>
                                        <input type="file" name="image" value="" data-default-file="{{ asset('uploads/holding/default.jpg') }}" class="form-control dropify">
                                    </div>
                            </div>
                            <div class="row m-2">
                                <div class="text-center">
                                    <b>
                                        আমি ঘোষনা করিতেছি যে, <br/>
                                        আমার দেয়া উপরে বর্ণিত তথ্য সঠিক এবং বর্ণিত তথ্য মিথ্যা প্রমানিত হলে,  <br/>
                                        আমি তাহার জন্য আইনত দায়ী থাকিব।
                                    </b>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                  <div class="col-sm-9">
                                    {{-- <a href="{{route(currentUser().'.allapplication.edit',$all->id)}}"><button style="background-color: rgb(214, 153, 153);">পূর্ববর্তী</button></a> --}}
                                    <a class="p-2" style="background-color: rgb(214, 153, 153); color:black;" href="{{route(currentUser().'.allapplication.edit',$all->id)}}">
                                        পূর্ববর্তী
                                    </a>
                                  </div>
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
