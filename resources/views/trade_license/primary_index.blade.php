<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ট্রেড লাইসেন্স তথ্য সংগ্রহ ফরম</title>
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
        .btnprint{
            color: rgb(251, 248, 255);
            background-color: rgb(8, 82, 4);
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
                <h4 class="headbg" style="margin: auto;">আবেদন-ট্রেড লাইসেন্স</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>আবেদন নং :</b><input class="formno" value="{{ $trade->id }}" type="text"></div>
            <div class="datediv"><b>তারিখ :</b><input class="hdate" value="{{ $trade->trade_date }}" type="text"></div>
        </div>
        <div style="position: relative; margin-top: 15px;">
            <table class="imgreleted" style="width: 84%;min-height:105px;">
                <tr>
                    <th style="width: 30%; text-align: left;">প্রতিষ্ঠান প্রধানের নাম </th>
                    <td><input type="text" value="{{ $trade->head_institution }}" class="binput"></td>
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
                <img height="100px" width="100px" src="{{ asset('uploads/trade/'.$trade->image)}}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt="No IMAGE">
            </div>

            <table style="width: 100%">
                <tr>
                    <th style="width: 25%; text-align: left;">ডিজিটাল জন্ম নিবন্ধন নম্বর </th>
                    <td><input style="width: 80%" type="text" value="{{ $trade->birth_registration_id }}" class="binput"></td>
                    <th style="text-align: left; padding-left: 110px;">: ব্যবসা প্রতিষ্ঠানের ঠিকানা :</th>
                </tr>
            </table>
            <table style="width: 100%; padding-top:0%; margin-top:0%">
                <tr style="padding-top:0%; margin-top:0%">
                    <th style="width: 25%; text-align: left;">জাতীয় পরিচয়পত্র নম্বর </th>
                    <td><input type="text" value="{{ $trade->voter_id_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">হোল্ডিং নম্বর</th>
                    <td><input type="text" value="{{ $trade->institution_holding_number }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ </th>
                    <td><input type="text" value="{{ \Carbon\Carbon::parse($trade->birth_date)->format('d-m-Y')}}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">রাস্তা/ব্লক</th>
                    <td><input type="text" value="{{ $trade->business_street_nm }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">লিঙ্গ</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->gender == 1 ) পুরুষ @elseif ($trade->gender == 2 )মহিলা @elseif ($trade->gender == 3 )তৃতীয় লিঙ্গ @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">গ্রাম/পাড়া </th>
                    <td><input type="text" value="{{ $trade->business_village_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ই-মেইল(যদি থাকে)</th>
                    <td><input type="text" value="{{ $trade->email }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">সেক্টর / ওয়ার্ড </th>
                    <td><input type="text" value="{{ $wards?->ward_name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল নম্বর</th>
                    <td><input type="text" value="{{ $trade->phone }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইউনিয়ন পরিষদ</th>
                    <td><input type="text" value="{{ $unions?->name_bn}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ব্যাংক একাউন্ট</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->bank_acc == 1 ) আছে @else নাই @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডাকঘর</th>
                    <td><input type="text" value="{{ $trade->business_post_office}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ধর্ম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($trade->religion == 1 ) ইসলাম @elseif ($trade->religion == 2 )হিন্দু @elseif ($trade->religion == 3 )বৌদ্ধ@elseif ($trade->religion == 4 )খ্রিষ্টান@elseif ($trade->religion == 5 )উপজাতি @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">উপজেলা/থানা</th>
                    <td><input type="text" value="{{ $upazilas->name_bn}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ব্যবসা প্রতিষ্ঠানের নাম</th>
                    <td><input type="text" value="{{ $trade->business_name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জেলা</th>
                    <td><input type="text" value="{{ $districts?->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল ব্যাংক </th>
                    <td colspan="3" style="border-style: solid; border-width: 1px; ">
                        @forelse(\App\Models\MobileBank::orderBy('created_at')->get() as $data)
                        <input type="checkbox" value="{{$data->id}}" @if(in_array($data->id, $Mobile)) checked @endif><label for="">{{$data->name}}</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        @empty
                        @endforelse
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মালিকানার ধরন</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($trade->type_ownership_organization == 1 ) একক@elseif ($trade->type_ownership_organization == 2 )যৌথ @else কোম্পানি @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ই-টিন নম্বর(যদি থাকে)</th>
                    <td><input type="text" value="{{ $trade->e_tin_number }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ব্যবসায়িক অবকাঠামু</th>
                    <td><input type="text" value="{{ $trade->house?->name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ব্যবসায়িক ধরন</th>
                    <td><input type="text" value="{{ $trade->business?->name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ব্যবসার মূলধন</th>
                    <td><input type="text" value="{{ $trade->estimated_capital_business }}" class="binput"></td>
                </tr>
            </table>
            <div style="margin-top: .7rem; margin-left: 11rem; color: rgb(6, 153, 62);">
                আমি ঘোষণা করতেছি যে,সরকারের ভোক্তা অধিকার আইন ও ব্যাবসায়িক নিয়ম মেনে ব্যবসা<br/> <span style="margin-top: 2rem;">পরিচালনা করিব। আমার দেয়া উপরের বর্ণিত তথ্য সঠিক। যদি মিথ্যা প্রমানিত হয়,</span> <span style="margin-top: 2rem; margin-left: 7rem;">তাহার জন্য আমি আইনত দায়ী থাকিব।</span>
            </div>
            <div style="margin-top: .9rem; margin-left: 13rem; color: rgb(16, 123, 224);">
                <b style="background-color: rgb(6, 153, 62);color:aliceblue; text:white; padding: 10px 60px 10px;">|| সবাই মিলে দেব কর,ইউনিয়ন পরিষদ হবে স্বনির্ভর  ||</b>
            </div>
        </div>
    </div>
</body>
</html>

