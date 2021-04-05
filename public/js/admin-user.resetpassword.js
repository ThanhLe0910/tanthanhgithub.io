function adminUserResetPassword(){
    let api = document.getElementById("reset_password_url").content;
    $.ajax({
        type:"POST",
        url:api,
        data:{
            code : document.getElementById("code").value,
            email : document.getElementById("email").value,
        },
        success : function(data) {
            document.getElementById("reset-password-box-msg").innerText =  alert('You have successfully updated your password, Please check your email to get the password');
            window.location.href=document.getElementById("login_url").content;
        },
        error : function(err) {
            let messages = err.responseJSON.response;
            console.log(err);
            var un;
            if( un != messages.email) {
                document.getElementById("reset_message_code").innerText = messages.email[0];
            }
            if( un != messages.code) {
                document.getElementById("reset_message_email").innerText = messages.cdoe[0];
            }
        }
    });
}