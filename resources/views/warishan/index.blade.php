@extends('layout.app')

@section('pageTitle',trans('ওয়ারিশান লিস্ট'))
@section('pageSubTitle',trans('List'))

@section('content')


    <!-- Bordered table start -->
    <section class="section">
        <div class="row" id="table-bordered">
            <div class="col-12">
                <div class="card">
                        <!-- table bordered -->
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                            <a class="float-end" href="{{route(currentUser().'.warishan.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">{{__('ক্রমিক')}}</th>
                                        <th scope="col">{{__('QR')}}</th>
                                        <th scope="col">{{__('ওয়ারিশান ব্যাক্তির নাম')}}</th>
                                        <th scope="col">{{__('পিতা/ স্বামী')}}</th>
                                        <th scope="col">{{__('মৃত্যু তারিখ')}}</th>
                                        <th scope="col">{{__('গ্রাম/ রাস্তা')}}</th>
                                        <th scope="col">{{__('ওয়ার্ডঃ')}}</th>
                                        <th class="white-space-nowrap">{{__('এক্সসান')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($warishan as $p)
                                    <tr class="text-center">
                                    <th scope="row">{{ ++$loop->index }}</th>
                                        <td></td>
                                        <td>{{$p->warishan_person_name}}</td>
                                        <td>{{$p->fatherOrMother}}</td>
                                        <td>{{$p->dath_date}}</td>
                                        <td>{{$p->village}}</td>
                                        <td>{{$p->ward_no_id}}</td>
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
</div>

@endsection