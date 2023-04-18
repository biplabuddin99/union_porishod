@extends('layout.app')
{{-- @section('pageTitle',trans('প্রিন্ট প্রি ভিউ')) --}}

@section('content')
<div id="result_show">
    <section style="font-size: 12px">
        <section style="margin-top: 30px;">
            <div class="container">
                <div class="row">
                    <h6 class="text-center" style="margin-top: 20px; margin-bottom: 5px;"><strong>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</strong></h6>
                    <div class="col-md-12 text-center"
                        style="margin-top: 10px; margin-bottom: 10px; border-radius: 4px; background-color: rgb(196, 213, 245);">
                        <h4 style="color: rgb(245, 10, 10); padding-top: 5px;"><strong>চিরাম ইউনিয়ন পরিষদ</strong></h4>
                    </div>
                    <h6 class="text-center">বারহাট্টা,নেত্রকোণা</h6>
                    <h6 class="text-center">www.bdgl.online/chhiramup</h6>
                </div>
            </div>
        </section>
        <section style="margin-top: 5px;">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img height="130px" width="130px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                        <p style="padding-top: 10px; border-bottom: 3px solid rgb(15, 1, 1);"><strong>ওয়ারিশান ইস্যুর বিবরন</strong></p>
                        <p>ইস্যুর তারিখঃ {{ $warisan->holding_date }}</p>
                        <p>ইস্যুর সময়ঃ {{ $warisan->created_at->format("h:i:s A") }}</p>
                    </div>
                    <div class="col-4 col-sm-4" style="padding-left: 110px; padding-top: 5px;">
                        <img height="130px" width="130px" src="{{ asset('images/show_img/logo.png') }}" alt="">
                        <h4 class="font-bold clo-sm-4" style="padding-top: 10px; color: rgb(167, 86, 10);">ই-ওয়ারিশান সনদ</h4>
                        {{-- <h5 class="font-bold" style="padding-top: 10px; color: rgb(36, 247, 29);">লাইসেন্স নং:  TRAD/2CHUP/24066</h5> --}}
                    </div>
                    <div class="col-4" style="padding-left: 200px;">
                        <img height="130px" width="120px"  src="{{ asset('uploads/warishan/thumb') }}/{{ $warisan->image }}" alt="">
                    </div>
                    <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 5px;">ওয়ারিশান সনদ নং:  SHARER/2CHUP/00{{ $warisan->id }}</h5>
                </div>
                <div class="row">
                    <p class="text-center" style="border-bottom: 2px solid rgb(73, 235, 8); border-top: 2px solid rgb(73, 235, 8); padding-top: 5px;">
                        উত্তরাধিকারী আইনে মৃত ব্যক্তির সম্পত্তি উত্তরাধিকারীরাই অংশীদার বা ওয়ারিশ। নিন্মে বর্ণিত ব্যক্তি ওয়ারিশান সনদের সকল তথ্য উল্লেখ করা হলো।
                    </p>
                    <p class="text-center">এই মর্মে প্রত্যয়ন করা যাইতেছে যে, উক্ত ব্যাক্তি জন্মসূত্রে বাংলাদেশের নাগরিক ও অত্র ইউনিয়নের স্থায়ী বাসীন্দা ছিলেন।<br/>
                        তিনি একজন ভাল মানুষ ছিলেন এবং আমার পরিচিত ছিল। 
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
                        <span  class="form-label" for="">মৃতব্যাক্তির নাম :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $warisan->warishan_person_name }}</span>
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
                        <span  class="form-label" for="">{{ $warisan->father_husband }}</span>
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
                        <span  class="form-label" for="">{{ $warisan->warishan_mother_name }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৪।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">মৃতব্যাক্তির সহিত আবেদনকারীর সম্পর্ক :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">ছেলে</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৫।</span>
                    </div>
                    <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                        <span  class="form-label" for="">মৃত ব্যাক্তির স্থায়ী ঠিকানা :</span>
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
                        <span  class="form-label" for="">{{ $warisan->house_holding_no }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">ওয়ার্ড নং :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $wards->ward_name_bn }}</span>
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
                        <span  class="form-label" for="">{{ $warisan->village_name }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">ডাকঘর :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $warisan->post_office }}</span>
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
                        <span  class="form-label" for="">{{ $upazilas->name_bn }}</span>
                    </div>
                    <div class="col-3">
                        <span  class="form-label" for="">জেলা :</span>
                    </div>
                    <div class="col-2">
                        <span  class="form-label" for="">{{ $districts->name_bn }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৬।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">উক্তব্যাক্তির মৃত্যু তারিখ :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $warisan->date_death_warishan }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৭।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">মৃত্যু নিবন্ধন সনদ নং :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">২৭৩</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৮।</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">মৃত ব্যাক্তির উত্তরাধিকারী সদস্য :</span>
                    </div>
                    <div class="col-5">
                        <span  class="form-label" for="">{{ $warisan->total_warishan_members }}</span>
                    </div>
                </div>
                <div class="row m-2">
                    <div class="col-1">
                        <span  class="form-label" for="">৯।</span>
                    </div>
                    <div class="col-7">
                        <span  class="form-label" for="">তিনি মৃত্যুকালে নিম্নলিখিত উত্তরাধিকারী রাখিয়া মৃত্যুবরণ করেন । </span>
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
                        @if ($warisan->warisan_children)
                        @foreach ($warisan->warisan_children as $c)
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
                            <td>জীবীত</td>
                        </tr>                           
                        @endforeach
                            
                        @endif
                    </table>
                </div>
                <div class="row m-2">
                    <div class="col-12">
                        <h6>মৃত ব্যাক্তির ৬ (ছয়) জন উত্তরাধিকারী সদস্য ছাড়া আর কোন উত্তরাধিকারী অংশীদার নাই। উপরোক্ত বিবরণে যদি কোন প্রকার মিথ্যা তথ্য থাকে তা প্রমান হলে,আবেদনকৃত ব্যাক্তির বিরুদ্ধে আইনানুগ ব্যবস্থা নেয়া যাবে। আমি নিম্নস্বাক্ষরকারী ২ নং ওয়ার্ড ইউপি সদস্য / কাউন্সিলর দ্বারা সত্যায়ন পূর্বক উক্ত ব্যাক্তির ওয়ারিশান সনদ প্রদান করিলাম।</h6>
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
                <div class="col-4">
                </div>
                <div class="col-3"></div>
                <div class="col-4" style="color: rgb(18, 5, 133); padding-top:10px">
                    <div class="row"><strong>(মো: সাইদুর রহমান চৌধুরী)</strong></div>
                    <div class="row" style="padding-left: 60px">চেয়ারম্যান</div>
                    <div class="row"style="padding-left: 30px">চিরাম ইউনিয়ন পরিষদ</div>
                    <div class="row" style="padding-left: 40px">বারহাট্টা,নেত্রকোণা</div>
                </div>
            </div>
            <div class="font-bold row" style="padding-top:20px;">
                <h5 class="text-center pt-1" style="border-bottom: 5px solid rgb(73, 235, 8); border-top: 3px solid rgb(212, 33, 27); background-color: rgb(125, 197, 135);">|| সময়মত ইউনিয়ন পরিষদের কর পরিশোধ করুন ||</h5>
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