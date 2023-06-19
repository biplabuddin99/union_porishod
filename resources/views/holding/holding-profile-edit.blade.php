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
                                    <h4 style="padding-top: 5px;">হোল্ডিং প্রোপাইল আপডেট করুন</h4>
                                </div>
                            </div>
                        </div>
                        <form action="{{route(currentUser().'.hold_profileupdate',encryptor('encrypt',$hold->id))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{--  @method('post')  --}}
                            <div class="row mt-2">
                                <div class="col-sm-2 col-lg-2">
                                    <label  class="form-label" for="no">ফরম নং - </label>
                                </div>
                                <div class="col-sm-4 col-lg-4 ms-0 ps-0">
                                    <input readonly class="form-control" value="{{ $hold->id }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div>

                                <div class="col-sm-2 col-lg-2">
                                    <label  class="form-label" for="holding_date">তারিখ </label>
                                </div>
                                <div class="col-sm-4 col-lg-4 ms-0 ps-0">
                                    <input class="form-control datepicker" name="holding_date" value="{{ old('holding_date',\Carbon\Carbon::parse($hold->holding_date)->format('d-m-Y')) }}" id="holding_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="head_household">বাড়ী প্রধানের নাম  </label>
                                    <input class="form-control @error('head_household') is-invalid @enderror" type="text"
                                    name="head_household" value="{{ old('head_household',$hold->head_household) }}" id="head_household" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('head_household'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('head_household') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="father_name">পিতার নাম </label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                    name="father_name" value="{{ old('father_name',$hold->father_name) }}" id="father_name" placeholder="পিতার নাম">
                                    @if($errors->has('father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="mother_name">মাতার নাম </label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name',$hold->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
                                    @if($errors->has('mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('mother_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="husband_wife">স্বামী/স্ত্রীর নাম  </label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife',$hold->husband_wife) }}" id="husband_wife" value="{{ old('') }}" placeholder="স্বামী/স্ত্রীর নাম">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="birth_date">জন্ম তারিখ </label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date',\Carbon\Carbon::parse($hold->birth_date)->format('d-m-Y')) }}"  type="text" placeholder="মাস-দিন-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="gender1" for="cars">লিঙ্গ </label>
                                    <select name="gender" id="gender1" class="form-select @error('gender') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('gender', $hold->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                        <option value="2" {{ old('gender', $hold->gender)=="2" ? "selected":""}}>মহিলা</option>
                                        <option value="3" {{ old('gender', $hold->gender)=="3" ? "selected":""}}>তৃতীয় লিঙ্গ</option>
                                    </select>
                                    @if($errors->has('gender'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('gender') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="rel">মুক্তিযোদ্ধা </label>
                                    <select name="freedom_fighter" class="form-select @error('freedom_fighter') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('freedom_fighter', $hold->freedom_fighter)=="1" ? "selected":""}}>বীর মুক্তিযোদ্ধা</option>
                                        <option value="2" {{ old('freedom_fighter', $hold->freedom_fighter)=="2" ? "selected":""}}>বীরাঙ্গনা</option>
                                        <option value="3" {{ old('freedom_fighter', $hold->freedom_fighter)=="3" ? "selected":""}}>নাই</option>
                                    </select>
                                    @if($errors->has('freedom_fighter'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('freedom_fighter') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="voter_id_no">জাতীয় পরিচয়পত্র নম্বর</label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$hold->voter_id_no) }}" placeholder="ভোটার আইডি নং">
                                    @if($errors->has('voter_id_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_id_no') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="birth_registration_id">ডিজিটাল জন্মনিবন্ধন নম্বর</label>
                                    <input class="form-control @error('birth_registration_id') is-invalid @enderror" type="text"
                                    name="birth_registration_id" value="{{ old('birth_registration_id',$hold->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্ম নিবন্ধন আইডি">
                                    @if($errors->has('birth_registration_id'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_registration_id') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="rel">ধর্ম </label>
                                    <select name="religion" class="form-select @error('religion') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('religion', $hold->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                        <option value="2" {{ old('religion', $hold->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                        <option value="3" {{ old('religion', $hold->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                        <option value="4" {{ old('religion', $hold->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                        <option value="5" {{ old('religion', $hold->religion)=="5" ? "selected":""}}>উপজাতি</option>
                                    </select>
                                    @if($errors->has('religion'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('religion') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="phone">মোবাইল নম্বর </label>
                                    <input class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" id="phone" value="{{ old('phone',$hold->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
                                    @if($errors->has('phone'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('phone') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="edu_qual0">শিক্ষাগত যোগ্যতা </label>
                                    <select name="edu_qual" class="form-select @error('edu_qual') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse(\App\Models\EducationalQualification::orderBy('created_at')->get() as $data)
                                            <option value="{{$data->id}}" {{ old('edu_qual', $hold->edu_qual)==$data->id ? "selected":""}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="email">ই-মেইল <small>(যদি থাকে)</small> </label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$hold->email) }}" placeholder=".....@mail.com">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="source_inc">পেশা বা কর্ম </label>
                                    <select name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse(\App\Models\Profession::orderBy('created_at')->get() as $data)
                                            <option value="{{$data->id}}" {{ old('source_income', $hold->source_income)==$data->id ? "selected":""}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="marit" for="cars">বৈবাহিক অবস্থা  </label>
                                    <select name="marital_status" id="marit" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('marital_status', $hold->marital_status)=="1" ? "selected":""}}>বিবাহিত</option>
                                        <option value="2" {{ old('marital_status', $hold->marital_status)=="2" ? "selected":""}}>অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="internet" for="cars">ইন্টারনেট ব্যবহার </label>
                                    <select name="internet_connection" id="internet" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('internet_connection', $hold->internet_connection)=="1" ? "selected":""}}>হ্যাঁ</option>
                                        <option value="2" {{ old('internet_connection', $hold->internet_connection)=="2" ? "selected":""}}>না</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="tube_well">নলকূপ  </label>
                                    <select name="tube_well" id="tube_well" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1"{{ old('tube_well', $hold->tube_well)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2"{{ old('tube_well', $hold->tube_well)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="disline_connection">ডিসলাইন সংযোগ </label>
                                    <select name="disline_connection" id="disline_connection" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('disline_connection', $hold->disline_connection)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('disline_connection', $hold->disline_connection)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="paved_bathroom">বাথরুম</label>
                                    <select name="paved_bathroom" id="paved_bathroom" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('paved_bathroom', $hold->paved_bathroom)=="1" ? "selected":""}}>কাঁচা</option>
                                        <option value="2" {{ old('paved_bathroom', $hold->paved_bathroom)=="2" ? "selected":""}}>পাকা</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="bank_acc"><b>ব্যাংক একাউন্ট</b></label>
                                    <select required name="bank_acc" id="bank_acc" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1"{{ old('bank_acc', $hold->bank_acc)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2"{{ old('bank_acc', $hold->bank_acc)=="2" ? "selected":""}}>নাই</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row border border-2 m-2 p-3">
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
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for=""><b>ডিজিটাল ডিভাইস</b></label>
                                <div class="row m-2">
                                    @forelse(\App\Models\DigitalDevice::orderBy('created_at')->get() as $dd)
                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices{{$dd->id}}" value="{{$dd->id}}" @if(in_array($dd->id, $Digital_devices)) checked @endif/>
                                        <label  class="form-label" for="digital_devices{{$dd->id}}"> {{$dd->name}}</label>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>

                            </div>
                            <div class="border border-2 m-2 p-3">
                                <div class="row m-2">
                                    <label  class="form-label" for="government_facilities">সরকারি সুবিধা </label>
                                    @forelse(\App\Models\GovernmentFacility::orderBy('created_at')->get() as $dd)
                                        <div class="col-2">
                                            <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities{{$dd->id}}" value="{{$dd->id}}" @if(in_array($dd->id, $Govt_fac)) checked @endif/>
                                            <label  class="form-label" for="government_facilities{{$dd->id}}">{{$dd->name}}</label>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male"><b>পরিবারের সদস্য সংখ্যা (পুরুষ)</b></label>
                                    <input type="number" class="form-control" name="num_male" id="num_male" onkeyup="num_fmember()" value="{{ old('num_male',$hold->num_male) }}">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>পরিবারের সদস্য সংখ্যা (মহিলা)</b></label>
                                    <input type="number" class="form-control" name="num_female" id="num_female" onkeyup="num_fmember()" value="{{ old('num_female',$hold->num_female) }}">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>পরিবারের মোট সদস্য সংখ্যা </b></label>
                                    <input type="number" class="form-control" id="num_total" value="{{ (old('num_male',$hold->num_male) + old('num_female',$hold->num_female)) }}">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male_vot"><b>পরিবারের ভোটার সংখ্যা (পুরুষ)</b></label>
                                    <input type="number" class="form-control" name="num_male_vot" id="num_male_vot" onkeyup="num_fmembervot()" value="{{ old('num_male_vot',$hold->num_male_vot) }}">
                                </div>
                                <div class="col-4">
                                    <label for="num_female_vot"><b>পরিবারের ভোটার সংখ্যা (মহিলা)</b></label>
                                    <input type="number" class="form-control" name="num_female_vot" id="num_female_vot" onkeyup="num_fmembervot()" value="{{ old('num_female_vot',$hold->num_female_vot) }}">
                                </div>
                                <div class="col-4">
                                    <label ><b>পরিবারের মোট ভোটার  সংখ্যা</b> </label>
                                    <input type="number" class="form-control" id="num_totalv" value="{{ (old('num_male_vot',$hold->num_male_vot) + old('num_female_vot',$hold->num_female_vot)) }}">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="residence_type">বাড়ির অবকাঠামু </label>
                                    <select name="residence_type" class="form-select @error('residence_type') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse(\App\Models\HousingType::orderBy('created_at')->get() as $data)
                                        <option value="{{$data->id}}" {{ old('residence_type', $hold->residence_type)==$data->id ? "selected":""}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="house_room">বাড়ির রুম/ঘর</label>
                                    <input class="form-control @error('house_room') is-invalid @enderror" name="house_room" id="house_room" value="{{ old('house_room',$hold->house_room) }}"  type="number" placeholder="বাড়ির রুম/ঘর">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="family_status">পারিবারিক অবস্থা </label>
                                    <select name="family_status" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('family_status', $hold->family_status)=="1" ? "selected":""}}>হতদরিদ্র</option>
                                        <option value="2" {{ old('family_status', $hold->family_status)=="2" ? "selected":""}}>নিন্ম-মধ্যবৃত্ত</option>
                                        <option value="3" {{ old('family_status', $hold->family_status)=="3" ? "selected":""}}>মধ্যবৃত্ত</option>
                                        <option value="4" {{ old('family_status', $hold->family_status)=="4" ? "selected":""}}>উচ্চ-মধ্যবৃত্ত</option>
                                        <option value="5" {{ old('family_status', $hold->family_status)=="5" ? "selected":""}}>উচ্চবৃত্ত</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label  class="form-label" for="percentage_house_land">বাড়ির জমি পরিমান</label>
                                    <input class="form-control @error('percentage_house_land') is-invalid @enderror"
                                    name="percentage_house_land" id="percentage_house_land" value="{{ old('percentage_house_land',$hold->percentage_house_land) }}"  type="text" placeholder="বাড়ির জমি শতাংশ">
                                    {{-- @if($errors->has('percentage_house_land'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('percentage_house_land') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="percentage_cultivated_land">আবাদী জমি পরিমান</label>
                                    <input class="form-control @error('percentage_cultivated_land') is-invalid @enderror"
                                    name="percentage_cultivated_land" id="percentage_cultivated_land" value="{{ old('percentage_cultivated_land',$hold->percentage_cultivated_land) }}"  type="text" placeholder="আবাদী জমি শতাংশ">
                                    @if($errors->has('percentage_cultivated_land'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('percentage_cultivated_land') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="estimated_value_house">বাড়ির আনুমানিক মূল্য</label>
                                    <input class="form-control @error('estimated_value_house') is-invalid @enderror"
                                    name="estimated_value_house" id="estimated_value_house" value="{{ old('estimated_value_house',$hold->estimated_value_house) }}"  type="number" placeholder="বাড়ির আনুমানিক মূল্য">
                                    {{-- @if($errors->has('estimated_value_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('estimated_value_house') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="tax_levied_annually_house">বাড়ির বার্ষিক ধার্যকৃত কর</label>
                                    <input class="form-control @error('tax_levied_annually_house') is-invalid @enderror"
                                    name="tax_levied_annually_house" id="tax_levied_annually_house" value="{{ old('tax_levied_annually_house',$hold->tax_levied_annually_house) }}"  type="number" placeholder="বাড়ির বার্ষিক ধার্যকৃত কর">
                                    @if($errors->has('tax_levied_annually_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('tax_levied_annually_house') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            {{--  <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="business_taxes"><b>কর/আয়ের উৎস</b></label>
                                <div class="row m-2" style="font-size: 13px;">
                                    @forelse(\App\Models\IncomeSource::orderBy('created_at')->get() as $data)
                                        <div class="col-lg-2 col-sm-6">
                                            <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes{{$data->id}}" value="{{$data->id}}" @if(in_array($data->id, $Business_taxes)) checked @endif />
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
                            </div>  --}}
                            {{-- <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="annual_tax_collected_house">বাড়ির বার্ষিক আদায়কৃত কর</label>
                                    <input class="form-control @error('annual_tax_collected_house') is-invalid @enderror"
                                    name="annual_tax_collected_house" id="annual_tax_collected_house" value="{{ old('annual_tax_collected_house',$hold->annual_tax_collected_house) }}"  type="text" placeholder="বাড়ির বার্ষিক আদায়কৃত কর">
                                    @if($errors->has('annual_tax_collected_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_tax_collected_house') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="annual_house_tax_arrears">বাড়ির বার্ষিক বকেয়া কর</label>
                                    <input class="form-control @error('annual_house_tax_arrears') is-invalid @enderror"
                                    name="annual_house_tax_arrears" id="annual_house_tax_arrears" value="{{ old('annual_house_tax_arrears',$hold->annual_house_tax_arrears) }}"  type="text" placeholder="বাড়ির বার্ষিক বকেয়া কর">
                                    @if($errors->has('annual_house_tax_arrears'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('annual_house_tax_arrears') }}
                                    </small>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="row m-3">
                                <h5 class="text-center theme-text-color" style="padding-top: 5px;">আবেদনকারীর স্থায়ী ঠিকানা </h5>
                            </div>
                            <div class="row m-2">
                                <div class="col-12">
                                    <label >বাড়ির হেল্ডিং নম্বর</label>
                                    <b>{{ $hold->house_holding_no}}</b>
                                </div>
                            </div>

                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="street_nm">রাস্তা / ব্লক</label>
                                    <input class="form-control @error('street_nm') is-invalid @enderror"
                                    name="street_nm" id="street_nm" value="{{ old('street_nm',$hold->street_nm) }}"  type="text" placeholder="রাস্তা / ব্লক">
                                    @if($errors->has('street_nm'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('street_nm') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="village_name">গ্রাম / পাড়া</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name',$hold->village_name) }}"  type="text" placeholder="গ্রাম / পাড়া">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="ward_id">সেক্টর / ওয়ার্ড</label>
                                    <select name="ward_id" class="form-select" id="ward_id">
                                        <option value="" selected="selected">সেক্টর / ওয়ার্ড নং</option>
                                        @forelse ($wards as $w)
                                        <option value="{{ $w->id }}" {{$hold->ward_id == $w->id ? 'selected' : ''}}>{{ $w->ward_name_bn }}</option>
                                        @empty
                                        <p>No Ward found</p>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="post_office">ডাকঘর</label>
                                    <input class="form-control @error('post_office') is-invalid @enderror"
                                    name="post_office" id="post_office" value="{{ old('post_office',$hold->post_office) }}"  type="text" placeholder="ডাকঘর">
                                    @if($errors->has('post_office'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('post_office') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">

                                <div class="col-4">
                                    <label >ইউনিয়ন</label>
                                    <b>{{ request()->session()->get('upsetting')->union?->name_bn}}</b>
                                    <input type="hidden" name="union_id" value="{{ request()->session()->get('upsetting')->union_name}}"/>
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="upazila_thana">উপজেলা/থানা</label>
                                    <b>{{ request()->session()->get('upsetting')->upazila?->name_bn}}</b>
                                    <input type="hidden" name="upazila_id" value="{{ request()->session()->get('upsetting')->upazila_name}}"/>
                                </div>
                                <div class="col-4">
                                    <label for="district">জেলা</label>
                                    <b>{{ request()->session()->get('upsetting')->district?->name_bn}}</b>
                                    <input type="hidden" name="district_id" value="{{ request()->session()->get('upsetting')->district_name}}"/>
                                </div>

                            </div>
                            <div class="row m-3">
                                <h5 class="theme-text-color" style="padding-top: 5px;">অতিরিক্ত সংযোজনঃ- </h5>
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
                                        <input type="file" name="image" value="" data-default-file="{{ asset('uploads/holding') }}/{{ $hold->image }}" class="form-control dropify">
                                    <div class="overlay">
                                        <div class="text-center">ছবি দিতে ক্লিক করুন</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-3">
                                <h5 class="text-center theme-text-color" style="padding-top: 5px;">প্রোপাইল অনুমোদনের অংশ </h5>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="service_charge">সার্ভিস চার্জ</label>
                                    <input class="form-control @error('service_charge') is-invalid @enderror"
                                    name="service_charge" id="service_charge" value="{{ old('service_charge',$hold->service_charge) }}"  type="text" placeholder="সার্ভিস চার্জ">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="holding_certificate_fee">হোল্ডিং নাম্বার সনদ ফি</label>
                                    <input class="form-control @error('holding_certificate_fee') is-invalid @enderror"
                                    name="holding_certificate_fee" id="holding_certificate_fee" value="{{ old('holding_certificate_fee',$hold->holding_certificate_fee) }}"  type="text" placeholder="হোল্ডিং নাম্বার সনদ ফি">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="tax_levied_annually_house">বাড়ির বার্ষিক ধার্যকৃত কর</label>
                                    <input class="form-control" name="tax_levied_annually_house" type="number" value="{{ old('tax_levied_annually_house',$hold->tax_levied_annually_house) }}" placeholder="বাড়ির বার্ষিক ধার্যকৃত কর">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="approval_date">অনুমেদনের তারিখ</label>
                                    <input class="form-control @error('approval_date') is-invalid @enderror"
                                    name="approval_date" id="approval_date" value="{{ old('approval_date',$hold->approval_date) }}"  type="text" placeholder="অনুমেদনের তারিখ">
                                </div>
                                {{--  <div class="col-6">
                                    <label  class="form-label" for="status">গ্রহণ/ বাতিল</label>
                                    <select onchange="change_status(this)" name="status" class="form-control">
                                        <option value="2"{{$hold->status == 2 ? 'selected' : ''}}>গ্রহণ</option>
                                        <option value="3" {{$hold->status == 3 ? 'selected' : ''}}>বাতিল</option>
                                    </select>
                                </div>  --}}
                                <div class="col-6">
                                    <label  class="form-label" for="approval_date">মন্তব্য</label>
                                    <textarea name="cancel_reason" class="form-control cancel_r" id="" placeholder="মন্তব্য দিন">{{ old('cancel_reason',$hold->cancel_reason) }}</textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" class="btn btn-primary" name="submit" value="আপডেট">
                                        <input type="button" class="btn default cancel btn-info" value="বাতিল">
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
