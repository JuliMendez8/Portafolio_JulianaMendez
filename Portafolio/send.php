<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = "From: " . $email . " \r\n";

$message = "This message was sent by " . $name . " \r\n";
$message = "His Email Address is " . $email . " \r\n";
$message = "And wanted to send you this messagge " . $_POST['message'] . " \r\n";
$message = "Sent: " . date('d/m/Y', time());

$to = 'jjuly642@gmail.com';
$subject = "Hired";

if(mail($to, $subject, utf8_decode($message), $header)){
    echo "mail sent";
}
else{
    $errorMessage = error_get_last()['msg'];
    echo $errorMessage;
}

?>