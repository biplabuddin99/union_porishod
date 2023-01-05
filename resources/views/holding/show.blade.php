<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .headcontent{
            text-align: center;
            padding-left: 80px;
            padding-top: 0.1px;
            /* margin-top: 20px; */
            position: relative;
        }
        .headbg{
            border-radius: 50px ;
            background: #191a19;
            padding: 5px;
            width: 200px;
            color: white;
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
            width: 100%;
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
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header" >
            <div class="photo">
                <img src="{{ asset('logo/Screenshot_3.png') }}" width="80px" height="80px" alt="Logo">
            </div>
            <div class="headcontent">
                <h5 style="margin-top: 20px; margin-bottom: 5px;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h3>
                <h3 style="margin: 5px;">চিরাম ইউনিয়ন পরিষদ, বারহাট্টা, নেত্রকোণা</h1>
                <h4 class="headbg" style="margin: auto;">ডিজিটাল তথ্য সংগ্রহ ফরম</h2>
            </div>
        </div>
        <div>
            <div class="formnodiv"><b>ফরম নং -</b><input class="formno" value="{{ $hold->form_no }}" type="text"></div>
            <div class="datediv"><b>তারিখঃ</b><input class="hdate" value="{{ $hold->holding_date }}" type="text"></div>
        </div>
        <div style="margin-top: 15px;">
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">বাড়ির প্রধানের নাম :-</th>
                    <td><input type="text" value="{{ $hold->head_household }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পিতার নাম :-</th>
                    <td><input type="text" value="{{ $hold->father_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মাতার নাম :-</th>
                    <td><input type="text" value="{{ $hold->mother_name }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">স্বামী/স্ত্রীর নাম :-</th>
                    <td><input type="text" value="{{ $hold->husband_wife }}" class="binput"></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">নতুন হোল্ডিং নম্বর :-</th>
                    <td><input type="text" value="{{ $hold->new_holding_no }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">আগের হোল্ডিং নম্বর :-</th>
                    <td><input type="text" value="{{ $hold->previous_holding_no }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">গ্রাম/পাড়া/মহল্লা :-</th>
                    <td><input type="text" value="{{ $hold->village }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ওয়ার্ড নং :-</th>
                    <td><input type="text" value="{{ $hold->ward_no }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">জন্ম তারিখ :-</th>
                    <td><input type="text" value="{{ $hold->birth_date }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ভোটার আইডি নং :-</th>
                    <td><input type="text" value="{{ $hold->voter_id_no }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল নম্বর :-</th>
                    <td><input type="text" value="{{ $hold->phone }}" class="binput"></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ই-মেইল :-</th>
                    <td><input type="text" value="{{ $hold->email }}" class="binput"></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বৈবাহিক অবস্থা :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input value="1" {{ $hold->marital_status=="1" ? "checked":"" }} type="checkbox"><label for="">বিবাহিত</label>
                        <input value="2" {{ $hold->marital_status=="2" ? "checked":"" }} type="checkbox"><label for="">অবিবাহিত</label>
                    </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">লিঙ্গের অবস্থা :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input value="1" {{ $hold->gender=="1" ? "checked":"" }} type="checkbox"><label for="">পুরুষ</label>
                        <input value="2" {{ $hold->gender=="2" ? "checked":"" }} type="checkbox"><label for="">মহিলা</label>
                        <input value="3" {{ $hold->gender=="3" ? "checked":"" }} type="checkbox"><label for="">হিজলা</label>
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ডিজিটাল জন্ম নিবন্ধন :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input value="1" {{ $hold->digital_birth_cer=="1" ? "checked":"" }} type="checkbox"><label for="">আছে</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input value="2" {{ $hold->digital_birth_cer=="2" ? "checked":"" }} type="checkbox"><label for="">নাই</label></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">পাকা বাথরুম :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input value="1" {{ $hold->paved_bathroom=="1" ? "checked":"" }} type="checkbox"><label for="">আছে</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input value="2" {{ $hold->paved_bathroom=="2" ? "checked":"" }} type="checkbox"><label for="">নাই</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বিদেশে থাকে প্রবাসী :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input value="1" {{ $hold->expatriate=="1" ? "checked":"" }} type="checkbox"><label for="">আছে</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input value="2" {{ $hold->expatriate=="2" ? "checked":"" }} type="checkbox"><label for="">নাই</label>
                    </td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">বিদ্যুৎ সংযোগ :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input value="1" {{ $hold->power_connection=="1" ? "checked":"" }} type="checkbox"><label for="">আছে</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input value="2" {{ $hold->power_connection=="2" ? "checked":"" }} type="checkbox"><label for="">নাই
                        </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">নলকুপ :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input  value="1" {{ $hold->tube_well=="1" ? "checked":"" }} type="checkbox"><label for="">আছে</label>&nbsp;&nbsp;&nbsp;&nbsp;<input  value="2" {{ $hold->tube_well=="2" ? "checked":"" }} type="checkbox"><label for="">নাই</label></td>
                    <th style="width: 25%; text-align: left; padding-left: 10px;">ব্যাংক হিসাব :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input value="1" {{ $hold->bank=="1" ? "checked":"" }} type="checkbox"><label for="">আছে</label>&nbsp;&nbsp;&nbsp;&nbsp;<input value="2" {{ $hold->bank=="2" ? "checked":"" }} type="checkbox"><label for="">নাই</td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th style="width: 25%; text-align: left;">শিক্ষাগত যোগ্যতা :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input value="1" {{ $hold->edu_qual=="1" ? "checked":"" }} type="checkbox"><label for="">স্ব-শিক্ষিত</label>&nbsp;&nbsp;
                        <input value="2" {{ $hold->edu_qual=="2" ? "checked":"" }} type="checkbox"><label for="">প্রাথমিক</label>&nbsp;&nbsp;
                        <input value="3" {{ $hold->edu_qual=="3" ? "checked":"" }} type="checkbox"><label for="">মাধ্যমিক</label>&nbsp;&nbsp;
                        <input value="4" {{ $hold->edu_qual=="4" ? "checked":"" }} type="checkbox"><label for="">উচ্চ-মাধ্যমিক</label>&nbsp;&nbsp;
                        <input value="5" {{ $hold->edu_qual=="5" ? "checked":"" }} type="checkbox"><label for="">উচ্চতর-ডিগ্রী</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পরিবারের সদস্য :-</th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">পুরুষ সদস্য</label><input type="text" value="{{ $hold->family_male }}" class="sinput"><label for="">নারী সদস্য</label><input type="text" value="{{ $hold->family_female }}" class="sinput"><label for="">মোট সদস্য</label><input type="text"  value="{{ $hold->family_total }}" class="sinput"><input value="1" {{ $hold->single_joint_family=="1" ? "checked":"" }} type="checkbox"><label for="">একক পরিবার</label><input value="2" {{ $hold->single_joint_family=="2" ? "checked":"" }} type="checkbox"><label for="">যৌথ পরিবার</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ধর্ম :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input value="1" {{ $hold->religion=="1" ? "checked":"" }} type="checkbox"><label for="">ইসলাম</label>&nbsp;&nbsp;&nbsp;&nbsp;<input value="2" {{ $hold->religion=="2" ? "checked":"" }} type="checkbox"><label for="">হিন্দু</label>&nbsp;&nbsp;&nbsp;&nbsp;<input value="3" {{ $hold->religion=="3" ? "checked":"" }} type="checkbox"><label for="">বৌদ্ধ</label>&nbsp;&nbsp;&nbsp;&nbsp;<input value="4" {{ $hold->religion=="4" ? "checked":"" }} type="checkbox"><label for="">খ্রিষ্টান</label>&nbsp;&nbsp;&nbsp;&nbsp;<input value="5" {{ $hold->religion=="5" ? "checked":"" }} type="checkbox"><label for="">অন্যান্য</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">মোবাইল ব্যাংক :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input type="checkbox"><label for="">নগদ</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"><label for="">বিকাশ</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"><label for="">রকেট</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"><label for="">উপায়</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"><label for="">অন্যান্য</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">সরকারি সুবিধা :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input type="checkbox"><label for="">ভিজিএফ কার্ড</label><input type="checkbox"><label for="">বয়স্ক ভাতা</label><input type="checkbox"><label for="">মাতৃত্বকালীন ভাতা</label><input type="checkbox"><label for="">প্রতিবন্ধী ভাতা</label><input type="checkbox"><label for="">বিধবা ভাতা</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পরিবারের অবস্থা :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input type="checkbox" value="1" {{ $hold->family_status=="1" ? "checked":"" }}><label for="">হতদরিদ্র</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="2" {{ $hold->family_status=="2" ? "checked":"" }}><label for="">নিন্ম-মধ্যবৃত্ত</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="3" {{ $hold->family_status=="3" ? "checked":"" }}><label for="">মধ্যবৃত্ত</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="4" {{ $hold->family_status=="4" ? "checked":"" }}><label for="">উচ্চ-মধ্যবৃত্ত</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="5" {{ $hold->family_status=="5" ? "checked":"" }}><label for="">উচ্চবৃত্ত</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">ডিজিটাল ডিভাইস :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input type="checkbox"><label for="">নরমাল মোবাইল</label><input type="checkbox"><label for="">স্মার্ট ফোন</label><input type="checkbox"><label for="">কম্পিউটার/ল্যাপটপ</label><input type="checkbox"><label for="">ইন্টারনেট</label><input type="checkbox"><label for="">টিভি</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">টেলিযোগাযোগ :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input type="checkbox"><label for="">টেলিটক</label><input type="checkbox"><label for="">গ্রামীন</label><input type="checkbox"><label for="">এয়ারটেল/রবি</label><input type="checkbox"><label for="">বাংলালিংক</label><input type="checkbox"><label for="">টিএনটি</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">পেশা বা আয়ের উৎস :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input type="checkbox"><label for="">চাকুরী(সরকারী)</label>
                        <input type="checkbox"><label for="">চাকুরী(বেসরকারী)</label>
                        <input type="checkbox"><label for="">ব্যবসা</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">কৃষি</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <input type="checkbox"><label for="">শিক্ষক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">প্রকৌশলী</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">আইনজীবি</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">চিকিৎসক</label><br>
                        <input type="checkbox"><label for="">শ্রমিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">খাবার হোটেল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">মৎস খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ক্ষুদ্র ও কুটির শিল্প</label><br>
                        <input type="checkbox"><label for="">গবাদি পশুর খামার</label>
                        <input type="checkbox"><label for="">গাড়ী চালক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ঠিকাদার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">মাঝারি শিল্প</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">নারী উদ্যোক্তা</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">হাঁস-মুরগীর খামার</label>
                        <input type="checkbox"><label for="">প্রবাসী</label>
                    </td>
                </tr>

                <tr>
                    <th style="width: 25%; text-align: left;">ব্যবসায়িক করের উৎস :-</th>
                    <td style="border-style: solid; border-width: 1px;">
                        <input type="checkbox"><label for="">কৃষি খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">মৎস খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">দুগ্ধ খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <input type="checkbox"><label for="">হাঁস-মুরগীর খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">গবাদি পশুর খামার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">মুদির দোকান</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">আর্থিক প্রতিষ্ঠান</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ক্ষুদ্র ও কুটির শিল্প</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">মাঝারি শিল্প</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <input type="checkbox"><label for="">খাবার হোটেল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">প্রকৌশলী</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">আইনজীবি</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                        <input type="checkbox"><label for="">চিকিৎসক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ক্লিনিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ঔষদের দোকান</label><br>
                        <input type="checkbox"><label for="">আবাসিক হোটেল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">মিষ্টির দোকান</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">বে-সরকারি হাসপাতাল</label><br>
                        <input type="checkbox"><label for="">বে-সরকারি স্কুল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">কোচিং সেন্টার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">খাবরের হোটেল</label><br>
                        <input type="checkbox"><label for="">হিমাগার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ধান ভাঙানোর কল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">আটার কল</label><br>
                        <input type="checkbox"><label for="">তেলের কল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">স'মিল</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">বিউটি পারলার</label><br>
                        <input type="checkbox"><label for="">হেয়ার কাট সেলুন</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">লন্ড্রীর দোকান</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ইঞ্জিনিয়ারিং ফার্ম</label><br>
                        <input type="checkbox"><label for="">শিল্প কারখানা</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ইট ভাটা</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">কনসালটেন্সি ফার্ম</label><br>
                        <input type="checkbox"><label for="">গুদাম</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">রিক্সার মালিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">বাজার ইজারা</label><br>
                        <input type="checkbox"><label for="">টেম্পোর মালিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">বাসের মালিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">ট্রাকের মালিক</label><br>
                        <input type="checkbox"><label for="">পরিবহন এজেন্সী</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">নৌযানের মালিক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">অটো রিক্সার মালিক</label><br>
                        <input type="checkbox"><label for="">স্টীমার/কার্গোর মালিক</label>&nbsp;&nbsp;
                        <input type="checkbox"><label for="">শিশু পার্ক</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">বিনোদন পার্ক</label><br>
                        <input type="checkbox"><label for="">পশু জবাইয়</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">১ম শ্রেণীর ঠিকাদার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">২য় শ্রেণীর ঠিকাদার</label><br>
                        <input type="checkbox"><label for="">৩য় শ্রেণীর ঠিকাদার</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox"><label for="">অন্যান্য।</label><br>
                        <input type="checkbox"><input type="text" value="{{ $hold->business_amount_taxes }}" class="sbinput"><label for="">করের পরিমান =</label><input value="{{ $hold->sources_other_taxes }}" type="text" class="sbinput">টাকা
                    </td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">অন্যান্য করের উৎস :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input type="checkbox"><input type="text" class="sbinput"><label for="">করের পরিমান =</label><input type="text" class="sbinput">টাকা</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">বসত বাড়ীর ধরন :-</th>
                    <td style="border-style: solid; border-width: 1px;"><input type="checkbox"><label for="">কাচা-ঘর</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"><label for="">টিনসেট</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"><label for="">আধা-পাকা</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"><label for="">পাকা-ইমারত</label></td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">হোল্ডিং ট্যাক্স :-</th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">বাড়ির আনুমানিক দাম=</label><input type="text" class="sbsinput">টাকা,&nbsp;<label for="">বার্ষিক করযোগ্য মুল্য =</label><input type="text" class="sbsinput">টাকা<br>
                        <label for="">&nbsp;&nbsp;বাড়ির করযোগ্য মুল্য=</label><input type="text" class="sbsinput">টাকা,&nbsp;<label for="">বার্ষিক করের পরিমান =</label><input type="text" class="sbsinput">টাকা</td>
                </tr>
                <tr>
                    <th style="width: 25%; text-align: left;">সর্বমোট ট্যাক্স :-</th>
                    <td style="border-style: solid; border-width: 1px;"><label for="">হোল্ডিং ট্যাক্স + ব্যাসায়িক ট্যাক্স + অন্যান্য ট্যাক্স =</label><input type="text" class="sbinput">টাকা</td>
                </tr>
            </table>
            <div style="margin-top: 2rem;">
                <div class="formnodiv"><b>তথ্য প্রধানকারীর স্বাক্ষর :-</b><input class="infoinput" type="text"></div>
                <div class="infodiv"><b>তথ্য সংগ্রহকারীর স্বাক্ষর :-</b><input class="infoinput" type="text"></div>
            </div>
            <table style="width: 100%; margin-top: 1rem;">
                <tr >
                    <td style=" width: 35%;">

                        <div style="margin-bottom: 1rem; font-size: 11px;">
                            <div class="fhead"><h5 style="margin-bottom: 5px;">সার্বিক সহযোগিতায়</h5></div>
                            <img  class="fphoto" src="{{ asset('./logo/Screenshot_6.jpg') }}" width="40px" alt="">
                            <div style="text-align: center;" class="rightcontent">
                                <h5 style="padding: 0px; margin: 0px;">\\ আল্লাহ সর্বশক্তিমান \\</h5>
                                <h5 style="padding: 0px; margin: 0px;">বাংলাদেশ ডিজিটাল গেটওয়ে লিমিটেড</h5>
                                <h4 style="padding: 0px; margin: 0px;">Bangladesh Digital Getway Limited</h4>
                                <h5 style="padding: 0px; margin: 0px;">www.bdgl.online</h5>
                            </div>
                            <p style="margin: 0px;"><h5 style="margin: 0px;"><b>Dhaka Office:</b> H-76, (1st Floor),New Airport Road,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amtoli, Banani, Dhaka-1212.</h5></p>
                        </div>
                    </td>
                    <td style="text-align: center;"><img src="logo/Screenshot_5.jpg" width="30%" height="auto" alt=""></td>
                    <td style="text-align: center; width: 28%;">
                        <h5 style="padding: 0px; margin: 0px;">আদেশক্রমে</h5>
                        <h4 style="padding: 0px; margin: 0px;">(মোঃ সাইদুর রহমান চৌধুরী)</h4>
                        <h6 style="padding: 0px; margin: 0px;">চেয়ারম্যান</h6>
                        <h6 style="padding: 0px; margin: 0px;">চিরাম ইউনিয়ন পরিষদ</h6>
                        <h6 style="padding: 0px; margin: 0px;">বারহাট্টা, নেত্রকোণা।</h6>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
