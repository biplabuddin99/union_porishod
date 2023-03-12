@extends('layout.app')

@section('pageTitle',trans('ওয়ারিশান লিস্ট'))
@section('pageSubTitle',trans('List'))

@section('content')


    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                    <div class="row p-2">
                        <div class="col-md-6 text-start p-2">
                            <a class="btn btn-success" href="{{route(currentUser().'.warishan.create')}}">আবেদন ফরম <i class="bi bi-plus-lg"></i></a>
                        </div>
                        <!-- <div class="col-md-6 text-end p-2">
                            <a class="btn btn-success" href="#"><i class="bi bi-cloud-download"></i> Download</a>
                        </div> -->
                    </div>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 mt-5">
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">{{__('ক্রমিক')}}</th>
                                        <th scope="col">{{__('আবেদনকারীর নাম')}}</th>
                                        <th scope="col">{{__('ওয়ারিশান ব্যাক্তির নাম')}}</th>
                                        <th scope="col">{{__('মোবাইল')}}</th>
                                        <th scope="col">{{__('মাতার নাম')}}</th>
                                        <th scope="col">{{__('জেলা')}}</th>
                                        <th scope="col">{{__('ওয়ার্ড')}}</th>
                                        <th class="white-space-nowrap">{{__('এক্সসান')}}</th>
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
                                        <td>{{$p->district}}</td>
                                        <td>{{$p->ward_no}}</td>
                                        <td class="white-space-nowrap">
                                            <a  href="{{route(currentUser().'.warishan.edit',encryptor('encrypt',$p->id))}}">
                                            <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                            <form id="form{{$p->id}}" action="{{route(currentUser().'.warishan.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                                @csrf
                                                @method('delete')
                                                
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
    <!-- Bordered table end -->
@endsection
