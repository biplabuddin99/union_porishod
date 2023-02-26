@extends('layout.app')
disability
{{-- @section('pageTitle','মাতৃত্বকালীন ভাতা আবেদনকারি তথ্য') --}}

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-primary"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: white; padding-top: 5px;">মাতৃত্বকালীন ভাতা আবেদনকারির তথ্য</h4>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-9 mb-0 mt-5">
            <div class="col-md-12 mb-3">
                <div class="row form-group">
                    <label for="name_en" class="col-sm-3 control-label">নাম (ইংরেজিতে) :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="name_en">
                        <div>{{ $windowallowance->name_en }}</div>
                    </div>
                    <label for="name_bn" class="col-sm-3 control-label">নাম (বাংলায়) :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="name_bn">
                        <div>{{ $windowallowance->name_bn }}</div>
                    </div>

                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="row form-group">
                    <label for="national_id" class="col-sm-3 control-label">ন্যাশনাল আইডি :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="national_id">
                        <div>{{ $windowallowance->national_id }}</div>
                    </div>
                    <label for="birth_registration" class="col-sm-3 control-label">জন্ম নিবন্ধন নং :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="birth_registration">
                        <div>{{ $windowallowance->birth_registration }}</div>
                    </div>

                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="row form-group">
                    <label for="passport_no" class="col-sm-3 control-label">পাসপোর্ট নং :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="passport_no">
                        <div>{{ $windowallowance->passport_no }}</div>
                    </div>
                    <label for="birth_date" class="col-sm-3 control-label">জন্ম তারিখ :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="birth_date">
                        <div>{{ $windowallowance->birth_date }}</div>
                    </div>

                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="row form-group">
                    <label for="father_name_en" class="col-sm-3 control-label">পিতার নাম(ইংরেজি) :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="father_name_en">
                        <div>{{ $windowallowance->father_name_en }}</div>
                    </div>
                    <label for="father_name_bn" class="col-sm-3 control-label">পিতার নাম (বাংলায়) :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="father_name_bn">
                        <div>{{ $windowallowance->father_name_bn }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="row form-group">
                    <label for="mother_name_en" class="col-sm-3 control-label">মাতার নাম(ইংরেজি) :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="mother_name_en">
                        <div>{{ $windowallowance->mother_name_en }}</div>
                    </div>
                    <label for="mother_name_bn" class="col-sm-3 control-label">মাতার নাম (বাংলায়) :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="mother_name_bn">
                        <div>{{ $windowallowance->mother_name_bn }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row form-group">
                    <label for="occupation" class="col-sm-3 control-label">পেশা :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="occupation">
                        <div>{{ $windowallowance->occupation }}</div>
                    </div>
                    <label for="resident" class="col-sm-3 control-label">বাসিন্দা :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="resident">
                        <div>{{ $windowallowance->resident == 1?"স্থায়ী":"অস্থায়ী" }}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row form-group">
                    <label for="educational_qualification" class="col-sm-3 control-label">শিক্ষাগত যোগ্যতা :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="educational_qualification">
                        <div>{{ $windowallowance->educational_qualification }}</div>
                    </div>
                    <label for="religion" class="col-sm-3 control-label">ধর্ম  :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="religion">
                        <div>@if($windowallowance->religion == "1")
                             <p> ইসলাম ধর্ম</p>
                            @elseif($windowallowance->religion == "2")
                            <p>হিন্দু ধর্ম</p>
                            @elseif($windowallowance->religion == "3")
                            <p>বৌদ্ধ ধর্ম</p>
                            @elseif($windowallowance->religion == "4")
                            <p>খ্রিস্ট ধর্ম</p>
                            @else
                            <p>অন্যান্য</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row form-group">
                    <label for="gender" class="col-sm-3 control-label">লিঙ্গ :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="gender">
                        <div>@if($windowallowance->gender == "1")
                            <p>পুরুষ</p>
                           @elseif($windowallowance->gender == "2")
                           <p>মহিলা</p>
                           @else
                           <p>অন্যান্য</p>
                           @endif
                       </div>
                    </div>
                    <label for="marital_status" class="col-sm-3 control-label">বৈবাহিক সম্পর্ক :</label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="marital_status">
                        <div>@if($windowallowance->marital_status == "1")
                            <p> অবিবাহিত</p>
                           @elseif($windowallowance->marital_status == "2")
                           <p>বিবাহিত</p>
                           @elseif($windowallowance->marital_status == "3")
                           <p>তালাক প্রাপ্ত</p>
                           @elseif($windowallowance->marital_status == "4")
                           <p>বিধবা</p>
                           @else
                           <p>অন্যান্য</p>
                           @endif
                       </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <img class="mt-5" height="200px" width="200px" src="{{asset('uploads/windowallowance')}}/{{ $windowallowance->image}}" alt="No Image">
            <div class="text-center">{{ $windowallowance->name_bn }}</div>
        </div>
    </div>
    <div class="row">
        <h4 class="text-center m-4"><strong>বর্তমান ঠিকানা</strong></h4>
        <div class="col-md-12">
            <div class="row form-group">
                <label for="present_village_en" class="col-sm-3 control-label">গ্রাম/মহল্লা (ইংরেজিতে) :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="present_village_en">
                    <div>{{ $windowallowance->present_village_en }}</div>
                </div>
                <label for="present_village_bn" class="col-sm-3 control-label">গ্রাম/মহল্লা (বাংলায়) :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="present_village_bn">
                    <div>{{ $windowallowance->present_village_bn }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row form-group">
                <label for="present_rbs_en" class="col-sm-3 control-label">রোড/ব্লক/সেক্টর(ইংরেজিতে) :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="present_rbs_en">
                    <div>{{ $windowallowance->present_rbs_en }}</div>
                </div>
                <label for="present_rbs_bn" class="col-sm-3 control-label">রোড/ব্লক/সেক্টর(বাংলায়) :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="present_rbs_bn">
                    <div>{{ $windowallowance->present_rbs_bn }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row form-group">
                <label for="present_holding_no" class="col-sm-3 control-label">হোল্ডিং নং :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="present_holding_no">
                    <div>{{ $windowallowance->present_holding_no }}</div>
                </div>
                <label for="present_ward_no" class="col-sm-3 control-label">ওয়ার্ড নং :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="present_ward_no">
                    <div>{{ $windowallowance->present_ward_no }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h4 class="text-center m-4"><strong>স্থায়ী ঠিকানা</strong></h4>
        <div class="col-md-12">
            <div class="row form-group">
                <label for="permanent_village_en" class="col-sm-3 control-label">গ্রাম/মহল্লা (ইংরেজিতে) :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="permanent_village_en">
                    <div>{{ $windowallowance->permanent_village_en }}</div>
                </div>
                <label for="permanent_village_bn" class="col-sm-3 control-label">গ্রাম/মহল্লা (বাংলায়) :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="permanent_village_bn">
                    <div>{{ $windowallowance->permanent_village_bn }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row form-group">
                <label for="permanent_rbs_en" class="col-sm-3 control-label">রোড/ব্লক/সেক্টর(ইংরেজিতে) :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="permanent_rbs_en">
                    <div>{{ $windowallowance->permanent_rbs_en }}</div>
                </div>
                <label for="permanent_rbs_bn" class="col-sm-3 control-label">রোড/ব্লক/সেক্টর(বাংলায়) :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="permanent_rbs_bn">
                    <div>{{ $windowallowance->permanent_rbs_bn }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row form-group">
                <label for="permanent_holding_no" class="col-sm-3 control-label">হোল্ডিং নং :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="permanent_holding_no">
                    <div>{{ $windowallowance->permanent_holding_no }}</div>
                </div>
                <label for="permanent_ward_no" class="col-sm-3 control-label">ওয়ার্ড নং :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="permanent_ward_no">
                    <div>{{ $windowallowance->permanent_ward_no }}</div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row form-group">
                <label for="permanent_district_id" class="col-sm-3 control-label">জেলা :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="permanent_district_id">
                    <select style="width: 280px; border: 0px !important; box-shadow: none !important;" class="form-control" id="permanent_district_id" name="permanent_district_id">
                        @forelse($district as $dis)
                            <option disabled  value="{{$dis->id}}" {{$windowallowance->permanent_district_id== $dis->id ? 'selected' : ''}}>{{$dis->name_bn}}</option>
                        @empty
                            <option>No data found</option>
                        @endforelse
                    </select>
                    {{-- <div>{{ $windowallowance->permanent_district_id }}</div> --}}
                </div>
                <label for="permanent_upazila_id" class="col-sm-3 control-label">উপজেলা/থানা :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="permanent_upazila_id">
                    <select style=" border: 0px !important; box-shadow: none !important;" class="form-control" id="permanent_upazila_id" name="permanent_upazila_id">
                        @forelse($thana as $tha)
                            <option disabled  value="{{$tha->id}}" {{$windowallowance->permanent_upazila_id== $tha->id ? 'selected' : ''}}>{{$tha->name_bn}}</option>
                        @empty
                            <option>No data found</option>
                        @endforelse
                    </select>
                    {{-- <div>{{ $windowallowance->permanent_upazila_id }}</div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h4 class="text-center m-4"><strong>যোগাযোগের ঠিকানা</strong></h4>
        <div class="col-md-12">
            <div class="row form-group">
                <label for="mobile" class="col-sm-3 control-label">মোবাইল :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="mobile">
                    <div>{{ $windowallowance->mobile }}</div>
                </div>
                <label for="email" class="col-sm-3 control-label">ইমেল :</label>
                <div class="col-sm-3 bt-flabels__wrapper" id="email">
                    <div>{{ $windowallowance->email }}</div>
                </div>
            </div>
        </div>
    </div>
    {{-- <button class="m-5 btn btn-warning" type="button" onclick="window.print();">Print</button> --}}
</section>
@endsection
