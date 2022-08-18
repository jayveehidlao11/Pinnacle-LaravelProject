
$(document).ready(function(){
	const message_form = [
		'Please enter your first name!',
		'Please enter your last name!',
		'Please enter your email!',
		'Please enter your Mobile number!',
		'Please choose a gender!',
		'Please enter your birthdate!',
		'Please enter your address!',
		'Please enter your postal code!',
		'Please enter your password!',
		'Password did not match!',
		'Please check the agreement!',
		'Successfully Registered!',
		'Password must be atleast 10 characters',
		'Characters only',
		'Please enter your birthplace',
	];
	
	var pattern = /[^a-zA-Z0-9\!\@\#\$\%\^\*\_\|]+/;
	var email_pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	$("#register-form").submit(function(){
		    //FirstName
			var fname = document.getElementById("fname")
			//LastName
			var lname = document.getElementById("lname")
		   if (pattern.test(fname.value) && fname.value !== "") {
			  swal({
		   title: "Missing",
		   text: message_form[13],
		   icon: "warning",
		   button: "OK",
		   });
			   fname.focus();
			   return false;
		   }else if(fname.value == ""){
				swal({
		   title: "Missing",
		   text: message_form[0],
		   icon: "warning",
		   button: "OK",
		   });
				   
			   fname.focus();
			   return false;
		   }
		   var user_age = document.getElementById('input_age');
		   if(user_age.value == null){
			swal({
				title: "Missing",
				text: "Please valid birthday",
				icon: "warning",
				button: "OK",
				});
				return false;
		   }
		  
		   if (lname.value == "") {
			   
				swal({
		   title: "Missing",
		   text: message_form[1],
		   icon: "warning",
		   button: "OK",
		   });
			   lname.focus();
			   return false;
		   }else if(pattern.test(lname.value) && lname.value !== "")
		   {
			   swal({
		   title: "Missing",
		   text: message_form[13],
		   icon: "warning",
		   button: "OK",
		   });
			   lname.focus();
			   return false;
		   }
		   
		   //middle name
		   // var mname = document.getElementById("mname")
		   // if(pattern.test(mname.value) && mname.value !== "")
		   // {
		   // 	swal({
		   // title: "Missing",
		   // text: message_form[13],
		   // icon: "warning",
		   // button: "OK",
		   // });
		   // 	mname.focus();
		   //     return false;
		   // }
		   
		   //Email
		   var email = document.getElementById("email")
		   if (email.value == "") {
			   
				swal({
		   title: "Missing",
		   text: message_form[2],
		   icon: "warning",
		   button: "OK",
		   });
			   email.focus();
			   return false;
		   }else if(email_pattern.test(email.value) && email.value !== "")
		   {
			   
		   }else{
			   swal({
		   title: "Email Format",
		   text: 'Invalid Email Format',
		   icon: "warning",
		   button: "OK",
		   });
			   email.focus();
			   return false;
		   }
		   
		   //Mobile
		   var mobile = document.getElementById("mobile")
		   if (mobile.value == "") {
			   swal({
		   title: "Missing",
		   text: message_form[3],
		   icon: "warning",
		   button: "OK",
		   });
			   mobile.focus();
			   return false;
		   }
		   
		   //Gender   
		   gender = document.querySelector('input[name="gender"]:checked');
		 //  gender = document.getElementById("gender")
		   if (gender == null) {
				swal({
		   title: "Missing",
		   text: message_form[4],
		   icon: "warning",
		   button: "OK",
		   });
			   
			   return false;
		   }
		   
		   //Dob
		   var dob = document.getElementById("dob")
		   if (dob.value == "") {
				swal({
		   title: "Missing",
		   text: message_form[5],
		   icon: "warning",
		   button: "OK",
		   });
			   dob.focus();
			   return false;
			}
		   
		   //Address
		   var address = document.getElementById("address")
		   if (address.value == "") {
				swal({
		   title: "Missing",
		   text: message_form[6],
		   icon: "warning",
		   button: "OK",
		   });
			   address.focus();
			   return false;
		   }
		   //City
		   /*var city = document.getElementById("city")
		   if (city.value == "") {
			   window.alert("please enter your city name");
			   city.focus();
			   return false;
		   }*/
		   
		   
		   // Pin
		   var postal = document.getElementById("postal")
		   if (postal.value == "") {
				swal({
		   title: "Missing",
		   text: message_form[7],
		   icon: "warning",
		   button: "OK",
		   });
			   postal.focus();
			   return false;
		   }
		 
		   // Password
		   var password = document.getElementById("password")
		   var cpass = document.getElementById('cpassword')
		  
		   var lowerCaseLetters = /[a-z]/g;
		   var numbers = /[0-9]/g;
		   var upperCaseLetters = /[A-Z]/g;
		   if(!password.value.match(lowerCaseLetters) ){
				swal({
				title: "Password pattern",
				text: 'Password must contain lowercase letters',
				icon: "warning",
				button: "OK",
			   });
				return false;	
			}
			 if(!password.value.match(upperCaseLetters) ){
				swal({
					title: "Password pattern",
					text: 'Password must contain uppercase letters',
					icon: "warning",
					button: "OK",
				   });
					return false;	
			}
			 if(!password.value.match(numbers)){
				swal({
					title: "Password pattern",
					text: 'Password must contain numbers',
					icon: "warning",
					button: "OK",
				   });
					return false;	
			}


		   if (password.length > 0 && password.length < 10) {
				
				swal({
		   		title: "Password length",
		   		text: message_form[13],
		   		icon: "warning",
		   		button: "OK",
		  		});
				   return false;
			   } else if (password.length == 0 || password.value == "") {
					swal({
		   title: "Missing",
		   text: message_form[8],
		   icon: "warning",
		   button: "OK",
		   });
				   return false;
			   } 
		   
		   //confirm password
		   if(cpass.value != password.value){
				swal({
		   title: "Warning",
		   text: message_form[9],
		   icon: "warning",
		   button: "OK",
		   });
			   cpass.focus();
			   return false;
		   }
		   var agreement = document.querySelector('input[name="agreement"]:checked');
		   if (agreement === null) {
				swal({
		   title: "Missing",
		   text: message_form[10],
		   icon: "warning",
		   button: "OK",
		   });
			   
			   return false;
		   }
	   
		   var bplace = document.getElementById('bplace');
		   if(bplace.value ==""){
	   
			   swal({
				   title: "Missing",
				   text: message_form[14],
				   icon: "warning",
				   button: "OK",
				   });
				   bplace.focus();
			   return false;
		   }
		   
		   // if all true
		//    swal({
		//    title: "Registered",
		//    text: message_form[11],
		//    icon: "success",
		//    button: "OK",
		//    });
		   //getControlValues();
	});
});




function onlyNumberKey(evt) {

    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}
function preventNumbers(e){
	var keyCode = (e.keyCode ? e.keyCode : e.which);
	if(keyCode > 47 && keyCode < 58 || keyCode > 95 && keyCode < 107)
	{
		e.preventDefault();
	}
}
function agecalculator(){
		   var dNow = new Date();
        
        var birthday = document.getElementById('dob');
        var dob = new Date(birthday.value);

        var cmm = dNow.getMonth()+1;
        var cdd = dNow.getDate();
        var cyy = dNow.getFullYear();

        var dd = dob.getDate()+1;
        var mm = dob.getMonth()+1;
        var yy = dob.getFullYear();

        var agebyyear = Math.abs(yy - dNow.getFullYear());
       
        if((agebyyear > 12 && mm < cmm ) || (agebyyear > 12 && mm == cmm && dd <= cdd))
        {
            $(".agehere").html(agebyyear+ " years old");
            $('#input_age').val(agebyyear);
        }else if((agebyyear > 12 && mm > cmm ) || (agebyyear > 12 && mm == cmm && dd >= cdd)){
            $(".agehere").html(agebyyear - 1 + " years old");
            $('#input_age').val(agebyyear - 1);
        }
        else 
        {
			
            $(".agehere").html("Underage");
			$('#input_age').val(null);
        }
    

}
