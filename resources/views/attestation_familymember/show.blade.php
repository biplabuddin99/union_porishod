@extends('layout.app')

@section('content')
<div id="result_show">
    <section style="font-size: 12px">
        <section style="margin-top: 30px;">
            <div class="container">
                <div class="row">
                    <h6 class="text-center" style="margin-top: 20px; margin-bottom: 5px;"><strong>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</strong></h6>
                    <div class="col-md-12 text-center"
                        style="margin-top: 10px; margin-bottom: 10px; border-radius: 4px; background-color: rgb(196, 213, 245);">
                        <h5 class="theme-text-color" style="padding-top: 5px;"><strong>{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->union?->name_bn:""}} ইউনিয়ন পরিষদ</strong></h5>
                    </div>
                    <h6 class="text-center">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</h6>
                    <h6 class="text-center">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->website:"ওয়েবসাইট"}}www.bdgl.online/chhiramup</h6>
                </div>
            </div>
        </section>
        <section style="margin-top: 5px;">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img height="130px" width="130px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                        <p style="padding-top: 10px; border-bottom: 3px solid rgb(15, 1, 1);"><strong>পারিবারিক সনদ ইস্যুর বিবরন</strong></p>
                        <p>ইস্যুর তারিখঃ {{ $attestation->holding_date }}</p>
                        <p>ইস্যুর সময়ঃ {{ $attestation->created_at->format("h:i:s A") }}</p>
                    </div>
                    <div class="col-4 col-sm-4" style="padding-left: 110px; padding-top: 5px;">
                        <img height="130px" width="130px" src="{{ asset('images/show_img/logo.png') }}" alt="">
                        <h4 class="font-bold clo-sm-4" style="padding-top: 10px; color: rgb(167, 86, 10);">ই-পারিবারিক সনদ</h4>
                        {{-- <h5 class="font-bold" style="padding-top: 10px; color: rgb(36, 247, 29);">লাইসেন্স নং:  TRAD/2CHUP/24066</h5> --}}
                    </div>
                    <div class="col-4" style="padding-left: 215px;">
                        <img height="140px" width="120px"  src="{{ asset('uploads/attestation/thumb') }}/{{ $attestation->image }}" alt="">
                    </div>
                    <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 5px;">পারিবারিক সনদ নং:  SHARER/2CHUP/00{{ $attestation->id }}</h5>
                </div>
                <div class="row">
                    <p class="text-center" style="border-bottom: 2px solid rgb(73, 235, 8); border-top: 2px solid rgb(73, 235, 8); padding-top: 5px;">
                        পারিবারিক আইনে বাড়ির প্রধান ব্যাক্তি বাবাই পরিবারের প্রধান। নিন্মে বর্ণিত ব্যক্তির পারিবারিক সনদের সকল তথ্য উল্লেখ করা হলো।
                    </p>
                    <p class="text-center">এই মর্মে প্রত্যয়ন করা যাইতেছে যে, উক্ত ব্যাক্তি জন্মসূত্রে বাংলাদেশের নাগরিক ও অত্র ইউনিয়নের স্থায়ী বাসীন্দা। এলাকায় তিনি একজন ভাল<br/>
                        মানুষ হিসেবে সু-পরিচিত আছে। আমার জানামতে তিনি রাষ্ট্র বা সমাজ বিরোধী কোন কার্যকলাপে জড়িত নহে। 
                    </p>
                </div>
            </div>
        </section>
        <section class="col-10 offset-1" style="border: 3px solid rgb(122, 101, 4); position: relative;">
            <div class="bgimage">
                <img style="background-repeat: no-repeat; position: absolute; height: 400px; width: auto; align-items: center; padding-left: 300px; padding-top: 100px;" 
                src="{{ asset('images/show_img/bglogo.png') }}" alt="">
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">১।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">পরিবারের প্রধান ব্যাক্তির নাম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $attestation->familyhead_name }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">2।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">পিতা/স্বামীর নাম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $attestation->father_husband }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৩।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">মাতার নাম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $attestation->attesteation_mother_name }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৪।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">জন্ম তারিখ :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $attestation->attesteation_birth_date }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৫।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">ভোটার আইডি/ডিজিটাল জন্ম নিবন্ধন :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">ভোটার আইডি:{{ $attestation->voter_id_no }}/জন্ম নিবন্ধন:{{ $attestation->birth_registration_id }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৬।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">পেশা :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">
                            @if ($attestation->source_income ==1)
                            শিক্ষক
                            @elseif ($attestation->source_income ==2)
                            শিক্ষার্থী
                            @elseif ($attestation->source_income ==3)
                            সরকারি চাকুরীজীবি
                            @elseif ($attestation->source_income ==4)
                            বে-সরকারি চাকুরীজীবি
                            @elseif ($attestation->source_income ==5)
                            গৃহীনি
                            @elseif ($attestation->source_income ==6)
                            কৃষক
                            @elseif ($attestation->source_income ==7)
                            ব্যবসা
                            @elseif ($attestation->source_income ==8)
                            প্রকৌশলি
                            @elseif ($attestation->source_income ==9)
                            আইনজীবী
                            @elseif ($attestation->source_income ==10)
                            চিকিৎসক
                            @elseif ($attestation->source_income ==11)
                            সেবিকা
                            @elseif ($attestation->source_income ==12)
                            দলিল লেখক
                            @elseif ($attestation->source_income ==13)
                            শ্রমিক
                            @elseif ($attestation->source_income ==14)
                            ঠিকাদার
                            @elseif ($attestation->source_income ==15)
                            মৎস চাষী
                            @elseif ($attestation->source_income ==16)
                            গাড়ি চালক
                            @elseif ($attestation->source_income ==17)
                            প্রবাসী
                            @elseif ($attestation->source_income ==18)
                            অন্যান্য
                            @endif
                        </span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৭।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">ধর্ম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">
                            @if ($attestation->religion ==1)
                            ইসলাম
                            @elseif ($attestation->religion ==2)
                            হিন্দু
                            @elseif ($attestation->religion ==3)
                            বৌদ্ধ
                            @elseif ($attestation->religion ==4)
                            খ্রিষ্টান
                            @elseif ($attestation->religion ==5)
                            উপজাতি
                            @endif
                        </span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৮।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">পরিবারের সহিত আবেদনকারীর সম্পর্ক :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $attestation->applicant_relationship_family }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৯।</span>
                    </div>
                    <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                        <span  class="form-label" for="">পরিবারের প্রধান ব্যাক্তির স্থায়ী ঠিকানা :</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for=""></span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">হোল্ডিং নং :</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">{{ $attestation->house_holding_no }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">ওয়ার্ড নং :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $attestation->ward?->ward_name_bn }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for=""></span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">গ্রাম/মহল্লা :</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">{{ $attestation->village_name }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">ডাকঘর :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $attestation->post_office }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for=""></span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">থানা :</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">{{ $attestation->upazila?->name_bn }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">জেলা :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $attestation->district?->name_bn }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">১০।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">পরিবারের মোট সদস্য সংখ্যা :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $attestation->total_family_members }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৯।</span>
                    </div>
                    <div class="col-7">
                        <span  class="form-label" for="">উক্ত পরিবারের নিম্নলিখিত সদস্য সমূহ আছে তাহার বিবরণ দেয়া হলো :- </span>
                    </div>
                </div>
                <div class="row m-2" style="position: relative !important;">
                    <table class="table-bordered" style="border:1px; background-color: transparent;">
                        <tr class="text-center">
                        <th>সদস্য নং</th>
                        <th>ওয়ারিশানদের নাম </th>
                        <th>সম্পর্ক</th>
                        <th>জন্ম তারিখ</th>
                        <th>ভোটার আইডি নম্বর</th>
                        <th>মন্তব্য</th>
                        </tr>
                        @if ($attestation->attestation_familymember_children)
                        @foreach ($attestation->attestation_familymember_children as $c)
                        <tr class="text-center">
                            <td>{{++$loop->index}}</td>
                            <td>{{ $c->name }}</td>
                            <td>
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
                            <td>{{ $c->birth_date }}</td>
                            <td>{{ $c->cnid }}</td>
                            <td>{{ $c->comment }}</td>
                        </tr>                           
                        @endforeach
                            
                        @endif
                    </table>
                </div>
                <div class="row m-2">
                    <div class="col-12">
                        <h6>উপরোক্ত বিবরণে যদি কোন প্রকার মিথ্যা তথ্য থাকে তা প্রমান হলে,আবেদনকৃত ব্যাক্তির বিরুদ্ধে আইনানুগ ব্যবস্থা নেয়া যাবে। আমি নিম্নস্বাক্ষরকারী {{ $attestation->ward?->ward_name_bn }} ইউপি সদস্য / কাউন্সিলর দ্বারা সত্যায়ন পূর্বক উক্ত ব্যাক্তির ওয়ারিশান সনদ প্রদান করিলাম।</h6>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
               <div class="col-10 offset-1 pt-2" style="padding-left: 30px">
                <p class="text-center">আমি তাহার উত্তরাধিকারী সদস্যদের কল্যান ও উন্নতি কামনা করি ।</p>
               </div>
            </div>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-4" style="color: rgb(18, 5, 133); padding-top:10px">
                    <div class="row"><strong>(সাইফুল ইসলাম মনিক)</strong></div>
                    <div class="row" style="padding-left: 30px">{{ $attestation->ward?->ward_name_bn }} সদস্য</div>
                    <div class="row">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->union?->name_bn:""}} ইউনিয়ন পরিষদ</div>
                    <div class="row" style="padding-left: 30px">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</div>
                </div>
                <div class="col-3"></div>
                <div class="col-4" style="color: rgb(18, 5, 133); padding-top:10px">
                    <div class="row"><strong>(কাজী মোহাম্মদ হানিফ)</strong></div>
                    <div class="row" style="padding-left: 60px">চেয়ারম্যান</div>
                    <div class="row">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->union?->name_bn:""}} ইউনিয়ন পরিষদ</div>
                    <div class="row" style="padding-left: 30px">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</div>
                </div>
            </div>
            <div class="font-bold row" style="padding-top:20px;">
                <h5 class="text-center pt-1" style="border-bottom: 5px solid rgb(73, 235, 8); border-top: 3px solid rgb(212, 33, 27); background-color: rgb(125, 197, 135);">|| {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->slogan:"স্লোগান"}} ||</h5>
            </div>
        </section>
    </section>
</div>
<button type="button" class="btn btn-info" onclick="printDiv('result_show')">Print</button>


@endsection
@push('scripts')
<script>
    function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
@endpush