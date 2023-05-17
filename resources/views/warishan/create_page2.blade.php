@extends('layout.app')

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
                                    <h5 style="padding-top: 5px;">ওয়ারিশ আবেদনের অন্যান্য তথ্য</h5>
                                </div>
                            </div>
                        </div>
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route('warishansecondpart_update',Crypt::encrypt($warisan->id))}}">
                            @csrf
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="warishan_person_name"><b>ওয়ারিশান ব্যাক্তির নাম</b></label>
                                    <input class="form-control @error('warishan_person_name') is-invalid @enderror"
                                    name="warishan_person_name" id="warishan_person_name" value="{{ old('warishan_person_name') }}"  type="text" placeholder="ওয়ারিশান ব্যাক্তির নাম">
                                    @if($errors->has('warishan_person_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('warishan_person_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="warisan_father_name"><b>পিতার নাম</b></label>
                                    <input class="form-control @error('warisan_father_name') is-invalid @enderror"
                                    name="warisan_father_name" id="warisan_father_name" value="{{ old('warisan_father_name') }}"  type="text" placeholder="পিতা/স্বামীর নাম">
                                    @if($errors->has('warisan_father_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('warisan_father_name') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="warishan_mother_name"><b>মাতার নাম</b></label>
                                    <input class="form-control"
                                    name="warishan_mother_name" id="warishan_mother_name" value="{{ old('warishan_mother_name') }}"  type="text" placeholder="মাতার নাম">
                                    @if($errors->has('warishan_mother_name'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('warishan_mother_name') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="warisan_husband_wife"><b>স্বামী/স্ত্রীর নাম</b></label>
                                    <input class="form-control @error('warisan_husband_wife') is-invalid @enderror"
                                    name="warisan_husband_wife" id="warisan_husband_wife" value="{{ old('warisan_husband_wife') }}"  type="text" placeholder="পিতা/স্বামীর নাম">
                                    @if($errors->has('warisan_husband_wife'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('warisan_husband_wife') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="date_death_warishan"><b>ওয়ারিশাান ব্যাক্তির মৃত্যু তারিখ</b></label>
                                    <input class="form-control datepicker" name="date_death_warishan" value="" id="date_death_warishan" type="text" placeholder="যদি মারা যায়">
                                </div>
                                <div class="col-6">
                                    <label  class="form-label" for="death_certificate_no"><b>মৃত্যু সনদ নম্বর</b></label>
                                    <input class="form-control datepicker" name="death_certificate_no" value="" id="death_certificate_no" type="text" placeholder="মৃত্যু সনদ নম্বর">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-6">
                                    <label  class="form-label" for="total_warishan_members"><b>উক্তব্যাক্তির মোট ওয়ারিশ সদস্য</b></label>
                                    <input class="form-control @error('total_warishan_members') is-invalid @enderror" onkeyup="repeatRows()"
                                    name="total_warishan_members" id="total_warishan" value="{{ old('total_warishan_members') }}"  type="number" placeholder="মোট ওয়ারিশ সদস্য সংখ্যা">
                                    @if($errors->has('total_warishan_members'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('total_warishan_members') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-3">
                                <h4 class="" style="color: rgb(13, 134, 29); padding-top: 5px;">ওয়ারিশ আইন অনুযায়ী ওয়ারিশান সদস্যদের বিবরণ সমূহঃ- </h4>
                            </div>
                            <div class="col-12 ">
                                <table class="table table-hover mt-4 table-bordered" id="account">
                                    <thead>
                                        <tr>
                                            <th>সদস্য নং</th>
                                            <th>ওয়ারিশানদের নাম</th>
                                            <th>সম্পর্ক</th>
                                            <th>জন্ম তারিখ</th>
                                            <th>জন্মনিবন্ধন / ভোটার আইডি</th>
                                            <th>মন্তব্য</th>
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
                                         <td style='text-align:left;'>
                                            <select class='cls_debit form-control' name="ccomments[]" style='border:none;'>
                                                <option value="">মন্তব্য</option>
                                                <option value="1">জীবিত</option>
                                                <option value="2">মৃত</option>
                                            </select>
                                        </td>
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row m-3">
                                <h4 class="text-center" style="color: rgb(13, 134, 29); padding-top: 5px;">আবেদনকৃত ওয়ারিশ ব্যক্তির স্থায়ী ঠিকানা সমূহঃ </h4>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="house_holding_number">বাড়ির হোল্ডিং নাম্বার</label>
                                    <input class="form-control @error('house_holding_number') is-invalid @enderror"
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
                                <h5 class="" style="color: rgb(13, 134, 29); padding-top: 5px;">অতিরিক্ত সংযোজনঃ- </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">আবেদনকারীর জাতীয় পরিচয়পত্র কপি :-</label>
                                    <input class="form-control"
                                    name="nid_image" id="nid_image" value="{{ old('nid_image') }}"  type="file" placeholder="">
                                </div>
                                <div class="col-6 float-right">
                                    <label  class="form-label" for="image_death_certificate">ওয়ারিশান ব্যাক্তির মৃত্যু নিবন্ধন সনদের কপি :-</label>
                                    <input class="form-control" type="file" name="image_death_certificate" id="image_death_certificate" value="{{ old('image_death_certificate') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row m-0 p-0">
                                <div class="image-overlay">
                                    <label  class="form-label" for="image">আবেদনকারীর সদ্য তোলা রঙিন ছবি</label>
                                    <input type="file" name="image" value="" data-default-file="{{ asset('uploads/holding/default.jpg') }}" class="form-control dropify">
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                  <div class="col-sm-9">
                                    {{--  <a class="p-2" style="background-color: rgb(214, 153, 153); color:black;" href="{{route(currentUser().'.allapplication.edit',$all->id)}}">  --}}
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
    function repeatRows() {
    //const Total_warishan = document.getElementById('total_warishan');
    const tableElement = document.getElementById('table');

    // Clear existing rows
    while (tableElement.rows.length > 1) {
        tableElement.deleteRow(1);
    }

    // Repeat rows based on input value
    const repeatCount = document.getElementById("total_warishan").value;
    for (let is = 0; is < (repeatCount-1); is++) {
        const clonedRow = tableElement.rows[0].cloneNode(true);
        tableElement.appendChild(clonedRow);
        const serial=document.getElementsByClassName("smember");
        serial[is].innerHTML = is + 1;
    }
    }
</script>
@endpush
