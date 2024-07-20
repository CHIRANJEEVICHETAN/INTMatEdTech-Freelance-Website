<?php
//get data from form  

$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "chiruchetan64@gmail.com";
$subject = "Mail From INTMATEdTech";
$txt ="FirstName = ". $fname . "\r\n  LastName = ". $lname . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: localhost" . "\r\n" .
"CC: noreply@intmatedtech.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location: thankyou.php");
?>