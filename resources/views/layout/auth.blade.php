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

<link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
</head>

<body>
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-6 col-sm-6 offset-3">
            <div id="">
                <div class="auth-logo text-center mt-5">
                    <img  src="{{ asset('./images/Login-01.png')}}" width="120px" height="120px" alt="">
                    <h5 style="color:rgb(16, 139, 239)" class="py-3">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h5>
                    <h2 style="color:rgb(16, 139, 239)" class="py-2">২নং চরপার্বতী ইউনিয়ন পরিষদ</h2>
                    <h5 style="background-color: rgb(16, 139, 239); color:white;" class="p-3">কোম্পানীগঞ্জ,নোয়াখালী |</h5>
                </div>

                @yield('content')

            </div>
        </div>
        <footer class="no-print mt-5">
            <div class="container">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Bangladesh Digital Gateway Ltd</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                            href="https://bdgl.online/">BDGL.</a></p>
                    </div>
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
