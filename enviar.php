<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Envio de correo</title>
</head>
<body>
<?php

//obtener variables....
$nombrecompleto = $_POST['nombre'].' '.$_POST['apellidos'];
$usuario = $_POST['usuario'];
$password = $_POST['contrasena'];
$correo = $_POST['correo'];
$region = $_POST['region'];
$sexo = $_POST['sexo'];
$newsletter = $_POST['newsletter'];
$descripcion = $_POST['descripcion'];

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/Santiago');

require 'PHPMailer/PHPMailerAutoload.php';

//Configurar para usar gmail como correo 
//es necesario autorizar aplicacion en url
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;

//valores por defecto estan en PHPMailer/class.smtp.php
//nombre de usuario
//$mail->Username = "";

//Password
//$mail->Password = "";

$mail->setFrom('luchosrock@gmail.com', 'Prueba de correo PHP');


//a quien se envia el correo
$mail->addAddress($correo, $nombrecompleto);
//para poder usar html en el mensaje
$mail->isHTML(true); 
//Asunto
$mail->Subject = 'Registro exitoso';
//cuerpo del correo
// al poner $cuerpoCorreo.= sirve para ir agregando texto a la variable $cuerpoCorreo
$cuerpoCorreo = '<ul>';
$cuerpoCorreo .= '<li>Nombre completo: '.$nombrecompleto.'</li>';
$cuerpoCorreo .= '<li>Sexo: '.$sexo.'</li>';
$cuerpoCorreo .= '<li>Usuario: '.$usuario.'</li>';
$cuerpoCorreo .= '<li>Correo: '.$correo.'</li>';
$cuerpoCorreo .= '<li>Password: '.$password.'</li>';
$cuerpoCorreo .= '<li>Region:'.$region.'</li>';
$cuerpoCorreo .= '<li>Newsletter: '.$newsletter.'</li>';
$cuerpoCorreo .= '<li>Descripcion: '.$descripcion.'</li>';
$cuerpoCorreo .='</ul>';

$mail->Body    = 'Felicitaciones! te has registrado correctamente... Tus datos de registro son: '.$cuerpoCorreo;
//Replace the plain text body with one created manually
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');


if (!$mail->send()) {
    echo "Error al enviar el mensaje: " . $mail->ErrorInfo;
} else {
    echo "Mensaje Enviado!";
}
?>
</body>
</html>