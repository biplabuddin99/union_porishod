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
                                    <h5 style="padding-top: 5px;">নাগরিক সনদ আবেদন ফরম</h5>
                                </div>
                            </div>
                        </div>
                        <form action="{{route(currentUser().'.citizenfirstpartupdate',Crypt::encrypt($citizen->id))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row m-2">
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div> --}}

                                <div class="col-sm-2 col-lg-2">
                                    <label  class="form-label" for="apply_date"><b>আবেদনের তারিখ</b> </label>
                                </div>
                                <div class="col-sm-2 col-lg-2 ms-0 ps-0">
                                    <input class="form-control datepicker" name="apply_date" value="{{ old('holding_date',\Carbon\Carbon::parse($citizen->apply_date)->format('d-m-Y')) }}" id="apply_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="applicant_name"><b>আবেদনকারীর নাম</b></label>
                                    <input required class="form-control @error('applicant_name') is-invalid @enderror" type="text"
                                    name="applicant_name" value="{{ old('applicant_name',$citizen->applicant_name) }}" id="applicant_name" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('applicant_name'))
                                        <small class="d-block text-danger">{{ $errors->first('applicant_name') }}</small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="father_name"><b>পিতার নাম</b></label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                    name="father_name" value="{{ old('father_name',$citizen->father_name) }}" id="father_name" placeholder="পিতার নাম">
                                    @if($errors->has('father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="mother_name"><b>মাতার নাম</b></label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name',$citizen->mother_name) }}" id="mother_name" placeholder="মাতার নাম">
                                    @if($errors->has('mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('mother_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="husband_wife"><b>স্বামী/স্ত্রীর নাম</b></label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife',$citizen->husband_wife) }}" id="husband_wife" placeholder="স্বামী/স্ত্রীর নাম">
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="birth_date"><b>জন্ম তারিখ</b></label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date',$citizen->birth_date) }}"  type="text" placeholder="দিন-মাস-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="voter_id_no"><b>জাতীয় পরিচয়পত্র নম্বর</b></label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no',$citizen->voter_id_no) }}" placeholder="ভোটার আইডি নং">
                                    @if($errors->has('voter_id_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_id_no') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="birth_registration_id"><b>ডিজিটাল জন্মনিবন্ধন নম্বর</b></label>
                                    <input class="form-control @error('birth_registration_id') is-invalid @enderror" type="text"
                                    name="birth_registration_id" value="{{ old('birth_registration_id',$citizen->birth_registration_id) }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
                                    @if($errors->has('birth_registration_id'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_registration_id') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="gender1" for="cars">লিঙ্গ </label>
                                    <select name="gender" id="gender1" class="form-select @error('gender') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('gender', $citizen->gender)=="1" ? "selected":""}}>পুরুষ</option>
                                        <option value="2" {{ old('gender', $citizen->gender)=="2" ? "selected":""}}>মহিলা</option>
                                        <option value="3" {{ old('gender', $citizen->gender)=="3" ? "selected":""}}>তৃতীয় লিঙ্গ</option>
                                    </select>
                                    @if($errors->has('gender'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('gender') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="rel">ধর্ম </label>
                                    <select name="religion" class="form-select @error('religion') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('religion', $citizen->religion)=="1" ? "selected":""}}>ইসলাম</option>
                                        <option value="2" {{ old('religion', $citizen->religion)=="2" ? "selected":""}}>হিন্দু</option>
                                        <option value="3" {{ old('religion', $citizen->religion)=="3" ? "selected":""}}>বৌদ্ধ</option>
                                        <option value="4" {{ old('religion', $citizen->religion)=="4" ? "selected":""}}>খ্রিষ্টান</option>
                                        <option value="5" {{ old('religion', $citizen->religion)=="5" ? "selected":""}}>উপজাতি</option>
                                    </select>
                                    @if($errors->has('religion'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('religion') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="marit" for="cars">বৈবাহিক অবস্থা  </label>
                                    <select name="marital_status" id="marit" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('marital_status', $citizen->marital_status)=="1" ? "selected":""}}>বিবাহিত</option>
                                        <option value="2" {{ old('marital_status', $citizen->marital_status)=="2" ? "selected":""}}>অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="rel">মুক্তিযোদ্ধা </label>
                                    <select name="freedom_fighter" class="form-select @error('freedom_fighter') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('freedom_fighter', $citizen->freedom_fighter)=="1" ? "selected":""}}>বীর মুক্তিযোদ্ধা</option>
                                        <option value="2" {{ old('freedom_fighter', $citizen->freedom_fighter)=="2" ? "selected":""}}>বীরাঙ্গনা</option>
                                        <option value="3" {{ old('freedom_fighter', $citizen->freedom_fighter)=="3" ? "selected":""}}>নাই</option>
                                    </select>
                                    @if($errors->has('freedom_fighter'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('freedom_fighter') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="edu_qual0">শিক্ষাগত যোগ্যতা </label>
                                    <select name="edu_qual" class="form-select @error('edu_qual') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse(\App\Models\EducationalQualification::orderBy('created_at')->get() as $data)
                                            <option value="{{$data->id}}" {{ old('edu_qual', $citizen->edu_qual)==$data->id ? "selected":""}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
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
                            <div class="row m-2">
                                <div class="col-6">
                                    <label class="form-label" for="source_inc"><b>পেশা বা কর্ম</b></label>
                                    <select required name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse(\App\Models\Profession::orderBy('created_at')->get() as $data)
                                            <option value="{{$data->id}}" {{ old('source_income', $citizen->source_income)==$data->id ? "selected":""}}>{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="phone"><b>মোবাইল নম্বর</b></label>
                                    <input class="form-control @error('phone') is-invalid @enderror" required name="phone" id="phone" value="{{ old('phone',$citizen->phone) }}"  type="text" placeholder="মোবাইল নম্বর">
                                    @if($errors->has('phone'))
                                        <small class="d-block text-danger">{{ $errors->first('phone') }}</small>
                                    @endif
                                </div>

                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="email"><b>ই-মেইল</b><small>(যদি থাকে)</small> </label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$citizen->email) }}" placeholder=".....@email.com">
                                </div>
                                <div class="col-6 mb-2">
                                    <label class="form-label" for="bank_acc"><b>ব্যাংক একাউন্ট</b></label>
                                    <select required name="bank_acc" id="bank_acc" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1" {{ old('bank_acc', $citizen->bank_acc)=="1" ? "selected":""}}>আছে</option>
                                        <option value="2" {{ old('bank_acc', $citizen->bank_acc)=="2" ? "selected":""}}>নাই</option>
                                    </select>
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
@push('scripts')
    <script>
        function num_fmember(){
            let nm=$('#num_male').val()?parseFloat($('#num_male').val()):0;
            let nf=$('#num_female').val()?parseFloat($('#num_female').val()):0;
            $('#num_total').val((nm+nf));
        }
    </script>
@endpush
