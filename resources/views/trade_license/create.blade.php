@extends('layout.app')

@section('content')
  <section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">ট্রেড লাইসেন্স আবেদনের অন্যান্য তথ্য</h4>
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
                        <form action="{{route(currentUser().'.trade.store')}}" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <input type="hidden" name="all_aplication" value="{{$all->id}}">
                            @csrf
                            @method('post')
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="business_name">ব্যবসা প্রতিষ্ঠানের নাম:-</label>
                                    <input class="form-control @error('business_name') is-invalid @enderror"
                                    name="business_name" id="business_name" value="{{ old('business_name') }}"  type="text" placeholder="ব্যবসা প্রতিষ্ঠানের নাম">
                                    @if($errors->has('business_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="owner_proprietor">মালিক/প্রোপাইটরের নাম:-</label>
                                    <input class="form-control @error('owner_proprietor') is-invalid @enderror"
                                    name="owner_proprietor" id="owner_proprietor" value="{{ old('owner_proprietor') }}"  type="text" placeholder="মালিক/প্রোপাইটরের নাম">
                                    @if($errors->has('owner_proprietor'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('owner_proprietor') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="trade_husband_name">স্বমীর নাম:-</label>
                                    <input class="form-control"
                                    name="trade_husband_name" id="trade_husband_name" value="{{ old('trade_husband_name') }}"  type="text" placeholder="স্বমীর নাম">
                                    {{-- @if($errors->has('trade_husband_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('trade_husband_name') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="trade_fathername">পিতার নাম:-</label>
                                    <input class="form-control @error('trade_fathername') is-invalid @enderror"
                                    name="trade_fathername" id="trade_fathername" value="{{ old('trade_fathername') }}"  type="text" placeholder="পিতার নাম">
                                    @if($errors->has('trade_fathername'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('trade_fathername') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="trade_mothername">মাতার নাম:-</label>
                                    <input class="form-control"
                                    name="trade_mothername" id="trade_mothername" value="{{ old('trade_mothername') }}"  type="text" placeholder="মাতার নাম">
                                    {{-- @if($errors->has('trade_mothername'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('trade_mothername') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="trade_license_renewal">ট্রেড লােইসেন্স নবায়ন:-</label>
                                    <select name="trade_license_renewal" class="form-select">
                                        <option value="">অর্থ বছর</option>
                                        <option value="1">অর্থ বছর ২০২৩-২০২৪</option>
                                        <option value="2">অর্থ বছর ২০২৪-২০২৫</option>
                                        <option value="3">অর্থ বছর ২০২৫-২০২৬</option>
                                        <option value="4">অর্থ বছর ২০২৬-২০২৭</option>
                                        <option value="5">অর্থ বছর ২০২৭-২০২৮</option>
                                        <option value="6">অর্থ বছর ২০২৮-২০২৯</option>
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
                                    <label  class="form-label" for="type_ownership_organization">প্রতিষ্ঠানের মালিকানার ধরন:-</label>
                                    <select name="type_ownership_organization" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">একক</option>
                                        <option value="2">যৌথ</option>
                                        <option value="3">কোম্পানি</option>
                                    </select>
                                    {{-- @if($errors->has('type_ownership_organization'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('type_ownership_organization') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_type">ব্যবসায়িক ধরন:-</label>
                                    <select name="business_type" class="form-select @error('business_type') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">কৃষি খামার</option>
                                        <option value="2">মুদির দোকান</option>
                                        <option value="3">আবাসিক হোটেল</option>
                                        <option value="4">খাবারের হোটেল</option>
                                        <option value="5">স’মিল</option>
                                        <option value="6">শিল্প কারখানা</option>
                                        <option value="7">বাজার ইজারা</option>
                                        <option value="8">নৌযানের মালিক</option>
                                        <option value="9">পশু জবাই</option>
                                        <option value="10">দুগ্ধ খামার</option>
                                        <option value="11">ক্ষুদ্র ও কুটির শিল্প</option>
                                        <option value="12">বেসরকারী হাসপাতাল</option>
                                        <option value="13">ধান ভাঙানোর কল</option>
                                        <option value="14">হেয়ার কাট সেলুন</option>
                                        <option value="15">কনসালটেন্সি ফার্ম</option>
                                        <option value="16">বাসের মালিক</option>
                                        <option value="17">স্টীমার/কার্গোর মালিক</option>
                                        <option value="18">গবাদি পশুর খামার</option>
                                        <option value="19">খাবার হোটেল</option>
                                        <option value="20">ঔষদের দোকান</option>
                                        <option value="21">কোচিং সেন্টার</option>
                                        <option value="22">মৎস্য খামার</option>
                                        <option value="23">আর্থিক প্রতিষ্ঠান</option>
                                        <option value="24">মিষ্টির দোকান</option>
                                        <option value="25">হিমাগার</option>
                                        <option value="26">বিউটি পার্লার</option>
                                        <option value="27">ইট ভাটা</option>
                                        <option value="28">ঠিকাদার</option>
                                        <option value="29">হাঁস-মুরগীর খামার</option>
                                        <option value="30">মাঝারি শিল্প</option>
                                        <option value="31">ক্লিনিক</option>
                                        <option value="32">বে-সরকারী স্কুল</option>
                                        <option value="33">আটার কল</option>
                                        <option value="34">লন্ড্রীর দোকান</option>
                                        <option value="35">গুদাম</option>
                                        <option value="36">শিশু পার্ক</option>
                                        <option value="37">ইঞ্জিনিয়ারিং ফার্ম</option>
                                        <option value="38">তেলের কল</option>
                                        <option value="39">পরিবহন এজেন্সি</option>
                                        <option value="40">বিনোদন পার্ক</option>
                                        <option value="41">শিক্ষক</option>
                                        <option value="42">অন্যান্য</option>
                                    </select>
                                    @if($errors->has('business_type'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('business_type') }}
                                    </small>
                                    @endif
                                    {{-- <input class="form-control @error('business_type') is-invalid @enderror"
                                    name="business_type" id="business_type" value="{{ old('business_type') }}"  type="text" placeholder="ব্যবসায়িক ধরন">
                                    @if($errors->has('business_type'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_type') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="trade_license_renewal_fee">ট্রেড লাইসেন্স নবায়ন ফি:-</label>
                                    <input class="form-control @error('trade_license_renewal_fee') is-invalid @enderror"
                                    name="trade_license_renewal_fee" id="trade_license_renewal_fee" value="{{ old('trade_license_renewal_fee') }}"  type="text" placeholder="ট্রেড লাইসেন্স নবায়ন ফি">
                                    {{-- @if($errors->has('trade_license_renewal_fee'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('trade_license_renewal_fee') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_estimated_capital">ব্যবসায়িক আনুমানিক মূলধন:-</label>
                                    <input class="form-control @error('business_estimated_capital') is-invalid @enderror"
                                    name="business_estimated_capital" id="business_estimated_capital" value="{{ old('business_estimated_capital') }}"  type="text" placeholder="ব্যবসায়িক আনুমানিক মূলধন">
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
                                    name="annual_business_tax_levied" id="annual_business_tax_levied" value="{{ old('annual_business_tax_levied') }}"  type="text" placeholder="ব্যবসায়িক বার্ষিক র্ধাযকৃত কর">
                                    {{-- @if($errors->has('annual_business_tax_levied'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_business_tax_levied') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_organization_structure">ব্যবসা প্রতিষ্ঠানের কাঠামো:-</label>
                                    <select name="business_organization_structure" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">কাঁচাঘর</option>
                                        <option value="2">টিনসেট</option>
                                        <option value="3">আধা-পাকা</option>
                                        <option value="4">পাকা-ইমারত</option>
                                        <option value="5">২য় তলা বাড়ি</option>
                                        <option value="6">৩য় তলা বাড়ি</option>
                                    </select>
                                    {{-- @if($errors->has('business_organization_structure'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('business_organization_structure') }}
                                    </small>
                                    @endif --}}
                                </div>
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="annual_business_tax_collected">ব্যবসায়িক বার্ষিক আদায়কৃত কর:-</label>
                                    <input class="form-control @error('annual_business_tax_collected') is-invalid @enderror"
                                    name="annual_business_tax_collected" id="annual_business_tax_collected" value="{{ old('annual_business_tax_collected') }}"  type="text" placeholder="ব্যবসায়িক বার্ষিক আদায়কৃত কর">
                                    @if($errors->has('annual_business_tax_collected'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_business_tax_collected') }}
                                    </small>
                                    @endif
                                </div> --}}
                            </div>
                            {{-- <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="annual_business_tax_due">ব্যবসায়িক বার্ষিক বকেয়া কর:-</label>
                                    <input class="form-control @error('annual_business_tax_due') is-invalid @enderror"
                                    name="annual_business_tax_due" id="annual_business_tax_due" value="{{ old('annual_business_tax_due') }}"  type="text" placeholder="বাড়ির বার্ষিক আদায়কৃত কর">
                                    @if($errors->has('annual_business_tax_due'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_business_tax_due') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="holding_tax_update">হালনাগাদ হেল্ডিং কর:-</label>
                                    <select name="holding_tax_update" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                    @if($errors->has('holding_tax_update'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('holding_tax_update') }}
                                    </small>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="row m-3">
                                <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকারীর স্থায়ী ঠিকানা সমূহঃ </h4>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="vehicle_establishment_holding_no">ব্যাবসা/প্রতিষ্ঠানের হেল্ডিং নম্বর:-</label>
                                    <input class="form-control @error('vehicle_establishment_holding_no') is-invalid @enderror"
                                    name="vehicle_establishment_holding_no" id="vehicle_establishment_holding_no" value="{{ old('vehicle_establishment_holding_no') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কতৃক পূরণকৃত">
                                    {{-- @if($errors->has('vehicle_establishment_holding_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('vehicle_establishment_holding_no') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="post_office">ডাকঘর:-</label>
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
                                    <label for="district">জেলা:-</label>
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
                                    <label  class="form-label" for="upazila_thana">উপজেলা/থানা:-</label>
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
                                    <label  class="form-label" for="union_parishad">ইউনিয়ন পরিষদের নাম:-</label>
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
                                    <label  class="form-label" for="ward_id">ওয়ার্ড:-</label>
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
                                    <label  class="form-label" for="village_name">গ্রাম/পাড়া/মহল্লা:-</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name') }}"  type="text" placeholder="গ্রামের নাম">
                                    {{-- @if($errors->has('village_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('village_name') }}
                                    </small>
                                    @endif --}}
                                </div>

                                <div class="col-6">
                                    <label  class="form-label" for="street_nm">রাস্তা/পাড়া/মহল্লা:-</label>
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
                                    {{-- <button style="background-color: rgb(214, 153, 153);">পূর্ববর্তী</button> --}}
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
