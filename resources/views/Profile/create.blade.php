@extends('layout.app')

@section('pageTitle',trans('Apply Form'))
@section('pageSubTitle',trans('Form'))

@section('content')
  <section id="multiple-column-form">
      <div class="row match-height">
          <div class="col-12">
              <div class="card">
                  <div class="card-content">
                      <div class="card-body">
                          <form class="form" method="post" enctype="multipart/form-data" action="{{route(currentUser().'.pGalleryCat.store')}}">
                              @csrf
                                  <div class="row mb-3">
                                      <label for="name" class="col-sm-2 offset-1 col-form-label"><b>{{__('Applicant Name')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="applicantName" value="{{ old('applicantName')}}" class="form-control"
                                              placeholder="Applicant Name" name="applicantName">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="name" class="col-sm-2 offset-1 col-form-label"><b>{{__('Father/Husband')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="FatherOrHusband" value="{{ old('FatherOrHusband')}}" class="form-control"
                                              placeholder="Father/Husband" name="FatherOrHusband">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="name" class="col-sm-2 offset-1 col-form-label"><b>{{__('Mother')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="Mother" value="{{ old('Mother')}}" class="form-control"
                                              placeholder="Mother" name="Mother">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="contat" class="col-sm-2 offset-1 col-form-label"><b>{{__('Mobile')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="Contact" value="{{ old('Contact')}}" class="form-control"
                                              placeholder="Mobile" name="Contact">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="id" class="col-sm-2 offset-1 col-form-label"><b>{{__('ID NO')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="IdNo" value="{{ old('IdNo')}}" class="form-control"
                                              placeholder="ID NO" name="IdNo">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="Man" class="col-sm-2 offset-1 col-form-label"><b>{{__('Man')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="man" value="{{ old('man')}}" class="form-control"
                                              placeholder="Man" name="man">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="woman" class="col-sm-2 offset-1 col-form-label"><b>{{__('Woman')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="woman" value="{{ old('woman')}}" class="form-control"
                                              placeholder="Woman" name="woman">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="total" class="col-sm-2 offset-1 col-form-label"><b>{{__('Total Member')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="totalMember" value="{{ old('totalMember')}}" class="form-control"
                                              placeholder="Total Member" name="totalMember">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="voter" class="col-sm-2 offset-1 col-form-label"><b>{{__('Voter Number')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="voterNumber" value="{{ old('voterNumber')}}" class="form-control"
                                              placeholder="Voter Number" name="voterNumber">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="allowance" class="col-sm-2 offset-1 col-form-label"><b>{{__('Allowance')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                            <label for="allowance">Disability Allowance</label>
                                            <input type="radio" value="1" class="form-check-input" name="allowance">
                                            <label for="allowance">Old Age Allowance</label>
                                            <input type="radio" value="2" class="form-check-input" name="allowance">
                                            <label for="allowance">Widow's Allowance</label>
                                            <input type="radio" value="3" class="form-check-input" name="allowance">
                                            <label for="allowance">Freedom Fighter</label>
                                            <input type="radio" value="4" class="form-check-input" name="allowance">
                                            <label for="allowance">Other's</label>
                                            <input type="radio" value="5" class="form-check-input" name="allowance">
                                            <label for="allowance">None</label>
                                            <input type="radio" value="6" class="form-check-input" name="allowance">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="source" class="col-sm-2 offset-1 col-form-label"><b>{{__('Main source of income')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                            <label for="icomeSource">Agriculture</label>
                                            <input type="radio" value="1" class="form-check-input" name="icomeSource">
                                            <label for="icomeSource">Business</label>
                                            <input type="radio" value="2" class="form-check-input" name="icomeSource">
                                            <label for="icomeSource">Job</label>
                                            <input type="radio" value="3" class="form-check-input" name="icomeSource">
                                            <label for="icomeSource">Expatriate</label>
                                            <input type="radio" value="4" class="form-check-input" name="icomeSource">
                                            <label for="icomeSource">Housewife</label>
                                            <input type="radio" value="5" class="form-check-input" name="icomeSource">
                                            <label for="icomeSource">Day laborer</label>
                                            <input type="radio" value="6" class="form-check-input" name="icomeSource">
                                            <label for="icomeSource">None</label>
                                            <input type="radio" value="7" class="form-check-input" name="icomeSource">
                                      </div>
                                  </div>
                                  <div class="col-10 offset-1">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#SL</th>
                                                <th>Name</th>
                                                <th>Relationship</th>
                                                <th>NID/BRC</th>
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
                                  <div><h5>Home Details</h5></div>

                                  <div class="row mb-3">
                                      <label for="house_name" class="col-sm-2 offset-1 col-form-label"><b>{{__('House Name')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="house_name" value="{{ old('house_name')}}" class="form-control"
                                              placeholder="House Name" name="house_name">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="holding_no" class="col-sm-2 offset-1 col-form-label"><b>{{__('Holding Number')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="holding_no" value="{{ old('holding_no')}}" class="form-control"
                                              placeholder="Holding Number" name="holding_no">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="typeOfHouse" class="col-sm-2 offset-1 col-form-label"><b>{{__('Type of House')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="typeOfHouse" value="{{ old('typeOfHouse')}}" class="form-control"
                                              placeholder="Type of House" name="typeOfHouse">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="source" class="col-sm-2 offset-1 col-form-label"><b>{{__('Main source of income')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                            <label for="typeOfHouse">Ek Chala</label>
                                            <input type="radio" value="1" class="form-check-input" name="typeOfHouse">
                                            <label for="typeOfHouse">Dui Chala</label>
                                            <input type="radio" value="2" class="form-check-input" name="typeOfHouse">
                                            <label for="typeOfHouse">Char Chala</label>
                                            <input type="radio" value="3" class="form-check-input" name="typeOfHouse">
                                            <label for="typeOfHouse">Addha Paka</label>
                                            <input type="radio" value="4" class="form-check-input" name="typeOfHouse">
                                            <label for="typeOfHouse">Paka</label>
                                            <input type="radio" value="5" class="form-check-input" name="typeOfHouse">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="total_room" class="col-sm-2 offset-1 col-form-label"><b>{{__('Total Room')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="total_room" value="{{ old('total_room')}}" class="form-control" placeholder="Total Room" name="total_room">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="percetageOfHouseLand" class="col-sm-2 offset-1 col-form-label"><b>{{__('Percentage Of House Land')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="percetageOfHouseLand" value="{{ old('percetageOfHouseLand')}}" class="form-control" 
                                          placeholder="Percentage Of House Land" name="percetageOfHouseLand">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="percetageOfPaddyLand" class="col-sm-2 offset-1 col-form-label"><b>{{__('Percentage Of Paddy Land')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="percetageOfPaddyLand" value="{{ old('percetageOfPaddyLand')}}" class="form-control" 
                                          placeholder="Percentage Of Paddy Land" name="percetageOfPaddyLand">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="estimatedValuOfHouse" class="col-sm-2 offset-1 col-form-label"><b>{{__('Estimated Value of House')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="estimatedValuOfHouse" value="{{ old('estimatedValuOfHouse')}}" class="form-control" 
                                          placeholder="Estimated Value of House" name="estimatedValuOfHouse">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="tax_levied" class="col-sm-2 offset-1 col-form-label"><b>{{__('Tax Levied')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="tax_levied" value="{{ old('tax_levied')}}" class="form-control" 
                                          placeholder="Tax Levied" name="tax_levied">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="tax_collected" class="col-sm-2 offset-1 col-form-label"><b>{{__('Tax Collected')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="tax_collected" value="{{ old('tax_collected')}}" class="form-control" 
                                          placeholder="Tax Levied" name="tax_collected">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="owing" class="col-sm-2 offset-1 col-form-label"><b>{{__('Owing')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="owing" value="{{ old('owing')}}" class="form-control" 
                                          placeholder="Owing" name="owing">
                                      </div>
                                  </div>

                                  <div><h5>Home Details</h5></div>

                                  <div class="row mb-3">
                                      <label for="vill" class="col-sm-2 offset-1 col-form-label"><b>{{__('Village/Road')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="vill" value="{{ old('vill')}}" class="form-control"
                                              placeholder="Village/Road" name="vill">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="post" class="col-sm-2 offset-1 col-form-label"><b>{{__('P.O')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="post" value="{{ old('post')}}" class="form-control"
                                              placeholder="P.O" name="post">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="word" class="col-sm-2 offset-1 col-form-label"><b>{{__('Word No')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="text" id="wordNo" value="{{ old('wordNo')}}" class="form-control"
                                              placeholder="Word No" name="wordNo">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="division" class="col-sm-2 offset-1 col-form-label"><b>{{__('Division')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                        <select onchange="show_district(this.value)" class="form-control form-select" name="divisionName" id="divisionName">
                                            <option value="">Select Division</option>
                                            @forelse($divisions as $d)
                                                <option class="div div{{$d->country_id}}" value="{{$d->id}}" {{ old('divisionName')==$d->id?"selected":""}}> {{ $d->name}}</option>
                                            @empty
                                                <option value="">No division found</option>
                                            @endforelse
                                        </select>
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="district" class="col-sm-2 offset-1 col-form-label"><b>{{__('District')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                        <select class="form-control form-select" name="districtName" id="districtName">
                                            <option value="">Select District</option>
                                            @forelse($districts as $d)
                                                <option class="dist dist{{$d->division_id}}" value="{{$d->id}}" {{ old('districtName')==$d->id?"selected":""}}> {{ $d->name}}</option>
                                            @empty
                                                <option value="">No district found</option>
                                            @endforelse
                                        </select>
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="Thana" class="col-sm-2 offset-1 col-form-label"><b>{{__('Thana')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                        <select class="form-control form-select" name="thana">
                                            <option value="">Select Thana</option>
                                            @forelse($thana as $d)
                                                <option value="{{$d->id}}" {{ old('thana',$company->thana_id)==$d->id?"selected":""}}> {{ $d->name}}</option>
                                            @empty
                                                <option value="">No Thana found</option>
                                            @endforelse
                                        </select>
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="image" class="col-sm-2 offset-1 col-form-label"><b>{{__('Image')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="file" id="image" class="form-control"  name="image">
                                      </div>
                                  </div>
                                  <div class="row mb-3">
                                      <label for="home" class="col-sm-2 offset-1 col-form-label"><b>{{__('Home')}}:</b></label>
                                      <div class="col-sm-6 offset-1">
                                          <input type="file" id="home" class="form-control"  name="home">
                                      </div>
                                  </div>

                                  <div class="col-8 offset-2 d-flex justify-content-end">
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