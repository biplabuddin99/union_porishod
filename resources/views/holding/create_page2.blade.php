@extends('layout.app')
{{-- @section('pageTitle',trans('নতুন হোল্ডিং')) --}}

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center heading-block">
                                    <h5 style="padding-top: 5px;">হোল্ডিং নাম্বার প্লেট আবেদনের অন্যান্য তথ্য</h5>
                                </div>
                            </div>
                        </div>
                        <form action="{{route(currentUser().'.holding.store')}}" method="POST" enctype="multipart/form-data">
                            {{--  <input type="hidden" name="all_aplication" value="{{$all->id}}">  --}}
                            @csrf
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="residence_type"><b>বাড়ির অবকাঠামু</b></label>
                                    <select name="residence_type" class="form-select @error('residence_type') is-invalid @enderror">
                                        <option value="">নির্বাচন করুন</option>
                                        @forelse(\App\Models\HousingType::orderBy('created_at')->get() as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @if($errors->has('residence_type'))
                                        <small class="d-block text-danger text-center">{{ $errors->first('residence_type') }}</small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="house_room"><b>বাড়ির রুম/ঘর</b></label>
                                    <input class="form-control @error('house_room') is-invalid @enderror" name="house_room" id="house_room" value="{{ old('house_room') }}"  type="number" placeholder="বাড়ির রুম/ঘর">
                                    @if($errors->has('house_room'))
                                        <small class="d-block text-danger">{{ $errors->first('house_room') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male"><b>পরিবারের সদস্য সংখ্যা (পুরুষ)</b></label>
                                    <input type="number" class="form-control" name="num_male" id="num_male" onkeyup="num_fmember()">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>পরিবারের সদস্য সংখ্যা (মহিলা)</b></label>
                                    <input type="number" class="form-control" name="num_female" id="num_female" onkeyup="num_fmember()">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>পরিবারের মোট সদস্য সংখ্যা </b></label>
                                    <input type="number" class="form-control" id="num_total">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male_vot"><b>পরিবারের ভোটার সংখ্যা (পুরুষ)</b></label>
                                    <input type="number" class="form-control" name="num_male_vot" id="num_male_vot" onkeyup="num_fmembervot()">
                                </div>
                                <div class="col-4">
                                    <label for="num_female_vot"><b>পরিবারের ভোটার সংখ্যা (মহিলা)</b></label>
                                    <input type="number" class="form-control" name="num_female_vot" id="num_female_vot" onkeyup="num_fmembervot()">
                                </div>
                                <div class="col-4">
                                    <label ><b>পরিবারের মোট ভোটার  সংখ্যা</b> </label>
                                    <input type="number" class="form-control" id="num_totalv">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="family_status"><b>পারিবারিক অবস্থা</b></label>
                                    <select name="family_status" class="form-select">
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">হতদরিদ্র</option>
                                        <option value="2">নিন্ম-মধ্যবৃত্ত</option>
                                        <option value="3">মধ্যবৃত্ত</option>
                                        <option value="4">উচ্চ-মধ্যবৃত্ত</option>
                                        <option value="5">উচ্চবৃত্ত</option>
                                    </select>
                                </div>
                                
                                <div class="col-6">
                                    <label  class="form-label" for="percentage_house_land"><b>বাড়ির জমি পরিমান</b></label>
                                    <input class="form-control @error('percentage_house_land') is-invalid @enderror" name="percentage_house_land" id="percentage_house_land" value="{{ old('percentage_house_land') }}"  type="number" placeholder="শতাংশ">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="percentage_cultivated_land"><b>আবাদী জমি পরিমান</b></label>
                                    <input class="form-control @error('percentage_cultivated_land') is-invalid @enderror" name="percentage_cultivated_land" id="percentage_cultivated_land" value="{{ old('percentage_cultivated_land') }}"  type="number" placeholder="শতাংশ">
                                    @if($errors->has('percentage_cultivated_land'))
                                        <small class="d-block text-danger">{{ $errors->first('percentage_cultivated_land') }}</small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="estimated_value_house"><b>বাড়ির আনুমানিক মূল্য</b></label>
                                    <input class="form-control @error('estimated_value_house') is-invalid @enderror"
                                    name="estimated_value_house" id="estimated_value_house" value="{{ old('estimated_value_house') }}"  type="number" placeholder="বাড়ির আনুমানিক মূল্য">
                                    {{-- @if($errors->has('estimated_value_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('estimated_value_house') }}
                                    </small>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label  class="form-label" for="holding_number_plate_certificate_fee"><b>হোল্ডিং নাম্বার,প্লেট ও সনদ ফি</b></label>
                                    <input readonly class="form-control @error('holding_number_plate_certificate_fee') is-invalid @enderror"
                                    name="holding_number_plate_certificate_fee" id="holding_number_plate_certificate_fee" value="{{ old('holding_number_plate_certificate_fee') }}"  type="number" placeholder="ইউনিয়ন কর্তৃক পূরনকৃত।">
                                    @if($errors->has('holding_number_plate_certificate_fee'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('holding_number_plate_certificate_fee') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="tax_levied_annually_house"><b>বাড়ির বার্ষিক ধার্যকৃত কর</b></label>
                                    <input readonly class="form-control @error('tax_levied_annually_house') is-invalid @enderror"
                                    name="tax_levied_annually_house" id="tax_levied_annually_house" value="{{ old('tax_levied_annually_house') }}"  type="number" placeholder="ইউনিয়ন কর্তৃক পূরনকৃত।">
                                    @if($errors->has('tax_levied_annually_house'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('tax_levied_annually_house') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="service_charge"><b>সার্ভিস চার্জ</b></label>
                                    <input readonly class="form-control @error('service_charge') is-invalid @enderror"
                                    name="service_charge" id="service_charge" value="{{ old('service_charge') }}"  type="number" placeholder="ইউনিয়ন কর্তৃক পূরনকৃত।">
                                    @if($errors->has('service_charge'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('service_charge') }}
                                    </small>
                                    @endif
                                </div>
                            </div>

                            {{--  <div class="border border-2 m-2 p-3">
                                <label  class="form-label" for="business_taxes"><b>কর/আয়ের উৎস</b></label>
                                <div class="row m-2" style="font-size: 13px;">
                                    @forelse(\App\Models\IncomeSource::orderBy('created_at')->get() as $data)
                                        <div class="col-lg-2 col-sm-6">
                                            <input class="form-check-input @error('business_taxes') is-invalid @enderror" type="checkbox" name="business_taxes[]" id="business_taxes{{$data->id}}" value="{{$data->id}}" {{old('business_taxes') == $data->id ? 'checked' : ''}} />
                                            <label  class="form-label" for="business_taxes{{$data->id}}"> &nbsp; {{$data->name}}</label>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                                
                                @if($errors->has('business_taxes'))
                                <small class="d-block text-danger text-center">
                                    {{ $errors->first('business_taxes') }}
                                </small>
                                @endif
                            </div>  --}}
                            
                            <div class="row m-3">
                                <h5 class="text-center theme-text-color" style="padding-top: 5px;">আবেদনকারীর স্থায়ী ঠিকানা </h5>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="house_holding_number">বাড়ির হোল্ডিং নাম্বার</label>
                                    <input readonly class="form-control @error('house_holding_number') is-invalid @enderror"
                                    name="house_holding_number" id="house_holding_number" value="{{ old('house_holding_number') }}"  type="text" placeholder="ইউনিয়ন কর্তৃক পূরনকৃত।">
                                    @if($errors->has('house_holding_number'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('house_holding_number') }}
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
                                <h5 class="theme-text-color" style="padding-top: 5px;">অতিরিক্ত সংযোজনঃ- </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">ভোটার আইডির কপি </label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="birth_registration_image">জন্ম নিবন্ধনের কপি </label>
                                    <input class="form-control" type="file" name="birth_registration_image" id="birth_registration_image" value="{{ old('birth_registration_image') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                    <div class="image-overlay">
                                        <label  class="form-label" for="image">আবেদনকারীর সদ্য তোলা রঙিন ছবি</label>
                                        <input type="file" name="image" value="" data-default-file="{{ asset('uploads/holding/default.jpg') }}" class="form-control dropify">
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
                                  <div class="col-sm-6">
                                    {{-- <a href="{{route(currentUser().'.allapplication.edit',$all->id)}}"><button style="background-color: rgb(214, 153, 153);">পূর্ববর্তী</button></a> --}}
                                    {{--  <a class="p-2" style="background-color: rgb(214, 153, 153); color:black;" href="{{route(currentUser().'.allapplication.edit',$all->id)}}">  --}}
                                        পূর্ববর্তী
                                    </a>
                                  </div>
                                  <div class="col-sm-6 text-end">
                                    <button type="submit" style="background-color: rgb(214, 153, 153);">দাখিল করুন</button>
                                    <span class="btn or">or</span>
                                    <button type="reset" style="background-color: rgb(214, 153, 153);">রিসেট করুন</button>
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