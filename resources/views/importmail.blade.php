<h1>Hi, {{ $user->name }} !!</h1>
<h3>Your User ID is : {{$user->user_id}}</h3>
<h4>Your password is your lastname and your Application ID </h4>
<p>Please Verify your account.</p>
<p>Click <a href="{{ url('/verifyEmail/'.$user->emailVerify_token)}}">here</a> to verify your account</p>