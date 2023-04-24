@extends('layout.app')

{{-- @section('pageTitle',trans('Update porishod')) --}}
@section('pageSubTitle',trans('Update'))

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center heading-block">
                                        <h4 style="padding-top: 5px;">পরিষদ সেটিং আপডেট করুন</h4>
                                    </div>
                                </div>
                            </div>
                            <form class="form" method="post" action="{{route(currentUser().'.porishodsettiong.update',encryptor('encrypt',$porishod->id))}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$porishod->id)}}">
                                
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="district_id">জেলা</label>
                                                    <select id="district_id" name="district_id" class="form-select search_district" required>
                                                        <option value="">নির্বাচন করুন</option>
                                                        @foreach ($districts as $district)
                                                        <option value="{{ $district->id }}" @if(old('district_id',$porishod->district_id)==$district->id) selected @endif>{{ $district->name_bn }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if($errors->has('district_id'))
                                                        <span class="text-danger"> {{ $errors->first('district_id') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="upazila_id">উপজেলা/থানা</label>
                                                    <select id="upazila_id" name="upazila_id" class="form-select search_district" required>
                                                        <option value="">নির্বাচন করুন</option>
                                                        @foreach ($upazilas as $upazila)
                                                        <option value="{{ $upazila->id }}" @if(old('upazila_id',$porishod->upazila_id)==$upazila->id) selected @endif>{{ $upazila->name_bn }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="union_id">ইউনিয়ন </label>
                                                    <select id="union_id" name="union_id" class="form-select search_district" required>
                                                        <option value="">নির্বাচন করুন</option>
                                                        @foreach ($unions as $union)
                                                        <option value="{{ $union->id }}" @if(old('union_id',$porishod->union_id)==$union->id) selected @endif>{{ $union->name_bn }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label  class="form-label" for="logo">লোগো</label>
                                            <input type="file" name="logo" value="" data-default-file="{{ asset('uploads/logo_folder') }}/{{ $porishod->logo }}" class="form-control dropify">
                                            @if($errors->has('logo'))
                                                <span class="text-danger"> {{ $errors->first('logo') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="website">ওয়েবসাইট</label>
                                            <input type="text" id="website" name="website" value="{{old('website',$porishod->website)}}" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="contact_no">যোগাযোগের নম্বর</label>
                                            <input type="text" id="contact_no" name="contact_no" value="{{old('contact_no',$porishod->contact_no)}}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="email">ইমেইল</label>
                                            <input type="text" id="email" name="email" value="{{old('email',$porishod->email)}}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="fb_page">ফেইসবুক পেজ </label>
                                            <input type="text" id="fb_page" name="fb_page" value="{{old('fb_page',$porishod->fb_page)}}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="youtube">ইউটিউব চ্যানেল </label>
                                            <input type="text" id="youtube" name="youtube" value="{{old('youtube',$porishod->youtube)}}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="twitter">টুইটার </label>
                                            <input type="text" id="twitter" name="twitter" value="{{old('twitter',$porishod->twitter)}}" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="holding_prefix">হোল্ডিং নম্বর পেরফিক্স</label>
                                            <input type="text" id="holding_prefix" name="holding_prefix" value="{{old('holding_prefix',$porishod->holding_prefix)}}" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="slogan">স্লোগান</label>
                                            <input type="text" id="slogan" name="slogan" value="{{old('slogan',$porishod->slogan)}}" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="chairman_name">চেয়ারম্যান</label>
                                            <input type="text" id="chairman_name" name="chairman_name" value="{{old('chairman_name',$porishod->chairman_name)}}" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>

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
