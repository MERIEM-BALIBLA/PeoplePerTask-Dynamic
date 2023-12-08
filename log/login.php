<?php
session_start();

include('../db.php');

// echo"ezhfkze";
if(isset($_POST['submit'])){
    $email = $_POST['email'];
$password = $_POST['pass_word'];
    // préparez une requête avec un seul paramètre pour l'e-mail
    $sql = "SELECT * FROM `User` WHERE `Email_Adress` = ?";

    // préparez la requête
    $stmt = mysqli_prepare($conn, $sql);

    // liez le paramètre (uniquement pour l'e-mail)
    mysqli_stmt_bind_param($stmt, 's', $email);

    // exécutez la requête préparée
    mysqli_stmt_execute($stmt);

    // obtenez le résultat (mysqli_stmt_get_result)
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        if (password_verify($password, $row['pass_word'])) {
    
            $_SESSION['name'] = ($row['name'] ?? 'No Name Found');
            $_SESSION['lname'] = ($row['name'] ?? 'No Name Found') . ' ' . ($row['lname'] ?? 'No Last Name Found');
            $_SESSION['user_id'] = $row['User_ID'];
            $_SESSION['role'] = $row['role_ID'];

            // $_SESSION['Email_Adress'] = $row['Email_Adress'];

            setcookie('email', $email, time() + 2*60,'/');
            setcookie('pass_word', $password, time() + 2*60,'/');
            
            ob_start();
            header('Location: home.php');
            ob_end_flush();
            exit();
        } else {
            echo 'Mot de passe incorrect';
            header('Location: loginPage.php');
            exit();
        }
    } else {
        echo 'Email invalide';
        header('Location: loginPage.php');
        exit();
    }
}
?>
