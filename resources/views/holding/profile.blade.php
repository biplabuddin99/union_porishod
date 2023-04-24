@extends('layout.app')

@section('content')

<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-block">
                            <h4 style="padding-top: 5px;">হোল্ডিং প্রোফাইল তালিকা</h4>
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
                                <th width="3%"> ক্রমিক </th>
                                <th>বাড়ি প্রধানের নাম</th>
                                <th>মায়ের নাম</th>
                                <th>বাড়ির হেল্ডিং নম্বর</th>
                                <th>ভোটার আইডি নং</th>
                                <th>মোবাইল নং</th>
                                <th width="13%"> পরিবর্তন  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($hold as $h)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$h->head_household}}</td>
                                <td>{{$h->mother_name}}</td>
                                <td><a href="{{route(currentUser().'.holding.show',encryptor('encrypt',$h->id))}}">{{$h->house_holding_no}}</a></td>
                                <td>{{$h->voter_id_no}}</td>
                                <td>{{$h->phone}}</td>
                                <td class="white-space-nowrap">
                                    <a href="{{route(currentUser().'.holding.edit',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-pencil-square"></i>
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
