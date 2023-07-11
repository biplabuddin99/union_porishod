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
                <h4 class="headbg" style="margin: auto;">আবেদন-পারিবারিক সনদ</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>আবেদন নং :</b><input class="formno" value="{{ $family->id }}" type="text"></div>
            <div class="datediv"><b>তারিখ :</b><input class="hdate" value="{{ \Carbon\Carbon::parse($family->apply_date)->format('d-m-Y') }}" type="text"></div>
        </div>
        <div style="position: relative; margin-top: 15px;">
            <table class="imgreleted" style="width: 84%;min-height:105px;">
                <tr>
                    <th style="width: 30%; text-align: left;">আবেদনকারীর নাম </th>
                    <td><input type="text" value="{{ $family->applicant_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পিতার নাম </th>
                    <td><input type="text" value="{{ $family->father_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম </th>
                    <td><input type="text" value="{{ $family->mother_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">স্বামী/স্ত্রীর নাম </th>
                    <td><input type="text" value="{{ $family->husband_wife }}" class="binput"></td>
                </tr>
            </table>
            <div class="image">
                <img height="100px" width="100px" src="{{ asset('uploads/family/'.$family->image)}}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';"  alt="No IMAGE">
            </div>
            <table style="width: 100%">
                <tr>
                    <th style="width: 25%; text-align: left;">ডিজিটাল জন্ম নিবন্ধন নম্বর </th>
                    <td><input style="width: 68%" type="text" value="{{ $family->birth_registration_id }}" class="binput"></td>
                    <th style="text-align: left; padding-left: 110px;">: স্থায়ী ঠিকানা :</th>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr style="padding-top:0%; margin-top:0%">
                    <th style="width: 25%; text-align: left;">জাতীয় পরিচয়পত্র নম্বর </th>
                    <td><input type="text" value="{{ $family->voter_id_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">হোল্ডিং নম্বর</th>
                    <td><input type="text" value="{{ $family->house_holding_number }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ </th>
                    <td><input type="text" value="{{ \Carbon\Carbon::parse($family->birth_date)->format('d-m-Y')}}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">রাস্তা/ব্লক</th>
                    <td><input type="text" value="{{ $family->street_nm }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">লিঙ্গ</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($family->gender == 1 ) পুরুষ @elseif ($family->gender == 2 )মহিলা @elseif ($family->gender == 3 )তৃতীয় লিঙ্গ @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">গ্রাম/পাড়া </th>
                    <td><input type="text" value="{{ $family->village_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বৈবাহিক অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($family->marital_status == 1 ) বিবাহিত @else অবিবাহিত @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">সেক্টর / ওয়ার্ড </th>
                    <td><input type="text" value="{{ $family->ward?->ward_name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মুক্তিযোদ্ধা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($family->freedom_fighter == 1 ) বীর মুক্তিযোদ্ধা @elseif ($family->freedom_fighter == 2 )বীরাঙ্গনা @elseif ($family->freedom_fighter == 3 )অন্যান্য @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইউনিয়ন পরিষদ</th>
                    <td><input type="text" value="{{ $family->union?->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ধর্ম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($family->religion == 1 ) ইসলাম @elseif ($family->religion == 2 )হিন্দু @elseif ($family->religion == 3 )বৌদ্ধ@elseif ($family->religion == 4 )খ্রিষ্টান@elseif ($family->religion == 5 )উপজাতি @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডাকঘর</th>
                    <td><input type="text" value="{{ $family->post_office}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">শিক্ষাগত যোগ্যতা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($family->edu_qual == 1 ) স্ব-শিক্ষিত @elseif ($family->edu_qual == 2 )প্রাথমিক @elseif ($family->edu_qual == 3 )মাধ্যমিক@elseif ($family->edu_qual == 4 )উচ্চ-মাধ্যমিক@elseif ($family->edu_qual == 5 )উচ্চতর-ডিগ্রী @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">উপজেলা/থানা</th>
                    <td><input type="text" value="{{  $family->upazila?->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পেশা </th>
                    <td><input type="text" value="{{$family->income?->name}}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জেলা </th>
                    <td><input type="text" value="{{ $family->district?->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পরিবারের প্রধানের নাম</th>
                    <td><input type="text" value="{{ $family->name_head_family }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">উক্ত ইউনিয়নের </th>
                    <td><input type="text" value="{{ $family->comments_permanent_union }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">আবেদনকারীর সাথে সম্পর্ক</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($family->relationship_applicant == 1 ) পিতা @elseif($family->relationship_applicant == 2 ) মাতা @elseif($family->relationship_applicant == 3 ) স্ত্রী @elseif($family->relationship_applicant == 4 ) ছেলে @elseif($family->relationship_applicant == 5 ) মেয়ে @elseif($family->relationship_applicant == 6 ) অন্যান্য @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পরিবারের সদস্য(পুরুষ)</th>
                    <td><input type="text" value="{{ $family->num_male }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পরিবারের সদস্য(মহিলা)</th>
                    <td><input type="text" value="{{ $family->num_female }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পরিবারের মোট সদস্য</th>
                    <td><input type="text" value="{{$family->num_male + $family->num_female }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পরিবারের ভোটার(পুরুষ)</th>
                    <td><input type="text" value="{{ $family->num_male_vot }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পরিবারের ভোটার(মহিলা)</th>
                    <td><input type="text" value="{{$family->num_female_vot}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পরিবারের মোট ভোটার</th>
                    <td><input type="text" value="{{$family->num_male_vot+$family->num_female_vot}}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">মোবাইল নম্বর</th>
                    <td><input type="text" value="{{$family->phone}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ই-মেইল<small>(যদি থাকে)</small></th>
                    <td><input type="text" value="{{ $family->email }}" class="binput"></td>
                </tr>
            </table>
            <p>পারিবারিক আইন অনুযায়ী পরিবারের সদস্যদের বিবরণ সমূহঃ</p>
            <table  style="width: 100%; border-collapse: collapse;">
                <tr style="border:1px solid; text-align:center;">
                <th style="border:1px solid;">সদস্য নং</th>
                <th style="border:1px solid;">সদস্যদের নাম </th>
                <th style="border:1px solid;">সম্পর্ক</th>
                <th style="border:1px solid;">জন্ম তারিখ</th>
                <th style="border:1px solid;">ভোটার আইডি নম্বর</th>
                <th style="border:1px solid;">মন্তব্য</th>
                </tr>
                @if ($family->family_children)
                @foreach ($family->family_children as $c)
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
                <b style="background-color: rgb(6, 153, 62);color:aliceblue; text:white; padding:.6rem;">|| {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->slogan:"সময়মত ইউনিয়ন পরিষদ কর পরিশোধ করুন"}}  ||</b>
            </div>
        </div>
    </div>
</body>
</html>
