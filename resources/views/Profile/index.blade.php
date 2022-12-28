@extends('layout.app')

@section('pageTitle',trans('আবেদনকারীর লিস্ট'))
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
                            <a class="float-end" href="{{route(currentUser().'.profile.create')}}"style="font-size:1.7rem"><i class="bi bi-plus-square-fill"></i></a>
                                <thead>
                                    <tr class="text-center">
                                        <th scope="col">{{__('ক্রমিক')}}</th>
                                        <th scope="col">{{__('ফটো')}}</th>
                                        <th scope="col">{{__('নাম')}}</th>
                                        <th scope="col">{{__('পিতা/ স্বামী')}}</th>
                                        <th scope="col">{{__('মোবাইল')}}</th>
                                        <th scope="col">{{__('এন আইডি নং')}}</th>
                                        <th scope="col">{{__('পেশা')}}</th>
                                        <th scope="col">{{__('গ্রাম')}}</th>
                                        <th scope="col">{{__('ওয়ার্ড')}}</th>
                                        <th scope="col">{{__('স্ট্যাটাস')}}</th>
                                        <th class="white-space-nowrap">{{__('এক্সসান')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($profile as $p)
                                    <tr class="text-center">
                                    <th scope="row">{{ ++$loop->index }}</th>
                                    <td><img width="40px" height="50px" class="float-first" src="{{asset('uploads/profile/'.$p->image)}}" alt=""></td>
                                        <td>{{$p->applicantName}}</td>
                                        <td>{{$p->FatherOrHusband}}</td>
                                        <td>{{$p->contact}}</td>
                                        <td>{{$p->id_no}}</td>
                                        <td>{{$p->icomeSource}}</td>
                                        <td>{{$p->village}}</td>
                                        <td>{{$p->word_no}}</td>
                                        <td>{{ $p->status == 1?"Active":"Inactive" }}</td>
                                        <td class="white-space-nowrap">
                                            <a  href="{{route(currentUser().'.profile.edit',encryptor('encrypt',$p->id))}}">
                                            <i class="bi bi-pencil-square"></i>
                                            </a>
                                            <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                            <form id="form{{$p->id}}" action="{{route(currentUser().'.profile.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                                @csrf
                                                @method('delete')
                                                
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <th colspan="11" class="text-center">No Category Found</th>
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