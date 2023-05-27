@extends('layout.app')
{{-- @section('pageTitle',trans('নতুন হোল্ডিং')) --}}

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
                                    <h5 style="padding-top: 5px;">চারিত্রিক সনদের অন্যান্য তথ্য</h5>
                                </div>
                            </div>
                        </div>
                        <form action="{{route('charactersecondpart_update',Crypt::encrypt($character->id))}}" role="form" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf
                            @method('POST')
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="permanent_resident">আমি উক্ত ইউনিয়নের</label>
                                    <select name="permanent_resident" class="form-select @error('permanent_resident') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">স্থায়ী বাসিন্দা</option>
                                        <option value="2">অস্থায়ী বাসিন্দা</option>
                                    </select>
                                    @if($errors->has('permanent_resident'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('permanent_resident') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="citizen_bangladesh">জন্মসূত্রে বাংলাদেশের নাগরিক</label>
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
                                    <label  class="form-label" for="voters_union">উক্ত ইউনিয়নের ভোটার</label>
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
                                    <label  class="form-label" for="voter_no">ভোটার নম্বর</label>
                                    <input class="form-control @error('voter_no') is-invalid @enderror"
                                    name="voter_no" id="voter_no" value="{{ old('voter_no') }}"  type="number" placeholder="ভোটার নম্বর">
                                    @if($errors->has('voter_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('voter_no') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="involved_anti_state">রাষ্ট্রবিরোধী কোন কাজের সাথে জড়িত</label>
                                    <select name="involved_anti_state" class="form-select @error('involved_anti_state') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">আছে</option>
                                        <option value="2">নাই</option>
                                    </select>
                                    @if($errors->has('involved_anti_state'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('involved_anti_state') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-3">
                                <h5 class="text-center theme-text-color" style="padding-top: 5px;">আবেদনকৃত ব্যক্তির স্থায়ী ঠিকানা সমূহ</h5>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="house_holding_no">বাড়ির হোল্ডিং নাম্বার</label>
                                    <input class="form-control @error('house_holding_no') is-invalid @enderror"
                                    name="house_holding_no" id="house_holding_no" value="{{ old('house_holding_no') }}"  type="text" placeholder="ইউনিয়ন কর্তৃক পূরনকৃত।">
                                    @if($errors->has('house_holding_no'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_holding_no') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="street_nm">রাস্তা / ব্লক</label>
                                    <input class="form-control @error('street_nm') is-invalid @enderror"
                                    name="street_nm" id="street_nm" value="{{ old('street_nm') }}"  type="text" placeholder="রাস্তা / ব্লক">
                                    @if($errors->has('street_nm'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('street_nm') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="village_name">গ্রাম / পাড়া</label>
                                    <input class="form-control @error('village_name') is-invalid @enderror"
                                    name="village_name" id="village_name" value="{{ old('village_name') }}"  type="text" placeholder="গ্রাম / পাড়া">
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="ward_id">সেক্টর / ওয়ার্ড</label>
                                    <select name="ward_id" class="form-select" id="ward_id">
                                        <option value="" selected="selected">সেক্টর / ওয়ার্ড নং</option>
                                        @forelse ($ward as $w)
                                        <option value="{{ $w->id }}">{{ $w->ward_name_bn }}</option>
                                        @empty
                                        <p>No Ward found</p>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="post_office">ডাকঘর</label>
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
                                <div class="col-4">
                                    <label >ইউনিয়ন:</label>
                                    <b>{{ request()->session()->get('upsetting')->union?->name_bn}}</b>
                                    <input type="hidden" name="union_id" value="{{ request()->session()->get('upsetting')->union_id}}"/>
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="upazila_thana">উপজেলা/থানা:</label>
                                    <b>{{ request()->session()->get('upsetting')->upazila?->name_bn}}</b>
                                    <input type="hidden" name="upazila_id" value="{{ request()->session()->get('upsetting')->upazila_id}}"/>
                                </div>
                                <div class="col-4">
                                    <label for="district">জেলা:</label>
                                    <b>{{ request()->session()->get('upsetting')->district?->name_bn}}</b>
                                    <input type="hidden" name="district_id" value="{{ request()->session()->get('upsetting')->district_id}}"/>
                                </div>

                            </div>
                            <div class="row m-3">
                                <h5>অতিরিক্ত সংযোজনঃ- </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">জাতীয় পরিচয়পত্র কপি</label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="digital_birth_certificate">ডিজিটাল জন্ম নিবন্ধন সনদের কপি</label>
                                    <input class="form-control" type="file" name="digital_birth_certificate" id="digital_birth_certificate" value="{{ old('digital_birth_certificate') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                <div class="image-overlay">
                                    <label  class="form-label" for="image">সদ্য তোলা রঙিন ছবি</label>
                                    <input type="file" name="image" value="" data-default-file="{{ asset('uploads/onerror.jpg') }}" class="form-control dropify">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="text-center">
                                    <b>
                                        আমি ঘোষনা করিতেছি যে, <br/>
                                        আমার দেয়া উপরে বর্ণিত তথ্য সঠিক এবং বর্ণিত তথ্য মিথ্যা প্রমানিত হলে,  <br/>
                                        আমি তাহার জন্য আইনত দায়ী থাকিব।
                                    </b>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-9 mt-3">
                                      <a class="p-2 bg-primary text-white" href="{{route(currentUser().'.characterfirstpart',Crypt::encrypt($character->id))}}">
                                          পূর্ববর্তী
                                      </a>
                                    </div>
                                    <div class="col-sm-3 text-end mt-2">
                                      <button type="submit" class="p-1 bg-primary text-white">দাখিল করুন</button>
                                      <span class="btn or">or</span>
                                      <button type="reset" class="p-1 bg-primary text-white">রিসেট করুন</button>
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
@push('scripts')
    <script>
        function num_fmember(){
            let nm=$('#num_male').val()?parseFloat($('#num_male').val()):0;
            let nf=$('#num_female').val()?parseFloat($('#num_female').val()):0;
            $('#num_total').val((nm+nf));
        }
        function num_fmembervot(){
            let nm=$('#num_male_vot').val()?parseFloat($('#num_male_vot').val()):0;
            let nf=$('#num_female_vot').val()?parseFloat($('#num_female_vot').val()):0;
            $('#num_totalv').val((nm+nf));
        }
    </script>
@endpush
