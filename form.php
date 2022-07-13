<?php
//get data from form  

if(isset($_POST['middle_name']) && $_POST['middle_name'] != "")
    die();




$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];
$to = "morgan.vigil-hayes@nau.edu";
$subject = "NAU-KILLIP Message";
$txt ="Name = ". $name . "\r\n Phone = " . $phone . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@naukillip.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location: https://rc.nau.edu/fusd-cs4all/");

?>

