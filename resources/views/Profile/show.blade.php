@extends('layout.app')

@section('pageTitle',trans('আবেদনকারি তথ্য'))
@section('pageSubTitle',trans('তথ্য'))

@section('content')


    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="row">
                        <div class="text-center">
                            <h2>৫নং জাটিয়া ইউনিয়ন পরিষদ</h2>
                            <p>উপজেলাঃ ঈশ্বরগঞ্জ, জেলাঃ ময়মনসিংহ</p>
                        </div>
                    </div>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <tr>
                                    <th>হোল্ডিং নং</th>
                                    <td>{{$pro->holding_no}}</td>
                                    <td class="text-end"><b>প্রোফাইল আইডিঃ ৩০১৭০</b></td>
                                </tr>
                                <tr>
                                    <th>নাম</th>
                                    <td>{{$pro->applicantName}}</td>
                                    <td rowspan="3"><img src="{{asset('uploads/profile/thumb/'.$pro->image)}}" alt="Photo"></td>
                                </tr>
                                <tr>
                                    <th>পিতা/স্বামী</th>
                                    <td>{{$pro->FatherOrHusband}}</td>
                                </tr>
                                <tr>
                                    <th>মাতা</th>
                                    <td>{{$pro->mother_name}}</td>
                                </tr>
                                <tr>
                                    <th>মোবাইল</th>
                                    <td>{{$pro->contact}}</td>
                                    <td rowspan="3">{{$pro->applicantName}}</td>
                                </tr>
                                <tr>
                                    <th>আইডি নং</th>
                                    <td>{{$pro->id_no}}</td>
                                </tr>
                                <tr>
                                    <th>পুরুষ</th>
                                    <td>{{$pro->man}}</td>
                                </tr>
                                <tr>
                                    <th>মহিলা</th>
                                    <td>{{$pro->woman}}</td>
                                    <td rowspan="3"><i style="font-size: 6rem; color:#027D96" class="bi bi-house-door-fill"></i></td>
                                </tr>
                                <tr>
                                    <th>ভোটার সংখ্যা</th>
                                    <td>{{$pro->voterNumber}}</td>
                                </tr>
                                <tr>
                                    <th>ভাতা</th>
                                    <td>{{$pro->allowance}}</td>
                                </tr>
                                <tr>
                                    <th>আয়ের প্রধান উৎস</th>
                                    <td colspan="2">{{$pro->icomeSource}}</td>
                                </tr>
                                <tr>
                                    <th>বাড়ীর নাম</th>
                                    <td colspan="2">{{$pro->house_name}}</td>
                                </tr>
                                <tr>
                                    <th>বাড়ীর ধরন</th>
                                    <td colspan="2">{{$pro->typeOfHouse}}</td>
                                </tr>
                                <tr>
                                    <th>বাড়ীর জমি</th>
                                    <td colspan="2">{{$pro->percetageOfHouseLand}}</td>
                                </tr>
                                <tr>
                                    <th>ধানী জমি</th>
                                    <td colspan="2">{{$pro->percetageOfPaddyLand}}</td>
                                </tr>
                                <tr>
                                    <th>গৃহের আনুমানিক মূল্য</th>
                                    <td colspan="2">{{$pro->estimatedValuOfHouse}}</td>
                                </tr>
                                <tr>
                                    <th>ধার্যকৃত কর</th>
                                    <td colspan="2">{{$pro->tax_levied}}</td>
                                </tr>
                                <tr>
                                    <th>আদায়কৃত কর</th>
                                    <td colspan="2">{{$pro->tax_collected}}</td>
                                </tr>
                                <tr>
                                    <th>বকেয়া</th>
                                    <td colspan="2">{{$pro->owing}}</td>
                                </tr>
                                <tr>
                                    <th>গ্রাম/ রাস্তা</th>
                                    <td colspan="2">{{$pro->village}}</td>
                                </tr>
                                <tr>
                                    <th>পোস্ট</th>
                                    <td colspan="2">{{$pro->postOffice}}</td>
                                </tr>
                                <tr>
                                    <th>ওয়ার্ড নং</th>
                                    <td colspan="2">{{$pro->word_no}}</td>
                                </tr>
                                <tr>
                                    <th>থানা</th>
                                    <td colspan="2">{{$pro->thana_id}}</td>
                                </tr>
                                <tr>
                                    <th>জেলা</th>
                                    <td colspan="2">{{$pro->district_id}}</td>
                                </tr>
                                <tr>
                                    <th>বিভাগ</th>
                                    <td colspan="2">{{$pro->division_id}}</td>
                                </tr>
                            </table>
                            <div class="col-6 offset-3 my-3">
                                <a href="" class="btn btn-success">Back</a>
                                <a href="" class="btn btn-success">Print</a>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
    <!-- Bordered table end -->

@endsection