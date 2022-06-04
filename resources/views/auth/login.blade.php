@extends('auth.layouts.auth')
@push('title')
    <title>Admin Login</title>
@endpush
@section('content')
    <div class="container d-flex justify-content-center align-items-center " style="height: 600px; flex-direction:column">
        <div class=" w-50 text-center pt-2 " style="height: 50px; font-size:20px; font-weight:bold">
            <div class="login-logo">
                <a href="{{ url('/') }}">
                    <span style="color: black;" class="">
                        Admin
                    </span>
                </a>
            </div>
        </div>

        <div class=" w-50  p-5">

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" id="adminemail" aria-describedby="emailHelpId" placeholder="">

            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="adminpassword" placeholder="">
            </div>
            <div class="form-check-inline ">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember" value="checkedValue">
                    Remember me
                </label>

            </div><br>
            <button type="submit" class="btn btn-primary w-25 mt-3">Login</button>
        </div>
        <div class="card w-50 text-center pt-2 " style="height: 50px; ">
            <div class="login-logo">
                <p>If you are new on site. please <a href="{{url('/signup')}}">Sigup</a> first.</p>
            </div>
        </div>

    </div>
@endsection
