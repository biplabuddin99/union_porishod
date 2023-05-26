<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>চারিত্রিক সনদ তথ্য সংগ্রহ ফরম</title>
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
                <h4 class="headbg" style="margin: auto;">আবেদন-চারিত্রিক সনদ</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>আবেদন নং :</b><input class="formno" value="{{ $character->id }}" type="text"></div>
            <div class="datediv"><b>তারিখ :</b><input class="hdate" value="{{ \Carbon\Carbon::parse($character->apply_date)->format('d-m-Y') }}" type="text"></div>
        </div>
        <div style="position: relative; margin-top: 15px;">
            <table class="imgreleted" style="width: 84%;min-height:105px;">
                <tr>
                    <th style="width: 30%; text-align: left;">আবেদনকারীর নাম </th>
                    <td><input type="text" value="{{ $character->applicant_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পিতার নাম </th>
                    <td><input type="text" value="{{ $character->father_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম </th>
                    <td><input type="text" value="{{ $character->mother_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">স্বামী/স্ত্রীর নাম </th>
                    <td><input type="text" value="{{ $character->husband_wife }}" class="binput"></td>
                </tr>
            </table>
            <div class="image">
                <img height="100px" width="100px" src="{{ asset('uploads/character/'.$character->image)}}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';"  alt="No IMAGE">
            </div>
            <table style="width: 100%">
                <tr>
                    <th style="width: 25%; text-align: left;">ডিজিটাল জন্ম নিবন্ধন নম্বর </th>
                    <td><input style="width: 68%" type="text" value="{{ $character->birth_registration_id }}" class="binput"></td>
                    <th style="text-align: left; padding-left: 110px;">: স্থায়ী ঠিকানা :</th>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr style="padding-top:0%; margin-top:0%">
                    <th style="width: 25%; text-align: left;">জাতীয় পরিচয়পত্র নম্বর </th>
                    <td><input type="text" value="{{ $character->voter_id_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">হোল্ডিং নম্বর</th>
                    <td><input type="text" value="{{ $character->house_holding_no }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ </th>
                    <td><input type="text" value="{{ \Carbon\Carbon::parse($character->birth_date)->format('d-m-Y')}}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">রাস্তা/ব্লক</th>
                    <td><input type="text" value="{{ $character->street_nm }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">লিঙ্গ</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->gender == 1 ) পুরুষ @elseif ($character->gender == 2 )মহিলা @elseif ($character->gender == 3 )তৃতীয় লিঙ্গ @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">গ্রাম/পাড়া </th>
                    <td><input type="text" value="{{ $character->village_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বৈবাহিক অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->marital_status == 1 ) বিবাহিত @else অবিবাহিত @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">সেক্টর / ওয়ার্ড </th>
                    <td><input type="text" value="{{ $character->ward?->ward_name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মুক্তিযোদ্ধা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->freedom_fighter == 1 ) বীর মুক্তিযোদ্ধা @elseif ($character->freedom_fighter == 2 )বীরাঙ্গনা @elseif ($character->freedom_fighter == 3 )অন্যান্য @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইউনিয়ন পরিষদ</th>
                    <td><input type="text" value="{{ $character->union?->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ধর্ম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($character->religion == 1 ) ইসলাম @elseif ($character->religion == 2 )হিন্দু @elseif ($character->religion == 3 )বৌদ্ধ@elseif ($character->religion == 4 )খ্রিষ্টান@elseif ($character->religion == 5 )উপজাতি @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডাকঘর</th>
                    <td><input type="text" value="{{ $character->post_office}}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">শিক্ষাগত যোগ্যতা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($character->edu_qual == 1 ) স্ব-শিক্ষিত @elseif ($character->edu_qual == 2 )প্রাথমিক @elseif ($character->edu_qual == 3 )মাধ্যমিক@elseif ($character->edu_qual == 4 )উচ্চ-মাধ্যমিক@elseif ($character->edu_qual == 5 )উচ্চতর-ডিগ্রী @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">উপজেলা/থানা</th>
                    <td><input type="text" value="{{  $character->upazila?->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পেশা </th>
                    <td><input type="text" value="{{$character->income?->name}}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জেলা </th>
                    <td><input type="text" value="{{ $character->district?->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ডিজিটাল ডিভাইস</th>
                    <td colspan="3" style="border-style: solid; border-width: 1px;">
                        @forelse(\App\Models\DigitalDevice::orderBy('created_at')->get() as $data)
                        <input type="checkbox" value="{{$data->id}}" @if(in_array($data->id, $Digital_devices)) checked @endif><label for="">{{$data->name}}</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        @empty
                        @endforelse
                    </td>
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
                    <th style="width: 25%; text-align: left;">সরকারি সুবিধা </th>
                    <td style="border-style: solid; border-width: 1px;" colspan="3">
                        @forelse(\App\Models\GovernmentFacility::orderBy('created_at')->get() as $data)
                        <div style="float:left; width:25%"><input type="checkbox" value="{{$data->id}}" @if(in_array($data->id, $Govt_fac)) checked @endif><label for="">{{$data->name}}</label></div>
                        @empty
                        @endforelse
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ইন্টারনেট ব্যবহার </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->internet_connection == 1 ) হ্যাঁ @else না @endif</td>
                    <th width="25%" style="text-align: left; padding-left: 10px;">ব্যাংক একাউন্ট </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->bank_acc == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">আমি উক্ত ইউনিয়নের</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->permanent_resident == 1 ) স্থায়ী বাসিন্দা @else অস্থায়ী বাসিন্দা @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">উক্ত ইউনিয়নের ভোটার </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->voters_union == 1 ) হ্যাঁ @else না @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">জন্মসূত্রে নাগরিক</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->citizen_bangladesh == 1 ) হ্যাঁ @else না @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ভোটার নম্বর</th>
                    <td><input type="text" value="{{ $character->voter_no }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল নম্বর</th>
                    <td><input type="text" value="{{$character->phone}}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ই-মেইল<small>(যদি থাকে)</small></th>
                    <td><input type="text" value="{{ $character->email }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;" colspan="2">রাষ্ট্রবিরোধী কোন কাজের সাথে জড়িত</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($character->involved_anti_state == 1 ) আছে @else নাই @endif</td>
                </tr>
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
