@extends('layouts.main')

@section('content')
    <!-- partial:index.partial.html -->
<div class="logo text-center">
   
  </div>
  <div class="wrapper">
    <div class="inner-warpper text-center">
      <h2 class="title">Login </h2>
      <form action="{{ route('login-user') }}" method="POST" >
        @csrf

        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }} </div>
        @endif
        @if (Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }} </div>
       @endif

        <div class="input-group">
          <label class="palceholder" for="userName">Application ID</label>
          <input class="form-control" name="user_id" id="userName" type="text" placeholder="" value="{{ old('user_id') }}" />
          <span class="lighting"></span>
          
        </div>
        <span class="text-danger">@error('user_id'){{ $message }} @enderror </span>
        <div class="input-group">
          <label class="palceholder" for="userPassword">Password</label>
          <input class="form-control" name="password" id="userPassword" type="password" placeholder=""  value="{{ old('password') }}"/>
          <span class="lighting"></span>
          
        </div>
        <span class="text-danger">@error('password'){{ $message }} @enderror </span>
        <button type="submit" id="login">Login</button>
      </form>
        <div class="clearfix supporter">
          <div class="pull-left remember-me">
            <input id="rememberMe" type="checkbox">
            <label for="rememberMe">Remember Me</label>
          </div>
          <a class="forgot pull-right" href="#">Forgot Password?</a>
        </div>
      
    </div>
    <div class="signup-wrapper text-center">
      <a href="{{ url('/register') }}">Don't have an accout? <span class="text-primary">Create One</span></a>
    </div>
  </div>
  
  
  
  
@endsection