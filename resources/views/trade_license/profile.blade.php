@extends('layout.app')

@section('content')

<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-block">
                            <h5 style="padding-top: 5px;">অনুমোদিত ট্রেড লাইসেন্স তালিকা</h5>
                        </div>
                    </div>
                </div>
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive mt-2">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th> ক্রমিক </th>
                                <th>অনুমোদন তাং</th>
                                <th>প্রতিষ্ঠানের প্রধান</th>
                                <th>প্রতিষ্ঠানের নাম</th>
                                <th>ব্যবসার ধরন</th>
                                <th>হোল্ডিং</th>
                                <th>ওয়ার্ড</th>
                                <th>মোবাইল</th>
                                <th>নবায়ন সন</th>
                                <th>নবায়ন ফি</th>
                                <th>উৎস কর</th>
                                <th>ছবি</th>
                                <th>ভিউ</th>
                                <th>প্রিন্ট</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($trade as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{\Carbon\Carbon::parse($c->trade_date)->format('d-m-Y')}}</td>
                                <td>{{$c->head_institution}}</td>
                                <td>{{$c->business_name}}</td>
                                <td>{{$c->business?->name}}</td>
                                <td>{{$c->institution_holding_number}}</td>
                                <td>{{$c->ward?->ward_name_bn}}</td>
                                <td>{{$c->phone}}</td>
                                <td>{{$c->renewal_year?->name}}</td>
                                <td>{{$c->trade_license_renewal_fee}}</td>
                                <td>{{$c->annual_business_tax_levied}}</td>
                                <td><img width="70px" height="50px" src="{{asset('uploads/trade')}}/{{ $c->image}}" alt=""></td>
                                <td class="white-space-nowrap">
                                    <a href="{{route('trade_primary.list',Crypt::encrypt($c->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.trade.show',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-printer"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="14" class="text-center">No trade Found</th>
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
