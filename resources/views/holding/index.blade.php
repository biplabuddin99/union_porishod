@extends('layout.app')
@section('pageTitle',trans('হোল্ডিং লিস্ট'))
@section('pageSubTitle',trans('List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="card">
        <form action="#" role="form" class="form-horizontal" method="get" accept-charset="utf-8">
        <div class="row">
            {{-- <div class="form-body col-md-12"> --}}
                <div class="form-group">
                    <div class="col-md-2">
                    <input type="text" name="holding" value=""  class="form-control" placeholder="হোল্ডিং নং " />
                    </div>
                    <div class="col-md-2">
                        <select name="word" class="form-control" id="words">
                            <option value="" selected="selected">ওয়ার্ড নং</option>
                            <option value="1">১ নং ওয়ার্ড</option>
                            <option value="2">২ নং ওয়ার্ড</option>
                            <option value="3">৩ নং ওয়ার্ড</option>
                            <option value="4">৪ নং ওয়ার্ড</option>
                            <option value="5">৫ নং ওয়ার্ড</option>
                            <option value="6">৬ নং ওয়ার্ড</option>
                            <option value="7">৭ নং ওয়ার্ড</option>
                            <option value="8">৮ নং ওয়ার্ড</option>
                            <option value="9">৯ নং ওয়ার্ড</option>
                            <option value="11">১০ নং ওয়ার্ড</option>
                            <option value="12">১১ নং ওয়ার্ড</option>
                            <option value="13">১২ নং ওয়ার্ড</option>
                            <option value="14">১৩ নং ওয়ার্ড</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <select name="incom" class="form-control" id="incom">
                        <option value="" selected="selected">আয়ের উৎস</option>
                        <option value="1">কৃষি</option>
                        <option value="2">ব্যবসা</option>
                        <option value="3">চাকরি</option>
                        <option value="4">প্রবাসী</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary" name="Search" value="Search"/>
                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2 text-right">
                        <strong>মোট সংখ্যাঃ&nbsp;৭৯৯</strong>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
        </form>

            <div class="page-content-inner">

                <div class="portlet light tasks-widget ">
                    <div class="portlet-body util-btn-margin-bottom-5">

                        <form action="#" role="form" class="form-horizontal" id="multipleDelete" method="post" accept-charset="utf-8">
                            <input type="hidden" name="csrf_token" value="896a62c335dbc9190d9520356d9be43d" />

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-checkable order-column data_grid" id="sample_1">
                                    <thead>
                                        <tr>
                                            <th width="3%"> ক্রমিক  </th>
                                            <th> হোল্ডং নং  </th>
                                            <th>ভবনের মালিক</th>
                                            <th>প্রোফাইল আইডি </th>
                                            <th>প্রদান তারিখ</th>
                                            <th >ওয়ার্ড নং</th>
                                            <th width="15%" class="text-center"> এক্সসান  </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td> 101</td>
                                            <td>মোঃ ছাইদুর রহমান</td>
                                            <td>৩০১০৪</td>
                                            <td>22 Sep, 2022</td>
                                            <td>৩ নং ওয়ার্ড</td>
                                            <td class="text-center">
                                                <a href="#"  class="btn btn-xs red  btn-outline" title="View"><i class="fa fa-file-o"></i></a>
                                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                    <input type="checkbox" class="cb dcb" name="newsid[]" value="257"  />
                                                    <span></span>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- Bordered table end -->


@endsection
