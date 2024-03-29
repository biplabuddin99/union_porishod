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
                        <p style="padding-top: 10px;margin-bottom:5px;"><strong style="border-bottom: 3px solid rgb(15, 1, 1);">চারিত্রিক সনদ ইস্যুর বিবরন</strong></p>
                        <p class="mb-1">ইস্যুর তারিখঃ {{ \Carbon\Carbon::parse($character->apply_date)->format('d-m-Y') }}<br>
                            ইস্যুর সময়ঃ {{ $character->created_at->format("h:i:s A") }}</p>
                    </div>
                    <div class="col-5 col-sm-5" style="padding-left: 110px; padding-top: 5px;">
                        <div style="text-align: center;">
                            <img height="130px" width="130px" src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->logo:'./images/Login-01.png')}}" alt="">
                        </div>
                        <h4 class="font-bold clo-sm-4" style="padding-top: 10px;text-align: center; color: rgb(167, 86, 10);">ই-চারিত্রিক সনদ</h4>
                    </div>
                    <div class="col-4" style="padding-left: 150px;">
                        <img height="150px" width="150px"  src="{{ asset('uploads/character') }}/{{ $character->image }}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt="কোন ছবি পাওয়া যায় নি">
                    </div>
                    <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 5px;">সনদ নং: CHARACTER/{{ $character->form_no }}</h5>
                </div>
                <div class="row">
                    <p style="border-bottom: 3px solid rgb(30, 94, 5); border-top: 3px solid rgb(30, 94, 5); padding-top: 5px;">
                        স্থানীয় সরকার (ইউনিয়ন পরিষদ) আইন,২০০৯ সনের আইন এর ধারা ৮৪-তে প্রদত্ত ক্ষমতাবলে সরকার প্রনীত আদর্শ
                        অনুযায়ী নিন্মে বর্ণিত ব্যক্তির অনুকুলে অত্র চারিত্রিক সনদ ইস্যু করা হচ্ছে।
                    </p>
                    <p class="text-center">এই মর্মে প্রত্যয়ন করা যাইতেছে যে,তিনি অত্র ইউনিয়নের @if ($character->permanent_resident==1) স্থায়ী বাসিন্দা @else অস্থায়ী বাসিন্দা @endif বাসিন্দা এবং জন্মসূত্রে বাংলাদেশের নাগরিক।<br/>
                        আমি তাকে ব্যক্তিগতভাবে জানি ও চিনি।তাহার স্বভাব চরিত্র ভালো এবং সম্ভ্রান্ত পরিবারের সন্তান। আমার জানামতে তিনি রাষ্ট্র বা সমাজ বিরোধী কোন কাজের সাথে জড়িত নয়।
                    </p>
                </div>
            </div>
        </section>
        <section class="col-10 offset-1" style="border: 3px solid rgb(122, 101, 4); position: relative;">
            <div class="bgimage">
                <img style="background-repeat: no-repeat; position: absolute; height: 404px; width: auto; align-items: center; padding-left: 490px; padding-top: 83px;"
                src="{{ asset('images/show_img/bglogo.png') }}" alt="">
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">১।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ব্যক্তির নাম :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->applicant_name }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">২।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">পিতার নাম :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->father_name }}</span>
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
                    <span  class="form-label" for="">{{ $character->mother_name }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৪।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">স্বামী/স্ত্রীর নাম:</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->husband_wife }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৫।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">জন্ম তারিখ :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->birth_date }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৬।</span>
                </div>
                @if($character->voter_id_no)
                <div class="col-5">
                    <span  class="form-label" for="">ভোটার আইডি :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->voter_id_no }}</span>
                </div>
                @else
                <div class="col-5">
                    <span  class="form-label" for="">ডিজিটাল জন্ম নিবন্ধন :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->birth_registration_id }}</span>
                </div>
                @endif
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৭।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">পেশা :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">
                        {{$character->income?->name}}
                    </span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৮।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ধর্ম :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">
                        @if ($character->religion ==1)
                        ইসলাম
                        @elseif ($character->religion ==2)
                        হিন্দু
                        @elseif ($character->religion ==3)
                        বৌদ্ধ
                        @elseif ($character->religion ==4)
                        খ্রিষ্টান
                        @elseif ($character->religion ==5)
                        উপজাতি
                        @endif
                    </span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৯।</span>
                </div>
                <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                    <span  class="form-label" for="">স্থায়ী ঠিকানা :</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">হোল্ডিং নং :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->house_holding_no }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">রাস্তা/ব্লক:</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->street_nm }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ওয়ার্ড নং :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->ward->ward_name_bn }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">গ্রাম/পাড়া :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->village_name }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ডাকঘর :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->post_office }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">উপজেলা/থানা :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->upazila->name_bn }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">জেলা :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->district->name_bn }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">১০।</span>
                </div>
                <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                    <span  class="form-label" for="">যোগাযোগ মাধ্যম :</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ফোন/মোবাইল :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->phone }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ইমেইল :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $character->email }}</span>
                </div>
            </div>
        </div>
        </section>
        <section>
            <div class="row">
               <div class="col-10 offset-1 pt-2" style="padding-left: 30px">
                <p>আমি তাহার সার্বিক কল্যান ও সু-স্বাস্থ্য কামনা করি ।</p>
               </div>
            </div>
            <div class="row">
                <div class="col-8" style="padding-left: 100px">
                    <img height="130px" width="130px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                </div>
                <div class="col-4" style="color: rgb(18, 5, 133);align-self: end;">
                    <div class="row"><strong>({{ $character->chairman?->name}})</strong></div>
                    <div class="row" style="padding-left: 60px">চেয়ারম্যান</div>
                    <div class="row" style="padding-left: 30px">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->union?->name_bn:""}} ইউনিয়ন পরিষদ</div>
                    <div class="row" style="padding-left: 40px">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</div>
                </div>
            </div>
            <div class="font-bold row" style="padding-top:30px">
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
