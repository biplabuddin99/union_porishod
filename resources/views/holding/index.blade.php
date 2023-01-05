@extends('layout.app')
@section('pageTitle',trans('হোল্ডিং লিস্ট'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>
                <a class="float-end" href="{{route(currentUser().'.holding.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
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
                                <th>বাড়ির প্রধানের নাম</th>
                                <th>মোবাইল নম্বর</th>
                                <th>সর্বমোট ট্যাক্স</th>
                                <th width="13%"> এক্সসান  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($hold as $h)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$h->head_household}}</td>
                                <td>{{$h->phone}}</td>
                                <td>{{$h->total_tax}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.holding.show',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{route(currentUser().'.holding.edit',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$h->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$h->id}}" action="{{route(currentUser().'.holding.destroy',encryptor('encrypt',$h->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No holding Found</th>
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
