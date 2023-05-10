@extends('layout.app')

@section('content')
<div id="result_show">
    <section style="font-size: 14px">
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
                        <p style="padding-top: 10px;margin-bottom:5px;"><strong style="border-bottom: 3px solid rgb(15, 1, 1);">হোল্ডিং নাম্বার সনদ ইস্যুর বিবরন</strong></p>
                        <p class="mb-1">ইস্যুর তারিখঃ {{ \Carbon\Carbon::parse($hold->holding_date)->format('d-m-Y') }}<br>
                            ইস্যুর সময়ঃ {{ $hold->created_at->format("h:i:s A") }}</p>
                    </div>
                    <div class="col-5 col-sm-5" style="padding-left: 110px; padding-top: 5px;">
                        <div style="text-align: center;">
                            <img height="130px" width="130px" src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->logo:'./images/Login-01.png')}}" alt="">
                        </div>
                        <h4 class="font-bold clo-sm-4" style="padding-top: 10px;text-align: center; color: rgb(167, 86, 10);">ই-হোল্ডিং নাম্বার সনদ</h4>
                    </div>
                    <div class="col-4" style="padding-left: 150px;">
                        <img height="150px" width="150px"  src="{{ asset('uploads/holding/thumb') }}/{{ $hold->image }}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt="কোন ছবি পাওয়া যায় নি">
                    </div>
                    <h5 class="font-bold text-center" style="color: rgb(8, 104, 5); padding-bottom: 5px;">হোল্ডিং নাম্বার সনদ নং: HOUSE-NUM/{{ $hold->form_no }}</h5>
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
                <img style="background-repeat: no-repeat; position: absolute; height: 404px; width: auto; align-items: center; padding-left: 450px; padding-top: 83px;"
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
                    <span  class="form-label" for="">{{ \Carbon\Carbon::parse($hold->birth_date)->format('d-m-Y') }}</span>
                </div>
            </div>
            <div class="row m-2">
                <div class="col-1">
                    <span  class="form-label" for="">৫।</span>
                </div>
                @if($hold->voter_id_no)
                <div class="col-5">
                    <span  class="form-label" for="">ভোটার আইডি :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $hold->voter_id_no }}</span>
                </div>
                @else
                <div class="col-5">
                    <span  class="form-label" for="">ডিজিটাল জন্ম নিবন্ধন :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $hold->birth_registration_id }}</span>
                </div>
                @endif
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
                        {{$hold->income?->name}}
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
                    <span  class="form-label" for="">{{ $hold->ward?->ward_name_bn }}</span>
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
                    <span  class="form-label" for="">{{ $hold->village_name }}</span>
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
                    <span  class="form-label" for="">{{ $hold->upazila?->name_bn }}</span>
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
                    <span  class="form-label" for="">{{ $hold->district?->name_bn }}</span>
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
                    <span  class="form-label" for=""> হোল্ডিং নাম্বার সনদ ফি :</span>
                </div>
                <div class="col-5">
                    <span  class="form-label" for="">{{ $hold->holding_certificate_fee }} টাকা</span>
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
                    <span  class="form-label" for="">0 টাকা</span>
                </div>
            </div>
        </div>
        </section>
        <section class="mb-5">
            <div class="row">
               <div class="col-10 offset-1 pt-2" style="padding-left: 30px">
                <p>আমি উক্ত বাড়ির সকল সদস্যের সার্বিক কল্যান  উন্নতি কামনা করি ।</p>
               </div>
            </div>
            <div class="row">
                <div class="col-8" style="padding-left: 100px">
                    <img height="130px" width="130px" src="{{ asset('images/show_img/qrcode.png') }}" alt="">
                </div>
                <div class="col-4" style="color: rgb(18, 5, 133);align-self: end;">
                    <div class="row"><strong>({{ $hold->chairman?->name}})</strong></div>
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
    <br/>
    <br/>
    <br/>
    <section style="font-size: 14px; margin-top: 40px;" class="p-5">
        <div class="container mt-5 mb-5">
            <div class="row"><h4 class="text-center mt-5" style="color:red;">শর্তাবলি</h4></div>
            <div class="row"><h5 class="text-center">[ The UP (Taxation) Rules,২০০৯ এর ধারা ৮৪ বিধিমতে ]</h5></div>
            <div class="row">(ক) অত্র ইউনিয়ন পরিষদ কর্তৃপক্ষ যে কোন কারণে যে কোন সময় ট্রেড লাইসেন্সটির কার্যক্রম সাময়িকভাবে স্থগিত,প্রত্যাহার কিংবা বাতিল সর্বময় ক্ষমতা সংরক্ষন করে।</div>
            <br/>
            <div class="row">(খ) এ ট্রেড লাইসেন্স, লাইসেন্স লিপিবদ্ধ ঠিকানার নামকরণ,দলসত্ব, ভাড়াটিয়া স্বত্ব, বা ঐ ধরনের কোন স্বত্ব প্রমানের জন্য ব্যবহার করা যাবে না, কিংবা লাইসেন্স প্রাপ্তির ফলে ব্যবহৃত ঠিকানার কোন স্বত্ব বা স্বার্থ প্রমানের ক্ষেত্রে প্রযোজ্য হবে না।</div>
            <br/>
            <div class="row">(গ) যে পেশা, ব্যাবসা বা বৃত্তির জন্য লাইসেন্স ইস্যু করা হয়েছে, সে পেশা,ব্যবসা বা বৃত্তি ব্যতীত অন্য কোন উদ্দেশ্য অত্র লাইসেন্সটি ব্যাবহার করা যাবে না।</div>
            <br/>
            <div class="row">(ঘ) যদি কোন তথ্য গোপন করে, তা প্রকাশ পেলে সঙ্গে সঙ্গে ট্রেড লাইসেন্সটি বাতিল করা হবে।</div>
            <br/>
            <div class="row">(ঙ) ট্রেড লাইসেন্সটি কোনক্রমে হস্তান্তরযোগ্য নয়। তবে মালিকানা বদল অথবা একই অঞ্চলে ব্যবসার স্থান পরিবর্তন হলে ব্যবসায়ীকে সংশ্লিষ্ট কর্মকর্তা বরাবর আবেদন করে তার অনুমোদনক্রমে লাইসেন্স ফি ৩০% হারে সংশোধনী ফি জমা দিতে হবে।</div>
            <br/>
            <div class="row">(চ) যথাযথ কর্তৃপক্ষের অনুমোদন ব্যতীত ট্রেড লাইসেন্স এর বাহিরে কোন পরিবর্তন, পরিবর্ধন ব্যবসার ধরন বদলানো যাবে না।</div>
            <br/>
            <div class="row">(ছ) লাইসেন্সধারী নিজের বা জনস্বাস্থ্যের বিপজ্জনক আপত্তিকর,জনউপদ্রব্য বা জনগনের জীবন স্বাস্থ্য বা সম্পদের জন্য ক্ষতিকর কোন প্রকার ব্যবসায়িক কার্যক্রম চালাতে পারবে না এবং ব্যবসার দ্বারা প্রতিবেশী/পথচারী বা অন্য যে কোন ব্যক্তি বা প্রতিষ্ঠানের সমস্যা/বাধার সৃষ্টি করতে পারবে না।</div>
            <br/>
            <div class="row">(জ) লাইসেন্সধারী রাষ্ট্রর জন্য ক্ষতিকর কোন ব্যবসায়িক কার্যক্রম পরিচালনা করতে পারবে না।</div>
            <br/>
            <div class="row">(ঝ) লাইসেন্সধারী লাইসেন্সটি ব্যবসা প্রতিষ্ঠানের ঠিকানায় সংরক্ষণ করবেন,যাতে করে ইউনিয়ন পরিষদের কর্মকর্তা/কর্মচারী যে কোন সময় পরিদর্শনকালে তাৎক্ষণিক দেখতে পায়।</div>
            <br/>
            <div class="row">(ঞ) লাইসেন্সটি হারিয়ে গেলে কিংবা নষ্ট হয়ে গেলে তাৎক্ষণিকভাবে নিকটস্থ থানায় ডায়রী করে ডায়রীর অনুলিপিসহ পুনরায় ট্রেডলাইসেন্স প্রাপ্তির জন্য সংশ্লিষ্ট কর্মকর্তার নিকট আবেদন করতে হবে।</div>
            <br/>
            <div class="row">(ট) লাইসেন্সধারী ইউনিয়ন পরিষদের কর্তৃপক্ষের যে কোন আদেশ মানতে বাধ্য। </div>
            <br/>
            <div class="row">(ঠ) লাইসেন্সধারী লাইসেন্স নবায়নকাল হলে মাসের ভাড়ার রশিদের ফটোকপি সংযুক্ত করবেন। লাইসেন্স এর মেয়াদ শেষ হবার পর হাল সনের ১ জুলাই হতে ৩০ সেপ্টেম্বর এর মধ্যে চলতি বছরের ট্রেড লাইসেন্স নবায়ন করা যাবে। </div>
            <br/>
            <div class="row">(ড) লাইসেন্সধারীকে ব্যবসা বন্ধ করার সাথে সাথে লাইসেন্সটি ইউনিয়ন পরিষদে জমা করতে হবে। অন্যথায় লাইসেন্সধারী ইউনিয়ন পরিষদ পাওনা পরিশোধে বাধ্য থাকবেন।</div>
            <br/>
            <div class="row">(ঢ)ট্রেড লাইসেন্স নবায়ন ব্যতীত কোন ব্যক্তি/প্রতিষ্ঠান অত্র ইউনিয়ন পরিষদ এলাকায় ব্যবসা পরিচালনা করলে তার বিরুদ্ধে স্থানীয় সরকার(ইউনিয়ন পরিষদ) আইন ২০০৯ এর ৯২ ধারার অধীনে পঞ্চম তফসিলের ১ ও ৩ ক্রমিকে বণিত অপরাধে মামলা দায়ের করা হবে।</div>
            <br/>
            <div class="row">(ণ)ঝুঁকিপূর্ণ কাজের শিশুদের নিয়োজিতকরণের প্রমান পাওয়া গেলে ট্রেড লাইসেন্স বাতিল করা হবে।</div>
            <br/>
            <div class="row">(ত)ক্রেতা সাধারনের জন্য ব্যাবসা-বান্ধব ও স্বাস্থ্যকর পরিবেশ বজায় রাখার নিমিত্তে দোকানে একটি ওয়েস্টবিন রাখতে হবে। সারাদিনের ময়লা আবর্জনা ওয়েস্টবিনে জমা রেখে দোকান বন্ধ করার পূর্বে দোকান পরিষ্কার করে ওয়েস্টবিনেময়লা-আবর্জনাসহ সকল ময়লা আবর্জনা নিকটস্থ ডাস্টবিনে ফেলতে হবে।</div>
            <br/>
            <div class="row">(থ)উপরোক্ত যে কোন শর্তভঙ্গের দায়ে ট্রেড লাইসেন্স বাতিল বলে গণ্য হবে।</div>
            <br/>
            <div class="row"><h3 class="text-center">ধন্যবাদ</h3></div>
        </div>
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
