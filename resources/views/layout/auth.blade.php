<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ইউপি ম্যানেজেমেন্ট সিস্টেম | @yield('siteTitle', 'Chittagong')</title>

<link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
<link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
</head>

<body style="font-family: 'AdorshoLipi', sans-serif !important;">
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-6 offset-sm-3">
            <div id="">
                <div class="auth-logo text-center mt-5">
                    <img  src="{{ asset('./images/Login-01.png')}}" width="120px" height="120px" alt="">
                    <h6 style="color:rgb(16, 139, 239)" class="py-2">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h6>
                    <h4 style="background-color: rgb(16, 139, 239); color:white;" class="py-3">চিরাম ইউনিয়ন পরিষদ</h4>
                    <h6 style="color:rgb(20, 19, 19);" class="p-3">বারহাট্টা,নেত্রকোণা</h6>
                    <h5 style="background-color: rgb(180, 197, 211); color:rgb(25, 68, 207); border: 3px solid rgba(104, 157, 201, 0.774);" class="py-2 mb-0">স্মার্ট ইউপি ম্যানেজমেন্ট সিস্টেম</h5>
                </div>
                @yield('content')
            </div>
        </div>
        <footer class="no-print mt-5">
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
@stack('scripts')

</body>

</html>
