@extends('auth.layouts.auth')
@push('title')
    <title>Admin Signup</title>
@endpush
@section('content')
    <div class="container d-flex justify-content-center align-items-center " style="height: 600px; flex-direction:column">
        <div class=" w-50 text-center pt-2 " style="height: 50px; font-size:20px; font-weight:bold">
            <div class="login-logo">
                <a href="{{ url('/signup') }}">
                    <span style="color: black;" class="">
                        Admin SignUp
                    </span>
                </a>
            </div>
        </div>

        <div class=" w-50  p-5">

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="useremail" aria-describedby="emailHelpId" placeholder="">

            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="adminpassword" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Comfirm Password</label>
                <input type="cpassword" class="form-control" name="cpassword" id="Cadminpassword" placeholder="">
            </div>
            <div class="form-check-inline ">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" value="checkedValue">
                    Remember me
                </label>

            </div><br>
            <button type="submit" class="btn btn-primary w-25 mt-3">SignUp</button>
        </div>
        <div class="card w-50 text-center pt-2 " style="height: 50px; ">
            <div class="login-logo">
                <p>If you are old on site. <a href="{{url('/')}}">Login</a> here.</p>
            </div>
        </div>

    </div>
@endsection
