@extends('layout.app')
{{-- @section('pageTitle',trans('Porishod Settings List')) --}}
@section('pageSubTitle',trans('List'))

@section('content')
<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-block">
                            <h4 style="padding-top: 5px;">পরিষদ সেটিং</h4>
                        </div>
                    </div>
                </div>
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <a href="{{route(currentUser().'.porishodsettiong.edit',encryptor('encrypt',$porishod->id))}}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="district_id">জেলা: </label>
                                        {{$porishod->district?->name_bn}}<br>
                                    
                                        <label for="upazila_id">উপজেলা/থানা:</label>
                                        {{$porishod->upazila?->name_bn}}<br>

                                        <label for="union_id">ইউনিয়ন: </label>
                                        {{$porishod->union?->name_bn}}<br>
                                       
                                        <label for="union_id">যোগাযোগের নম্বর: </label>
                                        {{$porishod->contact_no}}<br>
                                       
                                        <label for="union_id"> ইমেইল: </label>
                                        {{$porishod->email}}<br>
                                       
                                        <label for="union_id">ওয়েবসাইট: </label>
                                        {{$porishod->website}}<br>
                                       
                                        <label for="union_id">ফেইসবুক পেজ: </label>
                                        {{$porishod->fb_page}}<br>
                                       
                                        <label for="union_id">ইউটিউব চ্যানেল: </label>
                                        {{$porishod->youtube}}<br>
                                       
                                        <label for="union_id">টুইটার: </label>
                                        {{$porishod->twitter}}<br>
                                       
                                        <label for="union_id">স্লোগান: </label>
                                        {{$porishod->slogan}}<br>
                                       
                                        <label for="union_id">হোল্ডিং নম্বর পেরফিক্স: </label>
                                        {{$porishod->holding_prefix}}<br>

                                        <label for="union_id">চেয়ারম্যান: </label>
                                        {{$porishod->chairman?->name}}<br>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label  class="form-label" for="logo">লোগো</label>
                                        <img src="{{ asset('uploads/logo_folder') }}/{{ $porishod->logo }}" alt="" class="w-50">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label  class="form-label" for="logo">সনদপত্র লোগো</label>
                                        <img src="{{ asset('uploads/logo_folder') }}/{{ $porishod->formlogo }}" alt="" class="w-50">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
