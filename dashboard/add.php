<?php  
       include('../inc/header.php');
       include('../inc/validtaion.php'); ?>
<?php
     
    if(isset($_POST['submit'])){
        $name = santString($_POST['name']);
        $lname = santString($_POST['lname']);
        $email = santIEmail($_POST['email']);
        $password = santString($_POST['password']);
        if(requiredInput($name) && requiredInput($email) && requiredInput($password)){
            if(minInput($name,3) && maxInput($password,20)){
                if(validateEmail($email)){
                    // $hashed_password = password_hash(password_PASSWORD_DEFAULT);
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `User`(`name`,`lname`,`Email_Adress`,`pass_word`) VALUES ('$name','$lname','$email','$hashed_password')";
                    $result = mysqli_query($conn,$sql); ?>
                    
<?php echo '<script>window.location.href="index.php";</script>';?>
<?php
                    if($result){
                        $succes = "Added Successfully";
                    }
                }else{
                    $error = "Valid your Email";
                }
            }else{
                $error = "The Name must be Grater than 3 caracters / And the Password must be Less than 20 caracters";
            }
        }else {
            $error = "error!!";
        }
    }
?>
     <div class="container-fluid"  style="width:100%">
    
    <?php if($error): ?>
        <h5><?php echo $error; ?></h5>
    <?php endif; ?>
    <?php if($succes): ?>
        <h5><?php echo $succes; ?></h5>
    <?php endif; ?>
    <div></div>
    <div class="flex flex-row items-center justify-between p-6 lg:p-24 bg-neutral-200">
    
        <div class="w-[40%]"><img src="dog.jpg" alt=""></div>
        <div class="w-[50%] mx-[6%]">
        <form class="my-2 p-3" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p class="w-full text-4xl font-medium text-center leading-snug font-serif">Add New User</p>
                <div class="my-2 p-3 border">
                <div class="mb-2">
                    <label for="exampleInputName1">First Name</label>
                    <input type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInputName1" >
                </div>
                <div class="mb-2">
                    <label for="exampleInputName1">Last Name</label>
                    <input type="text" name="lname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInputName1" >
                </div>
                <div class="mb-2">
                    <label for="exampleInputName1">Email address</label>
                    <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="exampleInputPassword1">
                </div>
            
                <button type="submit" class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500
                  rounded-lg transition duration-200 hover:bg-indigo-600 ease" name="submit">Submit</button>
            </div>
            </div>
        </form>
        </div>
        
    </div>
   
<?php  include('../inc/footer.php'); ?>

 
  