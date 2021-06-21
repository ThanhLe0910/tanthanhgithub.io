function UpdateStatus(status,id){
    $.ajax({
        type:"POST",
        url:`/admin/update-status/${id}`,
        data:{
            status : status,
        },
        success : function(data) {
            document.getElementById("global-loader").setAttribute('style','display:block');
            window.location.href=document.getElementById("user").content;
        },
        error : function(err) {
        }
    });
}