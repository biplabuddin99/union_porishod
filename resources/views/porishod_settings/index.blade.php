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
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Division')}}</th>
                                <th scope="col">{{__('district')}}</th>
                                <th scope="col">{{__('Post Office')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($porishod as $d)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$d->division_name_en}}</td>
                                <td>{{$d->district_name_en}}</td>
                                <td>{{$d->postoffice_name_en}}</td>
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
