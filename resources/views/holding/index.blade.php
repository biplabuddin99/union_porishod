@extends('layout.app')
{{-- @section('pageTitle',trans('হোল্ডিং লিস্ট')) --}}

@section('content')

<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">হোল্ডিং তালিকা</h4>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                {{-- <div>
                <a class="float-end" href="{{route(currentUser().'.holding.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                </div> --}}
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table" id="table1">

                        <thead>
                            <tr>
                                <th width="3%"> ক্রমিক </th>
                                <th>ছবি</th>
                                <th>বাড়ি প্রধানের নাম</th>
                                <th>বাড়ির হেল্ডিং নম্বর</th>
                                <th>মোবাইল নং</th>
                                <th>প্রোপাইল</th>
                                <th width="13%"> এক্সসান  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($hold as $h)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td><img width="70px" height="50px" src="{{ asset('uploads/holding/thumb') }}/{{ $h->image }}" alt=""></td>
                                <td>{{$h->head_household}}</td>
                                <td>{{$h->house_holding_no}}</td>
                                <td>{{$h->phone}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $h->id }}">যুক্ত করুন</button>
                                    <div class="modal fade" id="modal{{ $h->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $h->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="#modal{{ $h->id }}Title">আবেদন নম্বর # {{ $h->id }}</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="table table-inverse table-responsive">
                                                                <thead class="thead-inverse">
                                                                    <tr><p class="text-center bg-primary text-white p-2">তথ্য ভুল থাকলে বাতিল করুন এবং তথ্য সঠিক হলে অনুমোদন করুন</p></tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>আবেদনকারীর নাম:</td>
                                                                            <td>{{ $h->head_household }}</td>
                                                                            <td>আবেদন তারিখ:</td>
                                                                            <td>{{ $h->holding_date }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>পিতার নাম:</td>
                                                                            <td>{{ $h->father_name }}</td>
                                                                            <td>মাতার নাম:</td>
                                                                            <td>{{ $h->mother_name }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>ভোটার আইডি:</td>
                                                                            <td>{{ $h->voter_id_no }}</td>
                                                                            <td>মোবাইল নম্বর:</td>
                                                                            <td>{{ $h->phone }}</td>
                                                                        </tr>
                                                                        <form action="{{route('holding_profile',encryptor('encrypt',$h->id))}}">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <tr>
                                                                                <td>হোল্ডিং নাম্বার সনদ ফি</td>
                                                                                <td><input id="" name="holding_certificate_fee" type="number" placeholder="হোল্ডিং নাম্বার সনদ ফি"></td>
                                                                                <td>বাড়ির বার্ষিক ধার্যকৃত কর</td>
                                                                                <td><input name="tax_levied_annually_house" type="number" placeholder="বাড়ির বার্ষিক ধার্যকৃত কর"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>অনুমেদনের তারিখ</td>
                                                                                <td><input name="approval_date" type="date"></td>
                                                                                <td>বাতিলের কারণ</td>
                                                                                <td><textarea name="cancel_reason" id="" placeholder="কেন বাতিল হচ্ছে মন্তব্য দিন"></textarea></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td><button type="submit" class="btn btn-warning">বাতিল</button></td>
                                                                                <td><button type="submit" class="btn btn-primary">অনুমোদন</button></td>
                                                                            </tr>
                                                                        </form>
                                                                    </tbody>
                                                                </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="white-space-nowrap d-flex" style="border-style: none;">
                                    <a href="{{route(currentUser().'.holding.show',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <a href="{{route(currentUser().'.holding.edit',encryptor('encrypt',$h->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form id="form{{$h->id}}" action="{{route(currentUser().'.holding.destroy',encryptor('encrypt',$h->id))}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn p-0 show_confirm" data-toggle="tooltip" type="submit"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
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
