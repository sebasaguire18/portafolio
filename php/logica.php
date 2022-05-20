<?php

//-----------ENVIAR FORMULARIO DE CONTACTO-----------//

if (isset($_POST['btn_contacto'])) {

    $campo_emailContacto=$_POST['campo_emailContacto'];
    $campo_asuntoContacto=$_POST['campo_asuntoContacto'];
    $campo_mensajeContacto=$_POST['campo_mensajeContacto'];
    
    if ($campo_emailContacto == "" || $campo_asuntoContacto == "" || $campo_mensajeContacto == "") {
        header("location:../includes/alertaError.php");
    }else {
        $para      = 'sebasavmt@gmail.com';
        $asunto    = $campo_asuntoContacto . ' - Portafolio';
        $mensaje   = $campo_mensajeContacto;
        $de =   'From: '. $campo_emailContacto . "\r\n" .
                'Reply-To: '. $campo_emailContacto . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

        if (mail($para, $asunto, $mensaje, $de)){
            header("location:../includes/alertaSuccess.php");
        }else{
            header("location:../includes/alertaError.php");
        }
    }
}
//-----------FIN ENVIAR FORMULARIO DE CONTACTO-----------//


?>