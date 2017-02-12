@extends('layouts.master')

@section('title') Login - @stop

@section('ct')
    <!-- Main Content -->
    <div class="container m-t-3">
      <div class="row">

        <!-- Login Form -->
        <div class="col-sm-6 col-xs-12 login-register-form m-b-3">
          <div class="title"><span>Please Enter Your Information</span></div>
          <form action="{{url('/logins')}}" method="POST">
            <div class="form-group">
              <label for="emailInputLogin">Email address</label>
              <input type="email" class="form-control" name="email" id="emailInputLogin" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="passwordInputLogin">Password</label>
              <input type="password" class="form-control" name="password" id="passwordInputLogin" placeholder="Password">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="checkbox">
              <label>
                <input type="checkbox"><span> Remember me</span>
              </label>
            </div>
            <button type="submit" class="btn btn-default btn-theme"><i class="fa fa-long-arrow-right"></i> Login</button>
            <button type="button" class="btn btn-default btn-theme pull-right">Forgot your password ?</button>
          </form>
        </div>
        <!-- End Login Form --> 

      </div>
    </div>
    <!-- End Main Content -->

    @stop