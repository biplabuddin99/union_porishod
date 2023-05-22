@extends('layout.app')
{{-- @section('pageTitle',trans('প্রিন্ট প্রি ভিউ')) --}}

@section('content')
<div id="result_show">
    <section style="font-size: 12px">
        <section style="margin-top: 40px;">
            <div class="container">
                <div class="row">
                    <h6 class="text-center" style="margin-top: 20px; margin-bottom: 5px;"><strong>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</strong></h6>
                    <div class="col-md-12 text-center"
                        style="margin-top: 10px; margin-bottom: 10px; border-radius: 4px; background-color: rgb(196, 213, 245);">
                        <h5 class="theme-text-color" style="padding-top: 5px;"><strong>{{ request()->session()->get('upsetting')->union?->name_bn}} ইউনিয়ন পরিষদ</strong></h5>
                    </div>
                    <h6 class="text-center">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</h6>
                    <h6 class="text-center">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->website:"ওয়েবসাইট"}}</h6>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <img height="130px" width="130px" src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->formlogo:'./images/Login-01.png')}}" alt="">
                        <p style="padding-top: 10px;margin-bottom:5px;"><strong style="border-bottom: 3px solid rgb(15, 1, 1);">পারিবারিক সনদ ইস্যুর বিবরন</strong></p>
                        <p class="mb-1">ইস্যুর তারিখঃ {{ \Carbon\Carbon::parse($family->apply_date)->format('d-m-Y') }}<br>
                            ইস্যুর সময়ঃ {{ $family->created_at->format("h:i:s A") }}</p>
                    </div>
                    <div class="col-5 col-sm-5" style="padding-left: 110px; padding-top: 5px;">
                        <div style="text-align: center;">
                            <img height="130px" width="130px" src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->logo:'./images/Login-01.png')}}" alt="">
                        </div>
                        <h4 class="font-bold clo-sm-4" style="padding-top: 10px;text-align: center; color: rgb(167, 86, 10);">ই-পারিবারিক সনদ</h4>
                    </div>
                    <div class="col-4" style="padding-left: 150px;">
                        <img height="150px" width="150px"  src="{{ asset('uploads/family') }}/{{ $family->image }}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt="কোন ছবি পাওয়া যায় নি">
                    </div>
                    <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 5px;">পারিবারিক সনদ নং: HEIR/{{ $family->form_no }}</h5>
                </div>
                <div class="row">
                    <p class="text-center" style="border-bottom: 2px solid rgb(73, 235, 8); border-top: 2px solid rgb(73, 235, 8); padding-top: 5px;">
                       বাংলাদেশ সরকারের পারিবারিক আইনে বাড়ির প্রধান ব্যক্তি বাবা/মা পরিবারের প্রধান। নিন্মে বর্ণিত ব্যক্তির পরিবারের সকল তথ্য উল্লেখ পূর্বক পারিবারিক সনদ প্রদান করা হচ্ছে।
                    </p>
                    <p class="text-center">এই মর্মে প্রত্যয়ন করা যাইতেছে যে, উক্ত পরিবারের সকল সদস্য জন্মসূত্রে বাংলাদেশের নাগরিক ও অত্র ইউনিয়নের স্থায়ী বাসীন্দা।<br/>
                        আমার জানামতে সম্রান্ত ও ভালো পরিবার এবং এলাকায় তার সু-পরিচিত আছে।
                    </p>
                </div>
            </div>
        </section>
        <section class="col-10 offset-1" style="border: 3px solid rgb(122, 101, 4); position: relative;">
            <div class="bgimage">
                <img style="background-repeat: no-repeat; position: absolute; height: 350px; width: auto; align-items: center; padding-left: 300px; padding-top: 60px;"
                src="{{ asset('images/show_img/bglogo.png') }}" alt="">
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">১।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">বাড়ির প্রধান ব্যক্তির নাম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $family->name_head_family }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">২।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">আবেদনকারীর পিতার নাম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $family->father_name }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৩।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">আবেদনকারীর মাতার নাম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $family->mother_name }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৪।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">আবেদনকারীর স্বামী/স্ত্রীর নাম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $family->husband_wife }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৫।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">আবেদনকৃত ব্যক্তির সাথে সম্পর্ক :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">
                            @if ($family->relationship_applicant == 1)
                            বাবা
                            @else
                                মা
                            @endif
                        </span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৬।</span>
                    </div>
                    <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                        <span  class="form-label" for="">পরিবারের স্থায়ী ঠিকানা :</span>
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
                        <span  class="form-label" for="">{{ $family->house_holding_number }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">ওয়ার্ড নং :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $family->ward?->ward_name_bn }}</span>
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
                        <span  class="form-label" for="">{{ $family->village_name }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">ডাকঘর :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $family->post_office }}</span>
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
                        <span  class="form-label" for="">{{ $family->upazila?->name_bn }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">জেলা :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $family->district?->name_bn }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৭।</span>
                    </div>
                    <div class="col-7">
                        <span  class="form-label" for="">পরিবারের সদস্য সংখ্যা {{ $family->num_male + $family->num_female }} জন নিন্মে তাদের বিবরণ উল্লেখ করা হলো-</span>
                    </div>
                </div>
                <div class="row m-2" style="position: relative !important;">
                    <table class="table-bordered" style="border:1px; background-color: transparent;">
                        <tr class="text-center">
                        <th>সদস্য নং</th>
                        <th>সদস্যদের নাম </th>
                        <th>সম্পর্ক</th>
                        <th>জন্ম তারিখ</th>
                        <th>জন্ম নিবন্ধন/ভোটার আইডি</th>
                        <th>মন্তব্য</th>
                        </tr>
                        @if ($family->family_children)
                        @foreach ($family->family_children as $c)
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
                            <td>
                                @if ($c->ccomments==1)
                                জীবিত
                                @else
                                    মৃত
                                @endif
                            </td>
                        </tr>
                        @endforeach

                        @endif
                    </table>
                </div>
                <div class="row m-2">
                    <div class="col-12">
                        <h6>উক্ত পরিবারের মধ্যে {{ $family->num_male + $family->num_female }} জন সদস্য ছাড়া আর কোন সদস্য নাই। উপরোক্ত বিবরণে যদি কোন প্রকার মিথ্যা তথ্য থাকে, তা প্রমান হয়। ফলে আবেদনকৃত ব্যাক্তির বিরুদ্ধে আইনানুগ ব্যবস্থা নেয়া হবে। উক্ত ওয়ার্ডের ইউপি সদস্য ও কাউন্সিলর দ্বারা যাচাই পূর্বক উক্ত ব্যাক্তির পরিবারের পারিবারিক সনদ প্রদান করা হলো।</h6>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
               <div class="col-10 offset-1 pt-2" style="padding-left: 30px">
                <p class="text-center">আমি উক্ত পরিবারের সদস্যদের সার্বিক কল্যান ও সু-স্বাস্থ্য কামনা করি ।</p>
               </div>
            </div>
            <div class="row">
                <div class="col-8" style="padding-left: 100px">
                    <img height="130px" width="130px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                </div>
                <div class="col-4" style="color: rgb(18, 5, 133);align-self: end;">
                    <div class="row"><strong>({{ $family->chairman?->name}})</strong></div>
                    <div class="row" style="padding-left: 60px">চেয়ারম্যান</div>
                    <div class="row" style="padding-left: 30px">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->union?->name_bn:""}} ইউনিয়ন পরিষদ</div>
                    <div class="row" style="padding-left: 40px">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</div>
                </div>
            </div>
            <div class="font-bold row" style="padding-top:30px">
                <h5 class="col-10 offset-1 text-center pt-1" style="border-bottom: 5px solid rgb(73, 235, 8); border-top: 3px solid rgb(212, 33, 27); background-color: rgb(125, 197, 135);">|| {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->slogan:"সময়মত ইউনিয়ন পরিষদ কর পরিশোধ করুন"}} ||</h5>
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
