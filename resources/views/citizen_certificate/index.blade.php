@extends('layout.app')
@section('pageTitle',trans('citizen List'))
@section('pageSubTitle',trans('List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>
                <a class="float-end" href="{{route(currentUser().'.citizen.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                </div>
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">

                        <thead>
                            <tr>
                                <th width="3%"> ক্রমিক </th>
                                <th width="70"></th>
                                <th>ব্যাক্তির নাম </th>
                                <th>মাতা </th>
                                <th>পিতা/স্বামী</th>
                                <th>পিতা/স্বামী</th>
                                <th>গ্রাম/ রাস্তা </th>
                                <th>ওয়ার্ডঃ   </th>
                                <th width="13%"> এক্সসান  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($citizen as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td></td>
                                <td>{{$c->person_name}}</td>
                                <td>{{$c->mother}}</td>
                                <td>{{$c->father}}</td>
                                <td>{{$c->husband}}</td>
                                {{-- @if ($c->father)
                                   <td>{{$c->father}}</td>
                                @else
                                    <td>{{$c->husband }}</td>
                                @endif --}}
                                <td>{{$c->village}}</td>
                                <td>{{$c->ward_no?->ward_name_bn}}</td>
                                {{-- <td>@if($p->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td> --}}
                                {{-- or <td>{{ $c->status == 1?"Active":"Inactive" }}</td> --}}
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.citizen.show',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{route(currentUser().'.citizen.edit',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$c->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$c->id}}" action="{{route(currentUser().'.citizen.destroy',encryptor('encrypt',$c->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No citizen Found</th>
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
