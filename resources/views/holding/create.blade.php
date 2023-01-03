@extends('layout.app')
@section('pageTitle',trans('নতুন হোল্ডিং'))

@section('content')

<!-- Bordered table start -->
<section class="section">
    <div class="card">
        <div class="row">
            <div class="col-3 offset-1">
                <label for="">ফরম নং</label>
                <input class="form-control" type="text" placeholder="ফরম নং">
            </div>
            <div class="col-3 offset-1 float-right">
                <label for="">তারিখ </label>
                <input class="form-control datepicker" type="text" placeholder="মাস-দিন-বছর">
            </div>
        </div>
        <div class="row m-2">
            <label for="">বাড়ির প্রধানের নাম  </label>
            <input class="form-control" type="text" placeholder="">
        </div>
        <div class="row m-2">
            <label for="">পিতার নাম </label>
            <input type="text">
        </div>
        <div class="row m-2">
            <label for="">পিতার নাম </label>
            <input type="text">
        </div>
    </div>
</section>
<!-- Bordered table end -->


@endsection
