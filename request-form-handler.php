<?php
    if(isset($_POST['submit'])){

        $firstName = $_POST['firstname'];
        $lastName = $_POST['lastname'];
        $phoneNumber = $_POST['phonenumber'];
        $emailFrom = $_POST['emailAddress'];
        $emailSubject = "Request a Quote - Piotrs Landscaping";
        $message = $_POST['message'];
    }


    $emailBody =    "First Name: $firstName.\n". 
                "Last Name: $lastName.\n".
                "Phone Number: $phoneNumber.\n".
                "Email Address: $email.\n".
                "Details: $message.\n"; 

    $to = "sergi.m.1423@gmail.com";
    $headers = "From: $emailFrom \r\n";
    mail($to,$emailSubject,$emailBody,$headers);
?>