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
                <div class="table-responsive">
                    <table class="table" id="table1">
                        <thead>
                            <tr>
                                <th width="3%"> ক্রমিক </th>
                                <th>ফটো</th>
                                <th>ব্যবসা প্রতিষ্ঠানের নাম </th>
                                <th>আবেদনকারীর নাম </th>
                                <th>মোবাইল</th>
                                <th>প্রোফাইল </th>
                                <th width="13%"> কর্মকাণ্ড  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($trade as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td><img width="70px" height="50px" src="{{asset('uploads/trade_license/image/')}}/{{ $c->image}}" alt=""></td>
                                <td>{{$c->business_name}}</td>
                                <td>{{$c->head_household}}</td>
                                <td>{{$c->phone}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{ $c->id }}">যুক্ত করুন</button>
                                    <div class="modal fade" id="modal{{ $c->id }}" tabindex="-1" role="dialog" aria-labelledby="modal{{ $c->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content" style="width: 800px;">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="#modal{{ $c->id }}Title">আবেদন নম্বর # {{ $c->id }}</h5>
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
                                                                    <tr><p class="text-center bg-primary text-white p-2">তথ্য ভুল থাকলে বাতিল করুন এবং তথ্য সঠিক হলে অনুমোদন করুন</p></tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>ব্যবসা প্রতিষ্ঠানের নাম</td>
                                                                            <td>{{ $c->business_name }}</td>
                                                                            <td>আবেদন তারিখ</td>
                                                                            <td>{{ $c->holding_date }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>আবেদনকারীর নাম</td>
                                                                            <td>{{ $c->head_household }}</td>
                                                                            <td>ভোটার আইডি</td>
                                                                            <td>{{ $c->voter_id_no }}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>মাতার নাম</td>
                                                                            <td>{{ $c->mother_name }}</td>
                                                                            <td>মোবাইল নম্বর</td>
                                                                            <td>{{ $c->phone }}</td>
                                                                        </tr>
                                                                        <form action="{{route('trades_profile',encryptor('encrypt',$c->id))}}">
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
                                                                                <td><input id="" name="signboard_tax" type="number" placeholder="সাইনবোর্ড কর"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>ট্রেড লাইসেন্স নবায়ন ফি</td>
                                                                                <td><input id="" name="trade_license_renewal_fee" type="number" placeholder="লাইসেন্স নবায়ন ফি দিন"></td>
                                                                                <td>ব্যবসায়িক ধার্যকৃত কর</td>
                                                                                <td><input name="annual_business_tax_levied" type="number" placeholder="ব্যবসায়িক ধার্যকৃত কর দিন"></td>
                                                                            </tr>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>সার্ভিস চার্জ</td>
                                                                                <td><input name="service_charge" type="number" placeholder="সার্ভিস চার্জ দিন"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>অনুমেদনের তারিখ</td>
                                                                                <td><input name="approval_date" type="date"></td>
                                                                                <td>বাতিলের কারণ</td>
                                                                                <td><textarea name="cancel_reson" id="" placeholder="কেন বাতিল হচ্ছে মন্তব্য দিন"></textarea></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td></td>
                                                                                <td></td>
                                                                                <td><button type="submit" class="btn btn-warning">বাতিল</button></td>
                                                                                <td><button type="submit" class="btn btn-primary">অনুমোদন</button></td>
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
                                <td class="white-space-nowrap d-flex" style="border-style: none;">
                                    <a href="{{route(currentUser().'.trade.show',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="{{route(currentUser().'.trade.edit',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>&nbsp;&nbsp;
                                    <form id="form{{$c->id}}" action="{{route(currentUser().'.trade.destroy',encryptor('encrypt',$c->id))}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn p-0 show_confirm" data-toggle="tooltip" type="submit"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
                                    </form>
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
