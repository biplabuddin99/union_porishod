<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>হোল্ডিং তথ্য সংগ্রহ ফরম</title>
    <style>
        body{
            font-size: 14px;
        }
        .wrapper{
            width: 700px;
            margin: auto;
        }
        .photo{
            position: absolute;
            padding-left: 130px;
            padding-top: 8px;
        }
        .mujib{
            position: absolute;
            padding-left: 180px;
            padding-top: 8px;
        }
        .headcontent{
            text-align: center;
            padding-left: 80px;
            padding-top: 0.1px;
            /* margin-top: 20px; */
            position: relative;
        }
        .headbg{
            border-radius: 50px ;
            border: 1px solid red;
            padding: 5px;
            width: 200px;
            color: rgb(32, 45, 228);
        }
        .formno{
            width: 50%;
            outline: 0;
            border-style: none;
        }
        .formnodiv{
            position: absolute;
            padding-left: 5px;
        }
        .datediv{
            position: relative;
            padding-left: 550px;
        }
        .infoinput{
            outline: 0;
            border-style: none;
        }
        .infodiv{
            position: relative;
            padding-left: 360px;
        }
        .hdate{
            width: 50%;
            outline: 0;
            border-style: none;
        }
        .binput{
            width: 96%;
        }
        .sinput{
            width: 8%;
            outline: 0;
            border-style: none;
        }
        .sbinput{
            outline: 0;
            border-style: none;
        }
        .sbsinput{
            width: 16%;
            outline: 0;
            border-style: none;
        }
        .fphoto{
            position: absolute;
        }
        .rightcontent{
            position: relative;
            padding-left: 18px;
        }
        .fhead{
            position: relative;
            margin: 0px;
        }
        .btn{
            color: rgb(251, 248, 255);
            background-color: rgb(65, 17, 236);
        }
        .image{
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
        }
        .imgreleted{
            position: relative;
        }
        @media print{
            .noprint{
            display:none;
        }
}
    </style>
</head>
<body>
    <a class="noprint" href="{{route(currentUser().'.allapplication.create')}}"><button class="btn">Back</button></a>
    <div class="wrapper">
        <div class="header" >
            <div class="photo">
                <img src="{{ asset('logo/logo-01.png') }}" width="80px" height="80px" alt="Logo">
            </div>
            <div class="headcontent">
                <img class="mujib" src="{{ asset('logo/mujib_logo-01.png') }}" width="80px" height="80px" alt="Logo">
                <h5 style="margin-top: 20px; margin-bottom: 5px; color: rgb(226, 125, 31);">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h5>
                <h3 style="margin: 5px; color: rgb(23, 36, 158);">চিরাম ইউনিয়ন পরিষদ, বারহাট্টা, নেত্রকোণা</h3>
                <h5 style="margin: 5px; color: rgb(226, 125, 31);">bdgl.online/chhiramup</h5>
                <h4 class="headbg" style="margin: auto;">আবেদন হোল্ডিং নম্বর</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>আবেদন নং :</b><input class="formno" value="{{ $hold->id }}" type="text"></div>
            <div class="datediv"><b>তারিখ :</b><input class="hdate" value="{{ $hold->holding_date }}" type="text"></div>
        </div>
        <div style="position: relative; margin-top: 15px;">
            <table class="imgreleted" style="width: 84%;min-height:105px;">
                <tr>
                    <th style="width: 30%; text-align: left;">আবেদনকারীর নাম </th>
                    <td><input type="text" value="{{ $hold->head_household }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পিতার নাম </th>
                    <td><input type="text" value="{{ $hold->father_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম </th>
                    <td><input type="text" value="{{ $hold->mother_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">স্বামী/স্ত্রীর নাম </th>
                    <td><input type="text" value="{{ $hold->husband_wife }}" class="binput"></td>
                </tr>
            </table>
            <div class="image">
                <img height="100px" width="100px" src="{{ asset('uploads/holding/'.$hold->image)}}" alt="No IMAGE">
            </div>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ </th>
                    <td><input type="text" value="{{ $hold->birth_date }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">লিঙ্গের অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->gender == 1 ) পুরুষ @elseif ($hold->gender == 2 )মহিলা @elseif ($hold->gender == 3 )তৃতীয় লিঙ্গ @endif </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ভোটার আইডি নং </th>
                    <td><input type="text" value="{{ $hold->voter_id_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জন্ম নিবন্ধন আইডি </th>
                    <td><input type="text" value="{{ $hold->birth_registration_id }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মুক্তিযোদ্ধা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->freedom_fighter == 1 ) বীর মুক্তিযোদ্ধা @elseif ($hold->freedom_fighter == 2 )বীরাঙ্গনা @elseif ($hold->freedom_fighter == 3 )অন্যান্য @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ধর্ম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($hold->religion == 1 ) ইসলাম @elseif ($hold->religion == 2 )হিন্দু @elseif ($hold->religion == 3 )বৌদ্ধ@elseif ($hold->religion == 4 )খ্রিষ্টান@elseif ($hold->religion == 5 )উপজাতি @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল নম্বর </th>
                    <td><input type="text" value="{{ $hold->phone }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">শিক্ষাগত যোগ্যতা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($hold->edu_qual == 1 ) স্ব-শিক্ষিত @elseif ($hold->edu_qual == 2 )প্রাথমিক @elseif ($hold->edu_qual == 3 )মাধ্যমিক@elseif ($hold->edu_qual == 4 )উচ্চ-মাধ্যমিক@elseif ($hold->edu_qual == 5 )উচ্চতর-ডিগ্রী @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ই-মেইল(যদি থাকে)</th>
                    <td><input type="text" value="{{ $hold->email }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পেশা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">
                        @if ($hold->source_income ==1)
                        শিক্ষক
                        @elseif ($hold->source_income ==2)
                        শিক্ষার্থী
                        @elseif ($hold->source_income ==3)
                        সরকারি চাকুরীজীবি
                        @elseif ($hold->source_income ==4)
                        বে-সরকারি চাকুরীজীবি
                        @elseif ($hold->source_income ==5)
                        গৃহীনি
                        @elseif ($hold->source_income ==6)
                        কৃষক
                        @elseif ($hold->source_income ==7)
                        ব্যবসা
                        @elseif ($hold->source_income ==8)
                        প্রকৌশলি
                        @elseif ($hold->source_income ==9)
                        আইনজীবী
                        @elseif ($hold->source_income ==10)
                        চিকিৎসক
                        @elseif ($hold->source_income ==11)
                        সেবিকা
                        @elseif ($hold->source_income ==12)
                        দলিল লেখক
                        @elseif ($hold->source_income ==13)
                        শ্রমিক
                        @elseif ($hold->source_income ==14)
                        ঠিকাদার
                        @elseif ($hold->source_income ==15)
                        মৎস চাষী
                        @elseif ($hold->source_income ==16)
                        গাড়ি চালক
                        @elseif ($hold->source_income ==17)
                        প্রবাসী
                        @elseif ($hold->source_income ==18)
                        অন্যান্য
                        @endif
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বৈবাহিক অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->marital_status == 1 ) বিবাহিত @else অবিবাহিত @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইন্টারনেট সংযোগ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->internet_connection == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">নলকূপ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->tube_well == 1 ) আছে @else নাই @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডিসলাইন সংযোগ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->disline_connection == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বাথরুম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->paved_bathroom == 1 ) কাঁচা @else পাকা @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">আর্সেনিকমুক্ত</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->arsenic_free == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বাড়ির ধরন</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->residence_type == 1 ) কাঁচাঘর @elseif ($hold->residence_type ==2)টিনসেট @elseif ($hold->residence_type ==3)আধা-পাঁকা @elseif ($hold->residence_type ==4)পাঁকা-ইমারত @elseif($hold->residence_type ==5)২য় তলা বাড়ী @elseif($hold->residence_type ==6)৩য় তলা বাড়ী@endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির রুম/ঘর</th>
                    <td><input type="text" value="{{ $hold->house_room }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পারিবারিক অবস্থা</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->family_status == 1 ) হতদরিদ্র @elseif ($hold->family_status ==2)নিন্ম-মধ্যবৃত্ত @elseif ($hold->family_status ==3)মধ্যবৃত্ত @elseif ($hold->family_status ==4)উচ্চ-মধ্যবৃত্ত @elseif($hold->family_status ==5)উচ্চবৃত্ত @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির হেল্ডিং নম্বর</th>
                    <td><input type="text" value="{{ $hold->previous_holding_no }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ডাকঘর </th>
                    <td><input type="text" value="{{ $hold->post_office }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জেলা </th>
                    <td><input type="text" value="{{ $hold->district_id }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">উপজেলা/থানা</th>
                    <td><input type="text" value="{{ $hold->upazila_id }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইউনিয়ন পরিষদের নাম </th>
                    <td><input type="text" value="{{ $hold->union_id }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ওয়ার্ড </th>
                    <td><input type="text" value="{{ $hold->ward_id }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">গ্রামের নাম</th>
                    <td><input type="text" value="{{ $hold->village_name }}" class="binput"></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল ব্যাংক </th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input type="checkbox" value="1" @if(in_array(1, $Mobile)) checked @endif><label for="">নগদ</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="2" @if(in_array(2, $Mobile)) checked @endif><label for="">বিকাশ</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="3" @if(in_array(3, $Mobile)) checked @endif><label for="">রকেট</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="4" @if(in_array(4, $Mobile)) checked @endif><label for="">উপায়</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="5" @if(in_array(5, $Mobile)) checked @endif><label for="">অন্যান্য</label>
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ডিজিটাল ডিভাইস</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input type="checkbox" value="1" @if(in_array(1, $Digital_devices)) checked @endif><label for="">স্মার্ট ফোন</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="2" @if(in_array(2, $Digital_devices)) checked @endif><label for="">ল্যাপটপ</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="3" @if(in_array(3, $Digital_devices)) checked @endif><label for="">কম্পিউটার</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="4" @if(in_array(4, $Digital_devices)) checked @endif><label for="">অন্যান্য</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">সরকারি সুবিধা </th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input type="checkbox" value="1" @if(in_array(1, $Govt_fac)) checked @endif><label for="">ভিজিএফ কার্ড</label>
                        <input type="checkbox" value="2" @if(in_array(2, $Govt_fac)) checked @endif><label for="">বয়স্ক ভাতা</label>
                        <input type="checkbox" value="3" @if(in_array(3, $Govt_fac)) checked @endif><label for="">মাতৃত্বকালীন ভাতা</label>
                        <input type="checkbox" value="4" @if(in_array(4, $Govt_fac)) checked @endif><label for="">প্রতিবন্ধী ভাতা</label>
                        <input type="checkbox" value="5" @if(in_array(5, $Govt_fac)) checked @endif><label for="">বিধবা ভাতা</label>
                    </td>
                </tr>
                {{-- <tr>
                    <th style="width: 25%; text-align: left;">পেশা বা আয়ের উৎস </th>
                    <td style="border-style: solid; border-width: 1px;">
                        {{ $hold->source_income }}
                        <input type="checkbox" value="1" @if(in_array(1, $Source_inc)) checked @endif><label for="">চাকুরী(সরকারী)</label>
                        <input type="checkbox" value="2" @if(in_array(2, $Source_inc)) checked @endif><label for="">চাকুরী(বেসরকারী)</label>
                        <input type="checkbox" value="3" @if(in_array(3, $Source_inc)) checked @endif><label for="">ব্যবসা</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="4" @if(in_array(4, $Source_inc)) checked @endif><label for="">কৃষি</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <input type="checkbox" value="5" @if(in_array(5, $Source_inc)) checked @endif><label for="">শিক্ষক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="6" @if(in_array(6, $Source_inc)) checked @endif><label for="">প্রকৌশলী</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="7" @if(in_array(7, $Source_inc)) checked @endif><label for="">আইনজীবি</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="8" @if(in_array(8, $Source_inc)) checked @endif><label for="">চিকিৎসক</label><br>
                        <input type="checkbox" value="9" @if(in_array(9, $Source_inc)) checked @endif><label for="">শ্রমিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="10" @if(in_array(10, $Source_inc)) checked @endif><label for="">খাবার হোটেল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="11" @if(in_array(11, $Source_inc)) checked @endif><label for="">মৎস খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="12" @if(in_array(12, $Source_inc)) checked @endif><label for="">ক্ষুদ্র ও কুটির শিল্প</label><br>
                        <input type="checkbox" value="13" @if(in_array(13, $Source_inc)) checked @endif><label for="">গবাদি পশুর খামার</label>
                        <input type="checkbox" value="14" @if(in_array(14, $Source_inc)) checked @endif><label for="">গাড়ী চালক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="15" @if(in_array(15, $Source_inc)) checked @endif><label for="">ঠিকাদার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="16" @if(in_array(16, $Source_inc)) checked @endif><label for="">মাঝারি শিল্প</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="17" @if(in_array(17, $Source_inc)) checked @endif><label for="">নারী উদ্যোক্তা</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="18" @if(in_array(18, $Source_inc)) checked @endif><label for="">হাঁস-মুরগীর খামার</label>
                        <input type="checkbox" value="19" @if(in_array(19, $Source_inc)) checked @endif><label for="">প্রবাসী</label>
                    </td>
                </tr> --}}

                <tr>
                    <th style="width: 25%; text-align: left;">ব্যবসায়িক করের উৎস </th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input type="checkbox" value="1" @if(in_array(1, $Business_tax)) checked @endif><label for="">কৃষি খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="2" @if(in_array(2, $Business_tax)) checked @endif><label for="">মৎস খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="3" @if(in_array(3, $Business_tax)) checked @endif><label for="">দুগ্ধ খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <input type="checkbox" value="4" @if(in_array(4, $Business_tax)) checked @endif><label for="">হাঁস-মুরগীর খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="5" @if(in_array(5, $Business_tax)) checked @endif><label for="">গবাদি পশুর খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="6" @if(in_array(6, $Business_tax)) checked @endif><label for="">মুদির দোকান</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="7" @if(in_array(7, $Business_tax)) checked @endif><label for="">আর্থিক প্রতিষ্ঠান</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="8" @if(in_array(8, $Business_tax)) checked @endif><label for="">ক্ষুদ্র ও কুটির শিল্প</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="9" @if(in_array(9, $Business_tax)) checked @endif><label for="">মাঝারি শিল্প</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <input type="checkbox" value="10" @if(in_array(10, $Business_tax)) checked @endif><label for="">খাবার হোটেল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="11" @if(in_array(11, $Business_tax)) checked @endif><label for="">প্রকৌশলী</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="12" @if(in_array(12, $Business_tax)) checked @endif><label for="">আইনজীবি</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <input type="checkbox" value="13" @if(in_array(13, $Business_tax)) checked @endif><label for="">চিকিৎসক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="14" @if(in_array(14, $Business_tax)) checked @endif><label for="">ক্লিনিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="15" @if(in_array(15, $Business_tax)) checked @endif><label for="">ঔষদের দোকান</label><br>
                        <input type="checkbox" value="16" @if(in_array(16, $Business_tax)) checked @endif><label for="">আবাসিক হোটেল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="17" @if(in_array(17, $Business_tax)) checked @endif><label for="">মিষ্টির দোকান</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="18" @if(in_array(18, $Business_tax)) checked @endif><label for="">বে-সরকারি হাসপাতাল</label><br>
                        <input type="checkbox" value="19" @if(in_array(19, $Business_tax)) checked @endif><label for="">বে-সরকারি স্কুল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="20" @if(in_array(20, $Business_tax)) checked @endif><label for="">কোচিং সেন্টার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="21" @if(in_array(21, $Business_tax)) checked @endif><label for="">ঠিকাদার</label><br>
                        <input type="checkbox" value="22" @if(in_array(22, $Business_tax)) checked @endif><label for="">হিমাগার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="23" @if(in_array(23, $Business_tax)) checked @endif><label for="">ধান ভাঙানোর কল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="24" @if(in_array(24, $Business_tax)) checked @endif><label for="">আটার কল</label><br>
                        <input type="checkbox" value="25" @if(in_array(25, $Business_tax)) checked @endif><label for="">তেলের কল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="26" @if(in_array(26, $Business_tax)) checked @endif><label for="">স'মিল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="27" @if(in_array(27, $Business_tax)) checked @endif><label for="">বিউটি পারলার</label><br>
                        <input type="checkbox" value="28" @if(in_array(28, $Business_tax)) checked @endif><label for="">হেয়ার কাট সেলুন</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="29" @if(in_array(29, $Business_tax)) checked @endif><label for="">লন্ড্রীর দোকান</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="30" @if(in_array(30, $Business_tax)) checked @endif><label for="">ইঞ্জিনিয়ারিং ফার্ম</label><br>
                        <input type="checkbox" value="31" @if(in_array(31, $Business_tax)) checked @endif><label for="">শিল্প কারখানা</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="32" @if(in_array(32, $Business_tax)) checked @endif><label for="">ইট ভাটা</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="33" @if(in_array(33, $Business_tax)) checked @endif><label for="">কনসালটেন্সি ফার্ম</label><br>
                        <input type="checkbox" value="34" @if(in_array(34, $Business_tax)) checked @endif><label for="">গুদাম</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="35" @if(in_array(35, $Business_tax)) checked @endif><label for="">রিক্সার মালিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="36" @if(in_array(36, $Business_tax)) checked @endif><label for="">বাজার ইজারা</label><br>
                        <input type="checkbox" value="37" @if(in_array(37, $Business_tax)) checked @endif><label for="">টেম্পোর মালিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="38" @if(in_array(38, $Business_tax)) checked @endif><label for="">বাসের মালিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="39" @if(in_array(39, $Business_tax)) checked @endif><label for="">ট্রাকের মালিক</label><br>
                        <input type="checkbox" value="40" @if(in_array(40, $Business_tax)) checked @endif><label for="">পরিবহন এজেন্সী</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="41" @if(in_array(41, $Business_tax)) checked @endif><label for="">নৌযানের মালিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="42" @if(in_array(42, $Business_tax)) checked @endif><label for="">অটো রিক্সার মালিক</label><br>
                        <input type="checkbox" value="43" @if(in_array(43, $Business_tax)) checked @endif><label for="">স্টীমার/কার্গোর মালিক</label>&nbsp;&nbsp;
                        <input type="checkbox" value="44" @if(in_array(44, $Business_tax)) checked @endif><label for="">শিশু পার্ক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="45" @if(in_array(45, $Business_tax)) checked @endif><label for="">বিনোদন পার্ক</label><br>
                        {{-- <input type="checkbox" value="46" @if(in_array(46, $Business_tax)) checked @endif><label for="">পশু জবাইয়</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="47" @if(in_array(47, $Business_tax)) checked @endif><label for="">১ম শ্রেণীর ঠিকাদার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" value="48" @if(in_array(48, $Business_tax)) checked @endif><label for="">২য় শ্রেণীর ঠিকাদার</label><br>
                        <input type="checkbox" value="49" @if(in_array(49, $Business_tax)) checked @endif><label for="">৩য় শ্রেণীর ঠিকাদার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                        <input type="checkbox" value="50" @if(in_array(50, $Business_tax)) checked @endif><label for="">অন্যান্য।</label><br>
                        {{-- <input type="checkbox" value="51" @if(in_array(51, $Business_tax)) checked @endif><input type="text" value="" class="sbinput"><label for="">করের পরিমান =</label>
                        <input value="{{ $hold->business_amount_taxes }}" type="text" class="sbinput">টাকা --}}
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">অন্যান্য করের উৎস </th>
                    <td style="border-style: solid; border-width: 1px;"><input type="checkbox"><input value="{{ $hold->sources_other_taxes }}" type="text" class="sbinput"><label for="">করের পরিমান =</label><input value="{{ $hold->other_taxes_amount }}" type="text" class="sbinput">টাকা</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">হোল্ডিং ট্যাক্স </th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">বাড়ির আনুমানিক দাম=</label><input value="{{ $hold->approximate_price_house }}" type="text" class="sbsinput">টাকা,&nbsp;<label for="">বার্ষিক করযোগ্য মুল্য =</label><input value="{{ $hold->annual_taxable_value }}" type="text" class="sbsinput">টাকা<br>
                        {{-- <label for="">&nbsp;&nbsp;বাড়ির করযোগ্য মুল্য=</label><input value="{{ $hold->taxable_value_house }}" type="text" class="sbsinput">টাকা,&nbsp;<label for="">বার্ষিক করের পরিমান =</label><input value="{{ $hold->annual_tax_amount }}" type="text" class="sbsinput">টাকা --}}</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">সর্বমোট ট্যাক্স </th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">হোল্ডিং ট্যাক্স + ব্যাসায়িক ট্যাক্স + অন্যান্য ট্যাক্স =</label><input value="{{ $hold->total_tax }}" type="text" class="sbinput">টাকা</td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির আনুমানিক মূল্য</th>
                    <td><input type="text" value="{{ $hold->estimated_value_house }}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">বাড়ির বার্ষিক ধার্যকৃত কর</th>
                    <td><input type="text" value="{{ $hold->tax_levied_annually_house }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির জমি শতাংশ</th>
                    <td><input type="text" value="{{ $hold->percentage_house_land }}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">আবাদী জমি শতাংশ</th>
                    <td><input type="text" value="{{ $hold->percentage_cultivated_land }}" class="binput"></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;"></th>
                    <td style="border-style: solid; border-width: 1px;"><label for=""><span style="background-color:rgb(1, 4, 7); color: rgb(244, 247, 250); padding: 5px 5px 3px 5px; margin-left: 0px;">সর্বমোট ট্যাক্স</span> হোল্ডিং ট্যাক্স + ব্যাসায়িক ট্যাক্স =</label><input value="{{ $hold->total_tax }}" type="text" class="sbinput">টাকা</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;"></th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">কথায়:</label><input value="{{ $hold->total_tax }}" type="text" class="sbinput">টাকা মাত্র</td>
                </tr>
            </table>
            <div style="margin-top: .7rem; margin-left: 11rem; color: rgb(16, 123, 224);">
                আমি ঘোষণা করতেছি যে, আমার দেয়া উপরের বর্ণিত তথ্য সঠিক এবং বর্ণিত তথ্য মিথ্যা <span style="margin-top: 2rem; margin-left: 7rem;">প্রমানিত হলে, আমি তাহার জন্য আইনগত দায়ী থাকিব।</span>
            </div>
        </div>
    </div>
</body>
</html>