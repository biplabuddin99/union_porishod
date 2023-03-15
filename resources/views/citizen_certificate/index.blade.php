@extends('layout.app')
{{-- @section('pageTitle',trans('citizen List'))
@section('pageSubTitle',trans('List')) --}}

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px; background-color: rgb(223, 183, 183);">
                <h4 style="color: rgb(29, 28, 28); padding-top: 5px;">নাগরিক সনদ তালিকা</h4>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">

            <div class="card">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">

                        <thead>
                            <tr>
                                <th width="3%"> ক্রমিক </th>
                                <th width="70">ছবি</th>
                                <th>ব্যাক্তির নাম </th>
                                <th>মাতা </th>
                                <th>পিতা/স্বামী</th>
                                <th>প্রোপাইল </th>
                                <th width="13%"> এক্সসান  </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($citizen as $c)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td><img width="70px" height="50px" src="{{asset('uploads/citizen_certificate/image')}}/{{ $c->image}}" alt=""></td>
                                <td>{{$c->head_household}}</td>
                                <td>{{$c->mother_name}}</td>
                                <td>{{$c->husband_wife}}</td>
                                <td>
                                    <form action="{{route('citizens_profile',encryptor('encrypt',$c->id))}}">
                                        @csrf
                                        @method('PATCH')
                                        <input class="form-check-input m-2" type="checkbox" value="1" id="status" name="status">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="submit" class="btn btn-primary">যুক্ত করুন</button>
                                    </form>
                                </td>
                                <td class="white-space-nowrap d-flex" style="border-style: none;">
                                    <a href="{{route(currentUser().'.citizen.show',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="{{route(currentUser().'.citizen.edit',encryptor('encrypt',$c->id))}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>&nbsp;&nbsp;
                                    <form id="form{{$c->id}}" action="{{route(currentUser().'.citizen.destroy',encryptor('encrypt',$c->id))}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn p-0 show_confirm" data-toggle="tooltip" type="submit"><i class='bi bi-trash-fill' style='color:red'></i></a></button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="8" class="text-center">No citizen Found</th>
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
