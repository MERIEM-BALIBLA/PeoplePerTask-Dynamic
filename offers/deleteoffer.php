<?php  include('../inc/header.php'); 

    if (!isset($_GET['offer_ID']) or !is_numeric($_GET['offer_ID'])) {
        // header("Location:projects.php");
        echo '<script>window.location.href="offers.php";</script>';

    }
    $idd = $_GET['offer_ID'];
    $sql = "SELECT * FROM `offers` WHERE `offer_ID`='$idd' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check){
        echo '<script>window.location.href="offesr.php";</script>';
    }
    $sql = "DELETE FROM `offers` WHERE `offer_ID`='$idd'";
    $result = mysqli_query($conn,$sql);
        echo '<script>window.location.href="offers.php";</script>';
?>
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">User have been deleted</h1>
    <!-- <php header("refresh:0;url=index.php");?> -->
   
    <?php  include('../inc/footer.php'); ?>



  