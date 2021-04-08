function adminSendMess(){
    let id = document.getElementById("id_send_mess").value;
    $.ajax({
        type:"POST",
        url:`/ajax/create-send-mess/${id}`,
        data:{
            content : document.getElementById("content").value,
        },
        success : function(data) {
            window.location.href=document.getElementById("form_send_url").content;
        },
        error : function(err) {
            let messages = err.responseJSON.response;
            console.log(messages);
            console.log(err);
            var un;
            if( un != messages.content) {
                document.getElementById("message_content").innerText = messages.content;
            }
        }
    });
}