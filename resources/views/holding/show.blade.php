@extends('layout.app')

@section('content')
<div id="result_show">
    <style>
        @font-face {
            font-family: vrinda;
            src: url('{{ asset('assets/fonts/vrinda.ttf') }}');
          }
          body{
            background-color: #ffffff !important;
          }
    </style>
    <section style="font-family: vrinda !important; sans-serif; font-size: 20px !important;">
        <div class="row text-center m-0 p-0">
            <p class="m-0 p-0" style="font-size: 19px !important;"><b>গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</b></p>
            <div class="col-md-12 text-center p-1"
                style="border-radius: 4px; background-color: rgb(196, 213, 245);">
                <h3 class="theme-text-color m-0 p-0" style="color:red; padding-top: 5px; font-size: 32px !important;">{{ request()->session()->get('upsetting')->union?->name_bn}} ইউনিয়ন পরিষদ</h3>
            </div>
            <p class="m-0 p-0 mt-1" style="font-size: 25px !important;"><b>{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</b></p>
            <h6 class="m-0 p-0" style="font-size: 25px !important;">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->website:"ওয়েবসাইট"}}</h6>
        </div>
        <div class="row text-center m-0 p-0">
            <div class="col-4 m-0 p-0">
                <img height="160px" width="auto" src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->formlogo:'./images/Login-01.png')}}" alt="">
                <p class=" m-0 p-0"><span class=" m-0 p-0" style="border-bottom: 3px solid rgb(15, 1, 1);">হোল্ডিং নাম্বার সনদ ইস্যুর বিবরন</span></p>
                <p class=" m-0 p-0">ইস্যুর তারিখঃ {{ \Carbon\Carbon::parse($hold->holding_date)->format('d-m-Y') }}</p>
                <p class=" m-0 p-0">ইস্যুর সময়ঃ {{ $hold->created_at->format("h:i:s A") }}</p>
            </div>
            <div class="col-4 col-sm-4 m-0 p-0">
                <img class="py-2" height="160px" width="auto" src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->logo:'./images/Login-01.png')}}" alt="">
                <p class="font-bold clo-sm-4 m-0 p-0" style="color: rgb(167, 86, 10); font-size: 30px !important;">ই-হোল্ডিং নাম্বার সনদ</p>
                <p class="font-bold text-center" style="color: rgb(8, 104, 5); font-size: 23px !important;">সনদ নং: HOUSE-NUM/{{ $hold->form_no }}</p>
            </div>
            <div class="col-4">
                <img height="170px" width="auto"  src="{{ asset('uploads/holding/thumb') }}/{{ $hold->image }}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt="কোন ছবি পাওয়া যায় নি">
            </div>
        </div>
        <div class="row m-0 p-0">
            <p class="m-0 p-0" style="border-bottom: 3px solid rgb(30, 94, 5); border-top: 3px solid rgb(30, 94, 5);">
                স্থানীয় সরকার (ইউনিয়ন পরিষদ) আইন,২০০৯ সনের আইন এর ধারা ৮৪-তে প্রদত্ত ক্ষমতাবলে সরকার প্রনীত আদর্শ
                অনুযায়ী নিন্মে বর্ণিত ব্যক্তির অনুকুলে বাড়ির হোল্ডিং নাম্বার সনদ ইস্যু করা হচ্ছে।
            </p>
            <p class="text-center m-0 p-0">এই মর্মে প্রত্যয়ন করা যাইতেছে যে, জন্মসূত্রে বাংলাদেশের নাগরিক ও উক্ত ইউনিয়নের স্থায়ী বাসিন্দা।<br/>
                আমি তাকে ব্যক্তিগত ভাবে জানি ও চিনি। আমার জানামতে তিনি রাষ্ট্র বা সমাজ বিরোধী কোন কাজের সাথে জড়িত নহে।
            </p>
        </div>
        <section class="col-10 offset-1" style="border: 3px solid rgb(30, 94, 5); position: relative;">
            <div class="bgimage">
                <img style="background-repeat: no-repeat; position: absolute; height: 404px; width: auto; align-items: center; padding-left: 280px; padding-top: 83px;"
                src="{{ asset('images/show_img/bglogo.png') }}" alt="">
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">১।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">বাড়ির প্রধানের নাম</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $hold->head_household }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">২।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">পিতার নাম</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->father_name }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">৩।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">মাতার নাম</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->mother_name }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">৪।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">স্বামী/স্ত্রীর নাম</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->husband_wife }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">৫।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">জন্ম তারিখ</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($hold->birth_date)->format('d-m-Y') }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">৬।</span>
                </div>
                @if($hold->voter_id_no)
                <div class="col-5">
                    <span  class="form-label" for="">ভোটার আইডি</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->voter_id_no }}</span>
                </div>
                @else
                <div class="col-5">
                    <span  class="form-label" for="">ডিজিটাল জন্ম নিবন্ধন</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->birth_registration_id }}</span>
                </div>
                @endif
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">৭।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">পেশা</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">
                        : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$hold->income?->name}}
                    </span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">৮।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ধর্ম</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">
                        : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        @if ($hold->religion ==1)
                        ইসলাম
                        @elseif ($hold->religion ==2)
                        হিন্দু
                        @elseif ($hold->religion ==3)
                        বৌদ্ধ
                        @elseif ($hold->religion ==4)
                        খ্রিষ্টান
                        @elseif ($hold->religion ==5)
                        উপজাতি
                        @endif
                    </span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">৯।</span>
                </div>
                <div class="col-5">
                    <span style="border-bottom: 2px solid rgba(7, 19, 4, 0.521);" class="form-label" for="">স্থায়ী ঠিকানা &nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">হোল্ডিং নং</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->house_holding_no }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">রাস্তা/ব্লক</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->street_nm }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ওয়ার্ড নং</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->ward?->ward_name_bn }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">গ্রাম/পাড়া</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->village_name }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ডাকঘর</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->post_office }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">উপজেলা/থানা</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->upazila?->name_bn }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">জেলা</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->district?->name_bn }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for="">১০।</span>
                </div>
                <div class="col-5">
                    <span style="border-bottom: 2px solid rgba(7, 19, 4, 0.521);"  class="form-label" for="">যোগাযোগ মাধ্যম &nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ফোন/মোবাইল</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->phone }}</span>
                </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ইমেইল</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $hold->email }}</span>
                </div>
            </div>
        </div>
        </section>
        <section class="mb-5">
            <div class="row m-0 p-0">
               <div class="col-10 offset-1 pt-2" style="padding-left: 30px">
                <p class="py-3">আমি উক্ত বাড়ির সকল সদস্যের সার্বিক কল্যাণ ও সু-স্বাস্থ্য কামনা করি ।</p>
               </div>
            </div>
            <div class="row m-0 p-0">
                <div class="col-7" style="padding-left: 120px">
                    <img height="auto" width="140px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                </div>
                <div class="col-5 text-center" style="color: rgb(18, 5, 133);align-self: end; font-size: 15px !important;">
                    <p class="m-0 p-0"><strong>({{ $hold->chairman?->name}})</strong></p>
                    <p class="m-0 p-0">চেয়ারম্যান</p>
                    <p class="m-0 p-0">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->union?->name_bn:""}} ইউনিয়ন পরিষদ</p>
                    <p class="m-0 p-0">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</p>
                </div>
            </div>
            <div class="font-bold row m-0 p-0 pt-3">
                <h5 class="col-10 offset-1 text-center pt-1" style="border-bottom: 5px solid rgb(33, 110, 3); border-top: 3px solid rgb(212, 33, 27); background-color: rgb(125, 197, 135);">|| {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->slogan:"সময়মত ইউনিয়ন পরিষদ কর পরিশোধ করুন"}} ||</h5>
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
