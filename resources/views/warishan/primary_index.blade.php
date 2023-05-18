<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ওয়ারিশ সনদ তথ্য সংগ্রহ ফরম</title>
    <style>
        body{
            font-size: 13px;
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
            border: 2px solid rgb(6, 153, 62);
            padding: 5px;
            width: 200px;
            color: rgb(6, 153, 62);
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
                <img class="mujib" src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->formlogo:'logo/mujib_logo-01.png')}}" width="80px" height="80px" alt="Logo">
                <h5 style="margin-top: 8px; margin-bottom: 5px; color: rgb(0, 0, 0);">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h5>
                <h3 style="margin: 5px; color: rgb(6, 153, 62);">{{ request()->session()->get('upsetting')->union?->name_bn}} ইউনিয়ন পরিষদ, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</h3>
                <h5 style="margin: 5px; color: rgb(18, 19, 18);">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->website:"ওয়েবসাইট"}}</h5>
                <h4 class="headbg" style="margin: auto;">আবেদন-ওয়ারিশ সনদ</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>আবেদন নং :</b><input class="formno" value="{{ $warishan->id }}" type="text"></div>
            <div class="datediv"><b>তারিখ :</b><input class="hdate" value="{{ \Carbon\Carbon::parse($warishan->apply_date)->format('d-m-Y') }}" type="text"></div>
        </div>
        <div style="position: relative; margin-top: 15px;">
            <table class="imgreleted" style="width: 84%;min-height:105px;">
                <tr>
                    <th style="width: 30%; text-align: left;">আবেদনকারীর নাম </th>
                    <td><input type="text" value="{{ $warishan->applicant_name }}" class="binput"></td>
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
                <img height="100px" width="100px" src="{{ asset('uploads/warishan/'.$warishan->image)}}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';"  alt="No IMAGE">
            </div>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ </th>
                    <td><input type="text" value="{{ $warishan->birth_date }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">লিঙ্গ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->gender == 1 ) পুরুষ @elseif ($warishan->gender == 2 )মহিলা @elseif ($warishan->gender == 3 )তৃতীয় লিঙ্গ @endif </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">জাতীয় পরিচয়পত্র নম্বর</th>
                    <td><input type="text" value="{{ $warishan->voter_id_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডিজিটাল জন্মনিবন্ধন নম্বর </th>
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
                    <td><input type="text" value="{{$warishan->income?->name}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বৈবাহিক অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($warishan->marital_status == 1 ) বিবাহিত @else অবিবাহিত @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পরিবারের সদস্য(পুরুষ) </th>
                    <td><input type="text" value="{{$warishan->num_male}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পরিবারের সদস্য(মহিলা)</th>
                    <td><input type="text" value="{{ $warishan->num_female }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পরিবারের মোট সদস্য</th>
                    <td><input type="text" value="{{$warishan->num_male+$warishan->num_female}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ওয়ারিশান ব্যাক্তির নাম</th>
                    <td><input type="text" value="{{ $warishan->warishan_person_name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পিতার নাম</th>
                    <td><input type="text" value="{{ $warishan->warisan_father_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম</th>
                    <td><input type="text" value="{{ $warishan->warishan_mother_name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">স্বামী/স্ত্রীর নাম</th>
                    <td><input type="text" value="{{ $warishan->warisan_husband_wife }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ওয়ারিশের মৃত্যু তারিখ</th>
                    <td><input type="text" value="{{ $warishan->date_death_warishan }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির হেল্ডিং নম্বর </th>
                    <td><input type="text" value="{{ $warishan->house_holding_number }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ডাকঘর </th>
                    <td><input type="text" value="{{ $warishan->post_office }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জেলা </th>
                    <td><input type="text" value="{{ $districts->name_bn }}" class="binput"></td>

                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">উপজেলা/থানা </th>
                    <td><input type="text" value="{{ $upazilas->name_bn }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইউনিয়ন পরিষদ </th>
                    <td><input type="text" value="{{ $unions->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">সেক্টর/ওয়ার্ড </th>
                    <td><input type="text" value="{{ $wards->ward_name_bn }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">গ্রাম/পাড়া</th>
                    <td><input type="text" value="{{ $warishan->village_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">রাস্তা/ব্লক </th>
                    <td><input type="text" value="{{ $warishan->street_nm }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">মোট ওয়ারিশ সদস্য</th>
                    <td><input type="text" value="{{ $warishan->total_warishan_members }}" class="binput"></td>
                </tr>
            </table>
            <p>ওয়ারিশ আইন অনুযায়ী ওয়ারিশান সদস্যদের বিবরণ সমূহঃ</p>
            <table  style="width: 100%; border-collapse: collapse;">
                <tr style="border:1px solid; text-align:center;">
                <th style="border:1px solid;">সদস্য নং</th>
                <th style="border:1px solid;">ওয়ারিশানদের নাম </th>
                <th style="border:1px solid;">সম্পর্ক</th>
                <th style="border:1px solid;">জন্ম তারিখ</th>
                <th style="border:1px solid;">ভোটার আইডি নম্বর</th>
                <th style="border:1px solid;">মন্তব্য</th>
                </tr>
                @if ($warishan->warisan_children)
                @foreach ($warishan->warisan_children as $c)
                <tr style="border:1px solid; text-align:center;">
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
            <div style="margin-top: .7rem; margin-left: 6rem; color: rgb(6, 153, 62);">
                আমি ঘোষণা করতেছি যে, আমার দেয়া উপরের বর্ণিত তথ্য সঠিক। যদি উপরের বর্ণিত তথ্য মিথ্যা <span style="margin-top: 2rem; margin-left: 7rem;">প্রমানিত হয়,তাহার জন্য আমি আইনগত দায়ী থাকিব।</span>
            </div>
            <div style="margin-top: .9rem; margin-left: 13rem; color: rgb(16, 123, 224);">
                <b style="background-color: rgb(6, 153, 62);color:aliceblue; text:white; padding:.6rem;">|| সবাই মিলে দেব কর,ইউনিয়ন পরিষদ হবে স্বনির্ভর  ||</b>
            </div>
        </div>
    </div>
</body>
</html>
