@extends('layout.app')

@section('pageTitle',trans('Create porishod Settings'))
@section('pageSubTitle',trans('Create'))

@section('content')
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="{{route(currentUser().'.division.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="divisionName">Division Name</label>
                                            <input type="text" id="divisionName" class="form-control" value="{{ old('divisionName')}}" name="divisionName">
                                            @if($errors->has('divisionName'))
                                                <span class="text-danger"> {{ $errors->first('divisionName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="divisionBn">Division Bangla</label>
                                            <input type="text" id="divisionBn" class="form-control" value="{{ old('divisionBn')}}" name="divisionBn">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="districtName">District Name</label>
                                            <input type="text" id="districtName" class="form-control" value="{{ old('districtName')}}" name="districtName">
                                            @if($errors->has('districtName'))
                                                <span class="text-danger"> {{ $errors->first('districtName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="districtBn">District Bangla</label>
                                            <input type="text" id="districtBn" class="form-control" value="{{ old('districtBn')}}" name="districtBn">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="postOffice">Post Office Name</label>
                                            <input type="text" id="postOffice" class="form-control" value="{{ old('postOffice')}}" name="postOffice">
                                            @if($errors->has('postOffice'))
                                                <span class="text-danger"> {{ $errors->first('postOffice') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="postofficeBn">Post Office Bangla</label>
                                            <input type="text" id="postofficeBn" class="form-control" value="{{ old('postofficeBn')}}" name="postofficeBn">
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
@endsection
