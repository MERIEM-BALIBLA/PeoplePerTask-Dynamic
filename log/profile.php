<?php
// session_start();
include('../inc/header.php');
require '../db.php';

if($_SESSION['role'] == 2):?>
<body class="bg-gray-300 antialiased">
            <div class="container mx-auto my-60 bg-white relative shadow rounded-lg w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">
                <div class="flex justify-center">
                    <img src="../images/user.jpg" alt="" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                </div>
                <div class="mt-16">
                    <h1 class="font-bold text-center text-3xl text-gray-900"><?php echo $_SESSION['name']; ?></h1>
                    <p class="text-center text-sm text-gray-400 font-medium"><?php echo $_SESSION['role'] ; ?></p>
                </div>
                <section>
                    <div>
                        <form class="bg-white w-full max-w-3xl mx-auto px-4 lg:px-6 py-8 shadow-md rounded-md flex flex-col" method="POST" action="projectform.php">
                            <p class="w-full text-4xl font-medium text-center leading-snug font-serif">Add New Project</p>
                    
                            <div class="mb-4">
                                <label><input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title of project"></label>
                            </div>
                            <div class="mb-4">
                                <label><input type="text" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description"></label>
                            </div>
                            <?php
                                $query = "SELECT * FROM Categories";
                                $result = mysqli_query($conn, $query);
                                $options = "";
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $options .= "<option value='{$row['Categorie_ID']}'>{$row['Categorie_Name']}</option>";
                                }
                            ?>
                            <div class="mb-4">
                                <label><select name="Categorie_ID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Categorie">
                                    <option class="text-gray-900 text-sm">Categorie</option>
                                    <?php echo $options; ?>
                                    </select></label>
                            </div>
                            <button class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500 rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" name="submit">Submit</button>
                        </form>
                    </div>
                </section>
            
                <section>
                    <div class="flex justify-center items-center flex-row w-full gap-8">
                        <?php
                        $ID =$_SESSION['user_id'] ;
                        // var_dump($_SESSION['user_id']);
                        $sql = "SELECT * FROM `project` WHERE `User_ID` = $ID;";
                        $result = mysqli_query($conn,$sql);
                    ?>
                        <?php if(mysqli_num_rows($result) > 0):?>
                        <?php while($row = mysqli_fetch_assoc($result)):?> 
                    <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
                        <div class="flex justify-center items-center flex-col">
                            <img src="../images/job-logo-1.png.svg" alt="first-job-logo"> 
                            <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl"><?php echo $row['Project_title']?></h3>
                            <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base"><?php echo $row['Descriptions']?></p>
                        </div>
                        <a class="btn btn-primary" href="projectInfo.php?Project_ID=<?php echo $row['Project_ID']?>"><button>Im a simple link</button></a>    
                    </div>
                    <?php endwhile;?> 
                    <?php endif;?>
                </section>
               </div>
   
    </div>
</body>
<?php  endif?>

<?php if($_SESSION['role'] == 3):?>
<body class="bg-gray-300 antialiased">
            <div class="container mx-auto my-60 bg-white relative shadow rounded-lg w-5/6 md:w-5/6  lg:w-4/6 xl:w-3/6 mx-auto">
                <div class="flex justify-center">
                    <img src="../images/user.jpg" alt="" class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
                </div>
                <div class="mt-16">
                    <h1 class="font-bold text-center text-3xl text-gray-900"><?php echo $_SESSION['name']; ?></h1>
                    <p class="text-center text-sm text-gray-400 font-medium"><?php echo $_SESSION['role'] ; ?></p>
                </div>
                <section>
                    <div>
                        <form class="bg-white w-full max-w-3xl mx-auto px-4 lg:px-6 py-8 shadow-md rounded-md flex flex-col" method="POST" action="offerform.php">
                            <p class="w-full text-4xl font-medium text-center leading-snug font-serif">Add New offer</p>
                    
                            <div class="mb-4">
                                <label><input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title of project"></label>
                            </div>
                            <div class="mb-4">
                                <label><input type="text" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description"></label>
                            </div>
                            <?php
                                $query = "SELECT * FROM Categories";
                                $result = mysqli_query($conn, $query);
                                $options = "";
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $options .= "<option value='{$row['Categorie_ID']}'>{$row['Categorie_Name']}</option>";
                                }
                            ?>
                            <div class="mb-4">
                                <label><select name="Categorie_ID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Categorie">
                                    <option class="text-gray-900 text-sm">Categorie</option>
                                    <?php echo $options; ?>
                                    </select></label>
                            </div>
                            <button class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500 rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" name="submit">Submit</button>
                        </form>
                    </div>
                </section>

                <section>
                    <div class="flex justify-center items-center flex-row w-full gap-8">
                        <?php
                        $ID =$_SESSION['user_id'] ;
                        // var_dump($_SESSION['user_id']);
                        $sql = "SELECT * FROM `offers` WHERE `User_ID` = $ID;";
                        $result = mysqli_query($conn,$sql);
                    ?>
                        <?php if(mysqli_num_rows($result) > 0):?>
                        <?php while($row = mysqli_fetch_assoc($result)):?> 
                    <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
                        <div class="flex justify-center items-center flex-col">
                            <img src="../images/job-logo-1.png.svg" alt="first-job-logo"> 
                            <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl"><?php echo $row['offer_title']?></h3>
                            <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base"><?php echo $row['Descriptions']?></p>
                        </div>
                        <a class="btn btn-primary"><button>Im a simple link</button></a>    
                    </div>
                    <?php endwhile;?> 
                    <?php endif;?>
                </section>
               </div>
   
    </div>
</body>
<?php  endif?>

</html>
