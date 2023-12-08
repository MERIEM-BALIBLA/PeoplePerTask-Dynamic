<?php  include('../inc/header.php'); ?>

<?php
    if (!isset($_GET['User_ID']) or !is_numeric($_GET['User_ID'])) {
        header("Location: index.php");
    }
    $idd = $_GET['User_ID'];
    $sql = "SELECT * FROM `User` WHERE `User_ID`='$idd' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check){
        header("location: index.php");
    }
    $sql = "DELETE FROM `User` WHERE `User_ID`='$idd'";
    $result = mysqli_query($conn,$sql);
?>
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">User have been deleted</h1>
    <!-- <php header("location: index.php");?> -->
<?php echo '<script>window.location.href="index.php";</script>';?>

   
    <?php  include('../inc/footer.php'); ?>


 
  