<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ওয়ারিশ সনদ তথ্য সংগ্রহ ফরম</title>
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
        .btnprint{
            color: rgb(251, 248, 255);
            background-color: rgb(8, 82, 4);
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
            width: 60%;
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
    <script>
        function print_(){
            window.print();
        }
    </script>
</head>
<body>
    <button onclick="history.back()" class="btn noprint">Back</button>
    <button onclick="print_()" class="btnprint noprint">Print</button>
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
                <h4 class="headbg" style="margin: auto;">ওয়ারিশ সনদ-আবেদন</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>আবেদন নং :</b><input class="formno" value="{{ $warishan->id }}" type="text"></div>
            <div class="datediv"><b>তারিখ :</b><input class="hdate" value="{{ $warishan->holding_date }}" type="text"></div>
        </div>
        <div style="position: relative; margin-top: 15px;">
            <table class="imgreleted" style="width: 84%;min-height:105px;">
                <tr>
                    <th style="width: 30%; text-align: left;">আবেদনকারীর নাম </th>
                    <td><input type="text" value="{{ $warishan->head_household }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পিতার নাম </th>
                    <td><input type="text" value="{{ $warishan->father_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম </th>
                    <td><input type="text" value="{{ $warishan->mother_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">স্বামী/স্ত্রীর নাম </th>
                    <td><input type="text" value="{{ $warishan->husband_wife }}" class="binput"></td>
                </tr>
            </table>
            <div class="image">
                <img height="100px" width="100px" src="{{ asset('uploads/warishan/'.$warishan->image)}}" alt="No IMAGE">
            </div>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ </th>
                    <td><input type="text" value="{{ $warishan->birth_date }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">লিঙ্গের অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->gender == 1 ) পুরুষ @elseif ($warishan->gender == 2 )মহিলা @elseif ($warishan->gender == 3 )তৃতীয় লিঙ্গ @endif </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ভোটার আইডি নং </th>
                    <td><input type="text" value="{{ $warishan->voter_id_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জন্ম নিবন্ধন আইডি </th>
                    <td><input type="text" value="{{ $warishan->birth_registration_id }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মুক্তিযোদ্ধা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->freedom_fighter == 1 ) বীর মুক্তিযোদ্ধা @elseif ($warishan->freedom_fighter == 2 )বীরাঙ্গনা @elseif ($warishan->freedom_fighter == 3 )অন্যান্য @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ধর্ম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($warishan->religion == 1 ) ইসলাম @elseif ($warishan->religion == 2 )হিন্দু @elseif ($warishan->religion == 3 )বৌদ্ধ@elseif ($warishan->religion == 4 )খ্রিষ্টান@elseif ($warishan->religion == 5 )উপজাতি @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল নম্বর </th>
                    <td><input type="text" value="{{ $warishan->phone }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">শিক্ষাগত যোগ্যতা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($warishan->edu_qual == 1 ) স্ব-শিক্ষিত @elseif ($warishan->edu_qual == 2 )প্রাথমিক @elseif ($warishan->edu_qual == 3 )মাধ্যমিক@elseif ($warishan->edu_qual == 4 )উচ্চ-মাধ্যমিক@elseif ($warishan->edu_qual == 5 )উচ্চতর-ডিগ্রী @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ই-মেইল(যদি থাকে)</th>
                    <td><input type="text" value="{{ $warishan->email }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পেশা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">
                        @if ($warishan->source_income ==1)
                        শিক্ষক
                        @elseif ($warishan->source_income ==2)
                        শিক্ষার্থী
                        @elseif ($warishan->source_income ==3)
                        সরকারি চাকুরীজীবি
                        @elseif ($warishan->source_income ==4)
                        বে-সরকারি চাকুরীজীবি
                        @elseif ($warishan->source_income ==5)
                        গৃহীনি
                        @elseif ($warishan->source_income ==6)
                        কৃষক
                        @elseif ($warishan->source_income ==7)
                        ব্যবসা
                        @elseif ($warishan->source_income ==8)
                        প্রকৌশলি
                        @elseif ($warishan->source_income ==9)
                        আইনজীবী
                        @elseif ($warishan->source_income ==10)
                        চিকিৎসক
                        @elseif ($warishan->source_income ==11)
                        সেবিকা
                        @elseif ($warishan->source_income ==12)
                        দলিল লেখক
                        @elseif ($warishan->source_income ==13)
                        শ্রমিক
                        @elseif ($warishan->source_income ==14)
                        ঠিকাদার
                        @elseif ($warishan->source_income ==15)
                        মৎস চাষী
                        @elseif ($warishan->source_income ==16)
                        গাড়ি চালক
                        @elseif ($warishan->source_income ==17)
                        প্রবাসী
                        @elseif ($warishan->source_income ==18)
                        অন্যান্য
                        @endif
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বৈবাহিক অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->marital_status == 1 ) বিবাহিত @else অবিবাহিত @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইন্টারনেট সংযোগ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->internet_connection == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">নলকূপ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->tube_well == 1 ) আছে @else নাই @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডিসলাইন সংযোগ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->disline_connection == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বাথরুম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->paved_bathroom == 1 ) কাঁচা @else পাকা @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">আর্সেনিকমুক্ত</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->arsenic_free == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ওয়ারিশান ব্যাক্তির নাম</th>
                    <td><input type="text" value="{{ $warishan->warishan_person_name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পিতা/স্বামীর নাম</th>
                    <td><input type="text" value="{{ $warishan->father_husband }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম</th>
                    <td><input type="text" value="{{ $warishan->warishan_mother_name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ওয়ারিশাান ব্যাক্তির মৃত্যু তারিখ</th>
                    <td><input type="text" value="{{ $warishan->date_death_warishan }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোট ওয়ারিশ সদস্য</th>
                    <td><input type="text" value="{{ $warishan->total_warishan_members }}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">বাড়ির হেল্ডিং নম্বর </th>
                    <td><input type="text" value="{{ $warishan->house_holding_no }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ডাকঘর </th>
                    <td><input type="text" value="{{ $warishan->post_office }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জেলা </th>
                    <td><input type="text" value="{{ $districts->name_bn }}" class="binput"></td>

                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">উপজেলা/থানা</th>
                    <td><input type="text" value="{{ $upazilas->name_bn }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইউনিয়ন পরিষদের নাম </th>
                    <td><input type="text" value="{{ $unions->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ওয়ার্ড </th>
                    <td><input type="text" value="{{ $wards->ward_name_bn }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">গ্রামের নাম</th>
                    <td><input type="text" value="{{ $warishan->village_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">রাস্তা/পাড়া/মহল্লা </th>
                    <td><input type="text" value="{{ $warishan->street_nm }}" class="binput"></td>
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
                        <input type="checkbox" value="1" @if(in_array(1, $Govt_fac)) checked @endif><label for="">ভিজিডি কার্ড</label>
                        <input type="checkbox" value="2" @if(in_array(2, $Govt_fac)) checked @endif><label for="">বয়স্ক ভাতা</label>
                        <input type="checkbox" value="3" @if(in_array(3, $Govt_fac)) checked @endif><label for="">মাতৃত্বকালীন ভাতা</label>
                        <input type="checkbox" value="4" @if(in_array(4, $Govt_fac)) checked @endif><label for="">প্রতিবন্ধী ভাতা</label>
                        <input type="checkbox" value="5" @if(in_array(5, $Govt_fac)) checked @endif><label for="">বিধবা ভাতা</label>
                        <input type="checkbox" value="5" @if(in_array(6, $Govt_fac)) checked @endif><label for="">রেশন কার্ড</label>
                        <input type="checkbox" value="5" @if(in_array(7, $Govt_fac)) checked @endif><label for="">মুক্তিযোদ্ধা ভাতা</label>
                    </td>
                </tr>
            </table>
            <p>বাংলাদেশের ওয়ারিশান আইন অনুযায়ী ওয়ারিশান সদস্যদের বিবরণ সমূহঃ</p>
            <table  style="width: 100%; border:1px solid;">
                <tr style="border:1px solid;">
                <th style="border:1px solid;">সদস্য নং</th>
                <th style="border:1px solid;">ওয়ারিশানদের নাম </th>
                <th style="border:1px solid;">সম্পর্ক</th>
                <th style="border:1px solid;">জন্ম তারিখ</th>
                <th style="border:1px solid;">ভোটার আইডি নম্বর</th>
                <th style="border:1px solid;">মন্তব্য</th>
                </tr>
                @if ($warishan->warisan_children)
                @foreach ($warishan->warisan_children as $c)
                <tr style="border:1px solid;">
                    <td style="border:1px solid;">{{++$loop->index}}</td>
                    <td style="border:1px solid;">{{ $c->name }}</td>
                    <td style="border:1px solid;">
                        @if ($c->ralation ==1)
                        স্ত্রী
                        @elseif ($c->ralation ==2)
                        ছেলে
                        @elseif ($c->ralation ==3)
                        মেয়ে
                        @elseif ($c->ralation ==4)
                        অন্যান্য
                        @endif
                    </td>
                    <td style="border:1px solid;">{{ $c->birth_date }}</td>
                    <td style="border:1px solid;">{{ $c->cnid }}</td>
                    <td style="border:1px solid;">
                        @if ($c->ccomments ==1)
                        জীবীত
                        @else
                        মৃত
                        @endif
                    </td>
                </tr>
                @endforeach
                @endif
            </table>
            <div style="margin-top: .7rem; margin-left: 11rem; color: rgb(16, 123, 224);">
                আমি ঘোষণা করতেছি যে, আমার দেয়া উপরের বর্ণিত তথ্য সঠিক এবং বর্ণিত তথ্য মিথ্যা <span style="margin-top: 2rem; margin-left: 7rem;">প্রমানিত হলে, আমি তাহার জন্য আইনগত দায়ী থাকিব।</span>
            </div>
        </div>
    </div>
</body>
</html>
