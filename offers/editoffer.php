<?php  
include('../inc/header.php');

    if (!isset($_GET['offer_ID']) or !is_numeric($_GET['offer_ID'])) {
        echo '<script>window.location.href="offers.php";</script>';

    }
    $id = $_GET['offer_ID'];
    $sql = "SELECT * FROM `offers` WHERE `offer_ID`='$id' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check){
        echo '<script>window.location.href="offers.php";</script>';

    }
    $row = mysqli_fetch_assoc($result);
    
?>
    <div class="container-fluid"  style="width:100%">
    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About User</h1>
    <div class="w-[50%] mx-[6%]">
        <form class="my-2 p-3 border" method="POST" action = "Updateoffer.php">
            <div class="form-group">
                <label for="exampleInputName1">Title of offer</label>
                <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['offer_title']?>" >
            </div>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="form-group">
                <label for="exampleInputName1">About offer </label>
                <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['Descriptions']?>" name="description" class="form-control">
            </div>
         
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
   
    <?php  include('../inc/footer.php'); ?>


 
  