@extends('layout.app')
@section('pageTitle',trans('District List'))
@section('pageSubTitle',trans('List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <div>
                    <a class="float-end" href="{{route(currentUser().'.district.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                </div>
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th scope="col">{{__('#SL')}}</th>
                                <th scope="col">{{__('Division')}}</th>
                                <th scope="col">{{__('District')}}</th>
                                <th scope="col">{{__('District bn')}}</th>
                                <th class="white-space-nowrap">{{__('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($districts as $d)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$d->division?->name}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{$d->name_bn}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.district.edit',encryptor('encrypt',$d->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <!--<a href="javascript:void()" onclick="$('#form{{$d->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$d->id}}" action="{{route(currentUser().'.country.destroy',encryptor('encrypt',$d->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>-->
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No Pruduct Found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Bordered table end -->


@endsection