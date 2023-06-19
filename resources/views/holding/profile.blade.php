@extends('layout.app')

@section('content')

<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-block">
                            <h5 style="padding-top: 5px;">অনুমোদিত হোল্ডিং তালিকা</h5>
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
                                <th width="3%"> ক্রমিক </th>
                                <th>বাড়ি প্রধান</th>
                                <th>পেশা</th>
                                <th>হোল্ডিং</th>
                                <th>গ্রাম</th>
                                <th>ওয়ার্ড</th>
                                <th>মোবাইল</th>
                                <th>কর </th>
                                <th>ছবি</th>
                                <th>অনুমোদনকারী </th>
                                <th>এডিট</th>
                                <th>ভিউ</th>
                                <th>সনদ প্রিন্ট </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($hold as $h)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$h->head_household}}</td>
                                <td>{{$h->income?->name}}</td>
                                <td>{{$h->house_holding_no}}</td>
                                <td>{{$h->village_name}}</td>
                                <td>{{$h->ward?->ward_name_bn}}</td>
                                <td>{{$h->phone}}</td>
                                <td>{{$h->tax_levied_annually_house}}</td>
                                <td><img width="70px" height="50px" src="{{ asset('uploads/holding/thumb') }}/{{ $h->image }}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt=""></td>
                                <td>{{$h->approved?->name}}</td>
                                <td>
                                    <a href="{{route(currentUser().'.hold_profileupdate',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td class="white-space-nowrap">
                                    <a href="{{route('hold_primary.list',Crypt::encrypt($h->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                </td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.holding.show',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-printer"></i>
                                    </a>
                                </td>
                                {{-- <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.holding.edit',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td> --}}
                            </tr>
                            @empty
                            <tr>
                                <th colspan="9" class="text-center">No holding Found</th>
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
