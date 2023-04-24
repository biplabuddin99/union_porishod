@extends('layout.app')
{{-- @section('pageTitle',trans('প্রতিবন্ধী তালিকা')) --}}

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-primary"
                style="margin-top: 20px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: white; padding-top: 5px;">প্রতিবন্ধী তালিকা</h4>
            </div>
        </div>
    </div>
</section>
<div class="input-group m-3">
    <input type="search" id="search-data" class="form-control"
        placeholder="ন্যাশনাল আইডি নং অথবা জন্ম নিবন্ধন নং অথবা পাসপোর্ট নং অথবা পিন নং দিন ইংরেজিতে">
    <span class="input-group-btn">
        <button class="btn btn-primary" type="button" id="search-btn">
            {{-- <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> --}}
            <span class="ion-ios-search" aria-hidden="true"></span> Search
        </button>
    </span>
</div>
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                {{-- <div>
                <a class="float-end" href="{{route(currentUser().'.disablity.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                </div> --}}
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
                            @forelse($disability as $c)
                            <tr>
                                <td scope="row">{{ ++$loop->index }}</td>
                                <td>{{$c->name_bn}}</td>
                                <td><img width="70px" height="50px" src="{{asset('uploads/disablity')}}/{{ $c->image}}" alt=""></td>
                                <td>{{$c->father_name_bn}}</td>
                                <td>{{$c->national_id}}</td>
                                <td>{{$c->mobile}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.disablity.show',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{route(currentUser().'.disablity.edit',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <a href="javascript:void()" onclick="$('#form{{$c->id}}').submit()">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                    <form id="form{{$c->id}}" action="{{route(currentUser().'.disablity.destroy',encryptor('encrypt',$c->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No disablity Found</th>
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
