<?php 
require_once ('mail.php');
include '../dashboard/db.php';
$name = $_POST["firt_name"];
$lname = $_POST["last_name"];
$email = $_POST["mail"];
$sub = $_POST["subject"];
$message = $_POST["message"];
if(empty($_POST["firt_name"]) || empty($_POST["last_name"]) || empty($_POST["mail"]) || empty($_POST["subject"]) || empty($_POST["message"]))
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
    $mail->setFrom($email);
    $mail->addAddress('merrybalibla@gmail.com','test');     //Add a recipient
    // $mail->setFrom ($email,$name); //je veux remplacer 1 par 2  => je veux remplacer 1 par 2 on ajoutons name
    // $mail->addAddress('balibla.meriem@gmail.com', 'test');
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('location: contact.php');
}
?>