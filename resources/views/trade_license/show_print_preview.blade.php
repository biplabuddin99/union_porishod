@extends('layout.app')
@section('pageTitle',trans('ট্রেড লাইসেন্স লিস্ট'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div class="container">
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="#">হোম </a>
                            <i class="bi bi-circle-half"></i>
                        </li>

                        <li>
                            <span>প্রিন্ট প্রি ভিউ</span>
                        </li>
                    </ul>
                    <div class="page-content-inner">
                        <div class="portlet light tasks-widget ">
                            <div class="portlet-title">
                                <div class="caption">
                                    <span class="caption-subject font-dark sbold uppercase">ট্রেড লাইসেন্স নংঃ ৫</span>
                                </div>

                            </div>
                            <div class="portlet-body util-btn-margin-bottom-5">
                                <form action="#" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                                    <div class="form-body">

                                            <table class="table no-border">
                                                <tr>
                                                    <td><strong>ব্যবসা প্রতিষ্ঠানের নাম </strong><br>Flores and Horn Inc</td>
                                                    <td><strong>প্রতিষ্ঠানের  বিবরন</strong><br>Veritatis nisi atque</td>
                                                    <td rowspan="3"><strong>ফটো </strong><br>
                                                                                                <img width="100" src="https://www.bditpark.com/jatiademo/images/avater.jpg" alt="" />
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>প্রোপাইটরের নাম </strong><br>Non eius nisi aut es</td>
                                                    <td><strong>পিতা/স্বামী </strong><br>Repellendus Invento</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>মোবাইল </strong><br></td>
                                                    <td><strong>আইডি নং</strong><br></td>
                                                </tr>

                                                <tr>
                                                    <td><strong>আনুমানিক মূল্য</strong><br>০</td>
                                                    <td><strong>আদায়কৃত  ফ্রি </strong><br>০</td>
                                                </tr>

                                                <tr>
                                                    <td><strong>গ্রাম/ রাস্তা</strong><br>Debitis distinctio</td>
                                                    <td><strong>ওয়ার্ড নং</strong><br>১ নং ওয়ার্ড</td>
                                                    <td rowspan="3"><strong></strong><br>
                                                        <img width="100" src="https://www.bditpark.com/jatiademo/uploads/trade/9_1673253675q.png" alt="" />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>পোস্ট অফিস</strong><br>Voluptas nisi delect</td>
                                                    <td><strong>থানা</strong><br>Bhairab </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>জেলা</strong><br>কিশোরগঞ্জ</td>
                                                    <td><strong>বিভাগ</strong><br>ঢাকা </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>প্রতিষ্ঠানের ঠিকানা</strong><br>Dolore sunt necessit</td>

                                                </tr>
                                            </table>


                                    </div>

                                    <div class="form-actions hidden-print">
                                        <div class="row">
                                            <div class="col-md-offset-2 col-md-10">
                                                                            <input type="button"  class="btn default cancel" value="Back"/>
                                                <input type="button" onclick="javascript:print();" class="btn green" value="Print"/>
                                                                        </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bordered table end -->


@endsection
