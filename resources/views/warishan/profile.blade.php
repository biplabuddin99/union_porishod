@extends('layout.app')

@section('content')

<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-block">
                            <h5 style="padding-top: 5px;">অনুমোদিত ওয়ারিশ তালিকা</h5>
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
                                <th>আবেদনকারীর নাম</th>
                                <th>পেশা</th>
                                <th>হোল্ডিং</th>
                                <th>ওয়ার্ড</th>
                                <th>ওয়ারিশ</th>
                                <th>মোবাইল</th>
                                <th>সনদ ফি</th>
                                <th>ছবি</th>
                                <th>ভিউ</th>
                                <th>প্রিন্ট</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($warishan as $p)
                            <tr class="text-center">
                            <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{\Carbon\Carbon::parse($p->approval_date)->format('d-m-Y')}}</td>
                                <td>{{$p->applicant_name}}</td>
                                <td>{{$p->income?->name}}</td>
                                <td>{{$p->house_holding_number}}</td>
                                <td>{{$p->ward?->ward_name_bn}}</td>
                                <td>{{$p->total_warishan_members}}</td>
                                <td>{{$p->phone}}</td>
                                <td>{{$p->warisan_certificate_fee}}</td>
                                <td><img width="70px" height="50px" src="{{asset('uploads/warishan')}}/{{ $p->image}}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt=""></td>
                                <td>{{$p->warishan_mother_name}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route('warishan_primary.list',Crypt::encrypt($p->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </td>
                                <td class="white-space-nowrap">
                                    <a  href="{{route(currentUser().'.warishan.show',encryptor('encrypt',$p->id))}}">
                                        <i class="bi bi-printer"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="12" class="text-center">No warishan Found</th>
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
