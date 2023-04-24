@extends('layout.app')
{{-- @section('pageTitle',trans('citizen List'))
@section('pageSubTitle',trans('List')) --}}

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(29, 28, 28); padding-top: 5px;">নাগরিক সনদ তালিকা</h4>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div class="table-responsive">
                    <table class="table" id="table1">

                        <thead>
                            <tr>
                                <th width="3%"> ক্রমিক </th>
                                <th width="70">ছবি</th>
                                <th>ব্যাক্তির নাম </th>
                                <th>মাতা </th>
                                <th>পিতা/স্বামী</th>
                                <th>প্রোফাইল </th>
                                <th width="13%"> কর্মকাণ্ড  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($citizen as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td><img width="70px" height="50px" src="{{asset('uploads/citizen_certificate/image')}}/{{ $c->image}}" alt=""></td>
                                <td>{{$c->head_household}}</td>
                                <td>{{$c->mother_name}}</td>
                                <td>{{$c->husband_wife}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $c->id }}">যুক্ত করুন</button>
                                    <div class="modal fade" id="modal{{ $c->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $c->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="#modal{{ $c->id }}Title">আবেদন নম্বর # {{ $c->id }}</h5>
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
                                                                            <td>{{ $c->head_household }}</td>
                                                                            <td>আবেদন তারিখ:</td>
                                                                            <td>{{ $c->holding_date }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>পিতার নাম:</td>
                                                                            <td>{{ $c->father_name }}</td>
                                                                            <td>মাতার নাম:</td>
                                                                            <td>{{ $c->mother_name }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>ভোটার আইডি:</td>
                                                                            <td>{{ $c->voter_id_no }}</td>
                                                                            <td>মোবাইল নম্বর:</td>
                                                                            <td>{{ $c->phone }}</td>
                                                                        </tr>
                                                                        <form action="{{route('citizens_profile',encryptor('encrypt',$c->id))}}">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <tr>
                                                                                <td>নাগরিক সনদ ফি</td>
                                                                                <td><input id="" name="citizen_certificate_fee" type="number" placeholder="হেল্ডিং নম্বর ফি"></td>
                                                                                <td></td>
                                                                                <td></td>
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
                                    {{-- <form action="{{route('citizens_profile',encryptor('encrypt',$c->id))}}">
                                        @csrf
                                        @method('PATCH')
                                        <input class="form-check-input m-2" type="checkbox" value="1" id="status" name="status">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="submit" class="btn btn-primary">যুক্ত করুন</button>
                                    </form> --}}
                                </td>
                                <td class="white-space-nowrap d-flex" style="border-style: none;">
                                    <a href="{{route(currentUser().'.citizen.show',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="{{route(currentUser().'.citizen.edit',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>&nbsp;&nbsp;
                                    <form id="form{{$c->id}}" action="{{route(currentUser().'.citizen.destroy',encryptor('encrypt',$c->id))}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn p-0 show_confirm" data-toggle="tooltip" type="submit"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No citizen Found</th>
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
