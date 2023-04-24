@extends('layout.app')

@section('content')
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-block">
                            <h5 style="padding-top: 5px;">পরিবার সদস্যদের প্রত্যয়ন পত্র তালিকা</h5>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">{{__('ক্রমিক')}}</th>
                                <th scope="col">{{__('আবেদনকারীর নাম')}}</th>
                                <th scope="col">{{__('ওয়ারিশান ব্যাক্তির নাম')}}</th>
                                <th scope="col">{{__('মোবাইল')}}</th>
                                <th scope="col">{{__('মাতার নাম')}}</th>
                                <th class="white-space-nowrap">{{__('কর্মকাণ্ড')}}</th>
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
                                <td class="white-space-nowrap d-flex" style="border-style: none;">
                                    <a href="{{route(currentUser().'.attesteation.show',encryptor('encrypt',$p->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
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
