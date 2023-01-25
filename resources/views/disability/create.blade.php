@extends('layout.app')

@section('pageTitle','প্রতিবন্ধী সনদের আবেদন')

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-primary"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: white; padding-top: 5px;">প্রতিবন্ধী সনদের আবেদন</h4>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <form id="form-data" action="{{route(currentUser().'.disablity.store')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-9">
                    <h4 class="text-center"><strong class="text-danger">নিয়মাবলিঃ</strong></h4>
                    <hr />
                    <ul>
                        <li class='text-danger'>বাংলায় সার্টিফিকেট পেতে শুধুমাত্র বাংলায় ঘর গুলো পূরন করুন ।</li>
                        <li class='text-danger'>ইংরেজি সার্টিফিকেট পেতে বাংলা এবং ইংরেজি উভয় ঘর পূরন করুন ।</li>
                        <li class='text-danger'>আপনি যদি পূর্বে কোনো সনদ নিয়ে থাকেন, নিচের সার্চ বক্সে আপনার
                            ন্যাশনাল আইডি/জন্ম নিবন্ধন/পাসপোর্ট/পিন নং দিয়ে সার্চ করুন!</li>
                    </ul>

                    <div class="col-md-12">
                        <div class="row form-group">
                            <label for="app_district_id" class="col-sm-1 control-label">জেলা<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-3 bt-flabels__wrapper" id="app_district_id">
                                <select onchange="show_thana(this.value)" name="district_id" class="form-control" required="" id="districtid">
                                    <option value="">জেলা</option>
                                    @forelse($district as $dist)
                                    <option value="{{ $dist->id }}">{{ $dist->name_bn }}</option>
                                    @empty
                                    <p>No District found</p>
                                    @endforelse
                                </select>
                                {{-- <span class="bt-flabels__error-desc">জেলা নির্বাচন করুন....</span>

                                <span id="app_district_id_feedback" class="help-block"></span> --}}
                            </div>
                            <label for="app_upazila_id" class="col-sm-1 control-label">থানা<span
                                    class="text-danger">*</span>
                            </label>
                            <div class="col-sm-3 bt-flabels__wrapper" id="app_upazila_id_status">
                                <select name="thana_id" class="form-control" required="" id="thanaid">
                                    <option value="">থানা</option>
                                    @forelse ($thana as $tha)
                                    <option class="thana thana{{$tha->upazila_id}}" value="{{ $tha->id }}">{{ $tha->name_bn }}</option>
                                    @empty
                                    <p>No Thana found</p>
                                    @endforelse
                                </select>
                                {{-- <span class="bt-flabels__error-desc">থানা নির্বাচন করুন....</span>

                                <span id="app_upazila_id_feedback" class="help-block"></span> --}}
                            </div>

                            <label for="app_union_id" class="col-sm-1 control-label">ওয়ার্ড<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-3 bt-flabels__wrapper" id="app_union_id_status">
                                <select name="ward_no_id" class="form-control" id="words">
                                    <option value="" selected="selected">ওয়ার্ড নং</option>
                                    @forelse ($ward as $w)
                                    <option value="{{ $w->id }}">{{ $w->ward_name_bn }}</option>
                                    @empty
                                    <p>No Ward found</p>
                                    @endforelse
                                </select>
                                {{-- <span class="bt-flabels__error-desc">ওয়ার্ড নং নির্বাচন করুন....</span>

                                <span id="app_union_id_feedback" class="text-danger"></span> --}}
                            </div>

                        </div>
                    </div>

                    <div class="input-group">
                        <input type="search" id="search-data" class="form-control"
                            placeholder="ন্যাশনাল আইডি নং অথবা জন্ম নিবন্ধন নং অথবা পাসপোর্ট নং অথবা পিন নং দিন ইংরেজিতে">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button" id="search-btn">
                                {{-- <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> --}}
                                <span class="ion-ios-search" aria-hidden="true"></span> Search
                            </button>
                        </span>
                    </div>


                </div>

                <div class="col-md-3 text-center">
                    <label for="cropzee-input">
                        <div class="image-overlay mt-5">
                                <input type="file" name="image" value="" data-default-file="{{ asset('uploads/disablity/default.jpg') }}" class="form-control dropify">
                            <div class="overlay">
                                <div class="text">ছবি দিতে ক্লিক করুন</div>
                            </div>
                        </div>
                    </label>
                    {{-- <input id="cropzee-input" style="display: none;" name="photo" type="file" accept="image/*"> --}}
                </div>
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-12">
                    <div class="row form-group">
                        <label for="name_en" class="col-sm-3 control-label"> নাম (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="name_en_status">
                            <input type="text" name="name_en" id="name_en" value=""
                                class="form-control" placeholder="Full Name"/>
                            {{-- <span class="bt-flabels__error-desc">নাম দিন ইংরেজিতে....</span>

                            <span id="name_en_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="name_bn" class="col-sm-3 control-label"> নাম (বাংলায়) <span class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="name_bn_status">
                            <input type="text" name="name_bn" id="name_bn" value=""
                                class="form-control" placeholder="পূর্ণ নাম" />
                            {{-- <span class="bt-flabels__error-desc">নাম দিন বাংলায়....</span>

                            <span id="name_bn_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-12 text-center" id="national_id_error">

                </div> --}}

                <div class="col-md-12">
                    <div class="row form-group">
                        <label for="national_id" class="col-sm-3 control-label">ন্যাশনাল আইডি (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="nid_status">
                            <input type="text" name="national_id" id="national_id" value="" class="form-control" placeholder="1616623458679011" />
                            {{-- <span class="bt-flabels__error-desc">ন্যাশনাল আইডি নং দিন ইংরেজিতে....</span>

                            <span id="nid_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="birth_registration" class="col-sm-3 control-label">জন্ম নিবন্ধন নং (ইংরেজিতে) </label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="birth_id_status">
                            <input type="text" name="birth_registration" id="birth_registration" value=""
                                class="form-control" placeholder="1919623458679011" />
                            {{-- <span class="bt-flabels__error-desc">জন্ম নিবন্ধন নং দিন ইংরেজিতে....</span>

                            <span id="birth_id_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row form-group">

                        <label for="passport_no" class="col-sm-3 control-label">পাসপোর্ট নং (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="passport_no_status">
                            <input type="text" name="passport_no" id="passport_no" value=""
                                class="form-control" max="17" placeholder="1616623458679011" />
                            {{-- <span class="bt-flabels__error-desc">পাসপোর্ট নং দিন ইংরেজিতে....</span>

                            <span id="passport_no_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="birth_date" class="col-sm-3 control-label">জন্ম তারিখ <span>*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="birth_date_status">
                            <input type="text" name="birth_date" id="birth_date"  class="form-control datepicker" placeholder="জন্ম তারিখ">
                            {{-- <span class="bt-flabels__error-desc">জন্ম তারিখ দিন....</span>

                            <span id="birth_date_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row form-group">
                        <label for="father_name_en" class="col-sm-3 control-label">পিতার নাম (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="father_name_en_status">
                            <input type="text" name="father_name_en" id="father_name_en"
                                value="" class="form-control" placeholder="Father's Name" />
                            {{-- <span class="bt-flabels__error-desc">পিতার নাম দিন ইংরেজিতে....</span>

                            <span id="father_name_en_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="father_name_bn" class="col-sm-3 control-label">পিতার নাম (বাংলায়)
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="father_name_bn_status">
                            <input type="text" name="father_name_bn" id="father_name_bn"
                                value="" class="form-control" placeholder="পিতার নাম"/>
                            {{-- <span class="bt-flabels__error-desc">পিতার নাম দিন বাংলায়....</span>

                            <span id="father_name_bn_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row form-group">
                        <label for="mother_name_en" class="col-sm-3 control-label">মাতার নাম (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="mother_name_en_status">
                            <input type="text" name="mother_name_en" id="mother_name_en"
                                value="" class="form-control" placeholder="Mother's Name" />
                            {{-- <span class="bt-flabels__error-desc">মাতার নাম দিন ইংরেজিতে....</span>

                            <span id="mother_name_en_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="mother_name_bn" class="col-sm-3 control-label">মাতার নাম (বাংলায়)
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="mother_name_bn_status">
                            <input type="text" name="mother_name_bn" id="mother_name_bn"
                                value="" class="form-control" placeholder="মাতার নাম"/>
                            {{-- <span class="bt-flabels__error-desc">মাতার নাম দিন বাংলায়....</span>

                            <span id="mother_name_bn_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-md-12">
                    <div class="row form-group">
                        <label for="occupation" class="col-sm-3 control-label">পেশা</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="occupation_status">
                            <input type="text" name="occupation" id="occupation" value=""
                                class="form-control" placeholder="পেশা দিন" />
                            {{-- <span class="bt-flabels__error-desc">পেশা দিন ইংরেজিতে/বাংলায়....</span>

                            <span id="occupation_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="resident" class="col-sm-3 control-label">বাসিন্দা <span class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="resident_status">
                            <select name="resident" id='resident' class="form-control" selected="selected">
                                <option value=''>চিহ্নিত করুন</option>
                                <option value='1' >অস্থায়ী</option>
                                <option value='2' >স্থায়ী</option>
                            </select>
                            {{-- <span class="bt-flabels__error-desc">অনুগ্রহ করে নির্বাচন করুন....</span>

                            <span id="resident_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row form-group">
                        <label for="educational_qualification" class="col-sm-3 control-label">শিক্ষাগত যোগ্যতা</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="educational_qualification_status">
                            <input type="text" name="educational_qualification" id="educational_qualification"
                                value="" class="form-control" placeholder="শিক্ষাগত যোগ্যতা দিন" />
                            {{-- <span class="bt-flabels__error-desc">শিক্ষাগত যোগ্যতা দিন ইংরেজিতে/বাংলায়....</span>

                            <span id="educational_qualification_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="religion" class="col-sm-3 control-label">ধর্ম <span class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="religion_status">
                            <select name="religion" id="religion" selected="selected" class="form-control">
                                <option value=''>চিহ্নিত করুন</option>
                                <option value='1' >ইসলাম</option>
                                <option value='2' >হিন্দু</option>
                                <option value='3' >বৌদ্ধ ধর্ম</option>
                                <option value='4' >খ্রিস্ট ধর্ম</option>
                                <option value='5' >অন্যান্য</option>
                            </select>
                            {{-- <span class="bt-flabels__error-desc">অনুগ্রহ করে নির্বাচন করুন....</span>

                            <span id="religion_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-md-12" id="genderErr">

                    <div class="row form-group">
                        <label class="col-sm-3 control-label">লিঙ্গ <span class="text-danger">*</span></label>
                        <div class="col-sm-3" id="gender_status">
                            <label class="radio-inline gender"><input type="radio" name="gender" id="gender_1" value="1"/>পুরুষ</label>
                            <label class="radio-inline gender"><input type="radio" name="gender" id="gender_2" value="2"/>মহিলা</label>
                            <label class="radio-inline gender"><input type="radio" name="gender" id="gender_3" value="3"/>অন্যান্য</label>
                            {{-- <span id="gender_feedback" class="help-block"></span> --}}
                        </div>
                        <label for="marital_status" class="col-sm-3 control-label">বৈবাহিক সম্পর্ক
                            <span class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="marital_status_status">
                            <select name="marital_status" id="marital_status" class="form-control" selected="selected">
                                <option value="">চিহ্নিত করুন</option>
                                <option value='1' >অবিবাহিত</option>
                                <option value='2' >বিবাহিত</option>
                                <option value='3' >তালাক প্রাপ্ত</option>
                                <option value='4' >বিধবা</option>
                                <option value='5' >অন্যান্য</option>
                            </select>
                            {{-- <span class="bt-flabels__error-desc">অনুগ্রহ করে নির্বাচন করুন....</span>

                            <span id="marital_status_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-12" id="wife" style="display: none;">
                    <div class="row form-group">
                        <label for="Wife-name-english" class="col-sm-3 control-label">স্ত্রীর নাম (ইংরেজিতে) </label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="wife_name_en_status">
                            <input type="text" name="wife_name_en" id="wife_name_en" class="form-control"
                                data-parsley-pattern="^[a-zA-Z. ]+$" data-parsley-trigger="keyup"
                                placeholder="Name of Wife" />
                            <span class="bt-flabels__error-desc">স্ত্রীর নাম দিন ইংরেজিতে....</span>

                            <span id="wife_name_en_feedback" class="help-block"></span>
                        </div>

                        <label for="Wife-name-bangla" class="col-sm-3 control-label">স্ত্রীর নাম (বাংলায়)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="wife_name_bn_status">
                            <input type="text" name="wife_name_bn" id="wife_name_bn" class="form-control"
                                placeholder="স্ত্রীর নাম" />
                            <span class="bt-flabels__error-desc">স্ত্রীর নাম দিন বাংলায়....</span>

                            <span id="wife_name_bn_feedback" class="help-block"></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" id="husband" style="display: none;">
                    <div class="row form-group">
                        <label for="husband_name_en" class="col-sm-3 control-label">স্বামীর নাম (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="husband_name_en_status">
                            <input type="text" name="husband_name_en" id="husband_name_en" class="form-control"
                                data-parsley-pattern="^[a-zA-Z. ]+$" data-parsley-trigger="keyup"
                                placeholder="Name of Husband" />
                            <span class="bt-flabels__error-desc">স্বামীর নাম দিন ইংরেজিতে....</span>

                            <span id="husband_name_en_feedback" class="help-block"></span>
                        </div>

                        <label for="husband_name_bn" class="col-sm-3 control-label"> স্বামী নাম (বাংলায়)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="husband_name_bn_status">
                            <input type="text" name="husband_name_bn" id="husband_name_bn" class="form-control"
                                placeholder="স্বামী নাম" />
                            <span class="bt-flabels__error-desc">স্বামী নাম দিন বাংলায়....</span>

                            <span id="husband_name_bn_feedback" class="help-block"></span>
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-sm-12 text-center">
                    <h4 class="app-heading mb-5">
                        <strong>বর্তমান ঠিকানা</strong>
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="present_village_en" class="col-sm-3 control-label">গ্রাম/মহল্লা (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_village_en_status">
                            <input type="text" name="present_village_en" id="present_village_en"
                                value="" class="form-control" placeholder="" />
                            {{-- <span class="bt-flabels__error-desc">গ্রাম/মহল্লা দিন ইংরেজিতে....</span>

                            <span id="present_village_en_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="present_village_bn" class="col-sm-3 control-label">গ্রাম/মহল্লা (বাংলায়) <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_village_bn_status">
                            <input type="text" name="present_village_bn" id="present_village_bn"
                                value="" class="form-control" placeholder="গ্রাম/মহল্লা" />
                            {{-- <span class="bt-flabels__error-desc">গ্রাম/মহল্লা দিন বাংলায়....</span>

                            <span id="present_village_bn_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="present_rbs_en" class="col-sm-3 control-label">রোড/ব্লক/সেক্টর (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_rbs_en_status">
                            <input type="text" name="present_rbs_en" id="present_rbs_en"
                                value="" class="form-control" placeholder="রোড/ব্লক/সেক্টর"/>
                            {{-- <span class="bt-flabels__error-desc">রোড/ব্লক/সেক্টর দিন ইংরেজিতে....</span>

                            <span id="present_rbs_en_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="present_rbs_bn" class="col-sm-3 control-label">রোড/ব্লক/সেক্টর (বাংলায়)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_rbs_bn_status">
                            <input type="text" name="present_rbs_bn" id="present_rbs_bn"
                                value="" class="form-control" placeholder="রোড/ব্লক/সেক্টর "/>
                            {{-- <span class="bt-flabels__error-desc">রোড/ব্লক/সেক্টর দিন বাংলায়....</span>

                            <span id="present_rbs_bn_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="present_holding_no" class="col-sm-3 control-label">হোল্ডিং নং</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_holding_no_status">
                            <input type="text" name="present_holding_no" id="present_holding_no" value="" class="form-control" placeholder="হোল্ডিং নং দিন ইংরেজিতে"/>
                            {{-- <span class="bt-flabels__error-desc">হোল্ডিং নং দিন ইংরেজিতে....</span>

                            <span id="present_holding_no_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="present_ward_no" class="col-sm-3 control-label">ওয়ার্ড নং <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_ward_no_status">

                            <select name="present_ward_no" class="form-control" id="words">
                                <option value="" selected="selected">ওয়ার্ড নং</option>
                                @forelse ($ward as $w)
                                <option value="{{ $w->id }}">{{ $w->ward_name_bn }}</option>
                                @empty
                                <p>No Ward found</p>
                                @endforelse
                            </select>
                            {{-- <span class="bt-flabels__error-desc">ওয়ার্ড নং দিন ইংরেজিতে....</span>

                            <span id="present_ward_no_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="present_district_id" class="col-sm-3 control-label">জেলা <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_district_id_status">
                            <select onchange="show_thana(this.value)" name="district_id" class="form-control" required="" id="districtid">
                                <option value="">জেলা নির্বাচন করুন</option>
                                @forelse($district as $dist)
                                <option value="{{ $dist->id }}">{{ $dist->name }}</option>
                                @empty
                                <p>No District found</p>
                                @endforelse
                            </select>
                            {{-- <span class="bt-flabels__error-desc">জেলা নির্বাচন করুন....</span>

                            <span id="present_district_id_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="present_district" class="col-sm-3 control-label">জেলা <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" disabled id="present_district" value="জেলা" class="form-control"
                                placeholder="" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="present_upazila_id" class="col-sm-3 control-label">উপজেলা/থানা <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_upazila_id_status">
                            <select name="present_upazila_id" class="form-control" required="" id="present_upazila_id">
                                <option value="">থানা</option>
                                @forelse ($thana as $tha)
                                <option class="thana thana{{$tha->upazila_id}}" value="{{ $tha->id }}">{{ $tha->name }}</option>
                                @empty
                                <p>No Thana found</p>
                                @endforelse
                            </select>
                            {{-- <select
                                onchange="getLocation($(this).val(), 'present_upazila', 'present_post_office_append', 'present_postoffice_id', 'present_postoffice', 6 )"
                                name="present_upazila_id" id="present_upazila_id" class="form-control"
                                data-parsley-required>
                                <option value="" id="present_upazila_append">চিহ্নিত করুন</option>
                                <option value="" id="present_upazila_append">চিহ্নিত করুন</option>
                            </select>
                            <span class="bt-flabels__error-desc">উপজেলা/থানা নির্বাচন করুন....</span>

                            <span id="present_upazila_id_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="present_upazila" class="col-sm-3 control-label">উপজেলা/থানা <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" disabled id="present_upazila" value="উপজেলা/থানা" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="present_postoffice_id" class="col-sm-3 control-label">পোষ্ট অফিস <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="present_postoffice_id_status">
                            <select name="present_postoffice_id" id="present_postoffice_id" class="form-control">
                                <option value="">পোষ্ট অফিস নির্বাচন করুন</option>
                                <option value="1">কমলাপুর</option>
                                <option value="2">শ্যামলী</option>
                                <option value="3">শাহবাগ</option>
                            </select>
                            {{-- <select onchange="getLocation($(this).val(), 'present_postoffice')"
                                name="present_postoffice_id" id="present_postoffice_id" class="form-control"
                                data-parsley-required>
                                <option value="" id="present_post_office_append">চিহ্নিত করুন</option>
                            </select>
                            <span class="bt-flabels__error-desc">পোষ্ট অফিস নির্বাচন করুন....</span>

                            <span id="present_postoffice_id_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="present_postoffice" class="col-sm-3 control-label">পোষ্ট অফিস <span class="text-danger">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" disabled id="present_postoffice" value="পোষ্ট অফিস" class="form-control"
                                placeholder="" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-sm-12 text-center">
                    <h4 class="app-heading">
                        <strong>স্থায়ী ঠিকানা</strong>
                    </h4>
                    <p style="font-size:15px; font-weight:normal;padding-top:10px;" id="addressCheck">
                        <input type="checkbox" name="permanentBtn" id="permanentBtn"/>ঠিকানা একই হলে টিক দিন
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="permanent_village_en" class="col-sm-3 control-label">গ্রাম/মহল্লা (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_village_en_status">
                            <input type="text" name="permanent_village_en" id="permanent_village_en"
                                value="" class="form-control" placeholder="গ্রাম/মহল্লা দিন ইংরেজিতে"/>
                            {{-- <span class="bt-flabels__error-desc">গ্রাম/মহল্লা দিন ইংরেজিতে....</span>

                            <span id="permanent_village_en_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="permanent_village_bn" class="col-sm-3 control-label">গ্রাম/মহল্লা (বাংলায়) <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_village_bn_status">
                            <input type="text" name="permanent_village_bn" id="permanent_village_bn"
                                value="" class="form-control" placeholder="গ্রাম/মহল্লা দিন বাংলায়"/>
                            {{-- <span class="bt-flabels__error-desc">গ্রাম/মহল্লা দিন বাংলায়....</span>

                            <span id="permanent_village_bn_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="permanent_rbs_en" class="col-sm-3 control-label">রোড/ব্লক/সেক্টর (ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_rbs_en_status">
                            <input type="text" name="permanent_rbs_en" id="permanent_rbs_en"
                                value="" class="form-control" placeholder="রোড/ব্লক/সেক্টর দিন ইংরেজিতে"/>
                            {{-- <span class="bt-flabels__error-desc">রোড/ব্লক/সেক্টর দিন ইংরেজিতে....</span>

                            <span id="permanent_rbs_en_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="permanent_rbs_bn" class="col-sm-3 control-label">রোড/ব্লক/সেক্টর (বাংলায়)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_rbs_bn_status">
                            <input type="text" name="permanent_rbs_bn" id="permanent_rbs_bn"
                                value="" class="form-control" placeholder="রোড/ব্লক/সেক্টর দিন বাংলায়"/>
                            {{-- <span class="bt-flabels__error-desc">রোড/ব্লক/সেক্টর দিন বাংলায়....</span>

                            <span id="permanent_rbs_bn_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="permanent_holding_no" class="col-sm-3 control-label">হোল্ডিং নং</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_holding_no_status">
                            <input type="text" name="permanent_holding_no" id="permanent_holding_no"
                                value="" class="form-control" placeholder="হোল্ডিং নং দিন ইংরেজিতে"/>
                            {{-- <span class="bt-flabels__error-desc">হোল্ডিং নং দিন ইংরেজিতে....</span>

                            <span id="permanent_holding_no_feedback" class="help-block"></span> --}}
                        </div>
                        <label for="permanent_ward_no" class="col-sm-3 control-label">ওয়ার্ড নং <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_ward_no_status">
                            <select name="permanent_ward_no" class="form-control" id="permanent_ward_no">
                                <option value="" selected="selected">ওয়ার্ড নং</option>
                                @forelse ($ward as $w)
                                <option value="{{ $w->id }}">{{ $w->ward_name_bn }}</option>
                                @empty
                                <p>No Ward found</p>
                                @endforelse
                            </select>

                                {{-- <select name="permanent_ward_no" id="permanent_ward_no" class="form-control" autocomplete="permanent_ward_no" autofocus data-parsley-type="number" data-parsley-trigger="keyup" data-parsley-required >
                                    <option value="" selected=&quot;selected&quot;>চিহ্নিত করুন</option>
                                    <option value='1' >1</option>
                                    <option value='2' >2</option>
                                    <option value='3' >3</option>
                                    <option value='4' >4</option>
                                    <option value='5' >5</option>
                                    <option value='6' >6</option>
                                    <option value='7' >7</option>
                                    <option value='8' >8</option>
                                    <option value='9' >9</option>
                                </select>
                            <span class="bt-flabels__error-desc">ওয়ার্ড নং দিন ইংরেজিতে....</span>

                            <span id="permanent_ward_no_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="permanent_district_id" class="col-sm-3 control-label">জেলা <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_district_id_status">
                            <select onchange="show_thana(this.value)" name="permanent_district_id" class="form-control" required="" id="permanent_district_id">
                                <option value="">জেলা নির্বাচন করুন</option>
                                @forelse($district as $dist)
                                <option value="{{ $dist->id }}">{{ $dist->name }}</option>
                                @empty
                                <p>No District found</p>
                                @endforelse
                            </select>
                            {{-- <select
                                onchange="getLocation($(this).val(), 'permanent_district', 'permanent_upazila_append', 'permanent_upazila_id', 'permanent_upazila', 3 )"
                                name="permanent_district_id" id="permanent_district_id" class="form-control"
                                data-parsley-required>
                                <option value="" class="district_append">-আপনার জেলা নির্বাচন করুন-</option>
                                <option value="9">Comilla</option>
                                <option value="10">Feni</option>
                                <option value="11">Brahmanbaria</option>
                                <option value="5444">Pathannagar</option>
                                <option value="5507">Dhaka</option>
                            </select>
                            <span class="bt-flabels__error-desc">জেলা নির্বাচন করুন....</span>

                            <span id="permanent_district_id_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="permanent_district" class="col-sm-3 control-label">জেলা <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" disabled id="permanent_district" value="জেলা" class="form-control"
                                placeholder="" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="permanent_upazila_id" class="col-sm-3 control-label">উপজেলা/থানা <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_upazila_id_status">
                            <select name="permanent_upazila_id" class="form-control" required="" id="permanent_upazila_id">
                                <option value="">থানা</option>
                                @forelse ($thana as $tha)
                                <option class="thana thana{{$tha->upazila_id}}" value="{{ $tha->id }}">{{ $tha->name }}</option>
                                @empty
                                <p>No Thana found</p>
                                @endforelse
                            </select>
                            {{-- <select
                                onchange="getLocation($(this).val(), 'permanent_upazila', 'permanent_post_office_append', 'permanent_postoffice_id', 'permanent_postoffice', 6 )"
                                name="permanent_upazila_id" id="permanent_upazila_id" class="form-control"
                                data-parsley-required>
                                <option value="" id="permanent_upazila_append">চিহ্নিত করুন</option>
                            </select>
                            <span class="bt-flabels__error-desc">উপজেলা/থানা নির্বাচন করুন....</span>

                            <span id="permanent_upazila_id_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="permanent_upazila" class="col-sm-3 control-label">উপজেলা/থানা <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" disabled id="permanent_upazila" value="উপজেলা/থানা" class="form-control"
                                placeholder="" />
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="permanent_postoffice_id" class="col-sm-3 control-label">পোষ্ট অফিস <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="permanent_postoffice_id_status">
                            <select name="permanent_postoffice_id" id="present_postoffice_id" class="form-control">
                                <option value="">পোষ্ট অফিস নির্বাচন করুন</option>
                                <option value="1">কমলাপুর</option>
                                <option value="2">শ্যামলী</option>
                                <option value="3">শাহবাগ</option>
                            </select>
                            {{-- <select onchange="getLocation($(this).val(), 'permanent_postoffice')"
                                name="permanent_postoffice_id" id="permanent_postoffice_id" class="form-control"
                                data-parsley-required>
                                <option value="" id="permanent_post_office_append">চিহ্নিত করুন</option>
                            </select>
                            <span class="bt-flabels__error-desc">পোষ্ট অফিস নির্বাচন করুন....</span>

                            <span id="permanent_postoffice_id_feedback" class="help-block"></span> --}}
                        </div>

                        <label for="permanent_postoffice" class="col-sm-3 control-label">পোষ্ট অফিস <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-3">
                            <input type="text" disabled id="permanent_postoffice" value="পোষ্ট অফিস"
                                class="form-control" placeholder="" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" style="margin-top: 50px;">
                <div class="col-sm-12" style="text-align:center;">
                    <h4 class="app-heading">
                        <strong>যোগাযোগের ঠিকানা</strong>
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="mobile" class="col-sm-3 control-label">মোবাইল <span class="text-danger">*</span></label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="mobile_status">
                            <input type="tel" name="mobile" id="mobile" value="" class="form-control" placeholder="ইংরেজিতে প্রদান করুন" />
                            {{-- <span class="bt-flabels__error-desc">১১ ডিজিটের মোবাইল নম্বর দিন....</span>

                            <span id="mobile_feedback" class="help-block"></span> --}}
                        </div>
                        <label for="email" class="col-sm-3 control-label">ইমেল </label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="email_status">
                            <input type="text" name="email" id="email" value="" class="form-control"  placeholder="example@gmail.com" />
                            {{-- <span class="bt-flabels__error-desc">অনুগ্রহ করে ভ্যালিড ই-মেইল দিন....</span>

                            <span id="email_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="row form-group">
                        <label for="comment_en" class="col-sm-3 control-label">মন্তব্য দিন(ইংরেজিতে)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="comment_en_status">
                            <textarea name="comment_en" class="form-control" rows="5" id="comment_en" placeholder="Examples: Freedom fighter children, widows, tribals ..... etc."></textarea>
                            {{-- <span class="bt-flabels__error-desc">মন্তব্য ৫০০ অক্ষরের নিচে লিখুন ইংরেজিতে....</span>

                            <span id="comment_en_feedback" class="help-block"></span> --}}
                        </div>
                        <label for="comment_bn" class="col-sm-3 control-label">মন্তব্য দিন (বাংলায়)</label>
                        <div class="col-sm-3 bt-flabels__wrapper" id="comment_bn_status">
                            <textarea name="comment_bn" class="form-control" rows="5" id="comment_bn" placeholder=" উদাহরন: মুক্তিযোদ্ধা সন্তান, বিধবা, উপজাতি .....ইত্যাদি "></textarea>
                            {{-- <span class="bt-flabels__error-desc">মন্তব্য ৫০০ অক্ষরের নিচে লিখুন বাংলায়....</span>

                            <span id="comment_bn_feedback" class="help-block"></span> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-bottom: 100px;">
                <div class="col-sm-offset-6 col-sm-6 button-style">
                    <input type="hidden" value="12" name="web" id="web" />

                    <input type="hidden" value="2" name="fiscal_id" />
                    <button type="submit" id="submitBtn" class="btn btn-primary">দাখিল করুন</button>
                </div>
            </div>
        </form>
    </div>
</section>

<script>

    $(document).ready(function(){
        $('.dist').hide();
        $('.thana').hide();
    })
   function show_district(e){
        $('.dist').hide();
        $('.dist'+e).show()
   }
   function show_thana(e){
       $('.thana').hide();
       $('.thana'+e).show();
   }



</script>

@endsection
