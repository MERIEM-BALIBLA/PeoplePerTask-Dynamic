<?php 
session_start();
include('../db.php');
include('../inc/validtaion.php');

 if(isset($_POST['submit'])){
    $title = santString($_POST['title']);
    $description = santString($_POST['description']);
        $id_cat = $_POST['Categorie_ID'];

        if(requiredInput($title) && requiredInput($description)){
            if(minInput($title,3) && maxInput($description,20)){
                $id =  $_SESSION['user_id'];
                
                $sql = "INSERT INTO offers(`User_ID`, `offer_title`,`Descriptions`,`Categorie_ID`)      
                        VALUES ($id,'$title','$description', $id_cat);";
                        var_dump($sql);
                    $result = mysqli_query($conn,$sql);
                    echo '<script>window.location.href="profile.php";</script>';
                
                    if($result){
                        $succes = "Added Successfully";
                    }
                }
            }else{
                $error = "The Name must be Grater than 3 caracters / And the Password must be Less than 20 caracters";
            }
        }else {
            $error = "error!!";
        }
?>