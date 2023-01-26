<?php
//get data from form  
$name = $_POST['UName'];
$email= $_POST['Email'];
$subject=$_POST['Subject'];
$message= $_POST['msg'];

$to = "saranggaidhani22@gmail.com";
$subject = "Mail From OCN";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject . "\r\n  Message = " . $message;
$headers = "From: noreply@employee.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>