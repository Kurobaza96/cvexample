<?php


$nombre = $_POST['form-name']; 
$correo = $_POST['form-email'];
$mensaje = $_POST['form-message'];


$destinatario = "emanuel.josue.herrera@gmail.com"; 
$asunto = $_POST['form-subject'];
$cuerpo = '
    <html>
        <head>
            <title>Prueba de envio de correo</title>
        </head>

        <body>
            <h1>Mi Pagina </h1>
            <p>
                Contacto: '.$nombre . + - + . $asunto . ' <br>

                Mensaje: '.$mensaje.'

            </p>

        </body>

    </html>
';

//para el envío en formato HTML
$headers = "MIME-Version: 1.0\r\n";
$headers."Content-type: text/html; charset=UTF8\r\n";

//dirección del remitente
$headers. "FROM: $nombre <$correo>\r\n"; mail($destinatario, $asunto, $cuerpo, $headers);

echo "Correo enviado";

?>

<a href="index.html">Volver a inicio </a>