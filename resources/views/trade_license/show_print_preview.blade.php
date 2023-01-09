@extends('layout.app')
@section('pageTitle',trans('প্রিন্ট প্রি ভিউ'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="#">হোম </a>
                    <i class="bi bi-circle-half"></i>
                </li>

                <li>
                    <span>প্রিন্ট প্রি ভিউ</span>
                </li>
            </ul>

            <div class="card">
                <div class="container panel-body">
                    <div class="page-content-inner">
                        <div class="portlet light tasks-widget">
                            <div class="portlet-title">
                                <div class="caption">
                                    <span class="caption-subject font-dark sbold uppercase">ট্রেড লাইসেন্স নংঃ {{ $trade->id }}</span>
                                </div>
                            </div>
                            <div class="portlet-body util-btn-margin-bottom-5">
                                <form action="#" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <div class="form-body">
                                        <table class="table no-border">
                                            <tr>
                                                <td><strong>ব্যবসা প্রতিষ্ঠানের নাম </strong><br>{{ $trade->business_name }}</td>
                                                <td><strong>প্রতিষ্ঠানের  বিবরন</strong><br>{{ $trade->organization_details }}</td>
                                                <td rowspan="3"><strong>ফটো </strong><br>
                                                    <img width="100" src="{{ asset('uploads/trade_license/') }}/{{ $trade->image }}" alt="" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>প্রোপাইটরের নাম </strong><br>{{ $trade->proprietor_name }}</td>
                                                <td><strong>পিতা/স্বামী </strong><br>{{ $trade->father_husband }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>মোবাইল </strong><br>{{ $trade->phone }}</td>
                                                <td><strong>আইডি নং</strong><br>{{ $trade->id_no }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>আনুমানিক মূল্য</strong><br>{{ $trade->estimated_price }}</td>
                                                <td><strong>আদায়কৃত  ফ্রি </strong><br>{{ $trade->earned_free }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>গ্রাম/ রাস্তা</strong><br>{{ $trade->village_road }}</td>
                                                <td><strong>ওয়ার্ড নং</strong><br>{{ $trade->ward_no_id }}</td>
                                                <td rowspan="3"><strong></strong><br>
                                                    <img width="100" src="" alt="" />QR Code hobe
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>পোস্ট অফিস</strong><br>{{ $trade->post_office }}</td>
                                                <td><strong>থানা</strong><br>{{ $trade->thana_id }} </td>
                                            </tr>
                                            <tr>
                                                <td><strong>জেলা</strong><br>{{ $trade->district_id }}</td>
                                                <td><strong>বিভাগ</strong><br> {{ $trade->division_id }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>প্রতিষ্ঠানের ঠিকানা</strong><br> {{ $trade->institution_address }}</td>

                                            </tr>
                                        </table>
                                    </div>

                                    {{-- <div class="form-actions hidden-print">
                                        <div class="row">
                                            <div class="col-md-offset-2 col-md-10">
                                                <input type="button"  class="btn default cancel" value="Back"/>
                                                <input type="button" onclick="javascript:print();" class="btn btn-primary" value="Print"/>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <a href="#" class="btn btn-md btn-danger print_btn"><i class="bi bi-printer"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            /*for print a page*/
            $('.print_btn').click(function(){
                w=window.open();
                w.document.write($('.panel-body').html());
                w.print();
                w.close();
            });
        });
    </script>
</section>
<!-- Bordered table end -->


@endsection
