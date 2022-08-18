$(document).ready(function(){
	
	var lowerCaseLetters = /[a-z]/g;
	var numbers = /[0-9]/g;
	var upperCaseLetters = /[A-Z]/g;
  var email_pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
//   var pattern = /[^a-zA-Z0-9\!\@\#\$\%\^\*\_\|]+/;
  $("#registeradmin").submit(function(){
	  let name = $("#name").val();
	  let password =$("#password").val();
	  let cpass = $("#cpassword").val();
	  let email = $("#email").val();
		
	  
	  if(name == ""){
		swal({
		title: "Missing",
		text: 'Please insert your fullname',
		icon: "warning",
		button: "OK",
		});
		$("#name").focus();
		return false;
		
	  }
	  
	  if(email == ""){
		swal({
		title: "Missing",
		text: 'Please insert your email',
		icon: "warning",
		button: "OK",
		});
	
		return false;
	  }else if(email_pattern.test(email) && email != "")
	  {
		 
	  }else{
		swal({
		title: "Missing",
		text: 'Invalid Email format!',
		icon: "warning",
		button: "OK",
		});
		
		  return false;
	  }


	
		   if(!password.match(lowerCaseLetters) ){
				swal({
				title: "Password pattern",
				text: 'Password must contain lowercase letters',
				icon: "warning",
				button: "OK",
			   });
				return false;	
			}
			 if(!password.match(upperCaseLetters) ){
				swal({
					title: "Password pattern",
					text: 'Password must contain uppercase letters',
					icon: "warning",
					button: "OK",
				   });
					return false;	
			}
			 if(!password.match(numbers)){
				swal({
					title: "Password pattern",
					text: 'Password must contain numbers',
					icon: "warning",
					button: "OK",
				   });
					return false;	
			}

	  if(password == ""){
		swal({
		title: "Missing",
		text: 'Please insert your password',
		icon: "warning",
		button: "OK",
		});
		
		return false;
	  }else if(password.length > 0 && password.length < 10){
		  swal({
		title: "Length",
		text: 'Atleast 10 characters',
		icon: "warning",
		button: "OK",
		});
		
		  return false;
	  }
	  if(cpass == ""){
		swal({
		title: "Missing",
		text: 'Please confirm your password',
		icon: "warning",
		button: "OK",
		});
	
		return false;
	  }else if(cpass != password){
		  swal({
		title: "Warning",
		text: 'Password did not match!',
		icon: "warning",
		button: "OK",
		});
		  return false;
	  }
	 
	
	  
		
  });
  
 })