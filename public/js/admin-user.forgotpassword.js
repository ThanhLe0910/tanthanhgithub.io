function adminUserForgot(){
    let api = document.getElementById("forgotpassword_url").content;
    $.ajax({
        type:"POST",
        url:api,
        data:{
            email : document.getElementById("email").value,
        },
        success : function(data) {
            document.getElementById("code-forgot-password-msg").innerText =  alert('Please check your email for the code');
            window.location.href=document.getElementById("resetpassword_url").content;
        },
        error : function(err) {
            let messages = err.responseJSON.response;
            console.log(err);
            var un;
            if( un != messages.email) {
                document.getElementById("forgotpassword_message_email").innerText = messages.email[0];
            }
        }
    });
}