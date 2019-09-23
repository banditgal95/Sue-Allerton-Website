<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "sue.h.1995@live.co.uk";
    $headers ="From: ".$mailFrom;
    $txt ="You have Received an email from ".$name.".\n\n".$message;


    mail($mailTo, $mail, $txt, $headers);
    header("Location: index.php?mailsend");
}