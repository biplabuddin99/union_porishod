@extends('layout.app')

@section('pageTitle',trans('ওয়ারিশান ফরম'))
@section('pageSubTitle',trans('ফরম'))

@section('content')
  <section id="multiple-column-form">
      <div class="row match-height">
          <div class="col-12">
              <div class="card">
                  <div class="card-content">
                      <div class="card-body">
                          <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.warishan.store')}}">
                              @csrf
                                  <div class="row mb-3">
                                      <div class="col-sm-6">
                                            <label for="name" class="col-form-label"><b>{{__('ওয়ারিশান ব্যাক্তির নাম')}}:</b></label>
                                            <input type="text" id="warishan_person_name" value="{{ old('warishan_person_name')}}" class="form-control"
                                                placeholder="ওয়ারিশান ব্যাক্তির নাম" name="warishan_person_name">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="name" class="col-form-label"><b>{{__('মৃত্যু তারিখ')}}:</b></label>
                                            <input type="date" id="dath_date" value="{{ old('dath_date')}}" class="form-control"
                                                placeholder="মৃত্যু তারিখ" name="dath_date">
                                        </div>
                                        <div class="col-sm-6">
                                              <label for="name" class="col-form-label"><b>{{__('পিতা/স্বামী')}}:</b></label>
                                              <input type="text" id="fatherOrMother" value="{{ old('fatherOrMother')}}" class="form-control"
                                                  placeholder="পিতা/স্বামী" name="fatherOrMother">
                                        </div>
                                        <div class="col-sm-6">
                                              <label for="name" class="col-form-label"><b>{{__('গ্রাম/ রাস্তা')}}:</b></label>
                                              <input type="text" id="village" value="{{ old('village')}}" class="form-control"
                                                  placeholder="গ্রাম/ রাস্তা" name="village">
                                        </div>
                                        <div class="col-sm-6">
                                              <label for="name" class="col-form-label"><b>{{__('ওয়ার্ড নং')}}:</b></label>
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
                                              <label for="name" class="col-form-label"><b>{{__('বিভাগ')}}:</b></label>
                                              <select onchange="show_district(this.value)" class="form-control form-select" name="divisionName" id="divisionName">
                                                  <option value="">বিভাগ</option>
                                                  @forelse($division as $d)
                                                      <option value="{{$d->id}}" {{ old('divisionName')==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                                  @empty
                                                      <option value="">No division found</option>
                                                  @endforelse
                                              </select>
                                          </div>
                                          <div class="col-sm-6">
                                                <label for="name" class="col-form-label"><b>{{__('জেলা')}}:</b></label>
                                                <select onchange="show_thana(this.value)" class="form-control form-select" name="districtName" id="districtName">
                                                    <option value="">জেলা</option>
                                                    @forelse($district as $d)
                                                        <option class="dist dist{{$d->division_id}}" value="{{$d->id}}" {{ old('districtName')==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                                    @empty
                                                        <option value="">No district found</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                  <label for="name" class="col-form-label"><b>{{__('থানা')}}:</b></label>
                                                  <select class="form-control form-select" name="thana">
                                                      <option value="">থানা</option>
                                                      @forelse($thana as $d)
                                                          <option class="thana thana{{$d->upazila_id}}" value="{{$d->id}}" {{ old('thana')==$d->id?"selected":""}}> {{ $d->name_bn}}</option>
                                                      @empty
                                                          <option value="">No Thana found</option>
                                                      @endforelse
                                                  </select>
                                            </div>
                                            <div class="col-12 ">
                                              <table class="table table-hover">
                                                  <thead>
                                                      <tr>
                                                          <th>ক্রমিক</th>
                                                          <th>নাম</th>
                                                          <th>লিঙ্গ</th>
                                                          <th>সিরিয়াল</th>
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