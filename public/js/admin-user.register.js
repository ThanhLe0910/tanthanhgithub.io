function adminUserRegister(){
    let api = document.getElementById("register_url").content;
    $.ajax({
        type:"POST",
        url:api,
        data:{
            name : document.getElementById("name").value,
            email : document.getElementById("email").value,
            password : document.getElementById("password").value,
            password_confirmation : document.getElementById("password_confirmation").value
        },
        success : function(data) {
            window.location.href=document.getElementById("login_view_url").content;
        },
        error : function(err) {
            let messages = err.responseJSON.response;
            console.log(messages);
            var un;
            if( un != messages.email) {
                document.getElementById("register_message_email").innerText = messages.email[0];
            }
            if( un != messages.name) {
                document.getElementById("register_message_name").innerText = messages.name[0];
            }
            if( un != messages.password) {
                document.getElementById("register_message_password").innerText = messages.password[0];
            }
        }
    });
}