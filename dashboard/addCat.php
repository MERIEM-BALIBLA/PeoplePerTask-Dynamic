<!-- <php  include('inc/header.php'); -->
<?php  
    //    require ('../log/login.php');
       include('../inc/header.php');
       include('../inc/validtaion.php'); 
    //    file_uploads = On;
     
    if(isset($_POST['submit'])){
        $categorie = santString($_POST['categorie']);
        $descrip = santIEmail($_POST['description']);
        // $image = santIEmail($_POST['image_file']);
        if(requiredInput($categorie) && requiredInput($descrip)){
            if(minInput($categorie,3) && maxInput($descrip,20)){
                    // $hashed_password = password_hash(password_PASSWORD_DEFAULT);
        // $image =$_POST['image_file'];
      
                    $sql = "INSERT INTO `Categories`(`Categorie_Name`,`description`) VALUES ('$categorie','$descrip')";
                    $result = mysqli_query($conn,$sql);
                    // header('location: categories.php');
                    ?>
                    <?php echo '<script>window.location.href="categories.php";</script>';?>
<?php
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
    <div class="container-fluid"  style="width:100%">
    
    <!-- <php if($error): ?>
        <h5><php echo $error; ?></h5>
    <php endif; ?>
    <php if($succes): ?>
        <h5><php echo $succes; ?></h5>
    <php endif; ?> -->
    <div class="flex flex-col items-center justify-between p-6 lg:p-24 bg-neutral-200">
        
        <form class="bg-white w-full max-w-3xl mx-auto px-4 lg:px-6 py-8 shadow-md rounded-md flex flex-col" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div><h1>Add New User</h1></div>
            <div class="mb-4">
                <label>
                <input type="text" name="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInputPassword1" placeholder="Categorie title"></label>
            </div class="mb-4">
            <input type="hidden" name="id" value="<?php echo $idd;?>">
            <div class="mb-4">
                <label for="exampleInputName1">
                <input type="text" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInputEmail1" placeholder="Petite description"></label>
            </div>
            <button class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500
                  rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" name="submit">Submit</button>
        </form>
        
    </div>
   
    <?php  include('../inc/footer.php'); ?>


 
  