<?php 
require('Mailer/PHPMailerAutoload.php');

try{

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];  

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug  = 0;
$mail->Host       = 'smtp.gmail.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username   = "Contacto.OtecSecap@gmail.com";
$mail->Password   = "@3bEAaMgpwHKF%Dh";
$mail->SetFrom('Contacto.OtecSecap@gmail.com', 'Contacto Pagina Web OtecSecap');
//$mail->AddAddress('cristian.ros@protonmail.com', 'Cristian Rosas');
//$mail->AddAddress('manuellagos161184@hotmail.com', 'Manuel Lagos');
$mail->AddAddress('mlagos@otecsecap.cl', 'Manuel Lagos');
//$mail->AddReplyTo('cristian.ros@protonmail.com','Cristian Rosas');
$mail->Subject = 'Correo Contacto OtecSecap';
//$mail->MsgHTML(file_get_contents('correomaquetado.html'), dirname(ruta_al_archivo));
$mail->MsgHTML("
<h3>CORREO DE CONTACTO OTECSECAP</h3>
<ul>
 <li>Nombre:".$name." </li>
 <li>Correo:".$email."</li>
 <li>Asunto:".$subject."</li>
 <li>Mensaje:".$message."</li>
</ul>
");
$mail->AltBody = 'Este es un mensaje en texto plano estandar';
//Enviamos el correo
  if(!$mail->Send()) {
    echo "Error: " . $mail->ErrorInfo;
  } else {
    echo "Enviado!";
  }

} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>






