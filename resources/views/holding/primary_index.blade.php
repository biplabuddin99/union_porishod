<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>হোল্ডিং তথ্য সংগ্রহ ফরম</title>
    <style>
        @page {
            margin-top: 0mm; /* set a 1cm margin on all sides */
        }
        body{
            font-size: 13px;
        }
        .wrapper{
            width: 700px;
            margin: auto;
        }
        .photo{
            position: absolute;
            padding-left: 80px;
            padding-top: 8px;
        }
        .mujib{
            position: absolute;
            padding-left: 190px;
            padding-top: 8px;
        }
        .headcontent{
            text-align: center;
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
                <img src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->logo:'./images/Login-01.png')}}" width="80px" height="80px" alt="Logo">
            </div>
            <div class="headcontent">
                <img class="mujib" src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->formlogo:'logo/mujib_logo-01.png')}}" width="80px" height="80px" alt="Logo">
                <h5 style="margin-top: 8px; margin-bottom: 5px; color: rgb(226, 125, 31);">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h5>
                <h3 style="margin: 5px; color: rgb(23, 36, 158);">{{ request()->session()->get('upsetting')->union?->name_bn}} ইউনিয়ন পরিষদ, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</h3>
                <h5 style="margin: 5px; color: rgb(226, 125, 31);">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->website:"ওয়েবসাইট"}}</h5>
                <h4 class="headbg" style="margin: auto;">অনলাইন আবেদন-হোল্ডিং প্লেট</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>আবেদন নং :</b><input class="formno" value="{{ $hold->id }}" type="text"></div>
            <div class="datediv"><b>তারিখ :</b><input class="hdate" value="{{ \Carbon\Carbon::parse($hold->holding_date)->format('d-m-Y') }}" type="text"></div>
        </div>
        <div style="position: relative; margin-top: 5px;">
            <table class="imgreleted" style="width: 84%;min-height:105px;">
                <tr>
                    <th style="width: 30%; text-align: left;">বাড়ি প্রধানের নাম </th>
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
                <img height="100px" width="100px" src="{{ asset('uploads/holding/'.$hold->image)}}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt="No IMAGE">
            </div>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">ডিজিটাল জন্ম নিবন্ধন নম্বর</th>
                    <td><input type="text" value="{{ $hold->birth_registration_id }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জাতীয় পরিচয়পত্র নম্বর </th>
                    <td><input type="text" value="{{ $hold->voter_id_no }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ </th>
                    <td><input type="text" value="{{ \Carbon\Carbon::parse($hold->birth_date)->format('d-m-Y')}}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ই-মেইল(যদি থাকে)</th>
                    <td><input type="text" value="{{ $hold->email }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল নম্বর </th>
                    <td><input type="text" value="{{ $hold->phone }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ইন্টারনেট ব্যবহার </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->internet_connection == 1 ) হ্যাঁ @else না @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মুক্তিযোদ্ধা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->freedom_fighter == 1 ) বীর মুক্তিযোদ্ধা @elseif ($hold->freedom_fighter == 2 )বীরাঙ্গনা @elseif ($hold->freedom_fighter == 3 )অন্যান্য @endif </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডিসলাইন সংযোগ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->disline_connection == 1 ) আছে @else নাই @endif</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বাড়ির হোল্ডিং নম্বর</th>
                    <td><input type="text" value="{{ $hold->house_holding_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">রাস্তা / ব্লক</th>
                    <td><input type="text" value="{{ $hold->street_nm }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">গ্রাম / পাড়া</th>
                    <td><input type="text" value="{{ $hold->village_name }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">সেক্টর / ওয়ার্ড </th>
                    <td><input type="text" value="{{ $hold->ward?->ward_name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ইউনিয়ন পরিষদের নাম </th>
                    <td><input type="text" value="{{ $hold->union?->name_bn }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ডাকঘর </th>
                    <td><input type="text" value="{{ $hold->post_office }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">উপজেলা/থানা</th>
                    <td><input type="text" value="{{ $hold->upazila?->name_bn }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">জেলা </th>
                    <td><input type="text" value="{{ $hold->district?->name_bn }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বৈবাহিক অবস্থা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->marital_status == 1 ) বিবাহিত @else অবিবাহিত @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">লিঙ্গ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->gender == 1 ) পুরুষ @elseif ($hold->gender == 2 )মহিলা @elseif ($hold->gender == 3 )তৃতীয় লিঙ্গ @endif </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">নলকূপ </th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->tube_well == 1 ) আছে @else নাই @endif</td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাথরুম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->paved_bathroom == 1 ) কাঁচা @else পাকা @endif</td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th width="25%" style="text-align: left;">ব্যাংক একাউন্ট </th>
                    <td style="border: 1px solid rgb(19, 18, 18); border-top:5px solid #aaa"> @if ($hold->bank_acc == 1 ) আছে @else নাই @endif</td>
                    <th style="width: 25%; text-align: left; border-top:5px solid #aaa">পেশা বা কর্ম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);border-top:5px solid #aaa">{{$hold->income?->name}}</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ধর্ম</th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($hold->religion == 1 ) ইসলাম @elseif ($hold->religion == 2 )হিন্দু @elseif ($hold->religion == 3 )বৌদ্ধ@elseif ($hold->religion == 4 )খ্রিষ্টান@elseif ($hold->religion == 5 )উপজাতি @endif</td>
                
                    <th style="width: 25%; text-align: left; padding-left: 10px;">শিক্ষাগত যোগ্যতা </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">@if ($hold->edu_qual == 1 ) স্ব-শিক্ষিত @elseif ($hold->edu_qual == 2 )প্রাথমিক @elseif ($hold->edu_qual == 3 )মাধ্যমিক@elseif ($hold->edu_qual == 4 )উচ্চ-মাধ্যমিক@elseif ($hold->edu_qual == 5 )উচ্চতর-ডিগ্রী @endif</td>
                </tr>
                {{--  <tr>
                    <th style="width: 25%; text-align: left;">পেশা বা কর্ম </th>
                    <td style="border: 1px solid rgb(19, 18, 18);">
                        {{$hold->income?->name}}
                    </td>
                </tr>  --}}
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
                    <th style="width: 25%; text-align: left;">ডিজিটাল ডিভাইস</th>
                    <td colspan="3" style="border-style: solid; border-width: 1px;">
                        @forelse(\App\Models\DigitalDevice::orderBy('created_at')->get() as $data)
                        <input type="checkbox" value="{{$data->id}}" @if(in_array($data->id, $Digital_devices)) checked @endif><label for="">{{$data->name}}</label>&nbsp;&nbsp;&nbsp;&nbsp;
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
                {{--  <tr>
                    <th style="width: 25%; text-align: left;">ব্যবসায়িক করের উৎস </th>
                    <td style="border-style: solid; border-width: 1px; font-size:12px" colspan="3">
                        @forelse(\App\Models\IncomeSource::orderBy('created_at')->get() as $data)
                        <div style="float:left; width:25%;white-space: nowrap;"><input type="checkbox" value="{{$data->id}}" @if(in_array($data->id, $Business_tax)) checked @endif><label for="">{{$data->name}}</label></div>
                        @empty
                        @endforelse
                    </td>
                </tr>  --}}
            </table>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির অবকাঠামু</th>
                    <td><input type="text" value="{{$hold->house?->name}}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">বাড়ির রুম/ঘর</th>
                    <td><input type="text" value="{{ $hold->house_room }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পরিবারের সদস্য (পুরুষ)</th>
                    <td><input type="text" value="{{$hold->num_male}}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">পরিবারের সদস্য (মহিলা)</th>
                    <td><input type="text" value="{{ $hold->num_female }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পরিবারের মোট সদস্য</th>
                    <td><input type="text" value="{{($hold->num_male+$hold->num_female)}}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">পরিবারের ভোটার (পুরুষ)</th>
                    <td><input type="text" value="{{ $hold->num_male_vot }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পরিবারের ভোটার (মহিলা)</th>
                    <td><input type="text" value="{{$hold->num_female_vot}}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">পরিবারের মোট ভোটার</th>
                    <td><input type="text" value="{{ $hold->num_female_vot+$hold->num_female }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির জমি পরিমান</th>
                    <td><input type="text" value="{{ $hold->percentage_house_land }}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">আবাদী জমি পরিমান</th>
                    <td><input type="text" value="{{ $hold->percentage_cultivated_land }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বাড়ির আনুমানিক মূল্য</th>
                    <td><input type="text" value="{{ $hold->estimated_value_house }}" class="binput"></td>
                    <th style="width: 25%; text-align: left;">পারিবারিক অবস্থা</th>
                    <td style="border: 1px solid rgb(19, 18, 18);"> @if ($hold->family_status == 1 ) হতদরিদ্র @elseif ($hold->family_status ==2)নিন্ম-মধ্যবৃত্ত @elseif ($hold->family_status ==3)মধ্যবৃত্ত @elseif ($hold->family_status ==4)উচ্চ-মধ্যবৃত্ত @elseif($hold->family_status ==5)উচ্চবৃত্ত @endif</td>
                </tr>
            </table>
            <table style="width: 100%;">
                {{--  <tr>
                    <th style="width: 25%; text-align: left;"></th>
                    <td style="border-style: solid; border-width: 1px;"><label for=""><span style="background-color:rgb(1, 4, 7); color: rgb(244, 247, 250); padding: 5px 5px 3px 5px; margin-left: 0px;">সর্বমোট ট্যাক্স</span> হোল্ডিং ট্যাক্স + ব্যাসায়িক ট্যাক্স =</label><input value="{{ $hold->total_tax }}" type="text" class="sbinput">টাকা</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;"></th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">কথায়:</label><input value="{{ $hold->total_tax }}" type="text" class="sbinput">টাকা মাত্র</td>
                </tr>  --}}
            </table>
            <div style="margin-top: .7rem; margin-left: 11rem; color: rgb(16, 123, 224);">
                আমি ঘোষণা করতেছি যে, আমার দেয়া উপরের বর্ণিত তথ্য সঠিক। যদি উপরের বর্ণিত তথ্য মিথ্যা <span style="margin-top: 2rem; margin-left: 7rem;">প্রমানিত হয়,তাহার জন্য আমি আইনগত দায়ী থাকিব।</span>
            </div>
            <div style="margin-top: .9rem; margin-left: 15rem; color: rgb(16, 123, 224);">
                <b style="background-color: rgb(0, 45, 143);color:aliceblue; text:white; padding:.6rem;">|| সবাই মিলে দেব কর,ইউনিয়ন পরিষদ হবে স্বনির্ভর  ||</b>
            </div>
        </div>
    </div>
</body>
</html>