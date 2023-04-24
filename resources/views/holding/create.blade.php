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

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center heading-block">
                                    <h5 style="padding-top: 5px;">হোল্ডিং নাম্বার আবেদনের অন্যান্য তথ্য</h5>
                                </div>
                            </div>
                        </div>
                        <form action="{{route(currentUser().'.holding.store')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="all_aplication" value="{{$all->id}}">
                            @csrf
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="residence_type"><b>বাড়ির ধরন</b></label>
                                    <select name="residence_type" class="form-select @error('residence_type') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse(\App\Models\HousingType::orderBy('created_at')->get() as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @if($errors->has('residence_type'))
                                        <small class="d-block text-danger text-center">{{ $errors->first('residence_type') }}</small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="house_room"><b>বাড়ির রুম/ঘর</b></label>
                                    <input class="form-control @error('house_room') is-invalid @enderror" name="house_room" id="house_room" value="{{ old('house_room') }}"  type="number" placeholder="বাড়ির রুম/ঘর">
                                    @if($errors->has('house_room'))
                                        <small class="d-block text-danger">{{ $errors->first('house_room') }}</small>
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
                                    <label  class="form-label" for="percentage_house_land"><b>বাড়ির জমি পরিমান</b></label>
                                    <input class="form-control @error('percentage_house_land') is-invalid @enderror" name="percentage_house_land" id="percentage_house_land" value="{{ old('percentage_house_land') }}"  type="number" placeholder="শতাংশ">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="percentage_cultivated_land"><b>আবাদী জমি পরিমান</b></label>
                                    <input class="form-control @error('percentage_cultivated_land') is-invalid @enderror" name="percentage_cultivated_land" id="percentage_cultivated_land" value="{{ old('percentage_cultivated_land') }}"  type="number" placeholder="শতাংশ">
                                    @if($errors->has('percentage_cultivated_land'))
                                        <small class="d-block text-danger">{{ $errors->first('percentage_cultivated_land') }}</small>
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
                                    <input readonly class="form-control @error('tax_levied_annually_house') is-invalid @enderror"
                                    name="tax_levied_annually_house" id="tax_levied_annually_house" value="{{ old('tax_levied_annually_house') }}"  type="number" placeholder="বাড়ির বার্ষিক ধার্যকৃত কর">
                                    @if($errors->has('tax_levied_annually_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('tax_levied_annually_house') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            IncomeSource
                            <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="business_taxes"><b>কর/আয়ের উৎস</b></label>
                                <div class="row m-2" style="font-size: 13px;">
                                    @forelse(\App\Models\IncomeSource::orderBy('created_at')->get() as $data)
                                        <div class="col-lg-2 col-sm-6">
                                            <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes{{$data->id}}" value="{{$data->id}}" {{old('business_taxes') == $data->id ? 'checked' : ''}} />
                                            <label  class="form-label" for="business_taxes{{$data->id}}">{{$data->name}}</label>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                                
                                @if($errors->has('business_taxes'))
                                <small class="d-block text-danger text-center">
                                    {{ $errors->first('business_taxes') }}
                                </small>
                                @endif
                            </div>
                            
                            <div class="row m-3">
                                <h5 class="text-center theme-text-color" style="padding-top: 5px;">আবেদনকারীর স্থায়ী ঠিকানা </h5>
                            </div>
                            <div class="row m-2">
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
                                <div class="col-6">
                                    <label  class="form-label" for="village_name">গ্রামের নাম</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name') }}"  type="text" placeholder="গ্রামের নাম">
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
                                <div class="col-4">
                                    <label >ইউনিয়ন:</label>
                                    <b>{{ request()->session()->get('upsetting')->union?->name_bn}}</b>
                                    <input type="hidden" name="union_id" value="{{ request()->session()->get('upsetting')->union_id}}"/>
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="upazila_thana">উপজেলা/থানা:</label>
                                    <b>{{ request()->session()->get('upsetting')->upazila?->name_bn}}</b>
                                    <input type="hidden" name="upazila_id" value="{{ request()->session()->get('upsetting')->upazila_id}}"/>
                                </div>
                                <div class="col-4">
                                    <label for="district">জেলা:</label>
                                    <b>{{ request()->session()->get('upsetting')->district?->name_bn}}</b>
                                    <input type="hidden" name="district_id" value="{{ request()->session()->get('upsetting')->district_id}}"/>
                                </div>
                                
                            </div>
                            
                            <div class="row m-3">
                                <h5 class="theme-text-color" style="padding-top: 5px;">অতিরিক্ত সংযোজনঃ- </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">ভোটার আইডির কপি </label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="birth_registration_image">জন্ম নিবন্ধনের কপি </label>
                                    <input class="form-control" type="file" name="birth_registration_image" id="birth_registration_image" value="{{ old('birth_registration_image') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                    <div class="image-overlay">
                                        <label  class="form-label" for="image">আবেদনকারীর সদ্য তোলা রঙিন ছবি</label>
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
                                  <div class="col-sm-6">
                                    {{-- <a href="{{route(currentUser().'.allapplication.edit',$all->id)}}"><button style="background-color: rgb(214, 153, 153);">পূর্ববর্তী</button></a> --}}
                                    <a class="p-2" style="background-color: rgb(214, 153, 153); color:black;" href="{{route(currentUser().'.allapplication.edit',$all->id)}}">
                                        পূর্ববর্তী
                                    </a>
                                  </div>
                                  <div class="col-sm-6 text-end">
                                    <button type="submit" style="background-color: rgb(214, 153, 153);">দাখিল করুন</button>
                                    <span class="btn or">or</span>
                                    <button type="reset" style="background-color: rgb(214, 153, 153);">রিসেট করুন</button>
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
