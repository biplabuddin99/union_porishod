@extends('layout.app')
{{-- @section('pageTitle',trans('ওয়ারিশ আপডেট')) --}}

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
                                    <h4 style="padding-top: 5px;">ওয়ারিশ আপডেট করুন</h4>
                                </div>
                            </div>
                        </div>
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.warishan.update',encryptor('encrypt',$warisan->id))}}">
                            @csrf
                            @method('patch')
                            <div class="row m-2">
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div> --}}

                                <div class="col-sm-2 col-lg-2">
                                    <label  class="form-label" for="warish_date"><b>আবেদনের তারিখ</b> </label>
                                </div>
                                <div class="col-sm-2 col-lg-2 ms-0 ps-0">
                                    <input class="form-control datepicker" name="warish_date" value="{{ old('warish_date',\Carbon\Carbon::parse($warisan->warish_date)->format('d-m-Y')) }}" id="warish_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="applicant_name"><b>আবেদনকারীর নাম</b></label>
                                    <input required class="form-control @error('applicant_name') is-invalid @enderror" type="text"
                                    name="applicant_name" value="{{ old('applicant_name',$warisan->applicant_name) }}" id="applicant_name" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('applicant_name'))
                                        <small class="d-block text-danger">{{ $errors->first('applicant_name') }}</small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="father_name"><b>পিতার নাম</b></label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                    name="father_name" value="{{ old('father_name',$warisan->father_name) }}" id="father_name" placeholder="পিতার নাম">
                                    @if($errors->has('father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="mother_name"><b>মাতার নাম</b></label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name',$warisan->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
                                    @if($errors->has('mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('mother_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="husband_wife"><b>স্বামী/স্ত্রীর নাম</b></label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife',$warisan->husband_wife) }}" id="husband_wife" placeholder="স্বামী/স্ত্রীর নাম">
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="birth_date"><b>জন্ম তারিখ</b></label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('holding_date',\Carbon\Carbon::parse($warisan->birth_date)->format('d-m-Y')) }}"  type="text" placeholder="দিন-মাস-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="voter_id_no"><b>জাতীয় পরিচয়পত্র নম্বর</b></label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$warisan->voter_id_no) }}" placeholder="ভোটার আইডি নং">
                                    @if($errors->has('voter_id_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_id_no') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="birth_registration_id"><b>ডিজিটাল জন্মনিবন্ধন নম্বর</b></label>
                                    <input class="form-control @error('birth_registration_id') is-invalid @enderror" type="text"
                                    name="birth_registration_id" value="{{ old('birth_registration_id',$warisan->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
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
                                        <option value="1"{{ old('gender', $warisan->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                        <option value="2" {{ old('gender',$warisan->gender)=="2"?"selected":"" }}>মহিলা</option>
                                        <option value="3" {{ old('gender',$warisan->gender)=="3"?"selected":"" }}>তৃতীয় লিঙ্গ</option>
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
                                        <option value="1" {{ old('religion', $warisan->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                        <option value="2" {{ old('religion', $warisan->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                        <option value="3" {{ old('religion', $warisan->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                        <option value="4" {{ old('religion', $warisan->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                        <option value="5" {{ old('religion', $warisan->religion)=="5" ? "selected":""}}>উপজাতি</option>
                                    </select>
                                    @if($errors->has('religion'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('religion') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label class="form-label" for="marit" for="cars"><b>বৈবাহিক অবস্থা</b></label>
                                    <select required name="marital_status" id="marit" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('marital_status', $warisan->marital_status)=="1" ? "selected":""}}>বিবাহিত</option>
                                        <option value="2" {{ old('marital_status', $warisan->marital_status)=="2" ? "selected":""}}>অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="rel"><b>মুক্তিযোদ্ধা</b></label>
                                    <select name="freedom_fighter" class="form-select @error('freedom_fighter') is-invalid @enderror" required>
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('freedom_fighter', $warisan->freedom_fighter)=="1" ? "selected":""}}>বীর মুক্তিযোদ্ধা</option>
                                        <option value="2" {{ old('freedom_fighter', $warisan->freedom_fighter)=="2" ? "selected":""}}>বীরাঙ্গনা</option>
                                        <option value="3" {{ old('freedom_fighter', $warisan->freedom_fighter)=="3" ? "selected":""}}>নাই</option>
                                    </select>
                                    @if($errors->has('freedom_fighter'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('freedom_fighter') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="edu_qual0"><b>শিক্ষাগত যোগ্যতা</b></label>
                                    <select required name="edu_qual" class="form-select @error('edu_qual') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse($edu_q as $data)
                                            <option value="{{$data->id}}" {{ old('edu_qual', $warisan->edu_qual)==$data->id ? "selected":""}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="source_inc"><b>পেশা বা কর্ম</b></label>
                                    <select required name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse($profession as $data)
                                            <option value="{{$data->id}}" {{ old('source_income', $warisan->source_income)==$data->id ? "selected":""}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="phone"><b>মোবাইল নম্বর</b></label>
                                    <input class="form-control @error('phone') is-invalid @enderror" required name="phone" id="phone" value="{{ old('phone',$warisan->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
                                    @if($errors->has('phone'))
                                        <small class="d-block text-danger">{{ $errors->first('phone') }}</small>
                                    @endif
                                </div>

                                <div class="col-6">
                                    <label  class="form-label" for="email"><b>ই-মেইল</b><small>(যদি থাকে)</small> </label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$warisan->email) }}" placeholder=".....@email.com">
                                </div>
                            </div>

                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male"><b>পরিবারের সদস্য সংখ্যা (পুরুষ)</b></label>
                                    <input type="number" class="form-control" value="{{ old('num_male',$warisan->num_male) }}" name="num_male" id="num_male" onkeyup="num_fmember()">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>পরিবারের সদস্য সংখ্যা (মহিলা)</b></label>
                                    <input type="number" class="form-control"  value="{{ old('num_female',$warisan->num_female) }}" name="num_female" id="num_female" onkeyup="num_fmember()">
                                </div>
                                <div class="col-4">
                                    <label for="num_total"><b>পরিবারের মোট সদস্য সংখ্যা </b></label>
                                    <input type="number" value="{{ old('num_total',$warisan->num_male+$warisan->num_female) }}" class="form-control" id="num_total">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="warishan_person_name"><b>ওয়ারিশান ব্যাক্তির নাম</b></label>
                                    <input class="form-control @error('warishan_person_name') is-invalid @enderror"
                                    name="warishan_person_name" id="warishan_person_name" value="{{ old('warishan_person_name',$warisan->warishan_person_name) }}"  type="text" placeholder="ওয়ারিশান ব্যাক্তির নাম">
                                    @if($errors->has('warishan_person_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('warishan_person_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="warisan_father_name"><b>পিতার নাম</b></label>
                                    <input class="form-control @error('warisan_father_name') is-invalid @enderror"
                                    name="warisan_father_name" id="warisan_father_name" value="{{ old('warisan_father_name',$warisan->warisan_father_name) }}"  type="text" placeholder="পিতা/স্বামীর নাম">
                                    @if($errors->has('warisan_father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('warisan_father_name') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="warishan_mother_name"><b>মাতার নাম</b></label>
                                    <input class="form-control"
                                    name="warishan_mother_name" id="warishan_mother_name" value="{{ old('warishan_mother_name',$warisan->warishan_mother_name) }}"  type="text" placeholder="মাতার নাম">
                                    @if($errors->has('warishan_mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('warishan_mother_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="warisan_husband_wife"><b>স্বামী/স্ত্রীর নাম</b></label>
                                    <input class="form-control @error('warisan_husband_wife') is-invalid @enderror"
                                    name="warisan_husband_wife" id="warisan_husband_wife" value="{{ old('warisan_husband_wife',$warisan->warisan_husband_wife) }}"  type="text" placeholder="পিতা/স্বামীর নাম">
                                    @if($errors->has('warisan_husband_wife'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('warisan_husband_wife') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="date_death_warishan"><b>ওয়ারিশাান ব্যাক্তির মৃত্যু তারিখ</b></label>
                                    <input class="form-control datepicker" name="date_death_warishan" value="{{ old('date_death_warishan',\Carbon\Carbon::parse($warisan->date_death_warishan)->format('d-m-Y')) }}" id="date_death_warishan" type="text" placeholder="যদি মারা যায়">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="death_certificate_no"><b>মৃত্যু সনদ নম্বর</b></label>
                                    <input class="form-control" name="death_certificate_no" value="{{ old('death_certificate_no',$warisan->death_certificate_no) }}" id="death_certificate_no" type="number" placeholder="মৃত্যু সনদ নম্বর">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="total_warishan_members"><b>উক্তব্যাক্তির মোট ওয়ারিশ সদস্য</b></label>
                                    <input class="form-control @error('total_warishan_members') is-invalid @enderror" onkeyup="repeatRows()"
                                    name="total_warishan_members" id="total_warishan" value="{{ old('total_warishan_members',$warisan->total_warishan_members) }}"  type="number" placeholder="মোট ওয়ারিশ সদস্য সংখ্যা">
                                    @if($errors->has('total_warishan_members'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('total_warishan_members') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                              <div class="row m-3">
                                  <h4 class="" style="color: rgb(13, 134, 29); padding-top: 5px;">ওয়ারিশ আইন অনুযায়ী ওয়ারিশান সদস্যদের বিবরণ সমূহঃ- </h4>
                              </div>
                              <div class="row m-3">
                                    <div class="col-12 ">
                                        <table class="table table-hover mt-4 table-bordered" id="account">
                                            <thead>
                                                <tr>
                                                    <th>সদস্য নং</th>
                                                    <th>ওয়ারিশানদের নাম</th>
                                                    <th>সম্পর্ক</th>
                                                    <th>জন্ম তারিখ</th>
                                                    <th>ভোটার আইডি</th>
                                                    <th>মন্তব্য</th>
                                                </tr>
                                            </thead>
                                            <tbody id="table">
                                                @if ($warisan->warisan_children)
                                                @foreach ($warisan->warisan_children as $c)
                                                    <tr>
                                                        <td class="smember" style='text-align:center;'>{{++$loop->index}}</td>
                                                        <input type="hidden" name="id[]" value="{{$c->id}}">
                                                        <td style='text-align:left;'>
                                                            <input type='text' name='cname[]' class='form-control' value='{{ $c->name }}' style='border:none;' maxlength='100' placeholder="নাম"/>
                                                        </td>
                                                        <td style='text-align:left;'>
                                                            <select class='cls_debit form-control' name="crelation[]" style='border:none;'>
                                                                <option value="">সম্পর্ক</option>
                                                                <option value="1"  {{ old('crelation', $c->ralation)=="1" ? "selected":""}}>স্ত্রী</option>
                                                                <option value="2" {{ old('crelation', $c->relation)=="2" ? "selected":""}}>ছেলে</option>
                                                                <option value="3" {{ old('crelation', $c->relation)=="3" ? "selected":""}}>মেয়ে</option>
                                                                <option value="4" {{ old('crelation', $c->relation)=="4" ? "selected":""}}>অন্যান্য</option>
                                                            </select>
                                                        </td>
                                                        <td style='text-align:left;'>
                                                            <input class="form-control" name="cbirth_date[]" style='border:none;' value="{{ old('cbirth_date',$c->birth_date) }}" id="cbirth_date" type="date" placeholder="মন্তব্য">
                                                        </td>
                                                        <td style='text-align:left;'>
                                                            <input class="form-control" name="cnid[]" id="cnid" style='border:none;' value="{{ old('cnid',$c->cnid) }}"  type="text" placeholder="ভোটার আইডি">
                                                        </td>
                                                        <td style='text-align:left;'>
                                                            <select class='cls_debit form-control' name="ccomments[]" style='border:none;'>
                                                                <option value="">সম্পর্ক</option>
                                                                <option value="1"  {{ old('ccomments', $c->ccomments)=="1" ? "selected":""}}>জীবিত</option>
                                                                <option value="2" {{ old('ccomments', $c->ccomments)=="2" ? "selected":""}}>মৃত</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                              </div>
                              <div class="row m-3">
                                  <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকৃত ওয়ারিশ ব্যক্তির স্থায়ী ঠিকানা সমূহঃ </h4>
                              </div>
                              <div class="row m-2">
                                    <div class="col-6 mb-2">
                                        <label  class="form-label" for="house_holding_number">বাড়ির হোল্ডিং নাম্বার</label>
                                        <input class="form-control @error('house_holding_number') is-invalid @enderror"
                                        name="house_holding_number" id="house_holding_number" value="{{ old('house_holding_number',$warisan->house_holding_number) }}"  type="text" placeholder="বাড়ির হোল্ডিং নাম্বার">
                                        @if($errors->has('house_holding_number'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('house_holding_number') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label  class="form-label" for="street_nm">রাস্তা / ব্লক</label>
                                        <input class="form-control @error('street_nm') is-invalid @enderror"
                                        name="street_nm" id="street_nm" value="{{ old('street_nm',$warisan->street_nm) }}"  type="text" placeholder="রাস্তা / ব্লক">
                                        @if($errors->has('street_nm'))
                                        <small class="d-block text-danger">
                                            {{ $errors->first('street_nm') }}
                                        </small>
                                        @endif
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label  class="form-label" for="village_name">গ্রাম / পাড়া</label>
                                        <input class="form-control @error('village_name') is-invalid @enderror"
                                        name="village_name" id="village_name" value="{{ old('village_name',$warisan->village_name) }}"  type="text" placeholder="গ্রাম / পাড়া">
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label  class="form-label" for="ward_id">সেক্টর / ওয়ার্ড</label>
                                        <select name="ward_id" class="form-select" id="ward_id">
                                            <option value="" selected="selected">সেক্টর / ওয়ার্ড নং</option>
                                            @forelse ($ward as $w)
                                            <option value="{{ $w->id }}" {{ old('ward_id', $warisan->ward_id)==$w->id ? "selected":""}}>{{ $w->ward_name_bn }}</option>
                                            @empty
                                            <p>No Ward found</p>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label  class="form-label" for="post_office">ডাকঘর</label>
                                        <input class="form-control @error('post_office') is-invalid @enderror"
                                        name="post_office" id="post_office" value="{{ old('post_office',$warisan->post_office) }}"  type="text" placeholder="ডাকঘর">
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
                                  <h5 class="" style="color: rgb(13, 134, 29); padding-top: 5px;">অতিরিক্ত সংযোজনঃ- </h5>
                              </div>
                              <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">আবেদনকারীর জাতীয় পরিচয়পত্র কপি :-</label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="image_death_certificate">ওয়ারিশান ব্যাক্তির মৃত্যু নিবন্ধন সনদের কপি :-</label>
                                    <input class="form-control" type="file" name="image_death_certificate" id="image_death_certificate" value="{{ old('image_death_certificate') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                <div class="image-overlay">
                                    <label  class="form-label" for="image">আবেদনকারীর সদ্য তোলা রঙিন ছবি</label>
                                    <input type="file" name="image" value="" data-default-file="{{ asset('uploads/warishan') }}/{{ $warisan->image }}" class="form-control dropify">
                                </div>
                            </div>
                            <div class="form-actions mt-2">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" class="btn btn-primary" name="submit" value="আপডেট">
                                        {{--  <input type="button" class="btn default cancel btn-info" value="বাতিল">  --}}
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
