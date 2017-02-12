@extends('layouts.master')

@section('title') Register - @stop

@section('ct')

    <!-- Main Content -->
    <div class="container m-t-3">
      <div class="row">

        <!-- Register Form -->
        <div class="col-sm-8 login-register-form m-b-3">
          <div class="title"><span>Create An Account</span></div>
          <div class="row">
            <form action="{{ url('signup') }}" method="POST">
              <div class="form-group col-sm-6">
                <label for="nameInput">Name</label>
                <input type="hidden" name="_token" id="token" value="<?php echo csrf_token(); ?>">
                <input type="text" class="form-control" id="nameInput" name="name" placeholder="Name">
              </div>
              <div class="form-group col-sm-6">
                <label for="emailInput">Email address</label>
                <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email">
              </div>
              <div class="form-group col-sm-6">
                <label for="passwordInput">Password</label>
                <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password">
              </div>
              <div class="col-xs-12">
                <button type="submit" class="btn btn-theme"><i class="fa fa-long-arrow-right"></i> Register</button>
              </div>
            </form>
          </div>
        </div>
        <!-- End Register Form -->

        </div>
        </div>

        @endsection