@extends('layout.app')
{{-- @section('pageTitle',trans('হোল্ডিং আপডেট')) --}}

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
                                    <h4 style="padding-top: 5px;">ট্রেড লাইসেন্স আপডেট করুন</h4>
                                </div>
                            </div>
                        </div>
                        <form action="{{route(currentUser().'.trade.update',encryptor('encrypt',$trade->id))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="row m-2">
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div> --}}

                                <div class="col-sm-2 col-lg-2">
                                    <label  class="form-label" for="trade_date"><b>আবেদনের তারিখ</b> </label>
                                </div>
                                <div class="col-sm-2 col-lg-2 ms-0 ps-0">
                                    <input class="form-control datepicker" name="trade_date" value="{{ old('holding_date',\Carbon\Carbon::parse($trade->trade_date)->format('d-m-Y')) }}" id="trade_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="head_institution"><b>প্রতিষ্ঠানের প্রধানের নাম</b></label>
                                    <input required class="form-control @error('head_institution') is-invalid @enderror" type="text"
                                    name="head_institution" value="{{ old('head_institution',$trade->head_institution) }}" id="head_institution" placeholder="প্রতিষ্ঠানের প্রধানের নাম">
                                    @if($errors->has('head_institution'))
                                        <small class="d-block text-danger">{{ $errors->first('head_institution') }}</small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="father_name"><b>পিতার নাম</b></label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                    name="father_name" value="{{ old('father_name',$trade->father_name) }}" id="father_name" placeholder="পিতার নাম">
                                    @if($errors->has('father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="mother_name"><b>মাতার নাম</b></label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name',$trade->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
                                    @if($errors->has('mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('mother_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="husband_wife"><b>স্বামী/স্ত্রীর নাম</b></label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife',$trade->husband_wife) }}" id="husband_wife" placeholder="স্বামী/স্ত্রীর নাম">
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="birth_date"><b>জন্ম তারিখ</b></label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date',\Carbon\Carbon::parse($trade->birth_date)->format('d-m-Y')) }}"  type="text" placeholder="দিন-মাস-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="voter_id_no"><b>জাতীয় পরিচয়পত্র নম্বর</b></label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$trade->voter_id_no) }}" placeholder="ভোটার আইডি নং">
                                    @if($errors->has('voter_id_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_id_no') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="birth_registration_id"><b>ডিজিটাল জন্মনিবন্ধন নম্বর</b></label>
                                    <input class="form-control @error('birth_registration_id') is-invalid @enderror" type="text"
                                    name="birth_registration_id" value="{{ old('birth_registration_id',$trade->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
                                    @if($errors->has('birth_registration_id'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_registration_id') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label class="form-label" for="gender1"><b>লিঙ্গ</b></label>
                                    <select name="gender" id="gender1" class="form-select @error('gender') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('gender', $trade->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                        <option value="2" {{ old('gender', $trade->gender)=="2" ? "selected":""}}>মহিলা</option>
                                        <option value="3" {{ old('gender', $trade->gender)=="3" ? "selected":""}}>তৃতীয় লিঙ্গ</option>
                                    </select>
                                    @if($errors->has('gender'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('gender') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="rel"><b>ধর্ম</b></label>
                                    <select name="religion" class="form-select @error('religion') is-invalid @enderror" required>
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('religion', $trade->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                        <option value="2" {{ old('religion', $trade->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                        <option value="3" {{ old('religion', $trade->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                        <option value="4" {{ old('religion', $trade->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                        <option value="5" {{ old('religion', $trade->religion)=="5" ? "selected":""}}>উপজাতি</option>
                                    </select>
                                    @if($errors->has('religion'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('religion') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="bank_acc"><b>ব্যাংক একাউন্ট</b></label>
                                    <select required name="bank_acc" id="bank_acc" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1"{{ old('bank_acc', $trade->bank_acc)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2"{{ old('bank_acc', $trade->bank_acc)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-12">
                                    <label  class="form-label" for="mobile_bank"><b>মোবাইল ব্যাংক</b></label>
                                    <div class="row m-2">
                                        @forelse(\App\Models\MobileBank::orderBy('created_at')->get() as $mb)
                                            <div class=" col-sm-3 col-lg-2">
                                                <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank{{$mb->id}}" value="{{$mb->id}}"  @if(in_array($mb->id, $Mobile_bank)) checked @endif/>
                                                <label  class="form-label" for="mobile_bank{{$mb->id}}"> {{$mb->name}}</label>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="phone"><b>মোবাইল নম্বর</b></label>
                                    <input class="form-control @error('phone') is-invalid @enderror" required name="phone" id="phone" value="{{ old('phone',$trade->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
                                    @if($errors->has('phone'))
                                        <small class="d-block text-danger">{{ $errors->first('phone') }}</small>
                                    @endif
                                </div>

                                <div class="col-6">
                                    <label  class="form-label" for="email"><b>ই-মেইল</b><small>(যদি থাকে)</small> </label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$trade->email) }}" placeholder=".....@email.com">
                                </div>
                            </div>
                            <div class="row m-3">
                                <h5 class="text-center theme-text-color" style="padding-top: 5px;">আবেদনকারীর স্থায়ী ঠিকানা </h5>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="house_holding_number">বাড়ির হোল্ডিং নাম্বার</label>
                                    <input class="form-control @error('house_holding_number') is-invalid @enderror"
                                    name="house_holding_number" id="house_holding_number" value="{{ old('house_holding_number',$trade->house_holding_number) }}"  type="text" placeholder="বাড়ির হোল্ডিং নাম্বার">
                                    @if($errors->has('house_holding_number'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_holding_number') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="street_nm">রাস্তা / ব্লক</label>
                                    <input class="form-control @error('street_nm') is-invalid @enderror"
                                    name="street_nm" id="street_nm" value="{{ old('street_nm',$trade->street_nm) }}"  type="text" placeholder="রাস্তা / ব্লক">
                                    @if($errors->has('street_nm'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('street_nm') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="village_name">গ্রাম / পাড়া</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name',$trade->village_name) }}"  type="text" placeholder="গ্রাম / পাড়া">
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="ward_id">সেক্টর / ওয়ার্ড</label>
                                    <select name="ward_id" class="form-select" id="ward_id">
                                        <option value="" selected="selected">সেক্টর / ওয়ার্ড নং</option>
                                        @forelse ($perward as $w)
                                        <option value="{{ $w->id }}" {{$trade->ward_id == $w->id ? 'selected' : ''}}>{{ $w->ward_name_bn }}</option>
                                        @empty
                                        <p>No Ward found</p>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="post_office">ডাকঘর</label>
                                    <input class="form-control @error('post_office') is-invalid @enderror"
                                    name="post_office" id="post_office" value="{{ old('post_office',$trade->post_office) }}"  type="text" placeholder="ডাকঘর">
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
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="business_name">ব্যবসা প্রতিষ্ঠানের নাম</label>
                                    <input class="form-control @error('business_name') is-invalid @enderror"
                                    name="business_name" id="business_name" value="{{ old('business_name',$trade->business_name) }}"  type="text" placeholder="ব্যবসা প্রতিষ্ঠানের নাম">
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
                                        <option value="1" {{ old('type_ownership_organization', $trade->type_ownership_organization)=="1" ? "selected":""}}>একক</option>
                                        <option value="2" {{ old('type_ownership_organization', $trade->type_ownership_organization)=="2" ? "selected":""}}>যৌথ</option>
                                        <option value="3" {{ old('type_ownership_organization', $trade->type_ownership_organization)=="3" ? "selected":""}}>কোম্পানি</option>
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
                                    name="e_tin_number" id="e_tin_number" value="{{ old('e_tin_number',$trade->e_tin_number) }}"  type="text" placeholder="ই-টিন নম্বর(যদি থাকে দিন)">
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
                                        <option value="{{$data->id}}" {{ old('business_organization_type',$trade->business_organization_type == $data->id ? 'selected' : '')}}>{{$data->name}}</option>
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
                                    name="estimated_capital_business" id="estimated_capital_business" value="{{ old('estimated_capital_business',$trade->estimated_capital_business) }}"  type="text" placeholder="ব্যবসার আনুমানিক মূলধন">
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
                                            <option value="{{$data->id}}" {{ old('business_type',$trade->business_type == $data->id ? 'selected' : '')}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @if($errors->has('business_type'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('business_type') }}
                                    </small>
                                    @endif
                                </div>
                                {{--  <div class="col-6">
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
                                </div>  --}}
                            </div>
                            <div class="row m-3">
                                <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকৃত ব্যবসায়িক ঠিকানা সমূহঃ </h4>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="institution_holding_number">ব্যাবসা/প্রতিষ্ঠানের হেল্ডিং নম্বর:-</label>
                                    <input class="form-control @error('institution_holding_number') is-invalid @enderror"
                                    name="institution_holding_number" id="institution_holding_number" value="{{ old('institution_holding_number',$trade->institution_holding_number) }}"  type="text" placeholder="ব্যাবসা/প্রতিষ্ঠানের হেল্ডিং নম্বর">
                                    @if($errors->has('institution_holding_number'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('institution_holding_number') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_post_office">ডাকঘর:-</label>
                                    <input class="form-control @error('business_post_office') is-invalid @enderror"
                                    name="business_post_office" id="business_post_office" value="{{ old('business_post_office',$trade->business_post_office) }}"  type="text" placeholder="ডাকঘর">
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
                                        @foreach ($bdistricts as $bd)
                                        <option value="{{ $bd->id }}" {{$trade->business_district_id == $bd->id ? 'selected' : ''}}>{{ $bd->name_bn }}</option>
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
                                        @foreach ($bupazilas as $bup)
                                        <option value="{{ $bup->id }}" {{$trade->business_upazila_id == $bup->id ? 'selected' : ''}}>{{ $bup->name_bn }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('upazila_thana'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('upazila_thana') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="business_union_id">ইউনিয়ন পরিষদের নাম:-</label>
                                    <select id="business_union_id" name="business_union_id" class="form-select search_district">
                                        @foreach ($bunions as $bun)
                                        <option value="{{ $bun->id }}" {{$trade->business_union_id == $bun->id ? 'selected' : ''}}>{{ $bun->name_bn }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('upazila_thana'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('upazila_thana') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="business_ward_id">ওয়ার্ড:-</label>
                                    <select name="business_ward_id" class="form-select search_district" id="business_ward_id">
                                        @forelse ($bwards as $w)
                                        <option value="{{ $w->id }}" {{$trade->business_ward_id == $w->id ? 'selected' : ''}}>{{ $w->ward_name_bn }}</option>
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
                                    name="business_village_name" id="business_village_name" value="{{ old('business_village_name',$trade->business_village_name) }}"  type="text" placeholder="গ্রামের নাম">
                                    @if($errors->has('business_village_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('business_village_name') }}
                                    </small>
                                    @endif
                                </div>

                                <div class="col-6">
                                    <label  class="form-label" for="business_street_nm">রাস্তা/ব্লক</label>
                                    <input class="form-control @error('business_street_nm') is-invalid @enderror"
                                    name="business_street_nm" id="business_street_nm" value="{{ old('business_street_nm',$trade->business_street_nm) }}"  type="text" placeholder="রাস্তা/পাড়া/মহল্লা">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // District wise Upazilla Change
    $(document).ready(function() {
        $('.search_district_eid').select2();
        $('#district_id').on('change', function() {
            var district_id = $(this).val();
            console.log();
            if (district_id) {
                $.ajax({
                    url: "{{ url('/upzilla/ajax') }}/" + district_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // console.log(data)
                        var d = $('#upazila_id').empty();
                        $.each(data, function(key, value) {
                            $('#upazila_id').append('<option value="' + value.id + '">' + value.name_bn + '</option>');
                        });
                    },
                });
            }
        });
    });
</script>
@endsection
@push('scripts')
    <script>
        function num_fmember(){
            let nm=$('#num_male').val()?parseFloat($('#num_male').val()):0;
            let nf=$('#num_female').val()?parseFloat($('#num_female').val()):0;
            $('#num_total').val((nm+nf));
        }
        function num_fmembervot(){
            let nm=$('#num_male_vot').val()?parseFloat($('#num_male_vot').val()):0;
            let nf=$('#num_female_vot').val()?parseFloat($('#num_female_vot').val()):0;
            $('#num_totalv').val((nm+nf));
        }
    </script>
@endpush
