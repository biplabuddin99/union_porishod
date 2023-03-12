@extends('layout.app')

@section('content')
  <section id="multiple-column-form">
    <div class="row match-height">
        <div class="container">
            <section style="margin-top: 50px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center"
                            style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                            <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">নাগরিক সনদের অন্যান্য তথ্য</h4>
                        </div>
                    </div>
                </div>
            </section>
            <div class="page-content-inner">
                <div class="portlet light tasks-widget ">
                    <div class="portlet-body util-btn-margin-bottom-5">
                        <form action="{{route(currentUser().'.citizen.store')}}" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <input type="hidden" name="all_aplication" value="{{$all->id}}">
                            @csrf
                            @method('post')
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="permanent_resident">উক্ত ইউনিয়নের স্থায়ী বাসিন্দা :-</label>
                                    <select name="permanent_resident" class="form-select @error('permanent_resident') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                    @if($errors->has('permanent_resident'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('permanent_resident') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="citizen_bangladesh">জন্মসূত্রে বাংলাদেশের নাগরিক:-</label>
                                    <select name="citizen_bangladesh" class="form-select @error('citizen_bangladesh') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                    @if($errors->has('citizen_bangladesh'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('citizen_bangladesh') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="voters_union">উক্ত ইউনিয়নের ভোটার:-</label>
                                    <select name="voters_union" class="form-select @error('voters_union') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                    @if($errors->has('voters_union'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('voters_union') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="involved_anti_state">রাষ্ট্রবিরোধী কোন কাজের সাথে জড়িত কিনা?:-</label>
                                    <select name="involved_anti_state" class="form-select @error('involved_anti_state') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                    @if($errors->has('involved_anti_state'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('involved_anti_state') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="update_holdingtax">হালনাগাদ হোল্ডিং কর:-</label>
                                    <select name="update_holdingtax" class="form-select @error('update_holdingtax') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                    @if($errors->has('update_holdingtax'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('update_holdingtax') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                </div>
                            </div>
                            <div class="row m-3">
                                <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">নাগরিক সনদের আবেদনকৃত ব্যাক্তির স্থায়ী ঠিকানা সমূহঃ </h4>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="house_holding_no">বাড়ির হেল্ডিং নম্বর:-</label>
                                    <input class="form-control @error('house_holding_no') is-invalid @enderror"
                                    name="house_holding_no" id="house_holding_no" value="{{ old('house_holding_no') }}"  type="text" placeholder="ইউনিয়ন পরিষদ কতৃক পূরণকৃত">
                                    {{-- @if($errors->has('house_holding_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_holding_no') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="street_nm">রাস্তা/পাড়া/মহল্লা:-</label>
                                    <input class="form-control @error('street_nm') is-invalid @enderror"
                                    name="street_nm" id="street_nm" value="{{ old('street_nm') }}"  type="text" placeholder="রাস্তা/পাড়া/মহল্লা">
                                    @if($errors->has('street_nm'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('street_nm') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="village_name">গ্রামের নাম:-</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name') }}"  type="text" placeholder="গ্রামের নাম">
                                    {{-- @if($errors->has('village_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('village_name') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="ward_no">ওয়ার্ড:-</label>
                                    <input class="form-control @error('ward_no') is-invalid @enderror"
                                    name="ward_no" id="ward_no" value="{{ old('ward_no') }}"  type="text" placeholder="ওয়ার্ড">
                                    @if($errors->has('ward_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('ward_no') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="name_union_parishad">ইউনিয়ন পরিষদের নাম:-</label>
                                    <input class="form-control @error('name_union_parishad') is-invalid @enderror"
                                    name="name_union_parishad" id="name_union_parishad" value="{{ old('name_union_parishad') }}"  type="text" placeholder="ইউনিয়ন পরিষদের নাম">
                                    {{-- @if($errors->has('name_union_parishad'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('name_union_parishad') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="post_office">ডাকঘর:-</label>
                                    <input class="form-control @error('post_office') is-invalid @enderror"
                                    name="post_office" id="post_office" value="{{ old('post_office') }}"  type="text" placeholder="ডাকঘর">
                                    @if($errors->has('post_office'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('post_office') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="upazila_thana">উপজেলা/থানা:-</label>
                                    <input class="form-control @error('upazila_thana') is-invalid @enderror"
                                    name="upazila_thana" id="upazila_thana" value="{{ old('upazila_thana') }}"  type="text" placeholder="উপজেলা/থানা">
                                    {{-- @if($errors->has('upazila_thana'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('upazila_thana') }}
                                    </small>
                                    @endif --}}
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="district">জেলা:-</label>
                                    <input class="form-control @error('district') is-invalid @enderror"
                                    name="district" id="district" value="{{ old('district') }}"  type="text" placeholder="জেলা">
                                    @if($errors->has('district'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('district') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-3">
                                <h5 class="" style="color: rgb(13, 134, 29); padding-top: 5px;">অতিরিক্ত সংযোজনঃ- </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">ভোটার আইডির রঙিন কপি :-</label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="holding_image">বাড়ি/প্রতিষ্ঠানের হোল্ডিং করের কপি:-</label>
                                    <input class="form-control" type="file" name="holding_image" id="holding_image" value="{{ old('holding_image') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="image">ছবি যদি থাকে তার কপি :-</label>
                                    <input class="form-control"
                                    name="image" id="image" value="{{ old('image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="image_birth_certificate">জন্ম নিবন্ধন সনদের কপি :-</label>
                                    <input class="form-control" type="file" name="image_birth_certificate" id="image_birth_certificate" value="{{ old('image_birth_certificate') }}" placeholder="">
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                  <div class="col-sm-9">
                                    <a class="p-2" style="background-color: rgb(214, 153, 153); color:black;" href="{{route(currentUser().'.allapplication.edit',$all->id)}}">
                                        পূর্ববর্তী
                                    </a>
                                  </div>
                                  <div class="col-sm-3 text-end">
                                    <button type="submit" style="background-color: rgb(214, 153, 153);">Submit</button>
                                    <span class="btn or">or</span>
                                    <button type="reset" style="background-color: rgb(214, 153, 153);">Cancel</button>
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

@endsection
