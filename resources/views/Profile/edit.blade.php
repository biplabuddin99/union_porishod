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
                          <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.profile.update',encryptor('encrypt',$profile->id))}}">
                              @csrf
                              @method('patch')
                                  <div class="row mb-3">
                                      <div class="col-sm-6 ">
                                          <label for="name" class="  col-form-label"><b>{{__('আবেদনকারীর নাম')}}:</b></label>
                                          <input type="text" id="applicantName" value="{{ old('applicantName',$profile->applicantName)}}" class="form-control"
                                              placeholder="আবেদনকারীর নাম" name="applicantName">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="name" class="  col-form-label"><b>{{__('পিতা/স্বামী')}}:</b></label>
                                          <input type="text" id="FatherOrHusband" value="{{ old('FatherOrHusband',$profile->FatherOrHusband)}}" class="form-control"
                                              placeholder="পিতা/স্বামী" name="FatherOrHusband">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="name" class="  col-form-label"><b>{{__('মাতা')}}:</b></label>
                                          <input type="text" id="Mother" value="{{ old('Mother',$profile->mother_name)}}" class="form-control"
                                              placeholder="মাতা" name="Mother">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="contat" class="  col-form-label"><b>{{__('মোবাইল')}}:</b></label>
                                          <input type="text" id="Contact" value="{{ old('Contact',$profile->contact)}}" class="form-control"
                                              placeholder="মোবাইল" name="Contact">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="id" class="  col-form-label"><b>{{__('আইডি নং')}}:</b></label>
                                          <input type="text" id="IdNo" value="{{ old('IdNo',$profile->id_no)}}" class="form-control"
                                              placeholder="আইডি নং" name="IdNo">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="Man" class="  col-form-label"><b>{{__('পুরুষ')}}:</b></label>
                                          <input type="text" id="man" value="{{ old('man',$profile->man)}}" class="form-control"
                                              placeholder="পুরুষ" name="man">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="woman" class="  col-form-label"><b>{{__('মহিলা')}}:</b></label>
                                          <input type="text" id="woman" value="{{ old('woman',$profile->woman)}}" class="form-control"
                                              placeholder="মহিলা" name="woman">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="total" class="  col-form-label"><b>{{__('মোট সদস্য')}}:</b></label>
                                          <input type="text" id="totalMember" value="{{ old('totalMember',$profile->totalMember)}}" class="form-control"
                                              placeholder="মোট সদস্য" name="totalMember" readonly>
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="voter" class="  col-form-label"><b>{{__('ভোটার সংখ্যা')}}:</b></label>
                                          <input type="text" id="voterNumber" value="{{ old('voterNumber',$profile->voterNumber)}}" class="form-control"
                                              placeholder="ভোটার সংখ্যা" name="voterNumber">
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="allowance" class="  col-form-label"><b>{{__('ভাতা')}}:</b></label>
                                            <label for="allowance">প্রতিবন্ধী ভাতা</label>
                                            <input type="radio"  class="form-check-input" name="allowance" value="1" {{ old('allowance',$profile->allowance)=="1" ? "checked":"" }}>
                                            <label for="allowance">বয়স্ক ভাতা</label>
                                            <input type="radio"  class="form-check-input" name="allowance" value="2" {{ old('allowance',$profile->allowance)=="2" ? "checked":"" }}>
                                            <label for="allowance">বিধবা ভাতা</label>
                                            <input type="radio"  class="form-check-input" name="allowance" value="3" {{ old('allowance',$profile->allowance)=="3" ? "checked":"" }}>
                                            <label for="allowance">মুক্তি যোদ্ধা</label>
                                            <input type="radio"  class="form-check-input" name="allowance" value="4" {{ old('allowance',$profile->allowance)=="4" ? "checked":"" }}>
                                            <label for="allowance">অন্যান্য</label>
                                            <input type="radio"  class="form-check-input" name="allowance" value="5" {{ old('allowance',$profile->allowance)=="5" ? "checked":"" }}>
                                            <label for="allowance">কোনটিই না</label>
                                            <input type="radio"  class="form-check-input" name="allowance" value="6" {{ old('allowance',$profile->allowance)=="6" ? "checked":"" }}>
                                      </div>
                                      <div class="col-sm-6 ">
                                          <label for="source" class="  col-form-label"><b>{{__('আয়ের প্রধান উৎস')}}:</b></label>
                                            <label for="icomeSource">কৃষি</label>
                                            <input type="radio" class="form-check-input" name="icomeSource" value="1" {{ old('icomeSource',$profile->icomeSource)=="1" ? "checked":"" }}>
                                            <label for="icomeSource">ব্যবসা</label>
                                            <input type="radio" class="form-check-input" name="icomeSource" value="2" {{ old('icomeSource',$profile->icomeSource)=="2" ? "checked":"" }}>
                                            <label for="icomeSource">চাকরি</label>
                                            <input type="radio" class="form-check-input" name="icomeSource" value="3" {{ old('icomeSource',$profile->icomeSource)=="3" ? "checked":"" }}>
                                            <label for="icomeSource">প্রবাসী</label>
                                            <input type="radio" class="form-check-input" name="icomeSource" value="4" {{ old('icomeSource',$profile->icomeSource)=="4" ? "checked":"" }}>
                                            <label for="icomeSource">গ্রহীনি</label>
                                            <input type="radio" class="form-check-input" name="icomeSource" value="5" {{ old('icomeSource',$profile->icomeSource)=="5" ? "checked":"" }}>
                                            <label for="icomeSource">দিন মজুর</label>
                                            <input type="radio" class="form-check-input" name="icomeSource" value="6" {{ old('icomeSource',$profile->icomeSource)=="6" ? "checked":"" }}>
                                            <label for="icomeSource">অন্যান্য</label>
                                            <input type="radio" class="form-check-input" name="icomeSource" value="7" {{ old('icomeSource',$profile->icomeSource)=="7" ? "checked":"" }}>
                                      </div>
                                        <div class="col-10 ">
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
                                        <div><h5>বাড়ির বিবরণ</h5></div>
                                        <div class="col-sm-6 ">
                                            <label for="house_name" class="  col-form-label"><b>{{__('ভবনের নাম')}}:</b></label>
                                            <input type="text" id="house_name" value="{{ old('house_name',$profile->house_name)}}" class="form-control"
                                                placeholder="ভবনের নাম" name="house_name">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="holding_no" class="  col-form-label"><b>{{__('হোল্ডিং নং')}}:</b></label>
                                            <input type="text" id="holding_no" value="{{ old('holding_no',$profile->holding_no)}}" class="form-control"
                                                placeholder="হোল্ডিং নং" name="holding_no">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="source" class="  col-form-label"><b>{{__('বাড়ীর ধারন')}}:</b></label>
                                              <label for="typeOfHouse">এক চালা</label>
                                              <input type="radio"  class="form-check-input" name="typeOfHouse" value="1" {{ old('typeOfHouse',$profile->typeOfHouse)=="1" ? "checked":"" }}>
                                              <label for="typeOfHouse">দুই চালা</label>
                                              <input type="radio"  class="form-check-input" name="typeOfHouse" value="2" {{ old('typeOfHouse',$profile->typeOfHouse)=="2" ? "checked":"" }}>
                                              <label for="typeOfHouse">চার চালা</label>
                                              <input type="radio"  class="form-check-input" name="typeOfHouse" value="3" {{ old('typeOfHouse',$profile->typeOfHouse)=="3" ? "checked":"" }}>
                                              <label for="typeOfHouse">আধা পাকা</label>
                                              <input type="radio"  class="form-check-input" name="typeOfHouse" value="4" {{ old('typeOfHouse',$profile->typeOfHouse)=="4" ? "checked":"" }}>
                                              <label for="typeOfHouse">পাকা</label>
                                              <input type="radio"  class="form-check-input" name="typeOfHouse" value="5" {{ old('typeOfHouse',$profile->typeOfHouse)=="5" ? "checked":"" }}>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="total_room" class="  col-form-label"><b>{{__('রুম কযটা')}}:</b></label>
                                            <input type="text" id="total_room" value="{{ old('total_room',$profile->total_room)}}" class="form-control" placeholder="রুম কযটা" name="total_room">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="percetageOfHouseLand" class="  col-form-label"><b>{{__('বাড়ীর জমি শতাংশ')}}:</b></label>
                                            <input type="text" id="percetageOfHouseLand" value="{{ old('percetageOfHouseLand',$profile->percetageOfHouseLand)}}" class="form-control" 
                                            placeholder="বাড়ীর জমি শতাংশ" name="percetageOfHouseLand">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="percetageOfPaddyLand" class="  col-form-label"><b>{{__('ধানী জমি শতাংশ')}}:</b></label>
                                            <input type="text" id="percetageOfPaddyLand" value="{{ old('percetageOfPaddyLand',$profile->percetageOfPaddyLand)}}" class="form-control" 
                                            placeholder="ধানী জমি শতাংশ" name="percetageOfPaddyLand">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="estimatedValuOfHouse" class="  col-form-label"><b>{{__('গৃহের আনুমানিক মূল্য')}}:</b></label>
                                            <input type="text" id="estimatedValuOfHouse" value="{{ old('estimatedValuOfHouse',$profile->estimatedValuOfHouse)}}" class="form-control" 
                                            placeholder="গৃহের আনুমানিক মূল্য" name="estimatedValuOfHouse">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="tax_levied" class="  col-form-label"><b>{{__('ধার্যকৃত কর')}}:</b></label>
                                            <input type="text" id="tax_levied" value="{{ old('tax_levied',$profile->tax_levied)}}" class="form-control" 
                                            placeholder="0" name="tax_levied">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="tax_collected" class="  col-form-label"><b>{{__('আদায়কৃত কর')}}:</b></label>
                                            <input type="text" id="tax_collected" value="{{ old('tax_collected',$profile->tax_collected)}}" class="form-control" 
                                            placeholder="0" name="tax_collected">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="owing" class="  col-form-label"><b>{{__('বকেয়া')}}:</b></label>
                                            <input type="text" id="owing" value="{{ old('owing',$profile->owing)}}" class="form-control" 
                                            placeholder="0" name="owing">
                                        </div>
                                        <div><h5>ঠিকানা</h5></div>
                                        <div class="col-sm-6 ">
                                            <label for="vill" class="  col-form-label"><b>{{__('গ্রাম/ রাস্তা')}}:</b></label>
                                            <input type="text" id="vill" value="{{ old('vill',$profile->village)}}" class="form-control"
                                                placeholder="গ্রাম/ রাস্তা" name="vill">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="post" class="  col-form-label"><b>{{__('পোস্ট')}}:</b></label>
                                            <input type="text" id="post" value="{{ old('post',$profile->postOffice)}}" class="form-control"
                                                placeholder="পোস্ট" name="post">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="word" class="  col-form-label"><b>{{__('ওয়ার্ড নং')}}:</b></label>
                                              <select class="form-control form-select" name="wordNo">
                                                  <option value="">ওয়ার্ড নং</option>
                                                  @forelse($word as $d)
                                                      <option  value="{{$d->id}}" {{ old('wordNo',$profile->word_no)==$d->id?"selected":""}}> {{ $d->ward_name_bn}}</option>
                                                  @empty
                                                      <option value="">No Data found</option>
                                                  @endforelse
                                              </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="division" class="  col-form-label"><b>{{__('বিভাগ')}}:</b></label>
                                          <select onchange="show_district(this.value)" class="form-control form-select" name="divisionName" id="divisionName">
                                              <option value="">বিভাগ</option>
                                              @forelse($division as $d)
                                                  <option  value="{{$d->id}}" {{ old('divisionName',$profile->division_id)==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                              @empty
                                                  <option value="">No division found</option>
                                              @endforelse
                                          </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="district" class="  col-form-label"><b>{{__('জেলা')}}:</b></label>
                                          <select onchange="show_thana(this.value)" class="form-control form-select" name="districtName" id="districtName">
                                              <option value="">জেলা</option>
                                              @forelse($district as $d)
                                                  <option class="dist dist{{$d->division_id}}" value="{{$d->id}}" {{ old('districtName',$profile->district_id)==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                              @empty
                                                  <option value="">No district found</option>
                                              @endforelse
                                          </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="Thana" class="  col-form-label"><b>{{__('থানা')}}:</b></label>
                                              <select class="form-control form-select" name="thana">
                                                  <option value="">থানা</option>
                                                  @forelse($thana as $d)
                                                      <option class="thana thana{{$d->upazila_id}}" value="{{$d->id}}" {{ old('thana',$profile->thana_id)==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                                  @empty
                                                      <option value="">No Thana found</option>
                                                  @endforelse
                                              </select>
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="image" class="  col-form-label"><b>{{__('ফটো')}}:</b></label>
                                            <input type="file" id="image" class="form-control"  name="image">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="home" class="  col-form-label"><b>{{__('বাডী')}}:</b></label>
                                            <input type="file" id="home" class="form-control"  name="home">
                                        </div>
                                        <div class="col-sm-6 ">
                                            <label for="date" class="  col-form-label"><b>{{__('স্ট্যাটাস')}}:</b></label>
                                            <select class="form-control form-select" value="{{ old('status')}}" name="status" required>
                                              <option value="">স্ট্যাটাস</option>
                                                  <option value="0" {{ old('status',$profile->status)=="0"?"selected":""}}>Inactive</option>
                                                  <option value="1" {{ old('status',$profile->status)=="1"?"selected":""}}>Active</option>
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
</div>
@endsection