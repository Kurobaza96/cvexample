<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );

    $from = $_POST['form-email'];
    $to = "emanuel.josue.herrera@gmail.com";
    $subject = $_POST['form-message'];
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
?>
