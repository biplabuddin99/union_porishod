@extends('layout.app')
@section('pageTitle',trans('প্রিন্ট প্রি ভিউ'))

@section('content')

<section class="section">
    <div class="portlet-body util-btn-margin-bottom-5">
        <form action="" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <div class="form-body">
                <table class="table table-bordered">
                    <tr>
                        <td colspan="3" class="text-center"> <h1 class="header">২ নং চালিতাডাঙ্গা ইউনিয়ন পরিষদ </h1><span class="header1">উপজেলাঃ  কাজীপুর, জেলাঃ সিরাজগঞ্জ</span></td>
                    </tr>
                    <tr>
                        <td width="20%">ব্যাক্তির নাম </td>
                        <td width="60%">{{ $citizen->person_name }}</td>
                        <td rowspan="3">

                                <img width="100" src="#" alt="" /> QR Code Hobe
                            </td>
                    </tr>
                    <tr>
                        <td>মাতা </td>
                        <td colspan="2">{{ $citizen->mother }}</td>
                    </tr>
                    <tr>
                        <td>পিতা/স্বামী </td>
                        <td colspan="2">{{ $citizen->father }}</td>
                    </tr>

                    <tr>
                        <td>গ্রাম/ রাস্তা </td>
                        <td colspan="2">{{ $citizen->village }}</td>
                    </tr>
                    <tr>
                        <td>পোস্ট</td>
                        <td colspan="2">{{ $citizen->postoffice }}</td>
                    </tr>
                    <tr>
                        <td>ওয়ার্ড নং</td>
                        <td colspan="2">{{ $citizen->ward_no_id }}</td>

                    </tr>
                    <tr>
                        <td>থানা</td>
                        <td colspan="2">{{ $citizen->thana_id }}</td>
                    </tr>
                    <tr>
                        <td>জেলা</td>
                        <td colspan="2">{{ $citizen->district_id }}</td>
                    </tr>
                    <tr>
                        <td>বিভাগ</td>
                        <td colspan="2">{{ $citizen->division_id }}</td>
                    </tr>
                </table>
            </div>
            <div class="form-actions hidden-print">
                <div class="row">
                    <div class="col-md-offset-2 col-md-10 mb-3">
                        <input type="button"  class="btn btn-warning cancel no-print" value="Back"/>
                        <input type="button" onclick="javascript:print();" class="btn btn-primary no-print" value="Print"/>
                    </div>
                </div>
            </div>
        </form>
    </div>

</section>

@endsection
