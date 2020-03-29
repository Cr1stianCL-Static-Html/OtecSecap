
function EnviarCorreo(){

var name = $("#name").val();
var email = $("#email").val();
var subject = $("#subject").val();
var message = $("#message").val();

$.post("EnvioCorreo.php", {            
            name: name,
            email: email,
            subject: subject,
            message: message
        },
                function (data, status) {
                    switch (status) {
                        case "success":
                             $('#MsgEnviado').show();                               
                             break;
                        case "error":
                            $('#MsgError').show();
                            break;
                        default:
                            break;
        }
  });
		
}
