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
                        <img height="130px" width="130px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                        <p style="padding-top: 10px; border-bottom: 3px solid rgb(15, 1, 1);"><strong>ট্রেডলাইসেন্স ইস্যুর বিবরন</strong></p>
                        <p>ইস্যুর তারিখঃ {{ $trade->holding_date }}</p>
                        <p>ইস্যুর সময়ঃ {{ $trade->created_at->format("h:i:s A") }}</p>
                    </div>
                    <div class="col-4 col-sm-4" style="padding-left: 110px; padding-top: 5px;">
                        <img height="130px" width="130px" src="{{ asset('images/show_img/logo.png') }}" alt="">
                        <h4 class="font-bold clo-sm-4" style="padding-top: 10px; color: rgb(167, 86, 10);">ই-ট্রেড লাইসেন্স</h4>
                        {{-- <h5 class="font-bold" style="padding-top: 10px; color: rgb(36, 247, 29);">লাইসেন্স নং:  TRAD/2CHUP/24066</h5> --}}
                    </div>
                    <div class="col-4" style="padding-left: 215px;">
                        <img height="130px" width="100px"  src="{{ asset('uploads/trade_license/image/thumb') }}/{{ $trade->image }}" alt="কোন ছবি পাওয়া যায় নি">
                    </div>
                    <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 5px;">লাইসেন্স নং:  TRAD/2CHUP/00{{ $trade->id }}</h5>
                </div>
                <div class="row">
                    <p style="border-bottom: 3px solid rgb(73, 235, 8); border-top: 3px solid rgb(73, 235, 8); padding-top: 5px;">
                        স্থানীয় সরকার (ইউনিয়ন পরিষদ) আইন,২০০৯(২০০৯ সনের ৬০ নং আইন) এর ধারা ৮৪-তে প্রদত্ত ক্ষমতাবলে সরকার প্রনীত আদর্শ কর তফসিল,২০১৬ এর ১০ অনুচ্ছেদ
                        অনুযায়ী ব্যবসা,বৃদ্ধি,পেশা বা শিল্প প্রতিষ্ঠানের উপর আরোপিত কর আদায়ের লক্ষে নিন্মে বর্ণিত ব্যক্তির প্রতিষ্ঠানের আনুকুলে অত্র ট্রেড লাইসেন্সটি ইস্যু করা হলো।
                    </p>
                </div>
            </div>
        </section>
        <section class="col-10 offset-1" style="border: 3px solid rgb(122, 101, 4); position: relative;">
            <div class="bgimage">
                <img style="background-repeat: no-repeat; position: absolute; height: 600px; width: auto; align-items: center; padding-left: 500px; padding-top: 300px;"
                src="{{ asset('images/show_img/bglogo.png') }}" alt="">
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">১।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">ব্যাবসা প্রতিষ্ঠানের নাম :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $trade->business_name }}</span>
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
                    <span  class="form-label" for="">{{ $trade->owner_proprietor }}</span>
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
                    <span  class="form-label" for="">পিতা:{{ $trade->trade_fathername }}/ স্বামী:{{ $trade->trade_husband_name }}</span>
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
                    <span  class="form-label" for="">{{ $trade->trade_mothername }}</span>
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
                    <span  class="form-label" for="">{{ $trade->business_type }}</span>
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
                    <span  class="form-label" for="">{{ $trade->vehicle_establishment_holding_no }}</span>
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
                    {{-- <span  class="form-label" for="">০৪</span> --}}
                    <span  class="form-label" for="">{{ $wards->ward_name_bn }}</span>
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
                    {{-- <span  class="form-label" for="">নবগ্রাম</span> --}}
                    <span  class="form-label" for="">{{ $trade->street_nm }}</span>
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
                    {{-- <span  class="form-label" for="">ইনটেকা</span> --}}
                    <span  class="form-label" for="">{{ $trade->post_office }}</span>
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
                    {{-- <span  class="form-label" for="">কোম্পানিগঞ্জ</span> --}}
                    <span  class="form-label" for="">{{ $upazilas->name_bn }}</span>
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
                    {{-- <span  class="form-label" for="">নোয়াখালী</span> --}}
                    <span  class="form-label" for="">{{ $districts->name_bn }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৭।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">এনআইডি/পাসপোর্ট/জন্ম নিব: নং:</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">এনআইডি:{{ $trade->voter_id_no }} / জন্ম নিব: {{ $trade->birth_registration_id }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">বিআইএন নং :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">0</span>
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
                    <span  class="form-label" for="">{{ $trade->phone }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for=""> ইমেইল(যদি থাকে) :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $trade->email }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৮।</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">অর্থবছর <strong>(নবায়নকৃত)</strong> :</span>
                </div>
                <div class="col-5">
                    @if ($trade->trade_license_renewal==1)
                    <span  class="form-label" for="">অর্থ বছর ২০২৩-২০২৪</span>
                    @elseif($trade->trade_license_renewal==2)
                    <span  class="form-label" for="">অর্থ বছর ২০২৪-২০২৫</span>
                    @elseif($trade->trade_license_renewal==3)
                    <span  class="form-label" for="">অর্থ বছর ২০২৫-২০২৬</span>
                    @elseif($trade->trade_license_renewal==4)
                    <span  class="form-label" for="">অর্থ বছর ২০২৬-২০২৭</span>
                    @elseif($trade->trade_license_renewal==5)
                    <span  class="form-label" for="">অর্থ বছর ২০২৭-২০২৮</span>
                    @elseif($trade->trade_license_renewal==6)
                    <span  class="form-label" for="">অর্থ বছর ২০২৮-২০২৯</span>
                    @else
                        কোন অর্থবছর পাওয়া যায় নি
                    @endif
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৯।</span>
                </div>
                <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                    <span  class="form-label" for="">মালিকের স্থায়ী ঠিকানা :</span>
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
                    <span  class="form-label" for="">৯৮৪৩৭</span>
                    {{-- <span  class="form-label" for="">{{ $trade->vehicle_establishment_holding_no }}</span> --}}
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
                    <span  class="form-label" for="">{{ $wards->ward_name_bn }}</span>
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
                    <span  class="form-label" for="">{{ $trade->village_name }}</span>
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
                    <span  class="form-label" for="">{{ $trade->post_office }}</span>
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
                    <span  class="form-label" for="">{{ $upazilas->name_bn }}</span>
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
                    <span  class="form-label" for="">{{ $districts->name_bn }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">১০।</span>
                </div>
                <div class="col-5" style="border-bottom: 2px solid rgb(4, 14, 1);">
                    <span  class="form-label" for=""> ট্রেড লাইসেন্স নবায়ন ফি <strong>(বার্ষিক)</strong> :</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">লাইসেন্স/নবায়ন ফি :</span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">{{ $trade->trade_license_renewal_fee }}</span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">সাইনবোর্ড কর :</span>
                </div>
                <div class="col-2">
                    <span  class="form-label" for="">৩৬০.০০</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">সারচার্জ :</span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">০</span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">ভ্যাট :</span>
                </div>
                <div class="col-2">
                    <span  class="form-label" for="">১৬৪.০০</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">আয়কর/উৎসেকর :</span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">১০০০.০০</span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">ফর্ম ফি :</span>
                </div>
                <div class="col-2">
                    <span  class="form-label" for="">১০০.০০</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for=""></span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">সংশোধন ফি :</span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for="">০</span>
                </div>
                <div class="col-2">
                    <span  class="form-label" for=""><strong>সর্বমোট :</strong></span>
                </div>
                <div class="col-3">
                    <span  class="form-label" for=""><strong>৩৬২৮৪.০০ টাকা ।</strong></span>
                </div>
            </div>
        </div>
        </section>
        <section>
            <div class="row">
               <div class="col-10 offset-1 pt-2" style="padding-left: 30px">
                <p> <strong>অত্র ট্রেড লাইসেন্স এর মেয়াদ ৩০ শে জুন,২০২৩ পর্যন্ত ।</strong> আমি তাহার সার্বিক কল্যান ও ব্যাবসায়িক উন্নতি কামনা করি ।</p>
               </div>
            </div>
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4" style="color: rgb(18, 5, 133); padding-top:10px">
                    <div class="row"><strong>(কাজী মোহাম্মদ হানিফ)</strong></div>
                    <div class="row" style="padding-left: 60px">চেয়ারম্যান</div>
                    <div class="row">২নং চরপার্বতী ইউনিযন পরিষদ</div>
                    <div class="row" style="padding-left: 30px">কোম্পানিগঞ্জ, নোয়াখালী</div>
                </div>
            </div>
            <div class="font-bold row" style="padding-top:20px">
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
