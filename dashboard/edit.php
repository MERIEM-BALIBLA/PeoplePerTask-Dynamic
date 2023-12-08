<?php  
       include('../inc/header.php'); ?>
<?php
    if (!isset($_GET['User_ID']) or !is_numeric($_GET['User_ID'])) {
        // header("Location: index.php");
        echo '<script>window.location.href="index.php";</script>';
    }
    $idd = $_GET['User_ID'];
    $sql = "SELECT * FROM `User` WHERE `User_ID`='$idd' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check){
        // header("location: index.php");
        echo '<script>window.location.href="index.php";</script>';

    }
    $row = mysqli_fetch_assoc($result);
    
?>  
    <div class="container-fluid"  style="width:100%">
    
     
    <div class=" bg-gray-100 py-[6%]">
        <div class="relative py-3 sm:mx-auto w-[40%]">
        <div
			class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
       <div class="relative py-4 bg-white shadow-lg sm:rounded-3xl sm:p-20">
        <div class="max-w-md mx-auto">
            <div>
            <h1 class="w-full text-4xl font-medium text-center leading-snug font-serif">Edit Info About User</h1>
            </div>
            <form class="my-2 p-2" method="POST" action = "Update.php">
            <div class="mb-4">
                <label for="exampleInputName1">
                <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['name']?>" class="form-control" id="exampleInputName1" ></label>
                <input type="hidden" name="id" value="<?php echo $idd;?>">
            </div>
            <div class="mb-4">
                <label for="exampleInputName1">
                <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['Email_Adress']?>" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></label>
            </div>
            <button class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500
                  rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" name="submit">Submit</button>
        </form>
        </div>
       </div>
        </div>
    </div>

    <?php  include('../inc/footer.php'); ?>


 
  