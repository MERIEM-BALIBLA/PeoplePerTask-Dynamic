<?php  include('../inc/header.php'); 
       include('../inc/validtaion.php'); ?>

    <?php
    if(isset($_POST['submit'])){
        $name = santString($_POST['name']);
        $email = santIEmail($_POST['email']);

        if(requiredInput($name) && requiredInput($email)){

            if(minInput($name,3)){
                if(validateEmail($email)){
                    $id = $_POST['id'];
                    if($password){
                        $password = santString($_POST['password']);

                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "UPDATE `User` SET `name`='$name',`Email_Adress`='$email',`pass_word`='$hashed_password' WHERE `User_ID`='$id'";
                    }else{
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "UPDATE `User` SET `name`='$name',`Email_Adress`='$email' WHERE `User_ID`='$id'";
                    }
                    // $hashed_password = password_hash(password_PASSWORD_DEFAULT);
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        $succes = "Updated Successfully";
                        // header("location: index.php");
                    echo '<script>window.location.href="index.php";</script>';

                    }
                }else{
                    $error = "Valid your Email";
                }
            }else{
                $error = "The Name must be Grater than 3 caracters / And the Password must be Less than 20 caracters";
            }
        }else {
            $error = "error!!";
        }
    }
?>
   
   <h1 class="text-center col-12 bg-info py-3 text-white my-2">Update Info About User</h1>
    <?php if($error): ?>
        <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
        <a href="javascript:history.go(-1)" class="btn btn-primary"><< GO BACK</a>
    <?php endif; ?>
    <?php if($succes): ?>
        <h5 class="alert alert-success text-center"><?php echo $succes; ?></h5>
    <?php endif; ?>
    <?php  include('../inc/footer.php'); ?>


 
  