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
                                    <h4 style="padding-top: 5px;">আবেদন ফরম</h4>
                                </div>
                                <h5 class="text-center theme-text-color" style="padding-top: 5px;">আবেদনকৃত ব্যক্তির পরিচিতি</h5>
                            </div>
                        </div>
                        <form action="{{route(currentUser().'.allapplication.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row m-2">
                                {{-- <div class="col-6">
                                    <label  class="form-label" for="form_no">ফরম নং -</label>
                                    <input class="form-control col-6" name="form_no" value="{{ old('form_no') }}" id="form_no" type="text" placeholder="ফরম নং">
                                </div> --}}

                                <div class="col-sm-2 col-lg-2">
                                    <label  class="form-label" for="holding_date"><b>আবেদনের তারিখ</b> </label>
                                </div>
                                <div class="col-sm-2 col-lg-2 ms-0 ps-0">
                                    <input class="form-control datepicker" name="holding_date" value="<?= date('d-m-Y'); ?>" id="holding_date" type="text">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="head_household"><b>আবেদনকারীর নাম</b></label>
                                    <input required class="form-control @error('head_household') is-invalid @enderror" type="text"
                                    name="head_household" value="{{ old('head_household') }}" id="head_household" placeholder="আবেদনকারীর নাম">
                                    @if($errors->has('head_household'))
                                        <small class="d-block text-danger">{{ $errors->first('head_household') }}</small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="husband_wife"><b>স্বামী/স্ত্রীর নাম</b></label>
                                    <input class="form-control" type="text"
                                    name="husband_wife" value="{{ old('husband_wife') }}" id="husband_wife" placeholder="স্বামী/স্ত্রীর নাম">
                                </div>
                            
                                <div class="col-6">
                                    <label  class="form-label" for="father_name"><b>পিতার নাম</b></label>
                                    <input class="form-control @error('father_name') is-invalid @enderror" type="text"
                                    name="father_name" value="{{ old('father_name') }}" id="father_name" placeholder="পিতার নাম">
                                    @if($errors->has('father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="mother_name"><b>মাতার নাম</b></label>
                                    <input class="form-control @error('mother_name') is-invalid @enderror" type="text"
                                    name="mother_name" value="{{ old('mother_name') }}" id="mother_name" placeholder="মাতার নাম">
                                    @if($errors->has('mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('mother_name') }}
                                    </small>
                                    @endif
                                </div>
                            
                                <div class="col-6">
                                    <label  class="form-label" for="birth_date"><b>জন্ম তারিখ</b></label>
                                    <input class="form-control datepicker @error('birth_date') is-invalid @enderror"
                                    name="birth_date" id="birth_date" value="{{ old('birth_date') }}"  type="text" placeholder="দিন-মাস-সাল">
                                    @if($errors->has('birth_date'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_date') }}
                                    </small>
                                    @endif
                                </div>
                                
                                <div class="col-6">
                                    <label  class="form-label" for="voter_id_no"><b>ভোটার আইডি</b></label>
                                    <input class="form-control @error('voter_id_no') is-invalid @enderror" type="text" name="voter_id_no" id="voter_id_no" value="{{ old('voter_id_no') }}" placeholder="ভোটার আইডি নং">
                                    @if($errors->has('voter_id_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_id_no') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="birth_registration_id"><b>জন্ম নিবন্ধন আইডি</b></label>
                                    <input class="form-control @error('birth_registration_id') is-invalid @enderror" type="text"
                                    name="birth_registration_id" value="{{ old('birth_registration_id') }}" id="birth_registration_id" placeholder="জন্মনিবন্ধন আইডি">
                                    @if($errors->has('birth_registration_id'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('birth_registration_id') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="gender1" for="cars"><b>লিঙ্গ</b></label>
                                    <select name="gender" id="gender1" class="form-select @error('gender') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">পুরুষ</option>
                                        <option value="2">মহিলা</option>
                                        <option value="3">তৃতীয় লিঙ্গ</option>
                                    </select>
                                    @if($errors->has('gender'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('gender') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="marit" for="cars"><b>বৈবাহিক অবস্থা</b></label>
                                    <select required name="marital_status" id="marit" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">বিবাহিত</option>
                                        <option value="2">অবিবাহিত</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="rel"><b>ধর্ম</b></label>
                                    <select name="religion" class="form-select @error('religion') is-invalid @enderror" required>
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">ইসলাম</option>
                                        <option value="2">হিন্দু</option>
                                        <option value="3">বৌদ্ধ</option>
                                        <option value="4">খ্রিষ্টান</option>
                                        <option value="5">উপজাতি</option>
                                    </select>
                                    @if($errors->has('religion'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('religion') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="rel"><b>মুক্তিযোদ্ধা</b></label>
                                    <select name="freedom_fighter" class="form-select @error('freedom_fighter') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">বীর মুক্তিযোদ্ধা</option>
                                        <option value="2">বীরাঙ্গনা</option>
                                        <option value="3">অন্যান্য</option>
                                    </select>
                                    @if($errors->has('freedom_fighter'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('freedom_fighter') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="tube_well"><b>নলকূপ</b></label>
                                    <select required name="tube_well" id="tube_well" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="paved_bathroom"><b>বাথরুম</b></label>
                                    <select required name="paved_bathroom" id="paved_bathroom" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">কাঁচা</option>
                                        <option value="2">পাকা</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="internet" for="cars"><b>ইন্টারনেট সংযোগ</b></label>
                                    <select required name="internet_connection" id="internet" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="disline_connection"><b>ডিসলাইন সংযোগ</b></label>
                                    <select required name="disline_connection" id="disline_connection" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-12">
                                    <label  class="form-label" for="mobile_bank"><b>মোবাইল ব্যাংক</b></label>
                                    <div class="row m-2">
                                        @forelse($mobile_bank as $mb)
                                        <div class=" col-sm-3 col-lg-2">
                                            <input class="form-check-input" name="mobile_bank[]" type="checkbox" id="mobile_bank{{$mb->id}}" value="{{$mb->id}}" {{old('mobile_bank') == $mb->id ? 'checked' : ''}} />
                                            <label  class="form-label" for="mobile_bank{{$mb->id}}"> {{$mb->name}}</label>
                                        </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label  class="form-label" for=""><b>ডিজিটাল ডিভাইস</b></label>
                                <div class="row m-2">
                                    @forelse($digital_device as $dd)
                                    <div class=" col-sm-3 col-lg-2">
                                        <input class="form-check-input" type="checkbox" name="digital_devices[]" id="digital_devices{{$dd->id}}" value="{{$dd->id}}" {{old('digital_devices') == $dd->id ? 'checked' : ''}} />
                                        <label  class="form-label" for="digital_devices{{$dd->id}}"> {{$dd->name}}</label>
                                    </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="government_facilities"><b>সরকারি সুবিধা</b></label>
                                <div class="row m-2">
                                    @forelse($gov_f as $dd)
                                        <div class="col-sm-3 col-lg-2">
                                            <input class="form-check-input" type="checkbox" name="government_facilities[]" id="government_facilities{{$dd->id}}" value="{{$dd->id}}" {{old('government_facilities') == $dd->id ? 'checked' : ''}} />
                                            <label  class="form-label" for="government_facilities{{$dd->id}}">{{$dd->name}}</label>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="edu_qual0"><b>শিক্ষাগত যোগ্যতা</b></label>
                                    <select required name="edu_qual" class="form-select @error('edu_qual') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse($edu_q as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @if($errors->has('edu_qual'))
                                        <small class="d-block text-danger text-center">
                                            {{ $errors->first('edu_qual') }}
                                        </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="source_inc"><b>পেশা বা কর্ম</b></label>
                                    <select required name="source_income" class="form-select @error('source_income') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse($profession as $data)
                                            <option value="{{$data->id}}">{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @if($errors->has('source_income'))
                                        <small class="d-block text-danger text-center">{{ $errors->first('source_income') }}</small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="phone"><b>মোবাইল নম্বর</b></label>
                                    <input class="form-control @error('phone') is-invalid @enderror" required name="phone" id="phone" value="{{ old('phone') }}"  type="text" placeholder="মোবাইল নম্বর">
                                    @if($errors->has('phone'))
                                        <small class="d-block text-danger">{{ $errors->first('phone') }}</small>
                                    @endif
                                </div>
                            
                                <div class="col-6">
                                    <label  class="form-label" for="email"><b>ই-মেইল</b><small>(যদি থাকে)</small> </label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" placeholder=".....@email.com">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="bank_acc"><b>ব্যাংক একাউন্ট</b></label>
                                    <select required name="bank_acc" id="bank_acc" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                </div>
                            </div>
                           
                            {{-- <div class="row m-2">
                                
                            </div> --}}
                            
                            
                            <div class="row m-3">
                                <h5 class="text-center theme-text-color" style="padding-top: 5px;">আপনি কেন আবেদনটি করতে চান? </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <label for=""><h5 class="theme-text-color">আবেদনের ধরন</h5></label>
                                <div class="col-6">
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application1" value="1" {{old('type_application') == '1' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application1">হোল্ডিং নাম্বার</label>
                                    </div>
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application3" value="3" {{old('type_application') == '3' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application3">ওয়ারিশান সনদ</label>
                                    </div>
                                    <div class="row ps-5">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application9" value="5" {{old('type_application') == '5' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application9">পরিবারিক সনদ</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application2" value="2" {{old('type_application') == '2' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application2">ট্রেড লাইসেন্স</label>
                                    </div>
                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application4" value="4" {{old('type_application') == '4' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application4">নাগরিক সনদ</label>
                                    </div>

                                    <div class="row">
                                        <input class="form-check-input" type="radio" name="type_application" id="type_application5" value="6" {{old('type_application') == '6' ? 'checked' : ''}}>
                                        <label  class="form-label" for="type_application5">গ্রাম আদালত</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <div class="row ps-5">
                                        <a class="mt-2" href="#">ভিজিএফ কার্ড</a>
                                    </div>
                                    <div class="row ps-5">
                                        <a class="mt-2" href="#">ভিজিডি কার্ড</a>
                                    </div>
                                    <div class="row ps-5">
                                        <a class="mt-2" href="#">প্রতিবন্ধী ভাতা</a>
                                    </div>
                                    <div class="row ps-5">
                                        <a class="mt-2" href="#">মাতৃত্বকালীন ভাতা</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <a class="mt-2" href="#">রেশন কার্ড</a>
                                    </div>
                                    <div class="row">
                                        <a class="mt-2" href="#">বয়স্ক ভাতা</a>
                                    </div>
                                    <div class="row">
                                        <a class="mt-2" href="#">বিধবা ভাতা</a>
                                    </div>
                                    <div class="row">
                                        <a class="mt-2" href="#">অন্যান্য</a>
                                    </div>

                                </div>
                            </div>
                            <div class="row m-3">
                                <div class="col-2 offset-5">
                                    <button class="text-center" style="background-color: rgb(214, 153, 153); padding-top: 5px;">পরবর্তী</button>
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
