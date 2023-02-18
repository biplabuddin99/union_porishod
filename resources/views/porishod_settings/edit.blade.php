@extends('layout.app')

{{-- @section('pageTitle',trans('Update porishod')) --}}
@section('pageSubTitle',trans('Update'))

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-primary"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: white; padding-top: 5px;">পরিষদ সেটিং আপডেট করুন</h4>
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
                            <form class="form" method="post" action="{{route(currentUser().'.porishodsettiong.update',encryptor('encrypt',$porishod->id))}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$porishod->id)}}">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="divisionName">Division Name</label>
                                            <input type="text" id="divisionName" class="form-control" value="{{ old('divisionName',$porishod->division_name_en)}}" name="divisionName">
                                            @if($errors->has('divisionName'))
                                                <span class="text-danger"> {{ $errors->first('divisionName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="divisionBn">Division Bangla</label>
                                            <input type="text" id="divisionBn" class="form-control" value="{{ old('divisionBn',$porishod->division_name_bn)}}" name="divisionBn">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="districtName">District Name</label>
                                            <input type="text" id="districtName" class="form-control" value="{{ old('districtName',$porishod->district_name_en)}}" name="districtName">
                                            @if($errors->has('districtName'))
                                                <span class="text-danger"> {{ $errors->first('districtName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="districtBn">District Bangla</label>
                                            <input type="text" id="districtBn" class="form-control" value="{{ old('districtBn',$porishod->district_name_bn)}}" name="districtBn">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="postofficeName">Post Office Name</label>
                                            <input type="text" id="postofficeName" class="form-control" value="{{ old('postofficeName',$porishod->postoffice_name_en)}}" name="postofficeName">
                                            @if($errors->has('postofficeName'))
                                                <span class="text-danger"> {{ $errors->first('postofficeName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="postofficeBn">Post Office Bangla</label>
                                            <input type="text" id="postofficeBn" class="form-control" value="{{ old('postofficeBn',$porishod->postoffice_name_bn)}}" name="postofficeBn">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>

                                    </div>
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
