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
                            <form class="form" method="post" action="{{route(currentUser().'.porishodsettiong.update',encryptor('encrypt',$porishod->id))}}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$porishod->id)}}">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="union_name">Union Name</label>
                                            <input type="text" id="union_name" class="form-control" value="{{ old('union_name',$porishod->union_name)}}" name="union_name">
                                            @if($errors->has('union_name'))
                                                <span class="text-danger"> {{ $errors->first('union_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="upazila_name">Upazila Name</label>
                                            <input type="text" id="upazila_name" class="form-control" value="{{ old('upazila_name',$porishod->upazila_name)}}" name="upazila_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="district_name">District Name</label>
                                            <input type="text" id="district_name" class="form-control" value="{{ old('district_name',$porishod->district_name)}}" name="district_name">
                                            @if($errors->has('district_name'))
                                                <span class="text-danger"> {{ $errors->first('district_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label  class="form-label" for="logo">logo</label>
                                            <input type="file" name="logo" value="" data-default-file="{{ asset('uploads/logo_folder') }}/{{ $porishod->logo }}" class="form-control dropify">
                                            @if($errors->has('logo'))
                                                <span class="text-danger"> {{ $errors->first('logo') }}</span>
                                            @endif
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
