<h1>Hi, {{ $admin->name}}</h1>
<h4>Your Admin ID is :{{$admin->user_id}}</h4>
<p>Click <a href="{{ url('/verifyEmail/'.$admin->emailVerify_token)}}">here</a> to verify your admin account</p>