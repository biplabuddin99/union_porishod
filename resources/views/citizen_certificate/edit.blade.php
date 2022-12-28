@extends('layout.app')

@section('pageTitle',trans('নাগরিক সনদপত্র'))
@section('pageSubTitle',trans('Form'))

@section('content')
  <section id="multiple-column-form">
    <div class="row match-height">
        <div class="container">
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="#">হোম </a>
                    <i class="fa fa-circle"></i>
                </li>

                <li>
                    <span> নাগরিক সনদপত্র ফরম আপডেট</span>
                </li>
            </ul>
            <div class="page-content-inner">
                <div class="portlet light tasks-widget ">
                    <div class="portlet-title">
                        <div class="caption">
                            <span class="caption-subject font-dark sbold uppercase">চারিত্রিক / নাগরিক সনদপত্র ফরম</span>
                        </div>

                    </div>
                    <div class="portlet-body util-btn-margin-bottom-5">
                        <form action="{{route(currentUser().'.citizen.update',encryptor('encrypt',$citizen->id))}}" role="form" class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8">
                            @csrf
                            @method('PATCH')
                            {{-- <input type="hidden" name="data[status]" value="1"> --}}
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label">ব্যাক্তির নাম </label>
                                        <div class="m-2">
                                            <input type="text" name="person_name" value="{{ $citizen->person_name }}" class="form-control" required="" placeholder="ব্যাক্তির নাম">
                                        </div>
                                        <label class="control-label">মাতা</label>
                                        <div class="m-2">
                                            <input type="text" name="mother" value="{{ $citizen->mother }}" class="form-control" autocomplete="off" required="" placeholder="মাতা">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">পিতা/স্বামী</label>
                                        <div class="">
                                            <input type="text" name="father" value="{{ $citizen->father }}" class="form-control" placeholder="পিতা">
                                        </div>
                                        {{-- <label class="control-label">স্বামী</label>
                                        <div class="">
                                            <input type="text" name="husband" value="" class="form-control" placeholder="স্বামী">
                                        </div> --}}
                                        <label class="control-label">গ্রাম/ রাস্তা </label>
                                        <div class="">
                                            <input type="text" name="village" value="{{ $citizen->village }}" class="form-control" placeholder="গ্রাম/ রাস্তা ">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label">পোস্ট </label>
                                        <div class="">
                                            <input type="text" name="postoffice" value="{{ $citizen->postoffice }}" class="form-control" placeholder="পোস্ট">
                                        </div>
                                        <label class="control-label">ওয়ার্ড নং</label>
                                        <div class="">
                                            <select name="ward_no_id" class="form-control" id="words">
                                                <option value="" selected="selected">ওয়ার্ড নং</option>
                                                @forelse ($ward as $w)
                                                <option value="{{ $w->id }}" {{$citizen->ward_no_id == $w->id ? 'selected' : ''}}>{{ $w->ward_name_bn }}</option>
                                                @empty
                                                <p>No Ward found</p>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">বিভাগ </label>
                                        <div class="">
                                            <select name="division_id" class="form-control" required="" id="divisionid">
                                                <option value="">বিভাগ</option>
                                                @forelse ($division as $div)
                                                <option value="{{ $div->id }}" {{ $citizen->division_id==$div->id ? 'selected' : '' }}>{{ $div->name_bn }}</option>
                                                @empty
                                                    <p>No Division found</p>
                                                @endforelse
                                            </select>
                                        </div>
                                        <label class="control-label">জেলা</label>
                                        <div class="">
                                            <select name="district_id" class="form-control" required="" id="districtid">
                                                <option value="">জেলা</option>
                                                @forelse($district as $dist)
                                                <option value="{{ $dist->id }}" {{ $citizen->district_id==$dist->id ? 'selected' : '' }}>{{ $dist->name_bn }}</option>
                                                @empty
                                                <p>No District found</p>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">থানা</label>
                                            <div class="">
                                                <select name="thana_id" class="form-control" required="" id="thanaid">
                                                    <option value="">থানা</option>
                                                    @forelse ($thana as $tha)
                                                    <option value="{{ $tha->id }}" {{ $citizen->thana_id==$tha->id ? 'selected' : '' }}>{{ $tha->name_bn }}</option>
                                                    @empty
                                                    <p>No Thana found</p>

                                                    @endforelse

                                                </select>
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
