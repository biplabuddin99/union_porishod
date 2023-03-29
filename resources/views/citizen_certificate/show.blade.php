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
                        <h4 style="color: rgb(245, 10, 10); padding-top: 5px;"><strong>২নং চরপার্বতী ইউনিয়ন পরিষদ</strong></h4>
                    </div>
                    <h6 class="text-center">কোম্পানিগঞ্জ,নোয়াখালী</h6>
                    <h6 class="text-center">www.bdgl.online/charpatbotiup</h6>
                </div>
            </div>
        </section>
        <section style="margin-top: 10px;">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img height="130px" width="130px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                        <p style="padding-top: 10px; border-bottom: 3px solid rgb(15, 1, 1);"><strong>নাগরিক সনদ ইস্যুর বিবরন</strong></p>
                        <p>ইস্যুর তারিখঃ {{ $citizen->holding_date }}</p>
                        <p>ইস্যুর সময়ঃ {{ $citizen->created_at->format("h:i:s A") }}</p>
                    </div>
                    <div class="col-4 col-sm-4" style="padding-left: 110px; padding-top: 5px;">
                        <img height="130px" width="130px" src="{{ asset('images/show_img/logo.png') }}" alt="">
                        <h4 class="font-bold clo-sm-4" style="padding-top: 10px; color: rgb(167, 86, 10);">ই-নাগরিক সনদ</h4>
                        {{-- <h5 class="font-bold" style="padding-top: 10px; color: rgb(36, 247, 29);">লাইসেন্স নং:  TRAD/2CHUP/24066</h5> --}}
                    </div>
                    <div class="col-4" style="padding-left: 215px;">
                        <img height="160px" width="100px"  src="{{ asset('uploads/citizen_certificate/image/thumb') }}/{{ $citizen->image }}" alt="">
                    </div>
                    <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 5px;">নাগরিক সনদ নং:  CHITIZENS/2CHUP/00{{ $citizen->id }}</h5>
                </div>
                <div class="row">
                    <p style="border-bottom: 3px solid rgb(73, 235, 8); border-top: 3px solid rgb(73, 235, 8); padding-top: 5px;">
                        স্থানীয় সরকার (ইউনিয়ন পরিষদ) আইন,২০০৯(২০০৯ সনের ৬০ নং আইন) এর ধারা ৮৪-তে প্রদত্ত ক্ষমতাবলে সরকার প্রনীত আদর্শ
                        অনুযায়ী নিন্মে বর্ণিত ব্যক্তির আনুকুলে অত্র নাগরিক সনদ ইস্যু করা হলো।
                    </p>
                    <p class="text-center">এই মর্মে নাগরিক সনদ প্রদান করা যাচ্ছে যে, জন্মসূত্রে বাংলাদেশের নাগরিক ও উক্ত ইউনিয়নের স্থায়ী বাসীন্দা।<br/>
                        তিনি আমার পরিচিত। আমার জানামতে তিনি রাষ্ট্র ও সমাজ বিরোধী কোন কার্যকলাপে জড়িত নহে।
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
                    <span  class="form-label" for="">{{ $citizen->head_household }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">2।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">পিতার নাম :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">মিজানুর রহমান</span>
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
                    <span  class="form-label" for="">{{ $citizen->mother_name }}</span>
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
                    <span  class="form-label" for="">{{ $citizen->birth_date }}</span>
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
                    <span  class="form-label" for="">ভোটার আইডি:{{ $citizen->voter_id_no }}/জন্ম নিবন্ধন:{{ $citizen->birth_registration_id }}</span>
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
                        @if ($citizen->source_income ==1)
                        শিক্ষক
                        @elseif ($citizen->source_income ==2)
                        শিক্ষার্থী
                        @elseif ($citizen->source_income ==3)
                        সরকারি চাকুরীজীবি
                        @elseif ($citizen->source_income ==4)
                        বে-সরকারি চাকুরীজীবি
                        @elseif ($citizen->source_income ==5)
                        গৃহীনি
                        @elseif ($citizen->source_income ==6)
                        কৃষক
                        @elseif ($citizen->source_income ==7)
                        ব্যবসা
                        @elseif ($citizen->source_income ==8)
                        প্রকৌশলি
                        @elseif ($citizen->source_income ==9)
                        আইনজীবী
                        @elseif ($citizen->source_income ==10)
                        চিকিৎসক
                        @elseif ($citizen->source_income ==11)
                        সেবিকা
                        @elseif ($citizen->source_income ==12)
                        দলিল লেখক
                        @elseif ($citizen->source_income ==13)
                        শ্রমিক
                        @elseif ($citizen->source_income ==14)
                        ঠিকাদার
                        @elseif ($citizen->source_income ==15)
                        মৎস চাষী
                        @elseif ($citizen->source_income ==16)
                        গাড়ি চালক
                        @elseif ($citizen->source_income ==17)
                        প্রবাসী
                        @elseif ($citizen->source_income ==18)
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
                        @if ($citizen->religion ==1)
                        ইসলাম
                        @elseif ($citizen->religion ==2)
                        হিন্দু
                        @elseif ($citizen->religion ==3)
                        বৌদ্ধ
                        @elseif ($citizen->religion ==4)
                        খ্রিষ্টান
                        @elseif ($citizen->religion ==5)
                        উপজাতি
                        @endif
                    </span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৮।</span>
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
                    <span  class="form-label" for="">{{ $citizen->house_holding_no }}</span>
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
                    <span  class="form-label" for="">{{ $citizen->ward_no }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">গ্রাম/মহল্লা :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $citizen->street_nm }}</span>
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
                    <span  class="form-label" for="">{{ $citizen->post_office }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">থানা :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $citizen->upazila_thana }}</span>
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
                    <span  class="form-label" for="">{{ $citizen->district }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৯।</span>
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
                    <span  class="form-label" for="">{{ $citizen->phone }}</span>
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
                    <span  class="form-label" for="">{{ $citizen->email }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">১০।</span>
                </div>
                <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                    <span  class="form-label" for=""> নাগরিক সনদ ফি :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">৩০০.০০টাকা</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">সংশোধনী ফি :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">২ টাকা</span>
                </div>
            </div>
        </div>
        </section>
        <section>
            <div class="row">
               <div class="col-10 offset-1 pt-2" style="padding-left: 30px">
                <p>আমি তাহার সার্বিক কল্যান  উন্নতি কামনা করি ।</p>
               </div>
            </div>
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4" style="color: rgb(18, 5, 133); padding-top:20px">
                    <div class="row"><strong>(কাজী মোহাম্মদ হানিফ)</strong></div>
                    <div class="row" style="padding-left: 60px">চেয়ারম্যান</div>
                    <div class="row">২নং চরপার্বতী ইউনিযন পরিষদ</div>
                    <div class="row" style="padding-left: 30px">কোম্পানিগঞ্জ, নোয়াখালী</div>
                </div>
            </div>
            <div class="font-bold row" style="padding-top:30px">
                <h5 class="col-10 offset-1 text-center pt-1" style="border-bottom: 5px solid rgb(73, 235, 8); border-top: 3px solid rgb(212, 33, 27); background-color: rgb(125, 197, 135);">|| সময়মত ইউনিয়ন পরিষদের কর পরিশোধ করুন ||</h5>
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