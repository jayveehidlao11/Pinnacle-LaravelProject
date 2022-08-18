$(document).ready(function(){
    $(".changepass_form").submit(function(){
        var newpass= $(".changenewpass").val();
        var confirm = $(".confirmnewpass").val();
        var current = $(".currentpass").val();
        var lowerCaseLetters = /[a-z]/g;
        var numbers = /[0-9]/g;
        var upperCaseLetters = /[A-Z]/g;
        if(newpass == "" || confirm == "" || current == ""){
            swal({
                title: "Missing!",
                text: "Please Fill up the fields!",
                icon: "warning",
                button: "OK",
              });
            return false;
        }


        if(!newpass.match(lowerCaseLetters) ){
            swal({
            title: "Password pattern",
            text: 'Password must contain lowercase letters',
            icon: "warning",
            button: "OK",
           });
            return false;	
        }
         if(!newpass.match(upperCaseLetters) ){
            swal({
                title: "Password pattern",
                text: 'Password must contain uppercase letters',
                icon: "warning",
                button: "OK",
               });
                return false;	
        }
         if(!newpass.match(numbers)){
            swal({
                title: "Password pattern",
                text: 'Password must contain numbers',
                icon: "warning",
                button: "OK",
               });
                return false;	
        }
        if(password.length > 0 && password.length < 10){
            swal({
                title: "Password length",
                text: 'Atleast 10 characters',
                icon: "warning",
                button: "OK",
               });
                return false;
        }

        if(newpass != confirm){
            
            swal({
                title: "Password did not match!",
                text: "",
                icon: "warning",
                button: "OK",
              });
            $(".changenewpass").val("");
            $(".confirmnewpass").val("");
            return false;
        }

        
        return true;
    });
   
   
   $(".cancelbtn").click(function(){
    $(".update-profile").hide();
    $(".profile").show();
   });
   $(".btnEdit").click(function(){
    $(".update-profile").show();
    $(".profile").hide();
   });
});
function cancelpass(link){
   
    window.location = $(link).attr('action');
   
}
function redirect(link){
    window.location = $(link).attr('action');
}
function destroyData(link){
    swal({
        icon: 'warning',
        title: 'Logout?',
        text: 'Are you sure you want to logout?',
        buttons: ["No", "Yes"],
        dangerMode: true,
    })
        .then(isClose => {
            if (isClose) {
                window.location = $(link).attr('action');
            } else {
               
            }
        });
}
function agecalculator(){
    var dNow = new Date();
 
 var birthday = document.getElementById('bday');
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
     $(".age").html(agebyyear+ " years old");
     $('#age').val(agebyyear);
 }else if((agebyyear > 12 && mm > cmm ) || (agebyyear > 12 && mm == cmm && dd >= cdd)){
     $(".age").html(agebyyear - 1 + " years old");
     $('#age').val(agebyyear - 1);
 }
 else 
 {
     $(".age").html("Underage");
 }


}