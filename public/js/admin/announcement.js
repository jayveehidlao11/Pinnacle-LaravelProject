$(document).ready(function(){
    // $("#edit-annc").click(function(){
	// 	$(".announcements").hide();
	// 	$(".edit-announcement").show();
	// });
    // $(".cancel-edit").click(function(){
    //     $(".announcements").show();
	// 	$(".edit-announcement").hide();
    // });
    $(".button-29").click(function(){
        $(".announcements").toggle();
       
    });

    $(".btn-success").click(function(){ 
        var html = $(".clone").html();
        $(".increment").after(html);
    });

    $("body").on("click",".btn-danger",function(){ 
        $(this).parents(".control-group").remove();
    });


    
});
function deleteimage(link){
    //alert($(link).attr('action'));
    swal({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'Once deleted, you will not be able to recover this picture',
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
function destroyData(link) {
    swal({
        icon: 'warning',
        title: 'Are you sure?',
        text: 'Logging Out?',
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