<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $from= "learning@learning.it.maranatha.edu";
    $to = "lmsgamifikasi@gmail.com";

    $subject = "coba";
    $message = "coba";
    $headers = "Dari:" . $from;

    mail($to,$subject,$message,$headers);

    echo "berhasil";

?>