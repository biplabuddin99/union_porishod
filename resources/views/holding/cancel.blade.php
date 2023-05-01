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
                            <h5 style="padding-top: 5px;">হোল্ডিং আবেদন তালিকা (বাতিলকৃত)</h5>
                        </div>
                    </div>
                </div>
                @if(Session::has('response'))
                    {!!Session::get('response')['message']!!}
                @endif
                <!-- table bordered -->
                <div class="table-responsive">
                    <table class="table" id="table1">

                        <thead>
                            <tr>
                                <th>আবেদন নম্বর</th>
                                <th>তারিখ</th>
                                <th>আবেদনকারীর নাম </th>
                                <th>পেশা</th>
                                <th>মোবাইল</th>
                                <th>ছবি</th>
                                {{-- <th>অনুমোদন </th> --}}
                                <th width="30">ভিউ</th>
                                <th>বাতিলের কারণ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($hold as $h)
                            <tr>
                                <th scope="row">{{ $h->id }}</th>
                                <td>{{\Carbon\Carbon::parse($h->holding_date)->format('d-m-Y')}}</td>
                                <td>{{$h->head_household}}</td>
                                <td>{{$h->income?->name}}</td>
                                <td>{{$h->phone}}</td>
                                <td><img width="70px" height="50px" src="{{ asset('uploads/holding/thumb') }}/{{ $h->image }}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt=""></td>
                                {{-- <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $h->id }}">যুক্ত করুন</button>
                                    <div class="modal fade" id="modal{{ $h->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $h->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="#modal{{ $h->id }}Title">আবেদন নম্বর # {{ $h->id }}</h5>
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
                                                                            <td>{{ $h->head_household }}</td>
                                                                            <td>আবেদন তারিখ:</td>
                                                                            <td>{{ $h->holding_date }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>পিতার নাম:</td>
                                                                            <td>{{ $h->father_name }}</td>
                                                                            <td>মাতার নাম:</td>
                                                                            <td>{{ $h->mother_name }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>ভোটার আইডি:</td>
                                                                            <td>{{ $h->voter_id_no }}</td>
                                                                            <td>মোবাইল নম্বর:</td>
                                                                            <td>{{ $h->phone }}</td>
                                                                        </tr>
                                                                        <form action="{{route('holding_profile',encryptor('encrypt',$h->id))}}">
                                                                            @csrf
                                                                            @method('PATCH')
                                                                            <tr>
                                                                                <td>হোল্ডিং নাম্বার</td>
                                                                                <td colspan="3"><input id="" class="form-control" name="house_holding_no" type="number" placeholder="হোল্ডিং নাম্বার"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>হোল্ডিং নাম্বার সনদ ফি</td>
                                                                                <td><input id="" class="form-control" name="holding_certificate_fee" type="number" placeholder="হোল্ডিং নাম্বার সনদ ফি"></td>
                                                                                <td>বাড়ির বার্ষিক ধার্যকৃত কর</td>
                                                                                <td><input class="form-control" name="tax_levied_annually_house" type="number" placeholder="বাড়ির বার্ষিক ধার্যকৃত কর"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>অনুমেদনের তারিখ</td>
                                                                                <td><input name="approval_date" class="form-control datepicker" type="text"></td>
                                                                                <td>গ্রহণ/ বাতিল</td>
                                                                                <td>
                                                                                    <select onchange="change_status(this)" name="status" class="form-control">
                                                                                        <option value="1">গ্রহণ</option>
                                                                                        <option value="2">বাতিল</option>
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
                                </td> --}}
                                <td>
                                    <a href="{{route('hold_primary.list',$h->id)}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a> 
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalc{{ $h->id }}">বিস্তারিত</button>
                                    <div class="modal fade" id="modalc{{ $h->id }}" tabindex="-1" role="dialog" aria-labelledby="modalc{{ $h->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="#modalc{{ $h->id }}Title">আবেদন নম্বর # {{ $h->id }}</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12 table-responsive">
                                                            <table class="table table-inverse">
                                                                <thead class="thead-inverse">
                                                                    <tr>
                                                                        <td colspan="4">
                                                                            <div class="col-md-12 text-center heading-block">
                                                                                <h5 style="padding-top: 5px;">আবেদন বাতিলের কারণ</h5>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>আবেদনকারীর নাম:</td>
                                                                        <td>{{ $h->head_household }}</td>
                                                                        <td>আবেদন তারিখ:</td>
                                                                        <td>{{ $h->holding_date }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>পিতার নাম:</td>
                                                                        <td>{{ $h->father_name }}</td>
                                                                        <td>মাতার নাম:</td>
                                                                        <td>{{ $h->mother_name }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>ভোটার আইডি:</td>
                                                                        <td>{{ $h->voter_id_no }}</td>
                                                                        <td>মোবাইল নম্বর:</td>
                                                                        <td>{{ $h->phone }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>অনুমেদনের তারিখ</td>
                                                                        <td>{{ $h->updated_at }}</td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="cancel_reason">বাতিলের কারণ</td>
                                                                        <td colspan="3"> {{$h->cancel_reason}}</td>
                                                                    </tr>
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
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No holding Found</th>
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
        if($(e).val()==1){
            $(e).parents('tr').siblings('tr').find('.cancel_reason').text('মন্তব্য')
            $(e).parents('tr').siblings('tr').find('.cancel_r').attr('placeholder','মন্তব্য দিন')
        }else{
            $(e).parents('tr').siblings('tr').find('.cancel_reason').text('বাতিলের কারণ')
            $(e).parents('tr').siblings('tr').find('.cancel_r').attr('placeholder','কেন বাতিল হচ্ছে মন্তব্য দিন')
        }
    }
</script>
@endpush
