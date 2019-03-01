<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $my_email = 'seifaziz10@gmail.com';
    
    $email_subject = "Website Contact Submission";
    $email_body = "Name: $name.\n". 
                    "Email: $email.\n"
                        "Message: $message.\n";

    $to = "seifaziz10@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>