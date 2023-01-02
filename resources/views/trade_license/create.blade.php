@extends('layout.app')

@section('pageTitle',trans('ট্রেড লাইসেন্স'))
@section('pageSubTitle',trans('Form'))

@section('content')
  <section id="multiple-column-form">
    <div class="row match-height">
        <div class="container">
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="#">হোম </a>
                    <i class="bi bi-circle-half"></i>
                </li>

                <li>
                    <span> ট্রেড লাইসেন্স</span>
                </li>
            </ul>
            <div class="page-content-inner">
                <div class="portlet light tasks-widget ">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject font-dark sbold uppercase">আবেদন ফরম</span>
                        </div>

                    </div>
                    <div class="portlet-body util-btn-margin-bottom-5">
                        <form action="{{route(currentUser().'.trade.store')}}" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf
                            @method('post')
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label">ব্যবসা প্রতিষ্ঠানের নাম </label>
                                        <div class="m-2">
                                            <input type="text" name="business_name" value="" class="form-control" required="" placeholder="ব্যবসা প্রতিষ্ঠানের নাম">
                                        </div>
                                        <label class="control-label">প্রোপাইটরের নাম</label>
                                        <div class="m-2">
                                            <input type="text" name="proprietor_name" value="" class="form-control" placeholder="প্রোপাইটরের নাম">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">পিতা/স্বামী</label>
                                        <div class="">
                                            <input type="text" name="father_husband" value="" class="form-control" placeholder="পিতা/স্বামী">
                                        </div>
                                        {{-- <label class="control-label">স্বামী</label>
                                        <div class="">
                                            <input type="text" name="husband" value="" class="form-control" placeholder="স্বামী"> ``, ``, ``, ``, `village_road`, `ward_no`, `district`, `post_office`, `division`, `thana`, `image`, `id_no_img`, `status
                                        </div> --}}
                                        <label class="control-label">মোবাইল </label>
                                        <div class="">
                                            <input type="text" name="phone" value="" class="form-control" placeholder="মোবাইল">
                                        </div>
                                        <label class="control-label">আনুমানিক মূল্য </label>
                                        <div class="">
                                            <input type="text" name="estimated_price" value="" class="form-control" placeholder="আনুমানিক মূল্য">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="control-label">তারিখ </label>
                                            <div class="mb-3">
                                                <input type="date" name="date" value="" class="form-control" placeholder="তারিখ">
                                            </div>
                                        </div>
                                        <div class="col-6 mt-4">
                                            <select name="financial_year" class="form-control" id="financial_year">
                                                <option value="" selected="selected">অর্থবছর</option>
                                                <option value="2022-2023">2022-2023</option>
                                                <option value="2023-2024">2023-2024</option>
                                                <option value="2024-2025">2024-2025</option>
                                                <option value="2025-2026">2025-2026</option>
                                                <option value="2026-2027">2026-2027</option>
                                                <option value="2027-2028">2027-2028</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">প্রতিষ্ঠানের বিবরন </label>
                                        <div class="">
                                            <input type="text" name="organization_details" value="" class="form-control" placeholder="প্রতিষ্ঠানের বিবরন">
                                        </div>
                                        <label class="control-label">প্রতিষ্ঠানের ঠিকানা</label>
                                        <div class="">
                                            <input type="text" name="institution_address" value="" class="form-control" placeholder="প্রতিষ্ঠানের ঠিকানা">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">আইডি নং</label>
                                        <div class="">
                                            <input type="text" name="id_no" value="" class="form-control" placeholder="আইডি নং">
                                        </div>
                                        <label class="control-label">আদায়কৃত ফ্রি</label>
                                        <div class="">
                                            <input type="text" name="earned_free" value="" class="form-control" placeholder="আদায়কৃত ফ্রি">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr >
                            ঠিকানা
                            <hr />
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label">গ্রাম/ রাস্তা </label>
                                        <div class="m-2">
                                            <input type="text" name="village_road" value="" class="form-control" required="" placeholder="গ্রাম/ রাস্তা">
                                        </div>
                                        <label class="control-label">ওয়ার্ড নং</label>
                                        <div class="">
                                            <select name="ward_no_id" class="form-control" id="words">
                                                <option value="" selected="selected">ওয়ার্ড নং</option>
                                                @forelse ($ward as $w)
                                                <option value="{{ $w->id }}">{{ $w->ward_name_bn }}</option>
                                                @empty
                                                <p>No Ward found</p>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">জেলা</label>
                                        <div class="">
                                            <select name="district_id" class="form-control" required="" id="districtid">
                                                <option value="">জেলা</option>
                                                @forelse($district as $dist)
                                                <option value="{{ $dist->id }}">{{ $dist->name_bn }}</option>
                                                @empty
                                                <p>No District found</p>
                                                @endforelse
                                            </select>
                                        </div>
                                        <label class="control-label">ফটো</label>
                                        <div class="m-2">
                                            <input type="file" name="image" value="" class="form-control" autocomplete="off" required="" placeholder="ফটো">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label">পোস্ট অফিস</label>
                                        <div class="m-2">
                                            <input type="text" name="post_office" value="" class="form-control" required="" placeholder="ব্যাক্তির নাম">
                                        </div>
                                        <label class="control-label">বিভাগ</label>
                                        <select name="division_id" class="form-control" required="" id="divisionid">
                                            <option value="">বিভাগ</option>
                                            @forelse ($division as $div)
                                            <option value="{{ $div->id }}">{{ $div->name_bn }}</option>
                                            @empty
                                                <p>No Division found</p>
                                            @endforelse
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">থানা</label>
                                        <div class="">
                                            <select name="thana_id" class="form-control" required="" id="thanaid">
                                                <option value="">থানা</option>
                                                @forelse ($thana as $tha)

                                                <option value="{{ $tha->id }}">{{ $tha->name_bn }}</option>
                                                @empty

                                                <p>No Thana found</p>
                                                @endforelse

                                            </select>
                                        </div>
                                        <label class="control-label">আইডি নং</label>
                                        <div class="m-2">
                                            <input type="file" name="id_no_img" value="" class="form-control" autocomplete="off" required="" placeholder="আইডি নং">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-10">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                                        <input type="button" class="btn default cancel btn-info" value="Cancel">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


        </div>
    </div>

  </section>
  <!-- // Basic multiple Column Form section end -->
</div>
@endsection
