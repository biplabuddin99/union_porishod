@extends('layout.app')
{{-- @section('pageTitle',trans('Profile Statistics')) --}}

@section('content')

<div class="page-content">
    <section class="row" style="border: 15px solid rgba(228, 217, 217, 0.685); padding: 10px">
        <div class="col-12 col-lg-12 mt-5">
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-6">
                    <table class="table table-hover border border-primary">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center bg-primary text-white">সর্বশেষ করদাতা</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            {{-- <img src="{{ asset('/assets/images/faces/2.jpg') }}"> --}}
                                        </div>
                                        <p class="font-bold mb-0" style="padding-left: 10px;">করিম উদ্দিন</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded-circle text-white">২০</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            {{-- <img src="{{ asset('/assets/images/faces/2.jpg') }}"> --}}
                                        </div>
                                        <p class="font-bold mb-0" style="padding-left: 10px;">জামাল উদ্দিন</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded-circle text-white">১০</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-lg-2 col-md-4">
                    <div class="card" style="background-color: rgb(174, 17, 198); color:white; max-height: 160px;">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <h5>৮৬২৬৩</h5>
                                <p>মোট কর</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-md-4">
                    <div class="card" style="background-color: rgb(104, 221, 137); color:white; max-height: 160px;">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <h5>১১৭৮৬৫</h5>
                                <p>মোট আদায়</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2 col-md-4">
                    <div class="card" style="background-color: rgb(244, 247, 56); color:white; max-height: 160px;">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <h5>৩৫৯৬৯</h5>
                                <p>বকেয়া কর</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-6 col-md-6 col-xl-6">
                    <table class="table table-hover border border-primary">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center bg-primary text-white">ভাতার সংখ্যা</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">প্রতিবন্ধী ভাতা</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৫ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">বয়স্ক ভাতা</p>
                                    </div>
                                </td>
                                <td  class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৮ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">বিধবা ভাতা</p>
                                    </div>
                                </td>
                                <td  class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">২ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0">মাতৃত্বকালীন'ভাতা</p>
                                    </div>
                                </td>
                                <td  class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৮ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">অন্যান্য ভাতা</p>
                                    </div>
                                </td>
                                <td  class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৯ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0">কোনটি নয় ভাতা</p>
                                    </div>
                                </td>
                                <td  class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৭ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">মোটঃ</p>
                                    </div>
                                </td>
                                <td  class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৮৮৮ জন</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6 col-lg-6 col-md-6 col-xl-6">
                    <table class="table table-hover border border-primary">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center bg-primary text-white">ওয়ার্ড অনুসারে মোট করদাতা</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">১নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৬ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">২নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৬ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">৩নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৬ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">৪নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৬ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">৫নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৬ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">৬নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৬ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">৭নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">৬ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">৮নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">১৫ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">৯নং ওয়ার্ড</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">১১ জন</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="w-75">
                                    <div class="d-flex align-items-center">
                                        <p class="font-bold mb-0" style="padding-left: 10px;">মোটঃ</p>
                                    </div>
                                </td>
                                <td class="w-25 text-end">
                                    <button class="bg-primary rounded text-white">১১৫৬ জন</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')

<!-- Need: Apexcharts -->
<script src="{{ asset('/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('/assets/js/pages/dashboard.js') }}"></script>
@endpush
