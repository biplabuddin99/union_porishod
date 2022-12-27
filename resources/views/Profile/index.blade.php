@extends('layout.app')

@section('pageTitle',trans('Profile'))
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
                                        <th scope="col">{{__('#SL')}}</th>
                                        <th scope="col">{{__('Image')}}</th>
                                        <th scope="col">{{__('Name')}}</th>
                                        <th scope="col">{{__('Father/Husband')}}</th>
                                        <th scope="col">{{__('Mobile')}}</th>
                                        <th scope="col">{{__('NID')}}</th>
                                        <th scope="col">{{__('Profession')}}</th>
                                        <th scope="col">{{__('Village')}}</th>
                                        <th scope="col">{{__('Word NO')}}</th>
                                        <th scope="col">{{__('Status')}}</th>
                                        <th class="white-space-nowrap">{{__('ACTION')}}</th>
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
                                            <a class="ebutton" href="{{route(currentUser().'.profile.edit',encryptor('encrypt',$p->id))}}">Edit</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <th colspan="4" class="text-center">No Category Found</th>
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