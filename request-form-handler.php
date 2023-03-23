<?php
    if(isset($_POST['submit'])){

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNumber = $_POST['phoneNumber'];
        $emailFrom = $_POST['email'];
        $rdb_value = $_POST['rdb'];
        $emailSubject = "Request a Quote - Rising Sun Lawncare";
        $message = $_POST['message'];
    }


    $emailBody =    "First Name: $firstName.\n". 
                "Last Name: $lastName.\n".
                "Phone Number: $phoneNumber.\n".
                "Email Address: $email.\n".
                "Details: $message.\n"; 

    $to = "risingsunlawncare@hotmail.com";
    $headers = "From: $emailFrom \r\n";
    mail($to,$emailSubject,$emailBody,$headers);
?>