@extends('layout.app')
@section('pageTitle',trans('trade List'))
@section('pageSubTitle',trans('List'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>
                <a class="float-end" href="{{route(currentUser().'.trade.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
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
                                <th>ফটো</th>
                                <th>হোল্ডং নং</th>
                                <th>ব্যবসা প্রতিষ্ঠানের নাম </th>
                                <th>প্রোপাইটার </th>
                                <th>প্রতিষ্ঠানের  বিবরন</th>
                                <th>এলাকা / বাজার</th>
                                <th>মোবাইল</th>
                                <th>আদায়কৃত  ফ্রি </th>
                              <!--  <th>ওয়ার্ডঃ   </th>-->
                                <th width="13%"> এক্সসান  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($trade as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td></td>
                                <td></td>
                                <td>{{$c->business_name}}</td>
                                <td>{{$c->proprietor_name}}</td>
                                <td>{{$c->organization_details}}</td>
                                <td></td>
                                <td>{{$c->phone}}</td>
                                <td>{{$c->estimated_price}}</td>
                                {{-- <td>@if($p->status == 1) {{__('Active') }} @else {{__('Inactive') }} @endif</td> --}}
                                {{-- or <td>{{ $c->status == 1?"Active":"Inactive" }}</td> --}}
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.trade.edit',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$c->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$c->id}}" action="{{route(currentUser().'.trade.destroy',encryptor('encrypt',$c->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No trade Found</th>
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