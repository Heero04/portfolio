<?php
 if (isset($_POST['submit'])) {  
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'thelDavis.com';
    $email_subject = "New Form Submission";

    $email_boby = "User Name: $name. \n".
                    "User Email: $visitor_email. \n".
                        "User Messagffe: $message. \n";
    $to = "lawrencedavis1010@gmail.com"     ;
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    
    mail($to,$email_subject,$email_boby,$headers);
    header("Location: contact.html");
 }

?>

