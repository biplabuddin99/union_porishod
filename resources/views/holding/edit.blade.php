@extends('layout.app')

@section('pageTitle',trans('নতুন হোল্ডিং'))
@section('pageSubTitle',trans('Form'))

@section('content')
  <section id="multiple-column-form">
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">হোম </a>
            <i class="bi bi-circle-half"></i>
        </li>
        <li>
            <span>অবকাঠামোর ফরম</span>
        </li>
    </ul>
    <div class="page-content-inner">
        <div class="portlet light tasks-widget ">
            <div class="portlet-title">
                <div class="caption">
                    <span class="caption-subject font-dark sbold uppercase">অবকাঠামোর ফরম</span>
                </div>

            </div>
            <div class="portlet-body util-btn-margin-bottom-5">
                <form action="#" role="form" class="form-horizontal" method="post" accept-charset="utf-8">
                    @csrf
                    <input type="hidden" id="rowid" name="data[profileid]" value="">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-checkable order-column">
                                        <thead>
                                            <tr>
                                                <th>বাড়ির মালিক </th>
                                                <th>মোবাইল </th>
                                                <th>আইডি নং</th>
                                                <th>জন্ম তারিখ </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><span id="name">--</span></td>
                                                <td><span id="mobile">--</span></td>
                                                <td><span id="nid">--</span></td>
                                                <td><span id="dob">--</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="control-label">আইডি নং </label>
                                <input type="text" name="nid" value=""  class="form-control autoNID" required placeholder="আইডি নং / মোবাইল" />
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">তারিখ </label>
                                <input type="date" name="data[date]" value="2023-01-01"  class="form-control datepick" autocomplete="off" required placeholder="প্রদান তারিখ" />
                            </div>
                            <div class="col-md-4">
                                <label class="control-label">সাবেক নং</label>
                                <input type="text" name="data[old_hoilding]" value=""  class="form-control" autocomplete="off"  placeholder="সাবেক নং" />
                            </div>
                        </div>
                        <hr >
                        <strong> অবকাঠামোর বিবরণ  </strong>
                        <hr />
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">গ্রাম/ রাস্তা / পোস্ট </label>
                                    <div class="">
                                        <input type="text" name="data[road]" value=""  class="form-control"  placeholder="গ্রাম/ রাস্তা / পোস্ট" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">ওয়ার্ড নং</label>
                                    <div class="">
                                        <select name="data[words]" class="form-control" required id="words">
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
                                </div>

                                <div class="form-group">
                                    <label class="control-label">বিভাগ </label>
                                    <div class="">
                                        <select name="data[divisionid]" class="form-control" required id="divisionid">
                                        <option value="">বিভাগ</option>
                                        <option value="1" selected="selected">ঢাকা </option>
                                        <option value="2">চট্টগ্রাম</option>
                                        <option value="3">রাজশাহী</option>
                                        <option value="4">খুলনা</option>
                                        <option value="5">বরিশাল</option>
                                        <option value="6">রংপুর</option>
                                        <option value="7">সিলেট</option>
                                        <option value="8">ময়মনসিংহ</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">জেলা</label>
                                    <div class="">
                                        <select name="data[districtid]" class="form-control" required id="districtid">
                                        <option value="">জেলা</option>
                                        <option value="6">কিশোরগঞ্জ</option>
                                        <option value="2" selected="selected">গাজীপুর</option>
                                        <option value="12">গোপালগঞ্জ</option>
                                        <option value="5">টাঙ্গাইল</option>
                                        <option value="8">ঢাকা</option>
                                        <option value="1">নরসিংদী</option>
                                        <option value="4">নারায়ণগঞ্জ</option>
                                        <option value="13">ফরিদপুর</option>
                                        <option value="11">মাদারীপুর</option>
                                        <option value="7">মানিকগঞ্জ</option>
                                        <option value="9">মুন্সিগঞ্জ</option>
                                        <option value="10">রাজবাড়ী</option>
                                        <option value="3">শরীয়তপুর</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" control-label">থানা</label>
                                    <div class="">
                                        <select name="data[thanaid]" class="form-control" required id="thanaid">
                                        <option value="">থানা</option>
                                        <option value="412">Chandra</option>
                                        <option value="9">কাপাসিয়া</option>
                                        <option value="8">কালিয়াকৈর</option>
                                        <option value="7">কালীগঞ্জ</option>
                                        <option value="10">গাজীপুর সদর</option>
                                        <option value="413">চান্দুরা</option>
                                        <option value="411">টংগী</option>
                                        <option value="11" selected="selected">শ্রীপুর</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">ভবনের নাম </label>
                                    <div class="col-md-10">
                                        <input type="text" name="data[land]" value="" class="form-control" autocomplete="off" required placeholder="ভবনের নাম " />
                                    </div>
                                </div>

                                <div class="form-group ">

                                    <label class="col-md-2"><strong>বাড়ীর বিবরন</strong></label>
                                    <label class="mt-checkbox-outline">
                                        <input type="checkbox" name="floor" value="1">কাঁচা
                                        <span></span>
                                    </label>
                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" name="tinsed" value="1">পাকা
                                        <span></span>
                                    </label>
                                    <label class="col-md-3">
                                        <input type="text" class="form-control" name="data[room]" placeholder="রুম কযটা" >
                                    </label>
                                    <label class="col-md-3">
                                        <input type="text" class="form-control" name="data[votar]" placeholder="ভোটার সংখ্যা ">
                                    </label>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="col-md-2"><strong>ল্যাট্রিন</strong></label>
                                    <label class="mt-radio mt-radio-single mt-radio-outline col-md-2">
                                        <input type="radio" name="lattrin" value="1"> পাকা
                                        <span></span>
                                    </label>
                                    <label class="mt-radio mt-radio-single mt-radio-outline col-md-2">
                                        <input type="radio" name="lattrin" value="0"> কাঁচা
                                        <span></span>
                                    </label>
                                </div>


                                <div class="form-group col-md-12">
                                    <h5 class="text-center"><b>আয়ের প্রধান উৎস</b></h5>
                                  <label class="m-3">
                                        <input class="m-1" type="checkbox" name="farmar" value="1">কৃষি
                                        <span></span>
                                    </label>
                                    <label class="m-3">
                                        <input class="m-1" type="checkbox" name="business" value="1">ব্যবসা
                                        <span></span>
                                    </label>
                                    <label class="m-3">
                                        <input class="m-1" type="checkbox" name="service" value="1">চাকরি
                                        <span></span>
                                    </label>
                                    <label class="m-3">
                                        <input class="m-1" type="checkbox" name="foreran" value="1">প্রবাসী
                                        <span></span>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">গৃহের আনুমানিক মূল্য</label>
                                    <div class="col-md-9">
                                        <input type="text" name="data[property_price]" value=""  class="form-control price" autocomplete="off" required placeholder="গৃহের আনুমানিক মূল্য" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ট্যাক্স শতাংশ</label>
                                    <div class="col-md-9">
                                        <select name="data[texper]" class="form-control" required id="texper">
                                        <option value="">শতাংশ</option>
                                        <option value="1">০১</option>
                                        <option value="2">০২</option>
                                        <option value="3">০৩</option>
                                        <option value="4" selected="selected">০৪</option>
                                        <option value="5">০৫</option>
                                        <option value="6">০৬</option>
                                        <option value="7">০৭</option>
                                        <option value="8">০৮</option>
                                        <option value="9">০৯</option>
                                        <option value="10">১০</option>
                                        <option value="11">১১</option>
                                        <option value="12">১২</option>
                                        <option value="13">১৩</option>
                                        <option value="14">১৪</option>
                                        <option value="15">১৫</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">ধার্যকৃত কর</label>
                                    <div class="col-md-9">
                                        <input type="text" name="data[tax]" value=""  class="form-control" autocomplete="off" id="tax" required readonly placeholder="ধার্যকৃত কর" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">অগ্রিম কর</label>
                                    <div class="col-md-9">
                                        <input type="text" name="data[advance]" value=""  class="form-control" autocomplete="off" id="advance"  placeholder="অগ্রিম কর" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">আদায়কৃত কর</label>
                                    <div class="col-md-9">
                                        <input type="text" name="data[paid]" value=""  class="form-control" id="paid" autocomplete="off" required placeholder="আদায়কৃত কর" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">বকেয়া</label>
                                    <div class="col-md-9">
                                        <input type="text" name="data[due]" value=""  class="form-control" id="due" autocomplete="off" required placeholder="বকেয়া" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-10">
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
                                <input type="button" class="btn btn-info" value="Cancel"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection
