
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Applicant</title> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      
      <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
      {{-- <link rel="stylesheet" href="{{asset('css/applicant/instagram.css')}}"> --}}
      <link rel="stylesheet" href="{{ asset('css/applicant/dashboard.css') }}">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="{{ asset('css/applicant/account.css') }}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">    
      <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="{{asset('js/sidebar.js')}}"></script>
      <link rel='stylesheet' href="{{ asset('css/navbar.css')}}">
     <script src="{{ asset('js/user/dashboard.js') }}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <script src="{{ asset('js/user/main.js') }}"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
   <body style="background-color:rgb(210, 210, 210);">

    
        <!-- Lets start making our side navigation menu -->

      <!-- now lets add a hamburger btn -->
      <span class="material-icons-outlined" id="ham">
        menu
        </span>

    <div class="side-nav">

      
        <span class="material-icons-outlined" id="close">
            close
            </span> 
            @php
                use App\Models\MainModel;
                 $id = session()->get('applicantID');
                $pic = MainModel::find($id);
                $currentpic = str_replace('images/','/images/profilepic/',$pic->profile_pic);
            @endphp 
            @if ($pic->profile_pic == "")
           
                <div class="form-icon">
                  
        
              </div>
           
            @else
            <div class='image-div'>
              <img class='profile-img' src="{{ $currentpic }}">
          </div>  
            @endif
          
            
        {{-- <header> <a class="navbar-brand" href="{{ url('/applicant') }}">Applicant</a></header>
      --}}
            {{-- <a href="#" class="active">
                <li><span class=" material-icons-outlined">
                        home
                    </span> <span class="menu">Home</span> </li>
            </a> --}}
            <ul> 
            <a href="{{ url('applicant/dashboard') }}">
                <li><span class="material-icons-outlined">
                        dashboard
                    </span><span class="menu">Dashboard</span></li>
            </a>
           
            
            
            <a href="{{ url('/applicant/account') }}">
                <li><span class="material-icons-outlined">
                    account_circle
                    </span><span class="menu">Account</span></li>
            </a>
            
            <a action="{{ url('/logout') }}" onclick="destroyData(this)" style="color:white;cursor: pointer;">
                <li><span class="material-icons-outlined">
                        logout
                    </span><span class="menu">Logout</span></li>
            </a>

        </ul>
        
        
    </div>

    
    @yield('content')
    @yield('changepassword')
    @include('sweetalert::alert')
   </body>
</html>
