@extends('layouts.main')

@section('content')
<div class="logos text-center">
    <h1>Application Form</h1>
  </div>
  @if (Session::has('Name'))
  <div class="alert alert-warning">{{ Session::get('Name') }} </div>
@endif
@if (Session::has('Email'))
<div class="alert alert-warning">{{ Session::get('Email') }} </div>
@endif
@if (Session::has('EmailAndName'))
<div class="alert alert-warning">{{ Session::get('EmailAndName') }} </div>
@endif

<div class="container" style="border-radius: 5px; background-color:#f2f2f2;padding: 20px;">
<form method="POST" action="{{ route('registered') }}" id="register-form">
    @csrf

    
    <div class="row">
        <div class="col-10">
            <label for="fname">First Name:</label>
        </div>
        <div class="col-90">
            <input type="text" id="fname" onkeydown='preventNumbers(event)' onkeyup='preventNumbers(event)' name="firstname" value="{{ old('firstname')}}" placeholder="Enter your first name">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="lname">Last Name:</label>
        </div>
        <div class="col-90">
            <input type="text" id="lname" name="lastname" value="{{ old('lastname')}}" onkeydown='preventNumbers(event)' onkeyup='preventNumbers(event)' placeholder="Enter your last name">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="mname">Middle Name:</label>
        </div>
        <div class="col-90">
            <input type="text" id='mname' name="middlename" value="{{ old('middlename')}}" onkeydown='preventNumbers(event)' onkeyup='preventNumbers(event)' placeholder="Enter your middle name(optional)">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="email">Email:</label>
        </div>
        <div class="col-90">
            <input type="email" id="email" name="email" value="{{ old('email')}}" placeholder="it should contain @,.">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="mobile">Mobile:</label>
        </div>
        <div class="col-90">
            <input type="tel" id="mobile" name="mobile" value="{{ old('mobile')}}" onkeypress="return onlyNumberKey(event)" maxlength=11 placeholder="only 11 digits are allowed">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="gender" required>Gender:</label>
        </div>
        <div class="col-90">
            <input type="radio" id="male" name="gender" value="male" @if (old('gender'))
                checked
            @endif/>Male
            <input type="radio" id="female" name="gender" value="female" @if (old('gender'))
            checked
        @endif/>Female
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="dob">Date Of Birth:</label>
        </div>
        <div class="col-90">
            <input type="Date" class='dob' id="dob" name="dob" value="{{ old('dob')}}" onchange='agecalculator()'>
            <input type='hidden' id='input_age' value="{{ old('agevalue')}}" name="agevalue"> 
            &nbsp&nbsp&nbsp <span class='agehere'></span>
         
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="bplace">Birthplace</label>
        </div>
        <div class="col-90">
            <input type="text" id='bplace' value="{{ old('bplace')}}" name="bplace" placeholder="Enter your Birthplace">
        </div>
    </div>
    
    <div class="row">
        <div class="col-10">
            <label for="address">Address:</label>
        </div>
        <div class="col-90">
            <textarea name="address" id="address" cols="30" rows="10">{{ old('address')}}</textarea>
        </div>
    </div>
    
    <div class="row">
        <div class="col-10">
            <label for="pincode">Postal Code:</label>
        </div>
        <div class="col-90">
            <input type="number" id="postal" value="{{ old('postal')}}" name="postal" maxlength="6">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="password">Password:</label>
        </div>
        <div class="col-90">
            <input type="password" id="password" name="password" maxlength="20" value="{{ old('password')}}">
        </div>
    </div>
    <div class="row">
        <div class="col-10">
            <label for="password">Re-type Password:</label>
        </div>
        <div class="col-90">
            <input type="password" id="cpassword" name="confirmpassword" maxlength="20">
        </div>
    </div>
     <div class="row">
        <div class="col-10">
            
        </div>
        <div class="col-90">
        <input type="checkbox" id="cs" name="agreement" value="1">Agreed to terms and condition
            
           </div>
    </div>
    <div class="row">
        <input type="submit" value="Registered" >
    </div>
        
</div>  
@endsection