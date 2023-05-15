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
                                    <h5 style="padding-top: 5px;">ট্রেডলাইসেন্স আবেদন ফরম</h5>
                                </div>
                            </div>
                        </div>
                        <form action="{{route(currentUser().'.trade.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
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
                                        @forelse ($wards as $w)
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
                            <div class="row m-3">
                                <div class="col-2 offset-5">
                                    <button class="text-center bg-primary text-white">পরবর্তী</button>
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
