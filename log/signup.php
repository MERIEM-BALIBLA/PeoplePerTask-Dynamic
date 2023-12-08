<?php include('../db.php');
include('../inc/validtaion.php');

 if(isset($_POST['submit'])){
    $name = santString($_POST['fname']);
    $lname = santString($_POST['lname']);
    $email = santIEmail($_POST['email']);
    $hashed_password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $confirmPassword = $_POST['repeat_password'];
    $role =$_POST['role'];

    if ($_POST['repeat_password'] == $confirmPassword) {

    $sql = "SELECT * FROM `User` WHERE `Email_Adress` = '$email'";
    $result = mysqli_query($conn,$sql);
    $count_email = mysqli_num_rows($result);
    
    if($count_email == 0){

        $sql = "INSERT INTO `User`(`name`,`lname`,`Email_Adress`,`pass_word`,`role_ID`) VALUES (?,?,?,?,?)";
            //prepare 
        $stmt = mysqli_prepare($conn, $sql);

        // liez le paramètre (mysqli_stmt_bind_param)
        mysqli_stmt_bind_param($stmt,'sssss', $name, $lname, $email, $hashed_password,$role);

        // exécutez la requête préparée (mysqli_stmt_execute )
        $result = mysqli_stmt_execute($stmt);
    }

    if($result){
        header("location:loginPage.php");
        exit(); 
    }else {
        echo "error";
        header("location:signupPage.php");
    }
     // Assurez-vous de quitter le script après une redirection
     mysqli_stmt_close($stmt);
     mysqli_close($connexion);
    
}
}
?>