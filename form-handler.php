<?php
//get data from form
$name = $_POST['name'];
$visitor_email = $_POST['emailaddress'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "osacarist792@gmail.com";

$subject = 'New Form Submission';

$txt ="Name = ". $name . "\r\n Email  = " . "\r\n Subject =" . $subject." \r\n  Message =" . $message;

$headers = "From: noreply@github.com" . "\r\n" .
"CC: somebodylse@example.com";
if($email=NULL){
    mail($to,$subject,$txt,$headers);
}
 //redirect
 header("Location:contact.html");
 ?>




























