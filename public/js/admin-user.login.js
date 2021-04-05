function adminUserLogin(){
    let api = document.getElementById("login_url").content;
    $.ajax({
        type:"POST",
        url:api,
        data:{
            email : document.getElementById("email").value,
            password : document.getElementById("password").value,
        },
        success : function(data) {
            window.location.href=document.getElementById("dashboard_view_url").content;
        },
        error : function(err) {
            let messages = err.responseJSON.response;
            console.log(err);
            var un;
            if( un != messages.email) {
                document.getElementById("login_message_email").innerText = messages.email[0];
            }
            if( un != messages.password) {
                document.getElementById("login_message_password").innerText = messages.password[0];
            }
        }
    });
}