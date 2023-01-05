@extends('layout.app')

@section('pageTitle',trans('আবেদন ফরম'))
@section('pageSubTitle',trans('ফরম'))

@section('content')
  <section id="multiple-column-form">
      <div class="row match-height">
          <div class="col-12">
              <div class="card">
                  <div class="card-content">
                      <div class="card-body">
                          <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.profile.store')}}">
                              @csrf
                                  <div class="row mb-3">
                                      <div class="col-sm-6">
                                          <label for="name" class=" col-form-label"><b>{{__('আবেদনকারীর নাম')}}:</b></label>
                                          <input type="text" id="applicantName" value="{{ old('applicantName')}}" class="form-control"
                                              placeholder="আবেদনকারীর নাম" name="applicantName">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="name" class=" col-form-label"><b>{{__('পিতা/স্বামী')}}:</b></label>
                                          <input type="text" id="FatherOrHusband" value="{{ old('FatherOrHusband')}}" class="form-control"
                                              placeholder="পিতা/স্বামী" name="FatherOrHusband">
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="name" class=" col-form-label"><b>{{__('মাতা')}}:</b></label>
                                          <input type="text" id="Mother" value="{{ old('Mother')}}" class="form-control"
                                              placeholder="মাতা" name="Mother">
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="contat" class=" col-form-label"><b>{{__('মোবাইল')}}:</b></label>
                                          <input type="text" id="Contact" value="{{ old('Contact')}}" class="form-control"
                                              placeholder="মোবাইল" name="Contact">
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="id" class=" col-form-label"><b>{{__('আইডি নং')}}:</b></label>
                                          <input type="text" id="IdNo" value="{{ old('IdNo')}}" class="form-control"
                                              placeholder="আইডি নং" name="IdNo">
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="Man" class=" col-form-label"><b>{{__('পুরুষ')}}:</b></label>
                                          <input type="text" id="man" value="{{ old('man')}}" class="form-control"
                                              placeholder="পুরুষ" name="man">
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="woman" class=" col-form-label"><b>{{__('মহিলা')}}:</b></label>
                                          <input type="text" id="woman" value="{{ old('woman')}}" class="form-control"
                                              placeholder="মহিলা" name="woman">
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="total" class=" col-form-label"><b>{{__('মোট সদস্য')}}:</b></label>
                                          <input type="text" id="totalMember" value="{{ old('totalMember')}}" class="form-control"
                                              placeholder="মোট সদস্য" name="totalMember" readonly>
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="voter" class=" col-form-label"><b>{{__('ভোটার সংখ্যা')}}:</b></label>
                                          <input type="text" id="voterNumber" value="{{ old('voterNumber')}}" class="form-control"
                                              placeholder="Voter Number" name="voterNumber">
                                      </div>
                                      <div class="col-sm-6 p-2">
                                          <label for="allowance" class="form-label"><b>{{__('ভাতা')}}:</b></label>
                                            <label for="allowance" class="form-label">প্রতিবন্ধী ভাতা</label>
                                            <input type="radio" value="1"  name="allowance">
                                            <label for="allowance" class="form-label">বয়স্ক ভাতা</label>
                                            <input type="radio" value="2" class="form-input" name="allowance">
                                            <label for="allowance" class="form-label">বিধবা ভাতা</label>
                                            <input type="radio" value="3" class="form-input" name="allowance">
                                            <label for="allowance" class="form-label">মুক্তি যোদ্ধা</label>
                                            <input type="radio" value="4" class="form-input" name="allowance">
                                            <label for="allowance" class="form-label">অন্যান্য</label>
                                            <input type="radio" value="5" class="form-input" name="allowance">
                                            <label for="allowance" class="form-label">কোনটিই না</label>
                                            <input type="radio" value="6" class="form-input" name="allowance">
                                      </div>
                                      <div class="col-sm-6 p-2">
                                          <label for="source" class="form-label"><b>{{__('আয়ের প্রধান উৎস')}}:</b></label>
                                            <label for="icomeSource" class="form-label">কৃষি</label>
                                            <input type="radio" value="1" class="form-input" name="icomeSource">
                                            <label for="icomeSource" class="form-label">ব্যবসা</label>
                                            <input type="radio" value="2" class="form-input" name="icomeSource">
                                            <label for="icomeSource" class="form-label">চাকরি</label>
                                            <input type="radio" value="3" class="form-input" name="icomeSource">
                                            <label for="icomeSource" class="form-label">প্রবাসী</label>
                                            <input type="radio" value="4" class="form-input" name="icomeSource">
                                            <label for="icomeSource" class="form-label">গ্রহীনি</label>
                                            <input type="radio" value="5" class="form-input" name="icomeSource">
                                            <label for="icomeSource" class="form-label">দিন মজুর</label>
                                            <input type="radio" value="6" class="form-input" name="icomeSource">
                                            <label for="icomeSource" class="form-label">অন্যান্য</label>
                                            <input type="radio" value="7" class="form-input" name="icomeSource">
                                      </div>
                                  
                                        <div class="col-12">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>ক্রমিক</th>
                                                            <th>নাম</th>
                                                            <th>সম্পর্ক</th>
                                                            <th>এন আই ডি /বি আর সি</th>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>
                                                </table>
                                        </div>
                                        <div>
                                            <h5><b>বাড়ির বিবরণ</b></h5>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="house_name" class=" col-form-label"><b>{{__('ভবনের নাম')}}:</b></label>
                                            <input type="text" id="house_name" value="{{ old('house_name')}}" class="form-control"
                                                placeholder="ভবনের নাম" name="house_name">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="holding_no" class=" col-form-label"><b>{{__('হোল্ডিং নং')}}:</b></label>
                                            <input type="text" id="holding_no" value="{{ old('holding_no')}}" class="form-control"
                                                placeholder="হোল্ডিং নং" name="holding_no">
                                        </div>
                                        <div class="col-sm-6 p-2">
                                            <label for="source" class="form-label"><b>{{__('বাড়ীর ধারন')}}:</b></label>
                                              <label for="typeOfHouse" class="form-label">এক চালা</label>
                                              <input type="radio" value="1" class="form-input" name="typeOfHouse">
                                              <label for="typeOfHouse" class="form-label">দুই চালা</label>
                                              <input type="radio" value="2" class="form-input" name="typeOfHouse">
                                              <label for="typeOfHouse" class="form-label">চার চালা</label>
                                              <input type="radio" value="3" class="form-input" name="typeOfHouse">
                                              <label for="typeOfHouse" class="form-label">আধা পাকা</label>
                                              <input type="radio" value="4" class="form-input" name="typeOfHouse">
                                              <label for="typeOfHouse" class="form-label">পাকা</label>
                                              <input type="radio" value="5" class="form-input" name="typeOfHouse">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="total_room" class="col-form-label"><b>{{__('রুম কযটা')}}:</b></label>
                                            <input type="text" id="total_room" value="{{ old('total_room')}}" class="form-control" placeholder="রুম কযটা" name="total_room">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="percetageOfHouseLand" class="col-form-label"><b>{{__('বাড়ীর জমি শতাংশ')}}:</b></label>
                                            <input type="text" id="percetageOfHouseLand" value="{{ old('percetageOfHouseLand')}}" class="form-control" 
                                            placeholder="বাড়ীর জমি শতাংশ" name="percetageOfHouseLand">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="percetageOfPaddyLand" class="col-form-label"><b>{{__('ধানী জমি শতাংশ')}}:</b></label>
                                            <input type="text" id="percetageOfPaddyLand" value="{{ old('percetageOfPaddyLand')}}" class="form-control" 
                                            placeholder="ধানী জমি শতাংশ" name="percetageOfPaddyLand">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="estimatedValuOfHouse" class="col-form-label"><b>{{__('গৃহের আনুমানিক মূল্য')}}:</b></label>
                                            <input type="text" id="estimatedValuOfHouse" value="{{ old('estimatedValuOfHouse')}}" class="form-control" 
                                            placeholder="গৃহের আনুমানিক মূল্য" name="estimatedValuOfHouse">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="tax_levied" class="col-form-label"><b>{{__('ধার্যকৃত কর')}}:</b></label>
                                            <input type="text" id="tax_levied" value="{{ old('tax_levied')}}" class="form-control" 
                                            placeholder="0" name="tax_levied">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="tax_collected" class="col-form-label"><b>{{__('আদায়কৃত কর')}}:</b></label>
                                            <input type="text" id="tax_collected" value="{{ old('tax_collected')}}" class="form-control" 
                                            placeholder="0" name="tax_collected">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="owing" class="col-form-label"><b>{{__('বকেয়া')}}:</b></label>
                                            <input type="text" id="owing" value="{{ old('owing')}}" class="form-control" 
                                            placeholder="0" name="owing">
                                        </div>
                                        <div><h5><b>ঠিকানা</b></h5></div>
                                        <div class="col-sm-6 ">
                                            <label for="vill" class="col-form-label"><b>{{__('গ্রাম/ রাস্তা')}}:</b></label>
                                            <input type="text" id="vill" value="{{ old('vill')}}" class="form-control"
                                                placeholder="গ্রাম/ রাস্তা" name="vill">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="post" class="col-form-label"><b>{{__('পোস্ট')}}:</b></label>
                                            <input type="text" id="post" value="{{ old('post')}}" class="form-control"
                                                placeholder="পোস্ট" name="post">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="word" class=" col-form-label"><b>{{__('ওয়ার্ড নং')}}:</b></label>
                                              <select class="form-control form-select" name="wordNo">
                                                  <option value="">ওয়ার্ড নং</option>
                                                  @forelse($word as $d)
                                                      <option  value="{{$d->id}}" {{ old('wordNo')==$d->id?"selected":""}}> {{ $d->ward_name_bn}}</option>
                                                  @empty
                                                      <option value="">No Data found</option>
                                                  @endforelse
                                              </select>
                                        </div>
                                        <div class="col-sm-6">
                                          <label for="division" class="col-form-label"><b>{{__('বিভাগ ')}}:</b></label>
                                          <select onchange="show_district(this.value)" class="form-control form-select" name="divisionName" id="divisionName">
                                              <option value="">বিভাগ</option>
                                              @forelse($division as $d)
                                                  <option value="{{$d->id}}" {{ old('divisionName')==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                              @empty
                                                  <option value="">No division found</option>
                                              @endforelse
                                          </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="district" class="col-form-label"><b>{{__('জেলা')}}:</b></label>
                                          <select onchange="show_thana(this.value)" class="form-control form-select" name="districtName" id="districtName">
                                              <option value="">জেলা</option>
                                              @forelse($district as $d)
                                                  <option class="dist dist{{$d->division_id}}" value="{{$d->id}}" {{ old('districtName')==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                              @empty
                                                  <option value="">No district found</option>
                                              @endforelse
                                          </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="Thana" class=" col-form-label"><b>{{__('থানা')}}:</b></label>
                                          <select class="form-control form-select" name="thana">
                                              <option value="">থানা</option>
                                              @forelse($thana as $d)
                                                  <option class="thana thana{{$d->upazila_id}}" value="{{$d->id}}" {{ old('thana')==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                              @empty
                                                  <option value="">No Thana found</option>
                                              @endforelse
                                          </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="image" class="col-form-label"><b>{{__('ফটো')}}:</b></label>
                                            <input type="file" id="image" class="form-control"  name="image">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="home" class="col-form-label"><b>{{__('বাডী')}}:</b></label>
                                            <input type="file" id="home" class="form-control"  name="home">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="date" class="col-form-label"><b>{{__('স্ট্যাটাস')}}:</b></label>
                                            <select class="form-control form-select" value="{{ old('status')}}" name="status" required>
                                              <option value="">স্ট্যাটাস</option>
                                                  <option value="0">Inactive</option>
                                                  <option value="1">Active</option>
                                          </select>
                                        </div>
                                  </div>

                                  <div class="col-12 d-flex justify-content-end">
                                      <button type="submit" class="btn btn-primary me-1 mb-1">{{__('Save')}}</button>
                                      <button type="reset" class="btn btn-primary me-1 mb-1">{{__('Cancel')}}</button>
                                      
                                  </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- // Basic multiple Column Form section end -->
@endsection
@push('scripts')
<script>

     $(document).ready(function(){
         $('.dist').hide();
         $('.thana').hide();
     })
    function show_district(e){
         $('.dist').hide();
         $('.dist'+e).show()
    }
    function show_thana(e){
        $('.thana').hide();
        $('.thana'+e).show();
    }
    
   
    
</script>
@endpush