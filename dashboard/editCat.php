<!-- <php  include('inc/header.php'); ?> -->
<?php  
       include('../inc/header.php');
       
    if (!isset($_GET['Categorie_ID']) or !is_numeric($_GET['Categorie_ID'])) {
        // header("Location:categories.php");
        echo '<script>window.location.href="categories.php";</script>';
    }
    $idd = $_GET['Categorie_ID'];
    $sql = "SELECT * FROM `Categories` WHERE `Categorie_ID`='$idd' LIMIT 1";
    $result = mysqli_query($conn,$sql);
    $check = mysqli_num_rows($result);
    if(!$check){
        echo '<script>window.location.href="categories.php";</script>';
        
    }
    $row = mysqli_fetch_assoc($result);
    
?>
     <div class="container-fluid"  style="width:100%">
     <div class="relative py-4 bg-white shadow-lg sm:rounded-3xl sm:p-20">
        <div class="max-w-md mx-auto">
        <div>
            <h1 class="w-full text-4xl font-medium text-center leading-snug font-serif">Edit Info About User</h1>
        </div>
        <form class="my-2 p-3" method="POST" action = "UpdateCat.php">
            <div class="mb-4">
                <label for="exampleInputName1">Categorie</label>
                <input type="text" name="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['Categorie_Name']?>" class="form-control" id="exampleInputName1" >
                <input type="hidden" name="id" value="<?php echo $idd;?>">
            </div>
            <div class="mb-4">
                <label for="exampleInputName1">Petite description</label>
                <input type="text" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?php echo $row['description']?>" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
         
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    </div>
    </div>
   
    <?php  include('../inc/footer.php'); ?>


 
  