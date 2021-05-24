<?php
$destinario = $_POST["email"];
$asunto = $_POST["asunto"];

$mensaje = "<html><body><b>Hola, </b><span>Soy </span>". $_POST["nombre"];

$mensaje .= "<p>Mi consulta es la siguiente: </p> ".  $_POST["mensaje"];

$mensaje .= "<p>Gracias  por su atención.</p></body></html>";


$cabezera = "from : sanchezcordova00@gmail.com". "\r\n";
$cabezera .= 'MIME-Version: 1.0' . "\r\n";
$cabezera .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

$enviado = mail($destinario, $asunto, $mensaje, $cabezera);


if ($enviado) {

    echo '<script language="javascript">alert("Correo enviado correctamente");</script>';    

}else{

    echo '<script language="javascript">alert("Verificar el correo hubo un error");</script>';    
    
}

