@extends('layout.app')
{{-- @section('pageTitle',trans('হোল্ডিং লিস্ট')) --}}

@section('content')

<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-block">
                            <h5 style="padding-top: 5px;">চারিত্রিক সনদের আবেদন তালিকা</h5>
                        </div>
                    </div>
                </div>
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive mt-2">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th scope="col">{{__('ক্রমিক')}}</th>
                                <th scope="col">{{__('তারিখ')}}</th>
                                <th scope="col">{{__('আবেদনকারীর নাম')}}</th>
                                <th scope="col">{{__('পেশা')}}</th>
                                <th scope="col">{{__('মোবাইল')}}</th>
                                <th scope="col">{{__('ছবি')}}</th>
                                <th scope="col">{{__('অনুমোদন')}}</th>
                                <th scope="col">{{__('ভিউ')}}</th>
                                <th class="white-space-nowrap">{{__('এডিট')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($character as $p)
                            <tr>
                                <th>{{ ++$loop->index }}</th>
                                <td>{{\Carbon\Carbon::parse($p->apply_date)->format('d-m-Y')}}</td>
                                <td>{{$p->applicant_name}}</td>
                                <td>{{$p->income?->name}}</td>
                                <td>{{$p->phone}}</td>
                                <td><img width="70px" height="50px" src="{{ asset('uploads/character') }}/{{ $p->image }}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt=""></td>
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
                                                                    <tr>
                                                                        <td colspan="4">
                                                                            <div class="col-md-12 text-center heading-block">
                                                                                <h5 style="padding-top: 5px;">তথ্য ভুল থাকলে বাতিল করুন এবং তথ্য সঠিক হলে অনুমোদন করুন</h5>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>আবেদনকারীর নাম:</td>
                                                                        <td>{{ $p->applicant_name }}</td>
                                                                        <td>আবেদন তারিখ:</td>
                                                                        <td>{{ $p->apply_date }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>পিতার নাম:</td>
                                                                        <td>{{ $p->father_name }}</td>
                                                                        <td>মাতার নাম:</td>
                                                                        <td>{{ $p->mother_name }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ভোটার আইডি:</td>
                                                                        <td>{{ $p->voter_id_no }}</td>
                                                                        <td>মোবাইল নম্বর:</td>
                                                                        <td>{{ $p->phone }}</td>
                                                                    </tr>
                                                                    <form action="{{route('characters_profile',encryptor('encrypt',$p->id))}}">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <tr>
                                                                            <td>সনদ ফি</td>
                                                                            <td><input id="" class="form-control" name="certificate_fee" type="number" placeholder="সনদ ফি"></td>
                                                                            <td>সার্ভিস চার্জ</td>
                                                                            <td><input id="" class="form-control" name="service_charge" type="number" placeholder="সার্ভিস চার্জ"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>আমার জানামতে তাহার</td>
                                                                            <td><input id="" class="form-control" name="as_i_know" type="text" placeholder="স্বভাব চরিত্র ভালো"></td>
                                                                            <td>উক্ত ইউনিয়নের</td>
                                                                            <td><input id="" class="form-control" name="of_the_union" type="text" placeholder="স্থায়ী বাসিন্দা"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>অনুমেদনের তারিখ</td>
                                                                            <td><input name="approval_date" class="form-control datepicker" type="text" placeholder="দিন-মাস-বছর"></td>
                                                                            <td>গ্রহণ/ বাতিল</td>
                                                                            <td>
                                                                                <select onchange="change_status(this)" name="status" class="form-control">
                                                                                    <option value="2">গ্রহণ</option>
                                                                                    <option value="3">বাতিল</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="cancel_reason">মন্তব্য</td>
                                                                            <td colspan="3"> <textarea name="cancel_reason" class="form-control cancel_r" id="" placeholder="মন্তব্য দিন"></textarea></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td><button type="submit" class="btn btn-primary">দাখিল করুন</button></td>
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
                                <td>
                                    <a href="{{route('character_primary.list',Crypt::encrypt($p->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    {{--  <form id="form{{$p->id}}" action="{{route(currentUser().'.warishan.destroy',encryptor('encrypt',$p->id))}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn p-0 show_confirm" data-toggle="tooltip" type="submit"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
                                    </form>  --}}
                                </td>
                                <td>
                                    <a  href="{{route(currentUser().'.character.edit',encryptor('encrypt',$p->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                        </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No citizen certificate Found</th>
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

@push('scripts')
<script>
    function change_status(e){
        if($(e).val()==2){
            $(e).parents('tr').siblings('tr').find('.cancel_reason').text('মন্তব্য')
            $(e).parents('tr').siblings('tr').find('.cancel_r').attr('placeholder','মন্তব্য দিন')
        }else{
            $(e).parents('tr').siblings('tr').find('.cancel_reason').text('বাতিলের কারণ')
            $(e).parents('tr').siblings('tr').find('.cancel_r').attr('placeholder','কেন বাতিল হচ্ছে মন্তব্য দিন')
        }
    }
</script>
@endpush
