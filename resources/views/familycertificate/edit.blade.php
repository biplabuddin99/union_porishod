@extends('layout.app')
{{-- @section('pageTitle',trans('পারিবারিক সনদ আপডেট')) --}}

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
                                    <h4 style="padding-top: 5px;">পারিবারিক সনদ আপডেট করুন</h4>
                                </div>
                            </div>
                        </div>
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.family.update',encryptor('encrypt',$family->id))}}">
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
                                    <input class="form-control datepicker" name="warish_date" value="{{ old('holding_date',\Carbon\Carbon::parse($family->warish_date)->format('d-m-Y')) }}" id="warish_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="applicant_name"><b>আবেদনকারীর নাম</b></label>
                                    <input required class="form-control @error('applicant_name') is-invalid @enderror" type="text"
                                    name="applicant_name" value="{{ old('applicant_name',$family->applicant_name) }}" id="applicant_name" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('applicant_name'))
                                        <small class="d-block text-danger">{{ $errors->first('applicant_name') }}</small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="father_name"><b>পিতার নাম</b></label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                    name="father_name" value="{{ old('father_name',$family->father_name) }}" id="father_name" placeholder="পিতার নাম">
                                    @if($errors->has('father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="mother_name"><b>মাতার নাম</b></label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name',$family->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
                                    @if($errors->has('mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('mother_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="husband_wife"><b>স্বামী/স্ত্রীর নাম</b></label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife',$family->husband_wife) }}" id="husband_wife" placeholder="স্বামী/স্ত্রীর নাম">
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="birth_date"><b>জন্ম তারিখ</b></label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('holding_date',\Carbon\Carbon::parse($family->birth_date)->format('d-m-Y')) }}"  type="text" placeholder="দিন-মাস-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="voter_id_no"><b>জাতীয় পরিচয়পত্র নম্বর</b></label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$family->voter_id_no) }}" placeholder="ভোটার আইডি নং">
                                    @if($errors->has('voter_id_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_id_no') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="birth_registration_id"><b>ডিজিটাল জন্মনিবন্ধন নম্বর</b></label>
                                    <input class="form-control @error('birth_registration_id') is-invalid @enderror" type="text"
                                    name="birth_registration_id" value="{{ old('birth_registration_id',$family->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
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
                                        <option value="1"{{ old('gender', $family->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                        <option value="2" {{ old('gender',$family->gender)=="2"?"selected":"" }}>মহিলা</option>
                                        <option value="3" {{ old('gender',$family->gender)=="3"?"selected":"" }}>তৃতীয় লিঙ্গ</option>
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
                                        <option value="1" {{ old('religion', $family->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                        <option value="2" {{ old('religion', $family->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                        <option value="3" {{ old('religion', $family->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                        <option value="4" {{ old('religion', $family->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                        <option value="5" {{ old('religion', $family->religion)=="5" ? "selected":""}}>উপজাতি</option>
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
                                        <option value="1" {{ old('marital_status', $family->marital_status)=="1" ? "selected":""}}>বিবাহিত</option>
                                        <option value="2" {{ old('marital_status', $family->marital_status)=="2" ? "selected":""}}>অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="rel"><b>মুক্তিযোদ্ধা</b></label>
                                    <select name="freedom_fighter" class="form-select @error('freedom_fighter') is-invalid @enderror" required>
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('freedom_fighter', $family->freedom_fighter)=="1" ? "selected":""}}>বীর মুক্তিযোদ্ধা</option>
                                        <option value="2" {{ old('freedom_fighter', $family->freedom_fighter)=="2" ? "selected":""}}>বীরাঙ্গনা</option>
                                        <option value="3" {{ old('freedom_fighter', $family->freedom_fighter)=="3" ? "selected":""}}>নাই</option>
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
                                            <option value="{{$data->id}}" {{ old('edu_qual', $family->edu_qual)==$data->id ? "selected":""}}>{{$data->name}}</option>
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
                                            <option value="{{$data->id}}" {{ old('source_income', $family->source_income)==$data->id ? "selected":""}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="phone"><b>মোবাইল নম্বর</b></label>
                                    <input class="form-control @error('phone') is-invalid @enderror" required name="phone" id="phone" value="{{ old('phone',$family->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
                                    @if($errors->has('phone'))
                                        <small class="d-block text-danger">{{ $errors->first('phone') }}</small>
                                    @endif
                                </div>

                                <div class="col-6">
                                    <label  class="form-label" for="email"><b>ই-মেইল</b><small>(যদি থাকে)</small> </label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$family->email) }}" placeholder=".....@email.com">
                                </div>
                            </div>
                            {{--  পার্ট২  --}}
                            <div class="row m-2">
                                <div class="col-4">
                                    <label  class="form-label" for="name_head_family"><b>পরিবারের প্রধান ব্যাক্তির নাম</b></label>
                                    <input class="form-control @error('name_head_family') is-invalid @enderror"
                                    name="name_head_family" id="name_head_family" value="{{ old('name_head_family',$family->name_head_family) }}"  type="text" placeholder="পরিবারের প্রধান ব্যাক্তির নাম">
                                    @if($errors->has('name_head_family'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('name_head_family') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="comments_permanent_union"><b>উক্ত ইউনিয়নের</b></label>
                                    <input class="form-control @error('comments_permanent_union') is-invalid @enderror"
                                    name="comments_permanent_union" id="comments_permanent_union" value="{{ old('comments_permanent_union',$family->comments_permanent_union) }}"  type="text" placeholder="স্থায়ী বাসিন্দা">
                                    @if($errors->has('comments_permanent_union'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('comments_permanent_union') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="relationship_applicant"><b>আবেদনকারীর সাথে সম্পর্ক</b></label>
                                    <select name="relationship_applicant" class="form-select @error('relationship_applicant') is-invalid @enderror" required>
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('relationship_applicant', $family->relationship_applicant)=="1" ? "selected":""}}>বাবা</option>
                                        <option value="2" {{ old('relationship_applicant', $family->relationship_applicant)=="2" ? "selected":""}}>মা</option>
                                        {{--  <option value="3">ভাই</option>
                                        <option value="4">বোন</option>
                                        <option value="5">ছেলে</option>
                                        <option value="6">মেয়ে</option>
                                        <option value="7">অন্যান্য</option>  --}}
                                    </select>
                                    @if($errors->has('relationship_applicant'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('relationship_applicant') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male"><b>পরিবারের সদস্য সংখ্যা (পুরুষ)</b></label>
                                    <input type="number" class="form-control" name="num_male" id="num_male" value="{{ old('num_male',$family->num_male) }}" onkeyup="addNumbers()" placeholder="সদস্য সংখ্যা (পুরুষ) দিন">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>পরিবারের সদস্য সংখ্যা (মহিলা)</b></label>
                                    <input type="number" class="form-control" name="num_female" id="num_female" value="{{ old('num_female',$family->num_female) }}" onkeyup="addNumbers()" placeholder="সদস্য সংখ্যা (মহিলা) দিন">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>পরিবারের মোট সদস্য সংখ্যা </b></label>
                                    <input readonly type="number" class="form-control" id="num_total" value="{{ $family->num_female + $family->num_male }}" placeholder="মোট সদস্য পুরুষ + মহিলা">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male_vot"><b>পরিবারের ভোটার সংখ্যা (পুরুষ)</b></label>
                                    <input type="number" class="form-control" name="num_male_vot" id="num_male_vot" value="{{ old('num_male_vot',$family->num_male_vot) }}" onkeyup="num_fmembervot()" placeholder="ভোটার সংখ্যা (পুরুষ) দিন">
                                </div>
                                <div class="col-4">
                                    <label for="num_female_vot"><b>পরিবারের ভোটার সংখ্যা (মহিলা)</b></label>
                                    <input type="number" class="form-control" name="num_female_vot" id="num_female_vot" value="{{ old('num_female_vot',$family->num_female_vot) }}" onkeyup="num_fmembervot()" placeholder="ভোটার সংখ্যা (মহিলা) দিন">
                                </div>
                                <div class="col-4">
                                    <label ><b>পরিবারের মোট ভোটার  সংখ্যা</b> </label>
                                    <input readonly type="number" class="form-control" id="num_totalv" value="{{ $family->num_male_vot + $family->num_female_vot }}" placeholder="মোট ভোটার পুরুষ + মহিলা">
                                </div>
                            </div>
                            <div class="row m-3">
                                <h5>পারিবারিক আইন অনুযায়ী পরিবারের সদস্যদের বিবরণ সমূহঃ- </h5>
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
                                            @if ($family->family_children)
                                            @foreach ($family->family_children as $c)
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
                                                            <option value="2" {{ old('crelation', $c->ralation)=="2" ? "selected":""}}>ছেলে</option>
                                                            <option value="3" {{ old('crelation', $c->ralation)=="3" ? "selected":""}}>মেয়ে</option>
                                                            <option value="4" {{ old('crelation', $c->ralation)=="4" ? "selected":""}}>অন্যান্য</option>
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
                                        <tfoot>
                                            <tr>
                                                <th style="text-align:right;" colspan="6">
                                                    <input type='button' class='btn btn-primary' value='Add' onClick='add_row();'>
                                                    <input type='button' class='btn btn-danger' value='Remove' onClick='remove_row();'>
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                          </div>
                            <div class="row m-3">
                                <h5 class="text-center mt-2">পরিবারের স্থায়ী ঠিকানা সমূহঃ </h5>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="house_holding_number">বাড়ির হোল্ডিং নাম্বার</label>
                                    <input class="form-control @error('house_holding_number') is-invalid @enderror"
                                    name="house_holding_number" id="house_holding_number" value="{{ old('house_holding_number',$family->house_holding_number) }}"  type="text" placeholder="বাড়ির হোল্ডিং নাম্বার">
                                    @if($errors->has('house_holding_number'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_holding_number') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="street_nm">রাস্তা / ব্লক</label>
                                    <input class="form-control @error('street_nm') is-invalid @enderror"
                                    name="street_nm" id="street_nm" value="{{ old('street_nm',$family->street_nm) }}"  type="text" placeholder="রাস্তা / ব্লক">
                                    @if($errors->has('street_nm'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('street_nm') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="village_name">গ্রাম / পাড়া</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name',$family->village_name) }}"  type="text" placeholder="গ্রাম / পাড়া">
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="ward_id">সেক্টর / ওয়ার্ড</label>
                                    <select name="ward_id" class="form-select" id="ward_id">
                                        <option value="" selected="selected">সেক্টর / ওয়ার্ড নং</option>
                                        @forelse ($ward as $w)
                                        <option value="{{ $w->id }}" {{ $family->ward_id==$w->id ? "selected":"" }}>{{ $w->ward_name_bn }}</option>
                                        @empty
                                        <p>No Ward found</p>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="post_office">ডাকঘর</label>
                                    <input class="form-control @error('post_office') is-invalid @enderror"
                                    name="post_office" id="post_office" value="{{ old('post_office',$family->post_office) }}"  type="text" placeholder="ডাকঘর">
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
                                <h5>অতিরিক্ত সংযোজনঃ- </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">আবেদনকারীর জাতীয় পরিচয়পত্র কপি</label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="digital_birth_certificate">ডিজিটাল জন্ম নিবন্ধন সনদের কপি</label>
                                    <input class="form-control" type="file" name="digital_birth_certificate" id="digital_birth_certificate" value="{{ old('digital_birth_certificate') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                <div class="image-overlay">
                                    <label  class="form-label" for="image">আবেদনকারীর সদ্য তোলা রঙিন ছবি</label>
                                    <input type="file" name="image" value="" data-default-file="{{ asset('uploads/warishan') }}/{{ $family->image }}" class="form-control dropify">
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
@endsection
@push('scripts')
<script>
         function addNumbers() {
         var num_male = document.getElementById("num_male").value?parseFloat(document.getElementById("num_male").value):0;
         var num_female = document.getElementById("num_female").value?parseFloat(document.getElementById("num_female").value):0;
        // var daughters = document.getElementById("daughters").value?parseFloat(document.getElementById("daughters").value):0;
         var result = num_male + num_female;

         document.getElementById("num_total").value = result;
         repeatRows(result)
       }

      {{--  function repeatRows() {
        //const Total_warishan = document.getElementById('num_total');
        const tableElement = document.getElementById('table');

        // Clear existing rows
        while (tableElement.rows.length > 1) {
          tableElement.deleteRow(1);
        }

        // Repeat rows based on input value
        const repeatCount = document.getElementById("num_total").value;
        for (let is = 0; is < (repeatCount-1); is++) {
          const clonedRow = tableElement.rows[0].cloneNode(true);
          tableElement.appendChild(clonedRow);
          const serial=document.getElementsByClassName("smember");
          serial[is].innerHTML = is + 1;
        }
      }
      function num_fmembervot(){
        let nm=$('#num_male_vot').val()?parseFloat($('#num_male_vot').val()):0;
        let nf=$('#num_female_vot').val()?parseFloat($('#num_female_vot').val()):0;
        $('#num_totalv').val((nm+nf));
     }  --}}
</script>
<script>
	function add_row(){

		var row=`<tr>
                    <td style='text-align:center;'>`+(parseInt($("#account tbody tr").length) + 1)+`</td>\
                    <input type="hidden" name="id[]" value="{{$c->id}}">\
                    <td style='text-align:left;'>
                        <input type='text' name='cname[]' class='form-control' value='{{ $c->name }}' style='border:none;' maxlength='100' placeholder="নাম"/>
                    </td>\
                    <td style='text-align:left;'>
                        <select class='cls_debit form-control' name="crelation[]" style='border:none;'>
                            <option value="">সম্পর্ক</option>
                            <option value="1"  {{ old('crelation', $c->ralation)=="1" ? "selected":""}}>স্ত্রী</option>
                            <option value="2" {{ old('crelation', $c->ralation)=="2" ? "selected":""}}>ছেলে</option>
                            <option value="3" {{ old('crelation', $c->ralation)=="3" ? "selected":""}}>মেয়ে</option>
                            <option value="4" {{ old('crelation', $c->ralation)=="4" ? "selected":""}}>অন্যান্য</option>
                        </select>
                    </td>\
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
                </tr>`;
		$('#account tbody').append(row);
	}

	function remove_row(){
		$('#account tbody tr').last().remove();
	}
    </script>
@endpush
