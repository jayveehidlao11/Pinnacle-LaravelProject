<html>
<head>
	<title>Application</title>

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <!-- css -->
	<link rel='stylesheet' href="{{ asset('css/navbar.css')}}">
   <link rel="stylesheet" href="{{ asset('css/login.css')}}">
   <link rel="stylesheet" href="{{ asset('css/responsiveRegistration.css') }}">
   {{-- <link rel="stylesheet" href="{{ asset('css/sidebar.css')}}"> --}}
   <!-- -->
   <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- scripts -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   
  <!-- -->
  {{-- <script src="{{ asset('js/sidebar.js')}}"></script> --}}
  <script src="{{ asset('js/responsiveLogin2.js') }}"></script>
   <script src="{{ asset('js/responsiveLogin.js') }}"></script>
   <script src="{{ asset('js/responsiveRegistration.js')}}"></script>
   
   
       
</head>
<body>
   <!-- SIDE NAVBAR -->
 
   {{-- <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Clients</a>
      <a href="#">Contact</a>
    </div> --}}
    
   <!-- TOP NAVBAR -->
   <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
   <div class="container">
      {{-- SIDEBAR BUTTON <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;</span> --}}
      <!-- guest -->
      <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleCenteredNav" aria-controls="navbarsExampleCenteredNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>    
      <div class="collapse navbar-collapse navbar-collapse justify-content-md-end" id="navbarsExampleCenteredNav">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="{{ url('/login') }}">Login </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ url('/register') }}">Register</a>
            </li>
            
            <!-- AFTER LOGGING IN -->
            {{-- <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Username</a>
               <div class="dropdown-menu" aria-labelledby="dropdown03">
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Logout</a>
             
               </div>
            </li> --}}
         </ul>
      </div>
   </div>
</nav>

@yield('content')
@include('sweetalert::alert')
</body>
</html>