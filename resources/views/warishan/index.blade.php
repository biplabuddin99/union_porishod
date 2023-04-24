@extends('layout.app')

{{-- @section('pageTitle',trans('ওয়ারিশান লিস্ট')) --}}
@section('pageSubTitle',trans('List'))

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">ওয়ারিশান তালিকা</h4>
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
                                <tr class="text-center">
                                    <th scope="col">{{__('ক্রমিক')}}</th>
                                    <th scope="col">{{__('আবেদনকারীর নাম')}}</th>
                                    <th scope="col">{{__('ওয়ারিশান ব্যাক্তির নাম')}}</th>
                                    <th scope="col">{{__('মোবাইল')}}</th>
                                    <th scope="col">{{__('মাতার নাম')}}</th>
                                    <th scope="col">{{__('প্রোফাইল')}}</th>
                                    <th class="white-space-nowrap">{{__('কর্মকাণ্ড')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($warishan as $p)
                                <tr class="text-center">
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td>{{$p->head_household}}</td>
                                    <td>{{$p->warishan_person_name}}</td>
                                    <td>{{$p->phone}}</td>
                                    <td>{{$p->warishan_mother_name}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $p->id }}">যুক্ত করুন</button>
                                        <div class="modal fade" id="modal{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $p->id }}Title" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" style="width: 800px;">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="#modal{{ $p->id }}Title">আবেদন নম্বর # {{ $p->id }}</h5>
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
                                                                                <td>{{ $p->head_household }}</td>
                                                                                <td>আবেদন তারিখ:</td>
                                                                                <td>{{ $p->holding_date }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ওয়ারিশান ব্যাক্তির নাম:</td>
                                                                                <td>{{ $p->warishan_person_name }}</td>
                                                                                <td>মাতার নাম:</td>
                                                                                <td>{{ $p->mother_name }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ভোটার আইডি:</td>
                                                                                <td>{{ $p->voter_id_no }}</td>
                                                                                <td>মোবাইল নম্বর:</td>
                                                                                <td>{{ $p->phone }}</td>
                                                                            </tr>
                                                                            <form action="{{route('warishans_profile',encryptor('encrypt',$p->id))}}">
                                                                                @csrf
                                                                                @method('PATCH')
                                                                                <tr>
                                                                                    <td>ওয়ারিশান সনদ ফি</td>
                                                                                    <td><input id="" name="warisan_certificate_fee" type="number" placeholder="ওয়ারিশান সনদ ফি"></td>
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
                                    </td>
                                    <td class="white-space-nowrap d-flex" style="border-style: none;">
                                        <a href="{{route(currentUser().'.warishan.show',encryptor('encrypt',$p->id))}}">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>&nbsp;&nbsp;
                                        <a  href="{{route(currentUser().'.warishan.edit',encryptor('encrypt',$p->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                        </a>&nbsp;&nbsp;
                                        <form id="form{{$p->id}}" action="{{route(currentUser().'.warishan.destroy',encryptor('encrypt',$p->id))}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn p-0 show_confirm" data-toggle="tooltip" type="submit"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="8" class="text-center">No warishan Found</th>
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
