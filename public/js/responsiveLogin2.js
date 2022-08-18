$(document).ready(function(){
    $("#loginform").submit(function(){
        var applicationID = $("input[name='userName']").val();
        var applicationPass = $("input[name='userPassword']").val();
        if(applicationID == "" && applicationPass == "")
        {
          swal({
            title: "Missing",
            text: 'Please fill up the fields!',
            icon: "warning",
            button: "OK",
            });
            return false;
        }else if((applicationID != "" && applicationPass ==""))
        {
            swal({
                title: "Missing",
                text: 'Please enter your password',
                icon: "warning",
                button: "OK",
                });
          return false;
        }else if((applicationID == "" && applicationPass !=""))
        {
            swal({
                title: "Missing",
                text: 'Please enter your Application ID',
                icon: "warning",
                button: "OK",
                });
          return false;
        }
        else
        {
            swal({
                title: "Logging In",
                text: 'Successfully Log In',
                icon: "success",
                button: "OK",
                });
            return true;
        }
    });
});