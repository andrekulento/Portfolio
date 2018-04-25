<?php 
if(isset($_POST['submit'])){
    $to = "andrzej.kulewicz@gmail.com";
    $from = $_POST['email'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $_POST['message'];
    $message2 = "Here is a copy of your message " . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    include ('index.html');

    }
?>