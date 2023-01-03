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
                        <!-- table bordered -->
                        <form action="">
                            <div class="row">
                                <div class="col-md-2 mt-2">
                                    <input type="text" class="form-control" name="name" placeholder="নাম">
                                </div>
                                <div class="col-md-2 mt-2">
                                    <input type="text" class="form-control" name="mobile" placeholder="মোবাইল">
                                </div>
                                <div class="col-md-2 mt-2">
                                    <select class="form-control form-select" name="word">
                                        <option value="">ওয়ার্ড নং</option>
                                        <option value="1">১ নং ওয়ার্ড</option>
                                        <option value="2">২ নং ওয়ার্ড</option>
                                        <option value="3">৩ নং ওয়ার্ড</option>
                                        <option value="4">৪ নং ওয়ার্ড</option>
                                        <option value="5">৫ নং ওয়ার্ড</option>
                                        <option value="6">৬ নং ওয়ার্ড</option>
                                    </select>
                                </div>
                                <div class="col-md-2 mt-2">
                                    <input type="text" class="form-control" name="village" placeholder="গ্রাম">
                                </div>
                                <div class="col-md-2 mt-2">
                                    <input type="text" class="form-control datepicker" name="formdate" placeholder="তারিখ হইতে">
                                </div>
                                <div class="col-md-2 mt-2">
                                    <input type="date" class="form-control" name="todate" placeholder="তারিখ পর্যন্ত">
                                </div>
                                
                                <div class="col-md-2 mt-2">
                                    <a class="btn btn-success " href="#">খুজুন</a>
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 mt-5">
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

@push('scripts')

<script type="text/javascript">
    $(function() {
        $('.datepicker').datepicker();
    });
</script>

@endpush
