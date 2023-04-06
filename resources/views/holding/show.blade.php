@extends('layout.app')

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
                    <div class="col-3">
                        <img height="130px" width="130px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                        <p style="padding-top: 10px; border-bottom: 3px solid rgb(15, 1, 1);"><strong>হোল্ডিং নাম্বার সনদ ইস্যুর বিবরন</strong></p>
                        <p>ইস্যুর তারিখঃ {{ $hold->holding_date }}</p>
                        <p>ইস্যুর সময়ঃ {{ $hold->created_at->format("h:i:s A") }}</p>
                    </div>
                    <div class="col-5 col-sm-5" style="padding-left: 110px; padding-top: 5px;">
                        <div style="padding-left: 70px;">
                            <img height="130px" width="130px" src="{{ asset('images/show_img/logo.png') }}" alt="">
                        </div>
                        <h4 class="font-bold clo-sm-4" style="padding-top: 10px; color: rgb(167, 86, 10);">ই-হোল্ডিং নাম্বার সনদ</h4>
                    </div>
                    <div class="col-4" style="padding-left: 215px;">
                        <img height="150px" width="120px"  src="{{ asset('uploads/holding/thumb') }}/{{ $hold->image }}" alt="কোন ছবি পাওয়া যায় নি">
                    </div>
                    <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 5px;">হোল্ডিং নাম্বার সনদ নং: CHITIZENS/2CHUP/00{{ $hold->id }}</h5>
                </div>
                <div class="row">
                    <p style="border-bottom: 3px solid rgb(73, 235, 8); border-top: 3px solid rgb(73, 235, 8); padding-top: 5px;">
                        স্থানীয় সরকার (ইউনিয়ন পরিষদ) আইন,২০০৯(২০০৯ সনের ৬০ নং আইন) এর ধারা ৮৪-তে প্রদত্ত ক্ষমতাবলে সরকার প্রনীত আদর্শ
                        অনুযায়ী নিন্মে বর্ণিত ব্যক্তির আনুকুলে বাড়ির হোল্ডিং সনদ ইস্যু করা হলো।
                    </p>
                    <p class="text-center">এই মর্মে বাড়ির হোল্ডিং নাম্বার প্রদান করা যাইতেছে যে, জন্মসূত্রে বাংলাদেশের নাগরিক ও উক্ত ইউনিয়নের স্থায়ী বাসীন্দা।<br/>
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
                    <span  class="form-label" for="">বাড়ির প্রধানের নাম :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $hold->head_household }}</span>
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
                    <span  class="form-label" for="">{{ $hold->father_name }}</span>
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
                    <span  class="form-label" for="">{{ $hold->mother_name }}</span>
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
                    <span  class="form-label" for="">{{ $hold->birth_date }}</span>
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
                    <span  class="form-label" for="">ভোটার আইডি:{{ $hold->voter_id_no }}/জন্ম নিবন্ধন:{{ $hold->birth_registration_id }}</span>
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
                        @if ($hold->source_income ==1)
                        শিক্ষক
                        @elseif ($hold->source_income ==2)
                        শিক্ষার্থী
                        @elseif ($hold->source_income ==3)
                        সরকারি চাকুরীজীবি
                        @elseif ($hold->source_income ==4)
                        বে-সরকারি চাকুরীজীবি
                        @elseif ($hold->source_income ==5)
                        গৃহীনি
                        @elseif ($hold->source_income ==6)
                        কৃষক
                        @elseif ($hold->source_income ==7)
                        ব্যবসা
                        @elseif ($hold->source_income ==8)
                        প্রকৌশলি
                        @elseif ($hold->source_income ==9)
                        আইনজীবী
                        @elseif ($hold->source_income ==10)
                        চিকিৎসক
                        @elseif ($hold->source_income ==11)
                        সেবিকা
                        @elseif ($hold->source_income ==12)
                        দলিল লেখক
                        @elseif ($hold->source_income ==13)
                        শ্রমিক
                        @elseif ($hold->source_income ==14)
                        ঠিকাদার
                        @elseif ($hold->source_income ==15)
                        মৎস চাষী
                        @elseif ($hold->source_income ==16)
                        গাড়ি চালক
                        @elseif ($hold->source_income ==17)
                        প্রবাসী
                        @elseif ($hold->source_income ==18)
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
                    <span  class="form-label" for="">{{ $hold->house_holding_no }}</span>
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
                    <span  class="form-label" for="">{{ $hold->street_nm }}</span>
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
                    <span  class="form-label" for="">{{ $hold->post_office }}</span>
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
                    <span  class="form-label" for="">{{ $hold->phone }}</span>
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
                    <span  class="form-label" for="">{{ $hold->email }}</span>
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
                <p>আমি উক্ত বাড়ির সকল সদস্যের সার্বিক কল্যান  উন্নতি কামনা করি ।</p>
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
