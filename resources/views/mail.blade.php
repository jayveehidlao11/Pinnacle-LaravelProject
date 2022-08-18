<h1>Hi, {{ $user->name }} !!</h1>
<h3>Your Application ID is : {{$user->user_id}}</h3>
<p>Please Verify your account.</p>
<p>Click <a href="{{ url('/verifyEmail/'.$user->emailVerify_token)}}">here</a> to verify your account</p>