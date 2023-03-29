@extends('layout.app')

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">পরিবার সদস্যদের প্রত্যয়ন পত্র তালিকা</h4>
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
                                <th scope="col">{{__('প্রোপাইল')}}</th>
                                <th class="white-space-nowrap">{{__('এক্সসান')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($attestation as $p)
                            <tr class="text-center">
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{$p->head_household}}</td>
                                <td>{{$p->familyhead_name}}</td>
                                <td>{{$p->phone}}</td>
                                <td>{{$p->attesteation_mother_name}}</td>
                                <td>
                                    <form action="{{route('attesteations_profile',encryptor('encrypt',$p->id))}}">
                                        @csrf
                                        @method('PATCH')
                                        <input class="form-check-input m-2" type="checkbox" value="1" id="status" name="status">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="submit" class="btn btn-primary">যুক্ত করুন</button>
                                    </form>
                                </td>
                                <td class="white-space-nowrap d-flex" style="border-style: none;">
                                    <a href="{{route(currentUser().'.attesteation.show',encryptor('encrypt',$p->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>&nbsp;&nbsp;
                                    <a  href="{{route(currentUser().'.attesteation.edit',encryptor('encrypt',$p->id))}}">
                                    <i class="bi bi-pencil-square"></i>
                                    </a>&nbsp;&nbsp;
                                    <form id="form{{$p->id}}" action="{{route(currentUser().'.attesteation.destroy',encryptor('encrypt',$p->id))}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn p-0 show_confirm" data-toggle="tooltip" type="submit"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No attesteation Found</th>
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
