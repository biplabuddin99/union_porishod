@extends('layout.app')

@section('content')

<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-block">
                            <h4 style="padding-top: 5px;">ব্যবসায়িক কর তালিকা</h4>
                        </div>
                    </div>
                </div>
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>সি-নং </th>
                                <th>প্রতিষ্ঠানের প্রধান</th>
                                <th>প্রতিষ্ঠানের নাম</th>
                                <th>ব্যবসার ধরন</th>
                                <th>হোল্ডিং</th>
                                <th>ওয়ার্ড</th>
                                <th>মোবাইল</th>
                                <th>নবায়ন সন </th>
                                <th>উৎসকর</th>
                                <th>আদায়</th>
                                <th>বকেয়া </th>
                                <th>ছবি </th>
                                <th>ভিউ</th>
                                <th>রশিদ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($trade as $h)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$h->head_institution}}</td>
                                <td>{{$h->business_name}}</td>
                                <td>{{$h->business?->name}}</td>
                                <td>{{$h->institution_holding_number}}</td>
                                <td>{{$h->village_name}}</td>
                                {{--  <td>{{$wards?->ward_name_bn}}</td>  --}}
                                <td>{{$h->phone}}</td>
                                <td>{{$h->renewal_year?->name}}</td>
                                <td>{{$h->withholding_tax_levied_annually}}</td>
                                <td>{{$h->withholding_tax_levied_annually}}</td>
                                <td>0</td>
                                <td><img width="70px" height="50px" src="{{ asset('uploads/trade') }}/{{ $h->image }}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt=""></td>
                                <td class="white-space-nowrap">
                                    <a href="{{route('trade_primary.list',Crypt::encrypt($h->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.trade.show',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-printer"></i>
                                    </a>
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
