<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'oskari.peltomaa@gmail.com';

    $email_subject = "uusi kysymys";

    $email_body = "User name $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to = "veeti.bark@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "reply-To $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers)

    header("Location. index.html");
?>