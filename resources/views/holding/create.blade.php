@extends('layout.app')
@section('pageTitle',trans('নতুন হোল্ডিং'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="card">
        <div class="row">
            <div class="col-3 offset-1">
                <label for="">ফরম নং -</label>
                <input class="form-control" type="text" placeholder="ফরম নং">
            </div>
            <div class="col-3 offset-1 float-right">
                <label for="">তারিখ :-</label>
                <input class="form-control datepicker" type="text" placeholder="মাস-দিন-বছর">
            </div>
        </div>
        <div class="row m-2">
            <label for="">বাড়ির প্রধানের নাম  :-</label>
            <input class="form-control" type="text"
            name="" id="" placeholder="বাড়ির প্রধানের নাম" required>
        </div>
        <div class="row m-2">
            <label for="">পিতার নাম :-</label>
            <input class="form-control" type="text"
            name="" id="" placeholder="পিতার নাম" required>
        </div>
        <div class="row m-2">
            <label for="">মাতার নাম :-</label>
            <input class="form-control" type="text"
            name="" id="" placeholder="মাতার নাম">
        </div>
        <div class="row m-2">
            <label for="">স্বামী/স্ত্রীর নাম :- </label>
            <input class="form-control" type="text"
            name="" id="" placeholder="পিতা/ স্বামী">
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">নতুন হোল্ডিং নম্বর :-</label>
                <input class="form-control"
                name="" id="" value=""  type="text" placeholder="নতুন হোল্ডিং নম্বর">
            </div>
            <div class="col-6 float-right">
                <label for="">আগের হোল্ডিং নম্বর  :-</label>
                <input class="form-control" type="text" name="" id="" value="" placeholder="আগের হোল্ডিং নম্বর">
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">গ্রাম/পাড়া/মহল্লা :-</label>
                <input class="form-control"
                name="" id="" value=""  type="text" placeholder="গ্রাম/পাড়া/মহল্লা">
            </div>
            <div class="col-6 float-right">
                <label for="">ওয়ার্ড নং :-</label>
                <input class="form-control" type="text" name="" id="" value="" placeholder="ওয়ার্ড নং">
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">জন্ম তারিখ :-</label>
                <input class="form-control datepicker"
                name="" id="" value=""  type="text" placeholder="">
            </div>
            <div class="col-6 float-right">
                <label for="">ভোটার আইডি নং :-</label>
                <input class="form-control" type="text" name="" id="" value="" placeholder="ভোটার আইডি নং">
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">মোবাইল নম্বর :-</label>
                <input class="form-control"
                name="" id="" value=""  type="text" placeholder="">
            </div>
            <div class="col-6 float-right">
                <label for="">ই-মেইল <small>(যদি থাকে)</small> :-</label>
                <input class="form-control" type="email" name="" id="" value="" placeholder=".....@mail.com">
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">বৈবাহিক অবস্থা :-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">বিবাহিত</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="marital_status" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">অবিবাহিত</label>
                </div>
            </div>
            <div class="col-6 float-right">
                <label for="">লিঙ্গের অবস্থা :-</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">পুরুষ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">মহিলা</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">হিজলা</label>
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">ডিজিটাল জন্মনিবন্ধন :-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="digital_birth_certificate" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="digital_birth_certificate" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">নাই</label>
                </div>
            </div>
            <div class="col-6">
                <label for="">পাকা বাথরুম:-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bathroom" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">নাই</label>
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">বিদেশে থাকে/প্রবাসী :-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="living_abroad" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="living_abroad" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">নাই</label>
                </div>
            </div>
            <div class="col-6">
                <label for="">বিদ্যুৎ সংযোগ:-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="power_connection" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="power_connection" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">নাই</label>
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">নলকূপ :-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tube_well" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tube_well" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">নাই</label>
                </div>
            </div>
            <div class="col-6">
                <label for="">ব্যাংক হিসেব:-  </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bank_account" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">আছে</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="bank_account" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">নাই</label>
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="">শিক্ষাগত যোগ্যতা :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">স্ব-শিক্ষিত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">প্রাথমিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">মাধ্যমিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">উচ্চ-মাধ্যমিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">উচ্চতর-ডিগ্রী</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="">পরিবারের সদস্য :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">পুরুষ সদস্য</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">নারী সদস্য</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">মোট সদস্য</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">একক পরিবার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">যৌথ পরিবার</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="">ধর্ম :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="inlineradio1" value="option1" />
                    <label class="form-check-label" for="inlineradio1">ইসলাম</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="inlineradio2" value="option2" />
                    <label class="form-check-label" for="inlineradio2">হিন্দু</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="inlineradio3" value="option3"/>
                    <label class="form-check-label" for="inlineradio3">বৌদ্ধ</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="inlineradio3" value="option3"/>
                    <label class="form-check-label" for="inlineradio3">খ্রিষ্টান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" name="religion" type="radio" id="inlineradio3" value="option3"/>
                    <label class="form-check-label" for="inlineradio3">অন্যান্য</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for=""> মোবাইল ব্যাংক:-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">নগদ</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">বিকাশ</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">রকেট</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">উপায়</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">অন্যান্য</label>
                </div>
            </div>

        </div>
        <div class="border border-2 m-2 p-3">
            {{-- <legend class="">সরকারি সুবিধা:-</legend> --}}
            <label for="">সরকারি সুবিধা:- </label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">ভিজিএফ কার্ড</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">বয়স্ক ভাতা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">মাতৃত্বকালীন ভাতা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">প্রতিবন্ধী ভাতা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">বিধবা ভাতা</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for=""> পারিবারিক অবস্থা :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">হতদরিদ্র</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">নিন্ম-মধ্যবৃত্ত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">মধ্যবৃত্ত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">উচ্চ-মধ্যবৃত্ত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">উচ্চবৃত্ত</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for=""> ডিজিটাল ডিভাইস :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">নরমাল মোবাইল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">স্মার্ট ফোন</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">কম্পিউটার/ল্যাপটপ</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ইন্টারনেট</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">টিভি</label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for=""> টেলিযোগাযোগ :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">টেলিটক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">গ্রামীন</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">এয়ারটেল/রবি</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">বাংলালিংক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">টিএনটি</label>
                </div>
            </div>

        </div>
        <div class="border border-2 m-2 p-3">
            <label for=""> পেশা বা আয়ের উৎস :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">চাকুরি<small>(সরকারি)</small></label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">চাকুরি<small>(বে-সরকারি)</small></label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ব্যবসা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">কৃষি</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">শিক্ষক</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">প্রকৌশলি</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">আইনজীবী</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">চিকিৎসক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">শ্রমিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">খাবার হোটেল</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">মৎস  খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">ক্ষুদ্র ও কুটির শিল্প</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">গবাদি পশুর খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">গাড়ী চালক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> ঠিকাদার</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">মাঝারি শিল্প</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">নারী উদ্যোক্তা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">হাঁস-মুরগির খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">প্রবাসী</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> অন্যান্য</label>
                </div>
            </div>

        </div>
        <div class="border border-2 m-2 p-3">
            <label for="">ব্যবসায়িক করের উৎস  :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">কৃষি খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">মৎস খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">দুগ্ধ খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">হাঁস-মুরগীর খামার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">গবাদি পশুর খামার</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">মুদির দোকান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">আর্থিক প্রতিষ্ঠান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ক্ষুদ্র ও কুটির শিল্প</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">মাঝারি শিল্প</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">খাবার হোটেল</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">প্রকৌশলী</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">আইনজীবি</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> চিকিৎসক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ক্লিনিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ঔষদের দোকান</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">আবাসিক হোটেল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">মিষ্টির দোকান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">বে-সরকারি হাসপাতাল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">বে-সরকারি স্কুল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> কোচিং সেন্টার</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">খাবারের হোটেল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">হিমাগার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ধান ভাঙানোর কল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">আটার কল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">তেলের কল</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">স’মিল</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">বিউটি পার্লার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">হেয়ার কাট সেলুন</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">লন্ড্রীর দোকান</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ইঞ্জিনিয়রিং ফার্ম</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">শিল্প কারখানা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">ইট ভাটা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> কনসালটেন্সি ফার্ম</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">গুদাম</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">রিক্মার মালিক</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">বাজার ইজারা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">টেম্পের মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">বাসের মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">ট্রাকের মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> পরিবহন এজেন্সী</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">নৌযানের মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">অটো রিক্সার মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">স্টীমার/কার্গোর মালিক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">শিশু পার্ক</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> বিনোদন পার্ক</label>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">পশু জবাইয়</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">১ম শ্রেণীর ঠিকাদার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">২য় শ্রেণীর ঠিকাদার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">৩য় শ্রেণীর ঠিকাদার</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"> অন্যান্য</label>
                </div>
            </div>
            <div class="row m-2">
                <label for="" class="col-sm-2 offset-2 col-form-label text-end">করের পরিমান :-</label>
                <div class="col-sm-6">
                    <input type="text" value="" class="form-control"
                        placeholder="করের পরিমান" name="">
                </div>টাকা
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="">অন্যান্য করের উৎস :-</label>
            <div class="row m-2">
                <div class="col-6">
                    <input type="checkbox">
                    <input name="" id="" value=""  type="text" placeholder="অন্যান্য কর">
                </div>
                <div class="col-6 float-right">
                    <label for="">করের পরিমান  :-</label>
                    <input type="text" name="" id="" value="" placeholder="করের পরিমান"> টাকা
                </div>
            </div>
        </div>
        <div class="row border border-2 m-2 p-3">
            <label for=""> বসত বাড়ির ধরন :-</label>
            <div class="row m-2">
                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" />
                    <label class="form-check-label" for="inlineCheckbox1">কাচা-ঘর</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" />
                    <label class="form-check-label" for="inlineCheckbox2">টিনসেট</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">আধা-পাকা</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3">পাকা ইমারত</label>
                </div>

                <div class="col-2">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"/>
                    <label class="form-check-label" for="inlineCheckbox3"></label>
                </div>
            </div>

        </div>
        <div class="row border border-2 m-2 p-3">
            <label for="">হোল্ডিং ট্যাক্স :-</label>
            <div class="row">
                <div class="col-6">
                    <label for="">বাড়ির আনুমানিক দাম :-</label>
                    <input name="" id="" value=""  type="text" placeholder=""> টাকা
                </div>
                <div class="col-6 float-right">
                    <label for="">বার্ষিক করযোগ্য মূল্য :-</label>
                    <input type="text" name="" id="" value="" placeholder=""> টাকা
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="">বাড়ির করযোগ্য মূল্য :-</label>
                    <input
                    name="" id="" value=""  type="text" placeholder=""> টাকা
                </div>
                <div class="col-6 float-right">
                    <label for="">বাষিক করের পরিমান :-</label>
                    <input type="text" name="" id="" value="" placeholder=""> টাকা
                </div>
            </div>
        </div>
        <div class="row m-2 border border-2 p-3">
            <label for="">সর্বমোট ট্যাক্স :-</label>
            <label for="" class="col-sm-6 col-form-label text-end">হোল্ডিং ট্যাক্স + ব্যাবসায়িক ট্যাক্স + অন্যান্য ট্যাক্স :-</label>
            <div class="col-sm-4">
                <input type="text" value="" class="form-control"
                    placeholder="করের পরিমান" name="">
            </div>টাকা
        </div>
        <div class="row border border-2 m-2 p-3">
            <div class="col-6">
                <label for="">তথ্য প্রদানকারীর স্বাক্ষর :-</label>
                <input class="form-control"
                name="" id="" value=""  type="file" placeholder="">
            </div>
            <div class="col-6 float-right">
                <label for="">তথ্য সংগ্রহকারীর স্বাক্ষর :-</label>
                <input class="form-control" type="file" name="" id="" value="" placeholder="">
            </div>
        </div>
    </div>
</section>
<!-- Bordered table end -->

@endsection
