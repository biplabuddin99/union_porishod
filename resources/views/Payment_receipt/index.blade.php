@extends('layout.app')
@section('pageTitle',trans('পেমেন্ট রসিদ লিস্ট'))
@section('pageSubTitle',trans('List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="card">
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="#">হোম </a>
                <i class="fa fa-circle"></i>
            </li>

            <li>
                <span>পেমেন্ট রসিদ</span>
            </li>
        </ul>

        <div class="page-content-inner">

            <div class="portlet light tasks-widget ">
                <div class="portlet-title">
                    <div class="caption">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            পেমেন্ট রসিদ
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">রসিদ</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-4 offser-1">
                                              <label for="">হোল্ডি নং</label>
                                              <div class="">
                                                  <input type="text">
                                              </div>
                                        </div>
                                        <div class="col-4 offset-1">
                                              <label for="">ওয়ার্ড নং</label>
                                              <div class="">
                                                  <input type="text">
                                              </div>
                                        </div>
                                      </div>
                                      <div class="mt-3">
                                          <label for="">অর্থ বছর</label>
                                          <input type="text">
                                      </div>
                                </form>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="portlet-body util-btn-margin-bottom-5">
                    <!-- table bordered -->
                    <form action="">
                        <div class="row">
                            <div class="col-md-2 mt-2">
                                <input type="text" name="holding" value=""  class="form-control" placeholder="হোল্ডিং নং " />
                            </div>
                            <div class="col-md-2 mt-2">
                                <input type="text" class="form-control" name="mobile" placeholder="মোবাইল">
                            </div>
                            <div class="col-md-2 mt-2">
                                <select name="fyear" class="form-control form-select" id="status">
                                    <option value="" selected="selected">অর্থ বছর</option>
                                    <option value="2020-2021">2020-2021</option>
                                    <option value="2021-2022">2021-2022</option>
                                    <option value="2022-2023">2022-2023</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-2">
                                <select class="form-control form-select" name="word">
                                    <option value="">ওয়ার্ড নং</option>
                                    <option value="1">১ নং ওয়ার্ড</option>
                                    <option value="2">২ নং ওয়ার্ড</option>
                                    <option value="3">৩ নং ওয়ার্ড</option>
                                    <option value="4">৪ নং ওয়ার্ড</option>
                                    <option value="5">৫ নং ওয়ার্ড</option>
                                    <option value="6">৬ নং ওয়ার্ড</option>
                                </select>
                            </div>
                            <div class="col-md-2 mt-2">
                                <input type="text" name="fromdate" value=""  class="form-control datepick" autocomplete="off" id="fromdate" placeholder="তারিখ হইতে" />
                            </div>
                            <div class="col-md-2 mt-2">
                                <input type="text" name="todate" value=""  class="form-control datepick" autocomplete="off"  id="todate" placeholder="তারিখ পর্যন্ত" />
                            </div>
                            <div class="col-md-2 mt-2">
                                <a class="btn btn-success m-2" href="#">খুজুন</a>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th width="3%">ক্রমিক </th>
                                    <th> হোল্ডিং  </th>
                                    <th> নাম </th>
                                    <th> মোবাইল </th>
                                    <th> প্রোফাইল আইডি </th>
                                    <th> ওয়ার্ড নং </th>
                                    <th> অর্থ বছর </th>
                                    <th class="text-right"> পরিমান  </th>
                                    <th width="13%"> প্রদানের তারিখ </th>
                                </tr>
                            </thead>
                            <tbody class="bodyinfo">
                                <tr>
                                    <td colspan="9" class="text-center">No Data Found</td>
                                    {{-- <td > 1 </td>
                                    <td ><a href="#">
                                    83  </a></td>
                                    <td ><a href="#">
                                    মোঃ উজ্জল মিয়া</a>  </td>
                                    <td >01926736187  </td>
                                    <td >30138  </td>
                                    <td >৩   </td>
                                    <td >2022-2023  </td>
                                    <td class="text-right">1,050.00  </td>
                                    <td >10 Oct, 2022  </td> --}}

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bordered table end -->


@endsection
