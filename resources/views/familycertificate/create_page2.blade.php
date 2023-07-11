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
                                    <h5 style="padding-top: 5px;">পারিবারিক সনদ আবেদনের অন্যান্য তথ্য</h5>
                                </div>
                            </div>
                        </div>
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route('familysecondpart_update',Crypt::encrypt($family->id))}}">
                            @csrf
                            <div class="row m-2">
                                <div class="col-4">
                                    <label  class="form-label" for="name_head_family"><b>পরিবারের প্রধান ব্যাক্তির নাম</b></label>
                                    <input class="form-control @error('name_head_family') is-invalid @enderror"
                                    name="name_head_family" id="name_head_family" value="{{ old('name_head_family') }}"  type="text" placeholder="পরিবারের প্রধান ব্যাক্তির নাম">
                                    @if($errors->has('name_head_family'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('name_head_family') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="comments_permanent_union"><b>উক্ত ইউনিয়নের</b></label>
                                    <input class="form-control @error('comments_permanent_union') is-invalid @enderror"
                                    name="comments_permanent_union" id="comments_permanent_union" value="{{ old('comments_permanent_union') }}"  type="text" placeholder="স্থায়ী বাসিন্দা">
                                    @if($errors->has('comments_permanent_union'))
                                    <small class="d-block text-danger">
                                        {{ $errors->first('comments_permanent_union') }}
                                    </small>
                                    @endif
                                </div>
                                <div class="col-4">
                                    <label  class="form-label" for="relationship_applicant"><b>আবেদনকারীর সাথে সম্পর্ক</b></label>
                                    <select name="relationship_applicant" class="form-select @error('relationship_applicant') is-invalid @enderror" required>
                                        <option value="">নির্বাচন করুন</option>
                                        <option value="1">পিতা</option>
                                        <option value="2">মাতা</option>
                                        <option value="3">স্ত্রী</option>
                                        <option value="4">ছেলে</option>
                                        <option value="5">মেয়ে</option>
                                        <option value="6">অন্যান্য</option>
                                        {{--  <option value="4">বোন</option>  --}}
                                    </select>
                                    @if($errors->has('relationship_applicant'))
                                    <small class="d-block text-danger text-center">
                                        {{ $errors->first('relationship_applicant') }}
                                    </small>
                                    @endif
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male"><b>পুরুষ সদস্য সংখ্যা</b></label>
                                    <input type="number" class="form-control" name="num_male" id="num_male" onkeyup="addNumbers()" placeholder="সদস্য সংখ্যা (পুরুষ) দিন">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>মহিলা সদস্য সংখ্যা</b></label>
                                    <input type="number" class="form-control" name="num_female" id="num_female" onkeyup="addNumbers()" placeholder="সদস্য সংখ্যা (মহিলা) দিন">
                                </div>
                                <div class="col-4">
                                    <label for="num_female"><b>মোট সদস্য সংখ্যা </b></label>
                                    <input readonly type="number" class="form-control" id="num_total" placeholder="মোট সদস্য পুরুষ + মহিলা">
                                </div>
                            </div>
                            <div class="row m-2">
                                <div class="col-4">
                                    <label for="num_male_vot"><b>পুরুষ ভোটার সংখ্যা</b></label>
                                    <input type="number" class="form-control" name="num_male_vot" id="num_male_vot" onkeyup="num_fmembervot()" placeholder="ভোটার সংখ্যা (পুরুষ) দিন">
                                </div>
                                <div class="col-4">
                                    <label for="num_female_vot"><b>মহিলা ভোটার সংখ্যা</b></label>
                                    <input type="number" class="form-control" name="num_female_vot" id="num_female_vot" onkeyup="num_fmembervot()" placeholder="ভোটার সংখ্যা (মহিলা) দিন">
                                </div>
                                <div class="col-4">
                                    <label ><b>মোট ভোটার  সংখ্যা</b> </label>
                                    <input readonly type="number" class="form-control" id="num_totalv" placeholder="মোট ভোটার পুরুষ + মহিলা">
                                </div>
                            </div>
                            <div class="row m-3">
                                <h5>পারিবারিক আইন অনুযায়ী পরিবারের সদস্যদের বিবরণ সমূহঃ- </h5>
                            </div>
                            <div class="col-12 ">
                                <table class="table table-hover mt-4 table-bordered" id="account">
                                    <thead>
                                        <tr>
                                            <th>সদস্য নং</th>
                                            <th>সদস্যদের নাম</th>
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
                                <h5 class="text-center mt-2">পরিবারের স্থায়ী ঠিকানা সমূহঃ </h5>
                            </div>
                            <div class="row m-2">
                                <div class="col-6 mb-2">
                                    <label  class="form-label" for="house_holding_number">বাড়ির হোল্ডিং নাম্বার</label>
                                    <input class="form-control @error('house_holding_number') is-invalid @enderror"
                                    name="house_holding_number" id="house_holding_number" value="{{ old('house_holding_number') }}"  type="text" placeholder="বাড়ির হোল্ডিং নাম্বার">
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
                                <h5>অতিরিক্ত সংযোজনঃ- </h5>
                            </div>
                            <div class="row border border-2 m-2 p-3">
                                <div class="col-6">
                                    <label  class="form-label" for="nid_image">আবেদনকারীর জাতীয় পরিচয়পত্র কপি</label>
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
                                    <label  class="form-label" for="image">আবেদনকারীর সদ্য তোলা রঙিন ছবি</label>
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
                                      <a class="p-2 bg-primary text-white" href="{{route(currentUser().'.familyfirstpart',Crypt::encrypt($family->id))}}">
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
         function addNumbers() {
         var num_male = document.getElementById("num_male").value?parseFloat(document.getElementById("num_male").value):0;
         var num_female = document.getElementById("num_female").value?parseFloat(document.getElementById("num_female").value):0;
        // var daughters = document.getElementById("daughters").value?parseFloat(document.getElementById("daughters").value):0;
         var result = num_male + num_female;

         document.getElementById("num_total").value = result;
         repeatRows(result)
       }

      function repeatRows() {
        //const Total_warishan = document.getElementById('num_total');
        const tableElement = document.getElementById('table');

        // Clear existing rows
        while (tableElement.rows.length > 1) {
          tableElement.deleteRow(1);
        }

        // Repeat rows based on input value
        const repeatCount = document.getElementById("num_total").value;
        for (let is = 0; is < (repeatCount-1); is++) {
          const clonedRow = tableElement.rows[0].cloneNode(true);
          tableElement.appendChild(clonedRow);
          const serial=document.getElementsByClassName("smember");
          serial[is].innerHTML = is + 1;
        }
      }
      function num_fmembervot(){
        let nm=$('#num_male_vot').val()?parseFloat($('#num_male_vot').val()):0;
        let nf=$('#num_female_vot').val()?parseFloat($('#num_female_vot').val()):0;
        $('#num_totalv').val((nm+nf));
     }
</script>
@endpush
