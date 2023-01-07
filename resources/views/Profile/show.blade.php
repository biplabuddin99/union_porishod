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
                                    <td>182</td>
                                    <td class="text-end"><b>প্রোফাইল আইডিঃ ৩০১৭০</b></td>
                                </tr>
                                <tr>
                                    <th>নাম</th>
                                    <td>মোঃ হেলাল মিয়া</td>
                                    <td rowspan="3"><img src="" alt="Photo"></td>
                                </tr>
                                <tr>
                                    <th>পিতা/স্বামী</th>
                                    <td>আঃ গফুর</td>
                                </tr>
                                <tr>
                                    <th>মাতা</th>
                                    <td>সাহেরা খাতুন</td>
                                </tr>
                                <tr>
                                    <th>মোবাইল</th>
                                    <td>০১৬৮৯৯১৩২৯৫</td>
                                    <td rowspan="3">মোঃ হেলাল মিয়া</td>
                                </tr>
                                <tr>
                                    <th>আইডি নং</th>
                                    <td>৬১১৩১৪৫৬৭৭০৪২</td>
                                </tr>
                                <tr>
                                    <th>পুরুষ</th>
                                    <td>2 জন</td>
                                </tr>
                                <tr>
                                    <th>মহিলা</th>
                                    <td>1 জন</td>
                                    <td rowspan="3">home icon</td>
                                </tr>
                                <tr>
                                    <th>ভোটার সংখ্যা</th>
                                    <td>2 জন</td>
                                </tr>
                                <tr>
                                    <th>ভাতা</th>
                                    <td>কোনটিই না</td>
                                </tr>
                                <tr>
                                    <th>আয়ের প্রধান উৎস</th>
                                    <td colspan="2">কৃষি</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
    <!-- Bordered table end -->

@endsection