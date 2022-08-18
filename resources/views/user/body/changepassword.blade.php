@extends('user.index')

@section('content')
    <!-- UPDATE PASSWORD -->
    <div class="update-pass">
        <div class="row">
            <form method="POST" class='changepass_form' action="{{url('/update-password')}}">
                @csrf
           
            <div class="col-sm-12" style="text-align: left">
                <label>Current Password : </label>
                <input type="password" name="currentpass">
            </div>
        </div>    
        <div class="row">
            <div class="col-sm-12"  style="text-align: left">
                <label>New Password : </label>
                <input type="password" class="changenewpass" name="newpass">    
            </div> 
        </div>         
        <div class="row"  style="text-align: left">
            <div class="col-sm-12">
                <label>Confirm Password :</label>
                <input type="password" class="confirmnewpass">
            </div>
        </div>    
         
        <div class="row">
            <div class="col-sm-6">
                <button type='submit' class='btn-success'>Submit</button>
            </div>
        </form>
            <div class="col-sm-6">
                <button class='btn-danger cancelchange' action="{{ url('/applicant/account')}}" onclick="cancelpass(this)">Cancel</button>
            </div>
        </div>
        
    </div>
@endsection