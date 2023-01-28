@extends('layout.app')

{{-- @section('pageTitle','প্রতিবন্ধী সনদের আবেদন') --}}

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-primary"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: white; padding-top: 5px;">প্রতিবন্ধী সনদের আবেদন</h4>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-9 mb-0 mt-5">
            <div class="col-md-12">
                <div class="row form-group">
                    <label for="app_district_id" class="col-sm-1 control-label">জেলা<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="app_district_id">
                        <div>ollllll</div>
                    </div>
                    <label for="app_union_id" class="col-sm-1 control-label">ওয়ার্ড<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="app_union_id_status">
                        <div>ollllllllll</div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="row form-group">
                    <label for="app_district_id" class="col-sm-1 control-label">জেলা<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="app_district_id">
                        <div>ollllll</div>
                    </div>
                    <label for="app_union_id" class="col-sm-1 control-label">ওয়ার্ড<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="app_union_id_status">
                        <div>ollllllllll</div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="row form-group">
                    <label for="app_district_id" class="col-sm-1 control-label">জেলা<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="app_district_id">
                        <div>ollllll</div>
                    </div>
                    <label for="app_union_id" class="col-sm-1 control-label">ওয়ার্ড<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="app_union_id_status">
                        <div>ollllllllll</div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <div class="row form-group">
                    <label for="app_district_id" class="col-sm-1 control-label">জেলা<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="app_district_id">
                        <div>ollllll</div>
                    </div>
                    <label for="app_union_id" class="col-sm-1 control-label">ওয়ার্ড<span
                            class="text-danger">*</span></label>
                    <div class="col-sm-3 bt-flabels__wrapper" id="app_union_id_status">
                        <div>ollllllllll</div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <label for="cropzee-input">
                <div class="image-overlay mt-3">
                        <input type="file" name="image" value="" data-default-file="{{ asset('uploads/disablity/default.jpg') }}" class="form-control dropify">
                    <div class="overlay">
                        <div class="text">ছবি দিতে ক্লিক করুন</div>
                    </div>
                </div>
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ml-2">
            <div class="row form-group">
                <label for="app_district_id" class="col-sm-1 control-label">জেলা<span
                        class="text-danger">*</span></label>
                <div class="col-sm-3 bt-flabels__wrapper" id="app_district_id">
                    <div class="me-0 pr-0">ollllll</div>
                </div>
                <label for="app_union_id" class="col-sm-1 control-label ml-0">ওয়ার্ড<span
                        class="text-danger">*</span></label>
                <div class="col-sm-3 bt-flabels__wrapper" id="app_union_id_status">
                    <div>ollllllllll</div>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
