@extends('layout.app')
{{-- @section('pageTitle',trans('Porishod Settings List')) --}}
@section('pageSubTitle',trans('List'))

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-primary"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: white; padding-top: 5px;">পরিষদ সেটিং তালিকা</h4>
            </div>
        </div>
    </div>
</section>

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">

                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Logo')}}</th>
                                <th scope="col">{{__('Union Name')}}</th>
                                <th scope="col">{{__('Upazila Name')}}</th>
                                <th scope="col">{{__('District Name')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($porishod as $d)
                            <tr class="text-center">
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td><img width="50px" height="50px" src="{{ asset('uploads/logo_folder') }}/{{ $d->logo }}" alt=""></td>
                                <td>{{$d->union_name}}</td>
                                <td>{{$d->upazila_name}}</td>
                                <td>{{$d->district_name}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.porishodsettiong.edit',encryptor('encrypt',$d->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No Data Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
