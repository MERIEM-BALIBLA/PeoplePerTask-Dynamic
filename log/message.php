<?php 
require("../db.php");
// title
if(isset($_GET["search"])){
    $search=$_GET["search"];
    $query="SELECT `Project_ID`, `Project_title`, `Descriptions`, `User_ID`, `Categorie_ID` FROM `project` WHERE Project_title LIKE '$search%'";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $tab[]=$row;
        }
        echo  json_encode($tab);  
    }
}
// description
if(isset($_GET["search"])){
    $search=$_GET["search"];
    $query="SELECT `Project_ID`, `Project_title`, `Descriptions`, `User_ID`, `Categorie_ID` FROM `project` WHERE Descriptions LIKE '$search%'";
    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $tab[]=$row;
        }
        echo  json_encode($tab);  
    }
}
// categorie
if(isset($_GET["cat"])){
    $cat=$_GET["cat"];
    
    $query = "SELECT `project`.`Project_title`, `project`.`Descriptions`, `project`.`Categorie_ID`, `Categories`.`Categorie_Name`  
    FROM `project` 
    INNER JOIN `Categories` ON `Categories`.`Categorie_ID` = `project`.`Categorie_ID` 
    WHERE `Categories`.`Categorie_ID` LIKE '$cat%'";

    $res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            $tab[]=$row;
        }
        echo  json_encode($tab);  
    }
}
?>

