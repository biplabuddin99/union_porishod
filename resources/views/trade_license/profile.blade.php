@extends('layout.app')
{{-- @section('pageTitle',trans('ট্রেড লাইসেন্স লিস্ট')) --}}

@section('content')

<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">ট্রেড লাইসেন্স প্রোপাইল</h4>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                {{-- <div>
                <a class="float-end" href="{{route(currentUser().'.trade.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
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
                                <th>ফটো</th>
                                {{-- <th>হোল্ডিং নং</th> --}}
                                <th>ব্যবসা প্রতিষ্ঠানের নাম </th>
                                <th>আবেদনকারীর নাম </th>
                                <th>মোবাইল</th>
                                <th width="13%"> এক্সসান  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($trade as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td><img width="70px" height="50px" src="{{asset('uploads/trade_license/image/')}}/{{ $c->image}}" alt=""></td>
                                {{-- <td></td> --}}
                                <td>{{$c->business_name}}</td>
                                <td>{{$c->head_household}}</td>
                                <td>{{$c->phone}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.trade.show',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
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


@endsection
