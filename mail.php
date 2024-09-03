<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "kadaripavani1@gmail.com";
$subject = "Mail from Portfolio";

$txt =" Name= " .$name . "\r\n Email= " . $email . "\r\n Message = " . $message;
$headers = "From: noreply@gmail.com" ."\r\n" . "Cc: kadaripavani1@gmail.com";
if($email!=NULL){
    mail($to,$subject,$message,$headers);
}
header("Location:thankyou.html");
?>



