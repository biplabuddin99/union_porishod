<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ইউপি ম্যানেজেমেন্ট সিস্টেম | @yield('siteTitle', 'Chittagong')</title>
<link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
<link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" referrerpolicy="no-referrer" />
<link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  {{-- tostr css --}}
  <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>

  <style>
   body{
    font-family: 'AdorshoLipi', sans-serif !important;
   }
    @media print

    {
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
				<div class="sidebar-header position-relative">
					<div class="mb-5">
						{{-- <div class="logo text-center mt-5">
                            <img  src="{{ asset('./images/Login-01.png')}}" width="100px" height="100px" alt="">
							<a href="{{route(currentUser().'.dashboard')}}">ড্যাশবোর্ড  </a>
						</div> --}}
						{{-- <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
							<div class="form-check form-switch fs-6">
								<input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
								<label class="form-check-label" ></label>
							</div>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
						</div>
						<div class="sidebar-toggler  x">
							<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
						</div> --}}
					</div>
				</div>
				<div class="sidebar-menu">
                    @include('layout.nav.'.currentUser())
				</div>
			</div>
        </div>
        <div id="main">
            <header class="mb-3 no-print mt-0">
                <div class="dropdown float-end mt-3 pe-5">
                    <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle pe-5" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 2rem;">
                        <div class="text">
                            <h6 class="user-dropdown-name">{{encryptor('decrypt', request()->session()->get('userName'))}} <span class="user-dropdown-status text-sm text-muted">({{currentUser()}})</span></h6>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                        <li><a class="dropdown-item" href="#">{{__('My Account') }}</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
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
							{{-- <div class="col-12 col-md-6 order-md-2 order-first">
								<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
									<ol class="breadcrumb mb-0">
                                        @hasSection('pageSubTitle')
										    <li class="breadcrumb-item"><a href="{{route(currentUser().'.dashboard')}}">{{__('dashboard') }}</a></li>
										    <li class="breadcrumb-item active" aria-current="page">@yield('pageSubTitle')</li>
                                        @else
                                            <li class="breadcrumb-item active">{{__('dashboard') }}</li>
                                        @endif
									</ol>
								</nav>
							</div> --}}
						</div>
					</div>
				</div>
				<div class="page-content">
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
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
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
    $( ".datepicker" ).datepicker();
</script>
  {{-- tostr --}}
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
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
