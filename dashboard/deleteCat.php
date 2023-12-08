<?php  include('../inc/header.php'); ?>

<?php
    if (!isset($_GET['Categorie_ID']) or !is_numeric($_GET['Categorie_ID'])) {
        header("Location: categories.php");
    }
    $idd = $_GET['Categorie_ID'];
    $sql = "SELECT * FROM `Categories` WHERE `Categorie_ID`='$idd' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check){
        header('location: categories.php');
    }
    $sql = "DELETE FROM `Categories` WHERE `Categorie_ID`='$idd'";
    $result = mysqli_query($conn,$sql);
?>
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">User have been deleted</h1>
    <?php echo '<script>window.location.href="categories.php";</script>';?>
   
    <?php  include('../inc/footer.php'); ?>


 
  