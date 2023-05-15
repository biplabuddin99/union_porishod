@extends('layout.app')
{{-- @section('pageTitle',trans('নতুন হোল্ডিং')) --}}

@section('content')
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center heading-block">
                                    <h5 style="padding-top: 5px;">ট্রেডলাইসেন্স আবেদনের অন্যান্য তথ্য</h5>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('tradesecondpart_update',Crypt::encrypt($trade->id))}}" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            {{--  <input type="hidden" name="all_aplication" value="{{$all->id}}">  --}}
                            @csrf
                            @method('post')
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="business_name">ব্যবসা প্রতিষ্ঠানের নাম</label>
                                    <input class="form-control @error('business_name') is-invalid @enderror"
                                    name="business_name" id="business_name" value="{{ old('business_name') }}"  type="text" placeholder="ব্যবসা প্রতিষ্ঠানের নাম">
                                    @if($errors->has('business_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="type_ownership_organization">প্রতিষ্ঠানের মালিকানার ধরন</label>
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
                                    <label  class="form-label" for="e_tin_number"> ই-টিন নম্বর(যদি থাকে)</label>
                                    <input class="form-control"
                                    name="e_tin_number" id="e_tin_number" value="{{ old('e_tin_number') }}"  type="text" placeholder="ই-টিন নম্বর(যদি থাকে দিন)">
                                    {{-- @if($errors->has('e_tin_number'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('e_tin_number') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_organization_type"><b>ব্যবসা প্রতিষ্ঠানের অবকাঠামু</b></label>
                                    <select name="business_organization_type" class="form-select @error('business_organization_type') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse(\App\Models\HousingType::orderBy('created_at')->get() as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @if($errors->has('business_organization_type'))
                                        <small class="d-block text-danger text-center">{{ $errors->first('business_organization_type') }}</small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="estimated_capital_business">ব্যবসার আনুমানিক মূলধন</label>
                                    <input class="form-control"
                                    name="estimated_capital_business" id="estimated_capital_business" value="{{ old('estimated_capital_business') }}"  type="text" placeholder="ব্যবসার আনুমানিক মূলধন">
                                    {{-- @if($errors->has('estimated_capital_business'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('estimated_capital_business') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_type">ব্যবসায়িক ধরন:-</label>
                                    <select name="business_type" class="form-select @error('business_type') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse($business as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @if($errors->has('business_type'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('business_type') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="tradelicense_renewal_year">ট্রেডলাইসেন্স নবায়ন সন</label>
                                    <input readonly class="form-control"
                                    name="tradelicense_renewal_year" id="tradelicense_renewal_year" value="{{ old('tradelicense_renewal_year') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কর্তৃক পূরণকৃত">
                                    @if($errors->has('tradelicense_renewal_year'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('tradelicense_renewal_year') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="trade_license_renewal_fee">ট্রেড লাইসেন্স নবায়ন ফি</label>
                                    <input disabled class="form-control @error('trade_license_renewal_fee') is-invalid @enderror"
                                    name="trade_license_renewal_fee" id="trade_license_renewal_fee" value="{{ old('trade_license_renewal_fee') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কর্তৃক পূরণকৃত">
                                    @if($errors->has('trade_license_renewal_fee'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('trade_license_renewal_fee') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="annual_withholding_tax">বার্ষিক ধার্যকৃত উৎসকর</label>
                                    <input disabled class="form-control @error('annual_withholding_tax') is-invalid @enderror"
                                    name="annual_withholding_tax" id="annual_withholding_tax" value="{{ old('annual_withholding_tax') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কর্তৃক পূরণকৃত">
                                    @if($errors->has('annual_withholding_tax'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_withholding_tax') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="signboard_tax">সাইনবোর্ড কর</label>
                                    <input disabled class="form-control @error('signboard_tax') is-invalid @enderror"
                                    name="signboard_tax" id="signboard_tax" value="{{ old('signboard_tax') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কর্তৃক পূরণকৃত">
                                    @if($errors->has('signboard_tax'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('signboard_tax') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="service_charge">সার্ভিস চার্জ</label>
                                    <input disabled class="form-control @error('service_charge') is-invalid @enderror"
                                    name="service_charge" id="service_charge" value="{{ old('service_charge') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কর্তৃক পূরণকৃত">
                                    @if($errors->has('service_charge'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('service_charge') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-3">
                                <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকৃত ব্যবসায়িক ঠিকানা সমূহঃ </h4>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="institution_holding_number">ব্যাবসা/প্রতিষ্ঠানের হেল্ডিং নম্বর:-</label>
                                    <input class="form-control @error('institution_holding_number') is-invalid @enderror"
                                    name="institution_holding_number" id="institution_holding_number" value="{{ old('institution_holding_number') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কতৃক পূরণকৃত">
                                    {{-- @if($errors->has('institution_holding_number'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('institution_holding_number') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_post_office">ডাকঘর:-</label>
                                    <input class="form-control @error('business_post_office') is-invalid @enderror"
                                    name="business_post_office" id="business_post_office" value="{{ old('business_post_office') }}"  type="text" placeholder="ডাকঘর">
                                    @if($errors->has('business_post_office'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_post_office') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label for="business_district_id">জেলা:-</label>
                                    <select id="business_district_id" name="business_district_id" class="form-select search_district">
                                        <option value="">নির্বাচন করুন</option>
                                        @foreach ($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->name_bn }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('business_district_id'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_district_id') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_upazila_thana">উপজেলা/থানা:-</label>
                                    <select id="business_upazila_id" name="business_upazila_id" class="form-select search_district">
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
                                    <label  class="form-label" for="business_union_id">ইউনিয়ন পরিষদের নাম:-</label>
                                    <select id="business_union_id" name="business_union_id" class="form-select search_district">
                                        <option value="">নির্বাচন করুন</option>
                                    </select>
                                    {{-- @if($errors->has('upazila_thana'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('upazila_thana') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_ward_id">ওয়ার্ড:-</label>
                                    <select name="business_ward_id" class="form-select search_district" id="business_ward_id">
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
                                    <label  class="form-label" for="business_village_name">গ্রাম/পাড়া </label>
                                    <input class="form-control @error('business_village_name') is-invalid @enderror"
                                    name="business_village_name" id="business_village_name" value="{{ old('business_village_name') }}"  type="text" placeholder="গ্রামের নাম">
                                    {{-- @if($errors->has('business_village_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_village_name') }}
                                    </small>
                                    @endif --}}
                                </div>

                                <div class="col-6">
                                    <label  class="form-label" for="business_street_nm">রাস্তা/ব্লক</label>
                                    <input class="form-control @error('business_street_nm') is-invalid @enderror"
                                    name="business_street_nm" id="business_street_nm" value="{{ old('business_street_nm') }}"  type="text" placeholder="রাস্তা/পাড়া/মহল্লা">
                                    @if($errors->has('business_street_nm'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_street_nm') }}
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
                                    <a class="p-2 bg-primary text-white" href="{{route(currentUser().'.tradefirstpart',Crypt::encrypt($trade->id))}}">
                                        পূর্ববর্তী
                                    </a>
                                  </div>
                                  <div class="col-sm-3 text-end">
                                    <button type="submit" class="p-1 bg-primary text-white">দাখিল করুন</button>
                                    <span class="btn or">or</span>
                                    <button type="reset" class="p-1 bg-primary text-white">রিসেট করুন</button>
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
