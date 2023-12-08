<?php  include('../inc/header.php'); ?>

<?php
    if (!isset($_GET['Project_ID']) or !is_numeric($_GET['Project_ID'])) {
        // header("Location:projects.php");
        echo '<script>window.location.href="projects.php";</script>';

    }
    $idd = $_GET['Project_ID'];
    $sql = "SELECT * FROM `project` WHERE `Project_ID`='$idd' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check){
        echo '<script>window.location.href="projects.php";</script>';
    }
    $sql = "DELETE FROM `project` WHERE `Project_ID`='$idd'";
    $result = mysqli_query($conn,$sql);
        echo '<script>window.location.href="projects.php";</script>';


?>
    <h1 class="text-center col-12 bg-danger py-3 text-white my-2">User have been deleted</h1>
    <!-- <php header("refresh:0;url=index.php");?> -->
   
    <?php  include('../inc/footer.php'); ?>



  