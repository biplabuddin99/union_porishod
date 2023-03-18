@extends('layout.auth')

@section('content')
<section style="border: 15px solid rgba(228, 217, 217, 0.685); padding: 10px">
<div class="responsive p-4"> 
    @if(Session::has('response'))
    {!!Session::get('response')['message']!!}
    @endif
    <h4 class="py-2">Login To Your Account</h4>
    <form action="{{route('login.check')}}" method="post">
        @csrf
        <div class="form-group position-relative has-icon-left mb-3">
            <input name="PhoneNumber" value="{{old('PhoneNumber')}}" type="text" class="form-control form-control-xl" placeholder="Phone Number">
            <div class="form-control-icon">
                <i class="bi bi-phone"></i>
            </div>
            @if($errors->has('PhoneNumber'))
                <small class="d-block text-danger">
                    {{$errors->first('PhoneNumber')}}
                </small>
            @endif
        </div>
        <div class="form-group position-relative has-icon-left mb-3">
            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            @if($errors->has('password'))
                <small class="d-block text-danger">
                    {{$errors->first('password')}}
                </small>
            @endif
        </div>
        <div class="row">
            <div class="col-8">                                        
                <input class="form-check-input" type="checkbox" name="" id="remark" value="" />
                <label  class="form-label" for="remark"><h4>Remember me</h4></label>
            </div>
            <div class="col-lg-4 col-sm-4">
                <button type="submit" class="btn btn-success btn-block btn-lg shadow-lg mt-2">Login</button>
            </div>
        </div>
    </form>
    <div class="">
        <h3 style="color:black" class="py-2">Forgot Your password?</h3>
        <h5 style="color:black">no worries,click <a href="#">here</a> to reset your password.</h5>
        {{-- <p class="text-gray-600 m-0">Don't have an account? <a href="{{route('register')}}" class="font-bold">Sign
                up</a>.</p>
        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p> --}}
    </div>
</div>
</section>


@endsection
