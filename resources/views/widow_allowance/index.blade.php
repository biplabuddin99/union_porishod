@extends('layout.app')
@section('pageTitle',trans('বিধবা ভাতা তালিকা'))

@section('content')

<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div>
                <a class="float-end" href="{{route(currentUser().'.widowallowance.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
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
                                <th>নাম</th>
                                <th>ছবি</th>
                                <th>পিতার নাম</th>
                                <th>ন্যাশনাল আইডি</th>
                                <th>মোবাইল</th>
                                <th width="13%"> কর্মকাণ্ড  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($windowallowance as $c)
                            <tr>
                                <td scope="row">{{ ++$loop->index }}</td>
                                <td>{{$c->name_bn}}</td>
                                <td><img width="70px" height="50px" src="{{asset('uploads/widowallowance')}}/{{ $c->image}}" alt=""></td>
                                <td>{{$c->father_name_bn}}</td>
                                <td>{{$c->national_id}}</td>
                                <td>{{$c->mobile}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.widowallowance.show',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{route(currentUser().'.widowallowance.edit',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$c->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$c->id}}" action="{{route(currentUser().'.widowallowance.destroy',encryptor('encrypt',$c->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No widowallowance Found</th>
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
