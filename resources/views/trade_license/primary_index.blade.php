<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ট্রেড লাইসেন্স তথ্য সংগ্রহ ফরম</title>
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
                <h4 class="headbg" style="margin: auto;">আবেদন-ট্রেড লাইসেন্স</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>আবেদন নং :</b><input class="formno" value="{{ $trade->id }}" type="text"></div>
            <div class="datediv"><b>তারিখ :</b><input class="hdate" value="{{ $trade->holding_date }}" type="text"></div>
        </div>
        <div style="position: relative; margin-top: 15px;">
            <table class="imgreleted" style="width: 84%;min-height:105px;">
                <tr>
                    <th style="width: 30%; text-align: left;">আবেদনকারীর নাম </th>
                    <td><input type="text" value="{{ $trade->head_household }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পিতার নাম </th>
                    <td><input type="text" value="{{ $trade->father_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম </th>
                    <td><input type="text" value="{{ $trade->mother_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">স্বামী/স্ত্রীর নাম </th>
                    <td><input type="text" value="{{ $trade->husband_wife }}" class="binput"></td>
                </tr>
            </table>
            <div class="image">
                <img height="100px" width="100px" src="{{ asset('uploads/trade_license/image/'.$trade->image)}}" alt="No IMAGE">
            </div>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ </th>
                    <td><input type="text" value="{{ $trade->birth_date }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">লিঙ্গের অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->gender == 1 ) পুরুষ @elseif ($trade->gender == 2 )মহিলা @elseif ($trade->gender == 3 )তৃতীয় লিঙ্গ @endif </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ভোটার আইডি নং </th>
                    <td><input type="text" value="{{ $trade->voter_id_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জন্ম নিবন্ধন আইডি </th>
                    <td><input type="text" value="{{ $trade->birth_registration_id }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মুক্তিযোদ্ধা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->freedom_fighter == 1 ) বীর মুক্তিযোদ্ধা @elseif ($trade->freedom_fighter == 2 )বীরাঙ্গনা @elseif ($trade->freedom_fighter == 3 )অন্যান্য @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ধর্ম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($trade->religion == 1 ) ইসলাম @elseif ($trade->religion == 2 )হিন্দু @elseif ($trade->religion == 3 )বৌদ্ধ@elseif ($trade->religion == 4 )খ্রিষ্টান@elseif ($trade->religion == 5 )উপজাতি @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল নম্বর </th>
                    <td><input type="text" value="{{ $trade->phone }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">শিক্ষাগত যোগ্যতা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($trade->edu_qual == 1 ) স্ব-শিক্ষিত @elseif ($trade->edu_qual == 2 )প্রাথমিক @elseif ($trade->edu_qual == 3 )মাধ্যমিক@elseif ($trade->edu_qual == 4 )উচ্চ-মাধ্যমিক@elseif ($trade->edu_qual == 5 )উচ্চতর-ডিগ্রী @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ই-মেইল(যদি থাকে)</th>
                    <td><input type="text" value="{{ $trade->email }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পেশা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">
                        @if ($trade->source_income ==1)
                        শিক্ষক
                        @elseif ($trade->source_income ==2)
                        শিক্ষার্থী
                        @elseif ($trade->source_income ==3)
                        সরকারি চাকুরীজীবি
                        @elseif ($trade->source_income ==4)
                        বে-সরকারি চাকুরীজীবি
                        @elseif ($trade->source_income ==5)
                        গৃহীনি
                        @elseif ($trade->source_income ==6)
                        কৃষক
                        @elseif ($trade->source_income ==7)
                        ব্যবসা
                        @elseif ($trade->source_income ==8)
                        প্রকৌশলি
                        @elseif ($trade->source_income ==9)
                        আইনজীবী
                        @elseif ($trade->source_income ==10)
                        চিকিৎসক
                        @elseif ($trade->source_income ==11)
                        সেবিকা
                        @elseif ($trade->source_income ==12)
                        দলিল লেখক
                        @elseif ($trade->source_income ==13)
                        শ্রমিক
                        @elseif ($trade->source_income ==14)
                        ঠিকাদার
                        @elseif ($trade->source_income ==15)
                        মৎস চাষী
                        @elseif ($trade->source_income ==16)
                        গাড়ি চালক
                        @elseif ($trade->source_income ==17)
                        প্রবাসী
                        @elseif ($trade->source_income ==18)
                        অন্যান্য
                        @endif
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বৈবাহিক অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->marital_status == 1 ) বিবাহিত @else অবিবাহিত @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইন্টারনেট সংযোগ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->internet_connection == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">নলকূপ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->tube_well == 1 ) আছে @else নাই @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডিসলাইন সংযোগ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->disline_connection == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বাথরুম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->paved_bathroom == 1 ) কাঁচা @else পাকা @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">আর্সেনিকমুক্ত</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->arsenic_free == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ব্যবসা প্রতিষ্ঠানের নাম</th>
                    <td><input type="text" value="{{ $trade->business_name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">মালিক/প্রোপাইটরের নাম</th>
                    <td><input type="text" value="{{ $trade->owner_proprietor }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">স্বমীর নাম</th>
                    <td><input type="text" value="{{ $trade->trade_husband_name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পিতার নাম</th>
                    <td><input type="text" value="{{ $trade->trade_fathername }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম</th>
                    <td><input type="text" value="{{ $trade->trade_mothername }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ট্রেড লােইসেন্স নবায়ন</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->trade_license_renewal == 1 ) অর্থ বছর ২০২৩-২০২৪ @elseif($trade->trade_license_renewal == 2 ) অর্থ বছর ২০২৪-২০২৫@elseif($trade->trade_license_renewal == 3 ) অর্থ বছর ২০২৫-২০২৬@elseif($trade->trade_license_renewal == 4 ) অর্থ বছর ২০২৬-২০২৭@elseif($trade->trade_license_renewal == 5 ) অর্থ বছর ২০২৭-২০২৮@elseif($trade->trade_license_renewal == 6 ) অর্থ বছর ২০২৮-২০২৯ @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">প্রতিষ্ঠানের মালিকানার ধরন</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->type_ownership_organization == 1 ) একক @elseif($trade->type_ownership_organization == 2 ) যৌথ@elseif($trade->type_ownership_organization == 3 )কোম্পানি @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ব্যবসায়িক ধরন</th>
                    <td style="border: 1px solid rgb(19, 18, 18);">
                        @if ($trade->business_type == 1 ) কৃষি খামার
                        @elseif($trade->business_type == 2 ) মুদির দোকান
                        @elseif($trade->business_type == 3 ) আবাসিক হোটেল
                        @elseif($trade->business_type == 4 ) খাবারের হোটেল
                        @elseif($trade->business_type == 5 ) স’মিল
                        @elseif($trade->business_type == 6 ) শিল্প কারখানা
                        @elseif($trade->business_type == 7 ) বাজার ইজারা
                        @elseif($trade->business_type == 8 ) নৌযানের মালিক
                        @elseif($trade->business_type == 9 ) পশু জবাই
                        @elseif($trade->business_type == 10 ) দুগ্ধ খামার
                        @elseif($trade->business_type == 11 ) ক্ষুদ্র ও কুটির শিল্প
                        @elseif($trade->business_type == 12 ) বেসরকারী হাসপাতাল
                        @elseif($trade->business_type == 13 ) ধান ভাঙানোর কল
                        @elseif($trade->business_type == 14 ) হেয়ার কাট সেলুন
                        @elseif($trade->business_type == 15 ) কনসালটেন্সি ফার্ম
                        @elseif($trade->business_type == 16 ) বাসের মালিক
                        @elseif($trade->business_type == 17 ) স্টীমার/কার্গোর মালিক
                        @elseif($trade->business_type == 18 ) গবাদি পশুর খামার
                        @elseif($trade->business_type == 19 ) খাবার হোটেল
                        @elseif($trade->business_type == 20 ) ঔষদের দোকান
                        @elseif($trade->business_type == 21 ) কোচিং সেন্টার
                        @elseif($trade->business_type == 22 ) মৎস্য খামার
                        @elseif($trade->business_type == 23 ) আর্থিক প্রতিষ্ঠান
                        @elseif($trade->business_type == 24 ) মিষ্টির দোকান
                        @elseif($trade->business_type == 25 ) হিমাগার
                        @elseif($trade->business_type == 26 ) বিউটি পার্লার
                        @elseif($trade->business_type == 27 ) ইট ভাটা
                        @elseif($trade->business_type == 28 ) ঠিকাদার
                        @elseif($trade->business_type == 29 ) হাঁস-মুরগীর খামার
                        @elseif($trade->business_type == 30 ) মাঝারি শিল্প
                        @elseif($trade->business_type == 31 ) ক্লিনিক
                        @elseif($trade->business_type == 32 ) বে-সরকারী স্কুল
                        @elseif($trade->business_type == 33 ) আটার কল
                        @elseif($trade->business_type == 34 ) লন্ড্রীর দোকান
                        @elseif($trade->business_type == 35 )গুদাম
                        @elseif($trade->business_type == 36 )শিশু পার্ক
                        @elseif($trade->business_type == 37 )ইঞ্জিনিয়ারিং ফার্ম
                        @elseif($trade->business_type == 38 )তেলের কল
                        @elseif($trade->business_type == 39 )পরিবহন এজেন্সি
                        @elseif($trade->business_type == 40 )বিনোদন পার্ক
                        @elseif($trade->business_type == 41 )শিক্ষক
                        @elseif($trade->business_type == 42 )অন্যান্য
                        @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ব্যাবসা/প্রতিষ্ঠানের হেল্ডিং নম্বর </th>
                    <td><input type="text" value="{{ $trade->vehicle_establishment_holding_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">রাস্তা/পাড়া/মহল্লা </th>
                    <td><input type="text" value="{{ $trade->street_nm }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ডাকঘর </th>
                    <td><input type="text" value="{{ $trade->post_office }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জেলা </th>
                    <td><input type="text" value="{{ $trade->district_id }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">উপজেলা/থানা</th>
                    <td><input type="text" value="{{ $trade->upazila_id }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইউনিয়ন পরিষদের নাম </th>
                    <td><input type="text" value="{{ $trade->union_id }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ওয়ার্ড </th>
                    <td><input type="text" value="{{ $trade->ward_id }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">গ্রামের নাম</th>
                    <td><input type="text" value="{{ $trade->village_name }}" class="binput"></td>
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
                <tr>
                    <th style="width: 25%; text-align: left;">অন্যান্য করের উৎস </th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input type="checkbox"><input value="{{ $trade->sources_other_taxes }}" type="text" class="sbinput">
                        <label for="">করের পরিমান =</label><input value="{{ $trade->other_taxes_amount }}" type="text" class="sbinput">টাকা</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">হোল্ডিং ট্যাক্স </th>
                    <td style="border-style: solid; border-width: 1px;">
                        <label for="">ব্যবসায়িক আনুমানিক মূলধন=</label>
                        <input value="{{ $trade->business_estimated_capital }}" type="text" class="sbsinput">টাকা,&nbsp;
                        <label for="">ব্যবসায়িক বার্ষিক ধার্যকৃত কর =</label>
                        <input value="{{ $trade->annual_business_tax_levied }}" type="text" class="sbsinput">টাকা<br>
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">সর্বমোট ট্যাক্স </th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">হোল্ডিং ট্যাক্স + ব্যাসায়িক ট্যাক্স + অন্যান্য ট্যাক্স =</label><input value="{{ $trade->total_tax }}" type="text" class="sbinput">টাকা</td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির আনুমানিক মূল্য</th>
                    <td><input type="text" value="{{ $trade->estimated_value_house }}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">বাড়ির বার্ষিক ধার্যকৃত কর</th>
                    <td><input type="text" value="{{ $trade->tax_levied_annually_house }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির জমি শতাংশ</th>
                    <td><input type="text" value="{{ $trade->percentage_house_land }}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">আবাদী জমি শতাংশ</th>
                    <td><input type="text" value="{{ $trade->percentage_cultivated_land }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ট্রেড লাইসেন্স নবায়ন ফি</th>
                    <td><input type="text" value="{{ $trade->trade_license_renewal_fee }}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">ব্যবসা প্রতিষ্ঠানের কাঠামো</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->business_organization_structure == 1 ) কাঁচাঘর @elseif($trade->business_organization_structure == 2 ) টিনসেট@elseif($trade->business_organization_structure == 3 ) আধা-পাকা@elseif($trade->business_organization_structure == 4 ) পাকা-ইমারত@elseif($trade->business_organization_structure == 5 ) ২য় তলা বাড়ি@elseif($trade->business_organization_structure == 6 ) ৩য় তলা বাড়ি @endif</td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;"></th>
                    <td style="border-style: solid; border-width: 1px;"><label for=""><span style="background-color:rgb(1, 4, 7); color: rgb(244, 247, 250); padding: 5px 5px 3px 5px; margin-left: 0px;">সর্বমোট ট্যাক্স</span> হোল্ডিং ট্যাক্স + ব্যাসায়িক ট্যাক্স =</label><input value="{{ $trade->total_tax }}" type="text" class="sbinput">টাকা</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;"></th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">কথায়:</label><input value="{{ $trade->total_tax }}" type="text" class="sbinput">টাকা মাত্র</td>
                </tr>
            </table>
            <div style="margin-top: .7rem; margin-left: 11rem; color: rgb(16, 123, 224);">
                আমি ঘোষণা করতেছি যে, আমার দেয়া উপরের বর্ণিত তথ্য সঠিক এবং বর্ণিত তথ্য মিথ্যা <span style="margin-top: 2rem; margin-left: 7rem;">প্রমানিত হলে, আমি তাহার জন্য আইনগত দায়ী থাকিব।</span>
            </div>
        </div>
    </div>
</body>
</html>