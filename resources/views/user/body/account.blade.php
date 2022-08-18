@extends('user.index')

@section('changepassword')
<!-- PROFILE -->
    <div class="profile">
        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            .{{ Session::get('success') }}
          </div>
       
    @endif
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
          <div class="row">
            <div class="col-sm-12">
                <h1>Application ID : {{ '2022A'.$acc['id'] }}</h1>
            </div>
          </div>
        <div class="row">
            
            <div class="col-sm-4">First Name : {{ $acc['firstname']}}</div>
            <div class="col-sm-4">Middle Name : {{ $acc['middlename']}}</div>
            <div class="col-sm-4">Last Name : {{ $acc['lastname']}}</div>
        </div>

        <div class="row bday-age">
            <div class="col-sm-3">Birthday : {{ $acc['birthday']}}</div>
            <div class="col-sm-2">Age : {{ $acc['age']}}</div>
            <div class="col-sm-7">Birthplace : {{ $acc['birthplace']}}</div>
        </div>
        
        <div class="row gen-em-mob">
            <div class="col-sm-3">Gender : {{ $acc['gender']}}</div>
            <div class="col-sm-4">Email : {{ $acc['email']}}</div>
            <div class="col-sm-5">Mobile No. : {{ $acc['phonenumber']}}</div>
        </div>

        <div class="row address">
            <div class="col-sm-8">Address : {{ $acc['address']}}</div>
            <div class="col-sm-4">Postal Code: {{ $acc['postalcode']}}</div>
        </div>
        
         
        <div class="row">
            <div class="col-sm-12">
                <a href="#"  style="width:100%; height=30%; font-size:20px" class='btn btn-primary btnEdit'>Edit</a>
            </div>
        </div>
    </div> 


    <!-- UPDATE DIV -->
    <div class="update-profile">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-icon">
                    <span><i class="icon icon-user"></i></span>
                </div>
            </div>
        </div>
       
        <form method="post" id="update-form" action="{{ url('update-data/'.$acc['id']) }}" enctype="multipart/form-data" >
            {{ @csrf_field() }}
            @method('PUT')
       <div class="row">
            <div class="col-sm-4">
                <input type='text' placeholder="First Name" name='fname' value=" {{ $acc['firstname']}}">
            </div>
            <div class="col-sm-4">
                <input type='text' placeholder="Middle Name" name='mname' value=" {{ $acc['middlename']}}">
            </div>
            <div class="col-sm-4">
                <input type='text' placeholder="Last Name" name='lname' value=" {{ $acc['lastname']}}">
            </div>
       </div>
       <div class="row ">
            <div class="col-sm-3">
                <input type='date' onchange="agecalculator()" id="bday" style="width:100%" name="bday" value="{{ $acc['birthday']}}">
            </div>
            <div class="col-sm-2">
                <span class='age'> {{ $acc['age']}}</span>   
                <input type='hidden' name='age' id="age" value="{{ $acc['age'] }}" /> 
            </div>
            <div class="col-sm-7">
                <input type='text' style="width:100%" name="bplace" placeholder="Birthplace" value=" {{ $acc['birthplace']}}"/>   
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <select style="width: 70%" name="gender">
                    <option value="male"  {{ $acc['gender']=="male" ? "selected" : "" }}>Male</option>
                    <option value="female"  {{ $acc['gender']=="female" ? "selected" : "" }}>Female</option>
                </select>
            </div>
            <div class="col-sm-7" >
                <input type='text' placeholder="Email" name="email" value=" {{ $acc['email']}}" style="width:100%">
            </div>
            <div class="col-sm-3">
                <input type='tel' placeholder="Phonenumber" name="phonenumber" value="{{ $acc['phonenumber']}}">
            </div>
        </div>

        <div class="row" style="text-align:left">
            <div class="col-sm-9">
                <textarea style="width:100%;" name="address">
                    {{ $acc['address']}}
                </textarea>
            </div>
            <div class="col-sm-3">
                <input type='text' placeholder="Postal Code" name="postal" value=" {{ $acc['postalcode']}}">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="text-align: left">
                <label>Password :</label>
                <a action="{{ url('/admin/change-password') }}" onclick="redirect(this)" class="changepass" style="cursor:pointer">  Change Password?</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                    <label>Update Profile Picture</label>
                    <input type="file" name="profilepic" class="form-control">
                 
            </div>
        </div>
       
        <div class="row">
            <div class="col-sm-6">
                <button type='submit' style="width:100%; height=30%; font-size:20px" class='btn btn-success'>Update</button>
            </div>
        </form>
            <div class="col-sm-6">
                <a href="#"  style="width:100%; height=30%; font-size:20px" class='btn btn-primary cancelbtn'>Cancel</a>
            </div>
        </div>
    </div>

 

    
@endsection