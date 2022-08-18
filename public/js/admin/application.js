$(document).ready(function(){
  $("#btn-import").click(function(){
    $(".column-import").toggle();
    $(".column-export").hide();
  });
  $("#btn-export").click(function(){
    $(".column-export").toggle();
    $(".column-import").hide();
  });

  $("#importfile").submit(function(){
    var file = $("#file").val();
    if(file == ""){
      swal({
          title: "Warning",
          text: "Please select an excel file!",
          icon: "warning",
          button: "OK",
        });
        
      return false;
  }else{
      return true;
  }
  });

  $("#export").submit(function(){
    var file = $("#exportfile").val();
    if(file == ""){
      swal({
          title: "Warning",
          text: "Please select file type!",
          icon: "warning",
          button: "OK",
        });
        
      return false;
  }else{

    swal({
      title: "Exported!",
      text: "Successfully Exported!",
      icon: "success",
      button: "OK",
    });
      return true;
  }
  });
});
function deleteapplicant(link){
  swal({
    icon: 'warning',
    title: 'Delete?',
    text: 'Are you sure you want to remove this applicant?',
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