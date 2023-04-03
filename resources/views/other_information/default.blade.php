@extends('layout.app')

@section('content')
<section style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center"
                style="margin-top: 10px; margin-bottom: 20px; border-radius: 4px;">
                <h4 style="color: rgb(245, 10, 10); padding-top: 5px;">আপনি আবেদনের ধরন নির্বাচন করেন নাই। দয়াকরে পূর্বে গিয়ে আবেদনের ধরন নির্বাচন করুন</h4>
            </div>
        </div>
    </div>
</section>
  <section id="multiple-column-form">
    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-9">
            <a class="p-2" style="background-color: rgb(214, 153, 153); color:black;" href="{{route(currentUser().'.allapplication.edit',$all->id)}}">
                পূর্ববর্তী
            </a>
          </div>
        </div>
    </div>
  </section>

@endsection


