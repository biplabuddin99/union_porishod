@extends('layout.app')

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
                                    <h5 style="padding-top: 5px;">পরিবার সদস্যদের প্রত্যয়ন পত্র অন্যান্য তথ্য</h5>
                                </div>
                            </div>
                        </div>
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.attesteation.store')}}">
                          <input type="hidden" name="all_aplication" value="{{$all->id}}">
                            @csrf
                            <div class="row m-2">
                              <div class="col-6">
                                  <label  class="form-label" for="familyhead_name">পরিবারের প্রধান ব্যাক্তির নাম:-</label>
                                  <input class="form-control @error('familyhead_name') is-invalid @enderror"
                                  name="familyhead_name" id="familyhead_name" value="{{ old('familyhead_name') }}"  type="text" placeholder="পরিবারের প্রধান ব্যাক্তির নাম">
                                  @if($errors->has('familyhead_name'))
                                  <small class="d-block text-danger">
                                      {{ $errors->first('familyhead_name') }}
                                  </small>
                                  @endif
                              </div>
                              <div class="col-6">
                                  <label  class="form-label" for="father_husband">পিতা/স্বামীর নাম:-</label>
                                  <input class="form-control @error('father_husband') is-invalid @enderror"
                                  name="father_husband" id="father_husband" value="{{ old('father_husband') }}"  type="text" placeholder="পিতা/স্বামীর নাম">
                                  @if($errors->has('father_husband'))
                                  <small class="d-block text-danger">
                                      {{ $errors->first('father_husband') }}
                                  </small>
                                  @endif
                              </div>
                          </div>
                          <div class="row m-2">
                              <div class="col-6">
                                  <label  class="form-label" for="attesteation_mother_name">মাতার নাম:-</label>
                                  <input class="form-control"
                                  name="attesteation_mother_name" id="attesteation_mother_name" value="{{ old('attesteation_mother_name') }}"  type="text" placeholder="মাতার নাম">
                                  {{-- @if($errors->has('attesteation_mother_name'))
                                  <small class="d-block text-danger">
                                      {{ $errors->first('attesteation_mother_name') }}
                                  </small>
                                  @endif --}}
                              </div>
                              
                            <div class="col-6">
                                <label  class="form-label" for="total_family_members">পরিবারের মোট সদস্য সংখ্যা:-</label>
                                <input onblur="addNumbers()" class="form-control @error('total_family_members') is-invalid @enderror"
                                name="total_family_members" id="total_family_members" value="{{ old('total_family_members') }}"  type="number" placeholder="পরিবারের মোট সদস্য সংখ্যা">
                                @if($errors->has('total_family_members'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('total_family_members') }}
                                </small>
                                @endif
                            </div>
                        </div>
                          <div class="row m-3">
                              <h5 class="theme-text-color" style="padding-top: 5px;">বাংলাদেশের আইন অনুযায়ী জন্মসূত্রে উপরোক্ত ব্যাক্তির পরিবারের সদস্যদের বিবরণ সমূহঃ- </h5>
                          </div>
                          <div class="col-12 ">
                              <table class="table table-hover mt-4 table-bordered" id="account">
                                  <thead>
                                      <tr>
                                          <th>সদস্য নং</th>
                                          <th>পরিবারের সদস্যদের নাম</th>
                                          <th>সম্পর্ক</th>
                                          <th>জন্ম তারিখ</th>
                                          <th>ভোটার আইডি</th>
                                      </tr>
                                  </thead>
                                  <tbody id="table">
                                    <tr>
                                        <td class="smember" style='text-align:center;'>1</td>
                                        <td style='text-align:left;'>
                                              <input type='text' name='cname[]' class='form-control' value='' style='border:none;' maxlength='100' placeholder="নাম"/>
                                        </td>
                                        <td style='text-align:left;'>
                                            <select class='cls_debit form-control' name="crelation[]" style='border:none;'>
                                                <option value="">সম্পর্ক</option>
                                                <option value="1">স্ত্রী</option>
                                                <option value="2">ছেলে</option>
                                                <option value="3">মেয়ে</option>
                                                <option value="4">অন্যান্য</option>
                                            </select>
                                        </td>
                                        <td style='text-align:left;'>
                                          <input class="form-control datepicker" name="cbirth_date[]" style='border:none;' value="{{ old('cbirth_date') }}" id="cbirth_date" type="text" placeholder="জন্ম তারিখ">
                                       </td>
                                        <td style='text-align:left;'>
                                          <input class="form-control" name="cnid[]" id="cnid" style='border:none;' value="{{ old('cnid') }}"  type="text" placeholder="ভোটার আইডি">
                                       </td>
                                    </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="row m-3">
                              <h4 class="text-center theme-text-color" style="padding-top: 5px;">আবেদনকৃত ওয়ারিশানের স্থায়ী ঠিকানা </h4>
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
                                  <select name="ward_no" class="form-select search_district" id="ward_no">
                                    <option value="" selected="selected">ওয়ার্ড নং</option>
                                    @forelse ($ward as $w)
                                    <option value="{{ $w->id }}">{{ $w->ward_name_bn }}</option>
                                    @empty
                                    <p>No Ward found</p>
                                    @endforelse
                                </select>
                                  @if($errors->has('ward_no'))
                                  <small class="d-block text-danger">
                                      {{ $errors->first('ward_no') }}
                                  </small>
                                  @endif
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
                                  <label  class="form-label" for="nid_image">ভোটার আইডির কপি :-</label>
                                  <input class="form-control"
                                  name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                              </div>
                              <div class="col-6">
                                  <label  class="form-label" for="holding_image">বাড়ি/প্রতিষ্ঠানের হোল্ডিং করের কপি:-</label>
                                  <input class="form-control" type="file" name="holding_image" id="holding_image" value="{{ old('holding_image') }}" placeholder="">
                              </div>
                          </div>
                          <div class="row border border-2 m-2 p-3">
                              <div class="col-6">
                                  <label  class="form-label" for="image">ছবি (যদি থাকে তার কপি) :-</label>
                                  <input class="form-control"
                                  name="image" id="image" value="{{ old('image') }}"  type="file" placeholder="">
                              </div>
                              <div class="col-6">
                                  <label  class="form-label" for="image_death_certificate">ওয়ারিশান ব্যাক্তির মৃত্যু নিবন্ধন সনদের কপি :-</label>
                                  <input class="form-control" type="file" name="image_death_certificate" id="image_death_certificate" value="{{ old('image_death_certificate') }}" placeholder="">
                              </div>
                          </div>
                          <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-6">
                                  <a class="p-2" style="background-color: rgb(214, 153, 153); color:black;" href="{{route(currentUser().'.allapplication.edit',$all->id)}}">
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
    function addNumbers() {
      var total_warishan = document.getElementById("total_family_members").value?parseFloat(document.getElementById("total_family_members").value):0;
     
      repeatRows(total_warishan)
    }

    function repeatRows(e) {
        $('#table').html("");

      // Repeat rows based on input value
      const repeatCount = e;
      for (let is = 1; is <= repeatCount; is++) {
        let clonedRow = "<tr><td class='smember' style='text-align:center;'>"+is+"</td>\
                            <td style='text-align:left;'>\
                                <input type='text' name='cname[]' class='form-control' value='' style='border:none;' maxlength='100' placeholder='নাম'/>\
                            </td>\
                            <td style='text-align:left;'>\
                                <select class='cls_debit form-control' name='crelation[]' style='border:none;'>\
                                    <option value=''>সম্পর্ক</option>\
                                    <option value='1'>স্ত্রী</option>\
                                    <option value='2'>ছেলে</option>\
                                    <option value='3'>মেয়ে</option>\
                                    <option value='4'>অন্যান্য</option>\
                                </select>\
                            </td>\
                            <td style='text-align:left;'>\
                                <input class='form-control datepicker' name='cbirth_date[]' style='border:none;' value='{{ old('cbirth_date') }}' type='text' placeholder='জন্ম তারিখ'>\
                            </td>\
                            <td style='text-align:left;'>\
                                <input class='form-control' name='cnid[]' style='border:none;' value='{{ old('cnid') }}'  type='text' placeholder='ভোটার আইডি'>\
                            </td>\
                        </tr>";
        $('#table').append(clonedRow);
      }
      $( ".datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0",
        dateFormat: 'dd-mm-yy'
        });
    }
</script>
@endpush