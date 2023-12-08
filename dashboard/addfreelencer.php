<?php  
include('../inc/validtaion.php');
include('../inc/header.php');?>
<?php
     $query = "SELECT * FROM User";
     $result = mysqli_query($conn, $query);
     $options = "";
     while ($row = mysqli_fetch_assoc($result)) {
         $options .= "<option value='{$row['User_ID']}'>{$row['name']}</option>";
     }
    if(isset($_POST['submit'])){
        $name = santString($_POST['name']);
        $skil = santString($_POST['skil']);
        $ID = $_POST['User_ID'];

        if(requiredInput($name) && requiredInput($skil)){
            if(minInput($name,3) && maxInput($skil,10)){
                    $sql = "INSERT INTO `freelencer` (`nick_name`, `skil`, `User_ID`) VALUES ('$name', '$skil', '$ID')";
                    $result = mysqli_query($conn,$sql); ?>
                  
        <?php echo '<script>window.location.href="freelencer.php";</script>';?>
<?php
                    if($result){
                        $succes = "Added Successfully";
?>
                        
<?php echo '<script>window.location.href="freelencer.php";</script>'?>
<?php
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
        <h5 class="alert alert-danger text-center"><php echo $error; ?></h5>
    <php endif; ?>
    <php if($succes): ?>
        <h5 class="alert alert-success text-center"><php echo $succes; ?></h5>
    <php endif; ?> -->
    <div class="flex flex-row items-center justify-between p-6 lg:p-24 bg-neutral-200">
        <!-- <div class="w-[30%]" style="background-image: url('dog.webp');"> -->
            <!-- <img src="dog.webp" alt="Image from URL"> -->
        <!-- </div>         -->
        <div class="w-[40%]"><img class="rounded-lg" src="../images/cat.png" alt=""></div>
        <div class="w-[50%] mx-[6%]">
        <form class="my-2 p-3" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <p class="w-full text-4xl font-medium text-center leading-snug font-serif">Add New Freelencer</p>
                <div class="mb-6">
                    <label for="userSelect">
                    <select name="User_ID" id="userSelect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="User ID">
                     <?php echo $options; ?>
                    </select></label>
                </div>
            <input type="hidden" name="id" value="<?php echo $idd;?>">

                <div class="mb-6">
                    <label for="exampleInputName1">
                    <input type="text" name="name" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInputName1" placeholder="Create your own Nickname"></label>
                </div>
                <div class="mb-6">
                    <label for="exampleInputName1"><input type="text" name="skil" class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Skils"></label>
                </div>
                <button type="submit" class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500
                  rounded-lg transition duration-200 hover:bg-indigo-600 ease" name="submit">Submit</button>
            </div>
            
        </form>
        </div>
    </div>
   
    <?php  include('../inc/footer.php'); ?>


 
  