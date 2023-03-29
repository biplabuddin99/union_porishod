@extends('layout.app')

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">পরিবার সদস্যদের প্রত্যয়ন পত্র অন্যান্য তথ্য</h4>
            </div>
        </div>
    </div>
</section>
<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
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
                                  <label  class="form-label" for="attesteation_birth_date">জন্ম তারিখ :-</label>
                                  <input class="form-control datepicker" name="attesteation_birth_date" value="" id="attesteation_birth_date" type="text" placeholder="জন্ম তারিখ">
                              </div>
                          </div>
                          <div class="row m-2">
                              <div class="col-6">
                                  <label  class="form-label" for="update_holding_tax">হালনাগাদ হোল্ডিং কর:-</label>
                                  <select name="update_holding_tax" class="form-select @error('update_holding_tax') is-invalid @enderror">
                                      <option value="">নির্বাচন করুন</option>
                                      <option value="1">আছে</option>
                                      <option value="2">নাই</option>
                                  </select>
                                  @if($errors->has('update_holding_tax'))
                                  <small class="d-block text-danger text-center">
                                      {{ $errors->first('update_holding_tax') }}
                                  </small>
                                  @endif
                              </div>
                              <div class="col-6">
                                  <label  class="form-label" for="wife_number">ওয়ারিশান ব্যাক্তির স্ত্রী কয়জন?:-</label>
                                  <input id="wife_count" onkeyup="addNumbers()" class="form-control @error('wife_number') is-invalid @enderror"
                                  name="wife_number" id="wife_number" value="{{ old('wife_number') }}"  type="number" placeholder="স্ত্রী সংখ্যা দিন">
                                  @if($errors->has('wife_number'))
                                  <small class="d-block text-danger">
                                      {{ $errors->first('wife_number') }}
                                  </small>
                                  @endif
                              </div>
                          </div>
                          <div class="row m-2">
                              <div class="col-6">
                                  <label  class="form-label" for="estimated_value_house">ওয়ারিশান ব্যাক্তির সন্তান কয়জন?:-</label>
                                  <div class="row">
                                      <div class="col-6">
                                          <div class="row">
                                              <div class="col-4">
                                                  <input class="form-check-input" type="checkbox" value="1" id="son">
                                                  <label class="form-check-label" for="son">ছেলে</label>
                                              </div>
                                              <div class="col-8">
                                                  <input type="number" id="sons" onkeyup="addNumbers()" class="form-control" name="son" min="0" placeholder="সংখ্যা দিন">
                                              </div>
                                          </div>

                                      </div>
                                      <div class="col-6">
                                          <div class="row">
                                              <div class="col-4">
                                                  <input class="form-check-input" type="checkbox" value="2" id="daughter">
                                                  <label class="form-check-label" for="daughter">মেয়ে</label>
                                              </div>
                                              <div class="col-8">
                                                  <input type="number" id="daughters" onkeyup="addNumbers()" class="form-control" name="daughter" min="0" placeholder="সংখ্যা দিন">
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  {{-- <input class="form-control @error('estimated_value_house') is-invalid @enderror"
                                  name="estimated_value_house" id="estimated_value_house" value="{{ old('estimated_value_house') }}"  type="text" placeholder="বাড়ির আনুমানিক মূল্য"> --}}
                              </div>
                              <div class="col-6">
                                  <label  class="form-label" for="total_warishan_members">উক্তব্যাক্তির মোট ওয়ারিশ সদস্য:-</label>
                                  <input readonly class="form-control @error('total_warishan_members') is-invalid @enderror"
                                  name="total_warishan_members" id="total_warishan" value="{{ old('total_warishan_members') }}"  type="number" placeholder="মোট ওয়ারিশ সদস্য সংখ্যা">
                                  @if($errors->has('total_warishan_members'))
                                  <small class="d-block text-danger">
                                      {{ $errors->first('total_warishan_members') }}
                                  </small>
                                  @endif
                              </div>
                          </div>
                          <div class="row m-2">
                            <div class="col-6">
                                <label  class="form-label" for="applicant_relationship_family">পরিবারের সহিত আবেদনকারীর সম্পর্ক:-</label>
                                <input class="form-control @error('applicant_relationship_family') is-invalid @enderror"
                                name="applicant_relationship_family" id="applicant_relationship_family" value="{{ old('applicant_relationship_family') }}"  type="text" placeholder="পরিবারের সহিত আবেদনকারীর সম্পর্ক">
                                @if($errors->has('applicant_relationship_family'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('applicant_relationship_family') }}
                                </small>
                                @endif
                            </div>
                            <div class="col-6">
                                <label  class="form-label" for="total_family_members">পরিবারের মোট সদস্য সংখ্যা:-</label>
                                <input class="form-control @error('total_family_members') is-invalid @enderror"
                                name="total_family_members" id="total_family_members" value="{{ old('total_family_members') }}"  type="number" placeholder="পরিবারের মোট সদস্য সংখ্যা">
                                @if($errors->has('total_family_members'))
                                <small class="d-block text-danger">
                                    {{ $errors->first('total_family_members') }}
                                </small>
                                @endif
                            </div>
                        </div>
                          <div class="row m-3">
                              <h4 class="" style="color: rgb(13, 134, 29); padding-top: 5px;">বাংলাদেশের আইন অনুযায়ী জন্মসূত্রে উপরোক্ত ব্যাক্তির পরিবারের সদস্যদের বিবরণ সমূহঃ- </h4>
                          </div>
                          <div class="col-12 ">
                              <table class="table table-hover mt-4 table-bordered" id="account">
                                  <thead>
                                      <tr>
                                          <th>সদস্য নং</th>
                                          <th>ওয়ারিশানদের নাম</th>
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
                                          <input class="form-control" name="cbirth_date[]" style='border:none;' value="{{ old('cbirth_date') }}" id="cbirth_date" type="date" placeholder="জন্ম তারিখ">
                                       </td>
                                        <td style='text-align:left;'>
                                          <input class="form-control" name="cnid[]" id="cnid" style='border:none;' value="{{ old('cnid') }}"  type="text" placeholder="ভোটার আইডি">
                                       </td>
                                    </tr>
                                  </tbody>
                              </table>
                          </div>
                          <div class="row m-3">
                              <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকৃত ওয়ারিশানের স্থায়ী ঠিকানা সমূহঃ </h4>
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
                                  <label  class="form-label" for="image_death_certificate">ওয়ারিশান ব্যাক্তির মৃত্যু নিবন্ধন সনদের কপি :-</label>
                                  <input class="form-control" type="file" name="image_death_certificate" id="image_death_certificate" value="{{ old('image_death_certificate') }}" placeholder="">
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
@push('scripts')
<script>
        function addNumbers() {
      var wife_count = document.getElementById("wife_count").value?parseFloat(document.getElementById("wife_count").value):0;
      var sons = document.getElementById("sons").value?parseFloat(document.getElementById("sons").value):0;
      var daughters = document.getElementById("daughters").value?parseFloat(document.getElementById("daughters").value):0;
      var result = wife_count + sons + daughters;

      document.getElementById("total_warishan").value = result;
      repeatRows(result)
    }

    function repeatRows(e) {
      //const Total_warishan = document.getElementById('total_warishan');
      const tableElement = document.getElementById('table');

      // Clear existing rows
      while (tableElement.rows.length > 1) {
        tableElement.deleteRow(1);
      }

      // Repeat rows based on input value
      const repeatCount = e;
      for (let is = 0; is < (repeatCount-1); is++) {
        const clonedRow = tableElement.rows[0].cloneNode(true);
        tableElement.appendChild(clonedRow);
        const serial=document.getElementsByClassName("smember");
        serial[is].innerHTML = is + 1;
        
      }
    }
</script>
@endpush