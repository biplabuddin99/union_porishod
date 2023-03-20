@extends('layout.app')
{{-- @section('pageTitle',trans('প্রিন্ট প্রি ভিউ')) --}}

@section('content')
<section>
    <section style="margin-top: 50px;">
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
    <section style="margin-top: 5px;">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img height="150px" width="150px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                    <p style="padding-top: 10px; border-bottom: 3px solid rgb(15, 1, 1);"><strong>ট্রেডলাইসেন্স ইস্যুর বিবরন</strong></p>
                    <p>ইস্যুর তারিখঃ 02/11/2023</p>
                    <p>ইস্যুর সময়ঃ 10:11:26</p>
                </div>
                <div class="col-4 col-sm-4" style="padding-left: 110px; padding-top: 10px;">
                    <img height="150px" width="150px" src="{{ asset('images/show_img/logo.png') }}" alt="">
                    <h4 class="font-bold clo-sm-4" style="padding-top: 10px; color: rgb(167, 86, 10);">ই-ট্রেড লাইসেন্স</h4>
                    {{-- <h5 class="font-bold" style="padding-top: 10px; color: rgb(36, 247, 29);">লাইসেন্স নং:  TRAD/2CHUP/24066</h5> --}}
                </div>
                <div class="col-4" style="padding-left: 215px;">
                    <img height="200px" width="130px"  src="{{ asset('images/show_img/picture.png') }}" alt="">
                </div>
            </div>
            <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 10px;">লাইসেন্স নং:  TRAD/2CHUP/24066</h5>
            <div class="row">
                <p style="border-bottom: 3px solid rgb(73, 235, 8); border-top: 3px solid rgb(73, 235, 8); padding-top: 5px;">
                    স্থানীয় সরকার (ইউনিয়ন পরিষদ) আইন,২০০৯(২০০৯ সনের ৬০ নং আইন) এর ধারা ৮৪-তে প্রদত্ত ক্ষমতাবলে সরকার প্রনীত আদর্শ কর তফসিল,২০১৬ এর ১০ অনুচ্ছেদ
                    অনুযায়ী ব্যবসা,বৃদ্ধি,পেশা বা শিল্প প্রতিষ্ঠানের উপর আরোপিত কর আদায়ের লক্ষে নিন্মে বর্ণিত ব্যক্তির প্রতিষ্ঠানের আনুকুলে অত্র ট্রেড লাইসেন্সটি ইস্যু করা হলো।
                </p>
            </div>
        </div>
    </section>
    <section class="col-10 offset-1" style="border: 3px solid rgb(122, 101, 4);">
        <div class="row m-2">
            <div class="col-1">
                <span  class="form-label" for="">১।</span>
            </div>
            <div class="col-5">
                <span  class="form-label" for="">ব্যাবসা প্রতিষ্ঠানের নাম :</span>
            </div>
            <div class="col-5">
                <span  class="form-label" for="">এসটিপি এগ্রো এন্টারপ্রাইস</span>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-1">
                <span  class="form-label" for="">2।</span>
            </div>
            <div class="col-5">
                <span  class="form-label" for="">প্রতিষ্টানের মালিক/চেয়ারম্যান/এমডির নাম :</span>
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
                <span  class="form-label" for="">পিতা/স্বামীর নাম :</span>
            </div>
            <div class="col-5">
                <span  class="form-label" for="">রহিম উদ্দিন হাওলাদার</span>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-1">
                <span  class="form-label" for="">৪।</span>
            </div>
            <div class="col-5">
                <span  class="form-label" for="">মাতার নাম :</span>
            </div>
            <div class="col-5">
                <span  class="form-label" for="">মোসাঃ রুজিনা খানম</span>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-1">
                <span  class="form-label" for="">৫।</span>
            </div>
            <div class="col-5">
                <span  class="form-label" for="">ব্যাবসার ধরন :</span>
            </div>
            <div class="col-5">
                <span  class="form-label" for="">কৃষি খামার ও সরবরাহকারী</span>
            </div>
        </div>
        <div class="row m-2">
            <div class="col-1">
                <span  class="form-label" for="">৬।</span>
            </div>
            <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                <span  class="form-label" for="">প্রতিষ্ঠানের ঠিকানা :</span>
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
                <span  class="form-label" for="">১৭৭</span>
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
                <span  class="form-label" for="">০২</span>
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
                <span  class="form-label" for="">নবগ্রাম</span>
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
                <span  class="form-label" for="">নবগ্রাম</span>
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
                <span  class="form-label" for="">ইটনাকোনা</span>
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
                <span  class="form-label" for="">নেয়াখালী</span>
            </div>
        </div>
    </section>
</section>



@endsection
