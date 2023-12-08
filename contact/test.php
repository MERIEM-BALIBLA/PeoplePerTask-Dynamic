<?php

require_once 'mail.php';

$name = $_POST["name"];
$email = $_POST["mail"];
$message = $_POST["message"];
if(empty($_POST["name"]) || empty($_POST["mail"]) || empty($_POST["message"]))
{
    echo "please enter ur information";
 }
else if(!preg_match('/[A-Za-z\s]/',$name)){
    echo "name invalid";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "email invalid";
}
else if(strlen($message) < 30){
    echo "sms is too short";
}else {
    $mail->setFrom('merrybalibla@gmail.com','test');
    $mail->addAddress($email);     //Add a recipient
    // $mail->setFrom ($email,$name); //je veux remplacer 1 par 2  => je veux remplacer 1 par 2 on ajoutons name
    // $mail->addAddress('balibla.meriem@gmail.com', 'test');
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
}
?>