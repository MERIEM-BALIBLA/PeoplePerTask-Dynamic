<!-- <php  include('inc/header.php'); ?> -->
<?php  include('../inc/header.php'); 
       include('../inc/validtaion.php');
       
    if(isset($_POST['submit'])){
        $title = santString($_POST['title']);
        $description = santIEmail($_POST['description']);
        if(requiredInput($title) && requiredInput($description)){
            $id = $_POST['id'];
            if(minInput($title, 3) && maxInput($title, 20)){
                $sql = "UPDATE `offers` SET `offer_title`='$title',`Descriptions`='$description' WHERE `offer_ID`='$id'";
            }
            $result = mysqli_query($conn, $sql);
            if($result){
                $succes = "Updated Successfully";
                echo '<script>window.location.href="offers.php";</script>';
                
            } else {
                $error = "Error in the query execution.";
            }
        } else {
            $error = "The Name must be greater than 3 characters / And the Password must be less than 20 characters";
        }
    } else {
        $error = "Error!!";
    }
?>

   <h1 class="text-center col-12 bg-info py-3 text-white my-2">Update Info About offer</h1>
    <?php if($error): ?>
        <h5 class="alert alert-danger text-center"><?php echo $error; ?></h5>
        <a href="javascript:history.go(-1)" class="btn btn-primary"><< GO BACK</a>
    <?php endif; ?>
    <?php if($succes): ?>
        <h5 class="alert alert-success text-center"><?php echo $succes; ?></h5>
    <?php endif; ?>
    <?php  include('../inc/footer.php'); ?>


 
  