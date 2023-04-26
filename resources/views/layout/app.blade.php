<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>স্মার্ট ইউপি ম্যানেজমেন্ট সিস্টেম </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" referrerpolicy="no-referrer" />
    <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- tostr css --}}
    <link rel="stylesheet" href="{{ asset('/assets/extensions/laravel-toster/toastr.min.css') }}">
    <script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>

    <style>
        @media print{
            .no-print, .no-print *
            {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div id="app">
        <div id="sidebar" class="active no-print">
            <div class="sidebar-wrapper active">
				<div class="sidebar-header position-relative" style="margin-top:20px;">
					<p class="py-2 px-1 mb-0 heading-block">স্মার্ট ইউপি ম্যানেজমেন্ট সিস্টেম</p>
				</div>
				<div class="sidebar-menu">
                    @include('layout.nav.'.currentUser())
				</div>
			</div>
        </div>
        <div id="main">
            <header class="no-print mt-0 h-20">
                <div class="dropdown float-end">
                    <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle pe-2" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 2rem;">
                        <div class="text">
                            <h6 class="user-dropdown-name">{{encryptor('decrypt', request()->session()->get('userName'))}} <span class="user-dropdown-status text-sm text-muted">({{currentUser()}})</span></h6>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                        {{-- <li><a class="dropdown-item" href="#">{{__('My Account') }}</a></li> --}}
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('logOut')}}">{{__('Logout') }}</a></li>
                    </ul>
                </div>
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
			<div class="content-wrapper container mt-0 pt-0">
				<div class="page-heading m-0 no-print">
					<div class="page-title">
						<div class="row">
                            
							<div class="col-12 col-md-6 order-md-1 order-last">
								<div class="fs-5 fw-bold">@yield('pageTitle')</div>
							</div>
						</div>
					</div>
				</div>
				<div class="page-content">
                    <div class="col-12 ">
                        <div class="auth-logo text-center">
                            <h4 class="pt-2 mb-0 theme-text-color">
                                <img src="{{ asset(request()->session()->get('upsetting')?"uploads/logo_folder/".request()->session()->get('upsetting')->logo:'./images/Login-01.png')}}" width="40px" height="40px" alt="">
                                {{ request()->session()->get('upsetting')->union?->name_bn}} ইউনিয়ন পরিষদ
                            </h4>
                            <h6 class="pb-2 mt-0 theme-text-color">{{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->upazila?->name_bn:"উপজেলা"}}, {{ request()->session()->get('upsetting')?request()->session()->get('upsetting')->district?->name_bn:"জেলা"}}</h6>
                        </div>
                    </div>
					@yield('content')
				</div>
			</div>
            <footer class="no-print">
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="text-center">
                            <p>&copy; 2021 Developed and Maintained by bdgl.online</p>
                        </div>
                        {{-- <div class="float-end">
                            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://bdgl.online/">BDGL.</a></p>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
<script src="{{ asset('/assets/js/bootstrap.js') }}"></script>
<script src="{{ asset('/assets/js/app.js') }}"></script>
<script src="{{ asset('/assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('/assets/js/pages/datatables.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.14/dist/sweetalert2.all.min.js"></script>
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> --}}
  <script>
    $('.show_confirm').click(function(event){
        let form= $(this).closest('form');
        event.preventDefault();
        Swal.fire({
            title: 'আপনি কি নিশ্চিত?',
            text: "আপনি এটিকে ফিরিয়ে আনতে পারবেন না!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'হ্যাঁ, এটি ডিলিট!'
            }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                'ডিলিট!',
                'আপনার ফাইল মুছে ফেলা হয়েছে.',
                'success'
                )
            }
            })
    });
  </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
@stack('scripts')
<script type="text/javascript">
    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:+0",
      dateFormat: 'dd-mm-yy'
    });
</script>
  {{-- tostr --}}
<script src="{{ asset('/assets/extensions/laravel-toster/toastr.min.js') }}"></script>
  {!! Toastr::message() !!}

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"referrerpolicy="no-referrer"></script>
  <script>
      $('.dropify').dropify();
  </script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    // District wise Upazilla Change
    $(document).ready(function() {
        $('.search_district').select2();
        $('#district_id').on('change', function() {
            var district_id = $(this).val();
            // console.log();
            if (district_id) {
                $.ajax({
                    url: "{{ url('/upzilla/ajax') }}/" + district_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // console.log(data)
                        var d = $('#upazila_id').empty();
                        $.each(data, function(key, value) {
                            $('#upazila_id').append('<option value="' + value.id + '">' + value.name_bn + '</option>');
                        });
                    },
                });
            }
        });
        $('#upazila_id').on('change', function() {
            var upazila_id = $(this).val();
            // console.log();
            if (upazila_id) {
                $.ajax({
                    url: "{{ url('/union/ajax') }}/" + upazila_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        // console.log(data)
                        var d = $('#union_id').empty();
                        $.each(data, function(key, value) {
                            $('#union_id').append('<option value="' + value.id + '">' + value.name_bn + '</option>');
                        });
                    },
                });
            }
        });
    });
</script>
</body>

</html>
