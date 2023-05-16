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
                            <h5 style="padding-top: 5px;">ট্রেড লাইসেন্স আবেদন তালিকা</h5>
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
                                <th> আবেদন নং </th>
                                <th>তারিখ</th>
                                <th>প্রতিষ্ঠান প্রধানের নাম </th>
                                <th>প্রতিষ্ঠানের নাম </th>
                                <th>ব্যবসার ধরণ </th>
                                <th>মোবাইল</th>
                                <th>ছবি </th>
                                <th>অনুমোদন </th>
                                <th>ভিউ </th>
                                <th> এডিট  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($trade as $t)
                            <tr>
                                <th scope="row">{{ $t->id }}</th>
                                <td>{{\Carbon\Carbon::parse($t->trade_date)->format('d-m-Y')}}</td>
                                <td>{{$t->head_institution}}</td>
                                <td>{{$t->business_name}}</td>
                                <td>{{$t->business?->name}}</td>
                                <td>{{$t->phone}}</td>
                                <td><img width="70px" height="50px" src="{{asset('uploads/trade/')}}/{{ $t->image}}" onerror="this.onerror=null;this.src='{{ asset('uploads/onerror.jpg')}}';" alt=""></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $t->id }}">যুক্ত করুন</button>
                                    <div class="modal fade" id="modal{{ $t->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $t->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="#modal{{ $t->id }}Title">আবেদন নম্বর # {{ $t->id }}</h5>
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
                                                                        <td>ব্যবসা প্রতিষ্ঠানের নাম</td>
                                                                        <td>{{ $t->business_name }}</td>
                                                                        <td>আবেদন তারিখ</td>
                                                                        <td>{{ $t->holding_date }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>আবেদনকারীর নাম</td>
                                                                        <td>{{ $t->head_household }}</td>
                                                                        <td>ভোটার আইডি</td>
                                                                        <td>{{ $t->voter_id_no }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>মাতার নাম</td>
                                                                        <td>{{ $t->mother_name }}</td>
                                                                        <td>মোবাইল নম্বর</td>
                                                                        <td>{{ $t->phone }}</td>
                                                                    </tr>
                                                                    <form action="{{route('trades_profile',encryptor('encrypt',$t->id))}}">
                                                                        @csrf
                                                                        @method('PATCH')
                                                                        <tr>
                                                                            <td>ট্রেডলাইসেন্স নবায়ন সন</td>
                                                                            <td>
                                                                                <select name="tradelicense_renewal_year" class="form-select @error('tradelicense_renewal_year') is-invalid @enderror">
                                                                                    <option value="">নির্বাচন করুন</option>
                                                                                    @forelse(\App\Models\TradelicenseRenewalyear::orderBy('created_at')->get() as $data)
                                                                                    <option value="{{$data->id}}">{{$data->name}}</option>
                                                                                    @empty
                                                                                    @endforelse
                                                                                </select>
                                                                            </td>
                                                                            <td>সাইনবোর্ড কর</td>
                                                                            <td><input class="form-control" id="" name="signboard_tax" type="number" placeholder="সাইনবোর্ড কর"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>ট্রেড লাইসেন্স নবায়ন ফি</td>
                                                                            <td><input class="form-control" id="" name="trade_license_renewal_fee" type="number" placeholder="লাইসেন্স নবায়ন ফি দিন"></td>
                                                                            <td>বার্ষিক ধার্যকৃত উৎসকর কর</td>
                                                                            <td><input class="form-control" name="withholding_tax_levied_annually" type="number" placeholder="বার্ষিক ধার্যকৃত উৎসকর কর দিন"></td>
                                                                        </tr>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>সার্ভিস চার্জ</td>
                                                                            <td><input class="form-control" name="service_charge" type="number" placeholder="সার্ভিস চার্জ দিন"></td>
                                                                            <td>গ্রহণ/ বাতিল</td>
                                                                            <td>
                                                                                <select onchange="change_status(this)" name="status" class="form-control">
                                                                                    <option value="2">গ্রহণ</option>
                                                                                    <option value="3">বাতিল</option>
                                                                                </select>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>অনুমেদনের তারিখ</td>
                                                                            <td><input name="approval_date" class="form-control datepicker" type="text" placeholder="দিন-মাস-বছর"></td>
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
                                <td> <a href="{{route('trade_primary.list',Crypt::encrypt($t->id))}}"><i class="bi bi-eye-fill"></i></a></td>
                                <td><a href="{{route(currentUser().'.trade.edit',encryptor('encrypt',$t->id))}}"><i class="bi bi-pencil-square"></i></a>
                                    {{--  <form id="form{{$t->id}}" action="{{route(currentUser().'.trade.destroy',encryptor('encrypt',$t->id))}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn p-0 show_confirm" data-toggle="tooltip" type="submit"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
                                    </form>  --}}
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No trade Found</th>
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
