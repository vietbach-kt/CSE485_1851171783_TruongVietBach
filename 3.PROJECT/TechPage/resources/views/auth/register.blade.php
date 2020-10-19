@extends('layouts.master')
@section('title', 'Sign up')
@section('content')
<div class="container col-md-6 col-md-offset-3">
  <div class="well well bs-component">
    <form class="form-horizontal" method="post">
      @foreach ($errors->all() as $error)
      <p class="alert alert-danger">{{ $error }}</p>
      @endforeach
      <fieldset>
        <legend>Register an account</legend>
        <div class="form-group">
          <label for="name" class="col-lg-2 control-label">Name</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="name" placehol der="Name" name="name" value="{{ old('name') }}">
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-lg-2 control-label">Email</label>
          <div class="col-lg-10">
            <input type="email" class="form-control" id="email" placeh older="Email" name="email" value="{{ old('email') }}">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" name="password">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-lg-2 control-label">Confirm password</label>
          <div class="col-lg-10">
            <input type="password" class="form-control" name="password_confirmation">
          </div>
        </div>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <button type="reset" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
@endsection

<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
      </div>

      <form class="login100-form validate-form">
        <span class="login100-form-title">
          Member Login
        </span>

        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          <input class="input100" type="text" name="email" placeholder="Email">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
          <input class="input100" type="password" name="pass" placeholder="Password">
          <span class="focus-input100"></span>
          <span class="symbol-input100">
            <i class="fa fa-lock" aria-hidden="true"></i>
          </span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn">
            Login
          </button>
        </div>

        <div class="text-center p-t-12">
          <span class="txt1">
            Forgot
          </span>
          <a class="txt2" href="#">
            Username / Password?
          </a>
        </div>

        <div class="text-center p-t-136">
          <a class="txt2" href="#">
            Create your Account
            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
          </a>
        </div>
      </form>
    </div>
  </div>
</div>