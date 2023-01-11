@extends('layout.app')

@section('pageTitle',trans('Update'))

@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" action="{{route(currentUser().'.sourcebusiness.update',encryptor('encrypt',$d->id))}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$d->id)}}">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name"> Name</label>
                                            <input type="text" id="name" class="form-control" value="{{ old('name',$d->name)}}" name="name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea type="text" id="description" class="form-control" value="" name="description">{{ old('description',$d->description)}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tax_amount">Tax Amount</label>
                                            <input type="number" id="tax_amount" class="form-control" value="{{ old('tax_amount',$d->tax_amount)}}" name="tax_amount">
                                            @if($errors->has('tax_amount'))
                                                <span class="text-danger"> {{ $errors->first('tax_amount') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="other_charge">Other Charge</label>
                                            <input type="number" id="other_charge" class="form-control" value="{{ old('other_charge',$d->other_charge)}}" name="other_charge">
                                        </div>
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
