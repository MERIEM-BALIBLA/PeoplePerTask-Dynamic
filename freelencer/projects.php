<!-- <php  include('inc/header.php'); ?> -->
<?php  
    include('../inc/header.php'); 
    $sql = "SELECT `project`.`Project_title`, `project`.`Descriptions`, `User`.`User_ID` as `user`, `user`.`name` as `name`, `user`.`lname` as `lname` ,`project`.`Project_ID`,`Categories`.`Categorie_Name`
        FROM `project`
        INNER JOIN `categories`
        INNER JOIN `user` 
        ON `user`.`User_ID` = `project`.`User_ID` AND `Categories`.`Categorie_ID` = `project`.`Categorie_ID`";
    $result = mysqli_query($conn, $sql);    
    $id =  $_SESSION['user_id'];
?>


<div class="container-fluid" style="width:100%">
    <div>
        <div class="w-full px-[8%] py-8">
            <table class="border-collapse border border-gray-300 bg-gray-100 w-full">
                <thead>
                    <tr class="bg-indigo-500 text-white">
                    <!-- <th class="border-y border-gray-100 bg-gray-50/50 p-2" scope="col">#</th> -->
                    <?php if($_SESSION['role'] == 1):?>
                    <th class="border-y border-gray-100 p-2" scope="col">User</th>
                    <?php  endif?>

                    <th class="border-y border-gray-100 p-2" scope="col">Title of the Project</th>
                    <th class="border-y border-gray-100 p-2" scope="col">Categorie</th>
                    <th class="border-y border-gray-100 p-2" scope="col">About Project</th>

                    <?php if($_SESSION['role'] == 2):?>    
                    <th class="border-y border-gray-100 p-2" scope="col">Edit</th>
                    <?php  endif?>

                    <th class="border-y border-gray-100 p-2" scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(mysqli_num_rows($result) > 0):?>
                        <?php while($row = mysqli_fetch_assoc($result)):?>

                            <tr>
                                <?php if($_SESSION['role'] == 1):?>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $row['name'] . ' ' . $row['lname']?></td>
                                <?php  endif?>
                                <?php if($_SESSION['role'] == 1  || $_SESSION['user_id'] == $row['user']):?>
                                    
                                <td class="border border-gray-300 px-4 py-2"><?php echo $row['Project_title']?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $row['Categorie_Name']?></td>
                                <td class="border border-gray-300 px-4 py-2"><?php echo $row['Descriptions']?></td>
                    
                                <?php if($_SESSION['role'] == 2):?>    
                                <td class="border border-gray-300 px-4 py-2">
                                    <a class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                    data-ripple-light="true" href="editProject.php?Project_ID=<?php echo $row['Project_ID']?>"> edit <i class="fa fa-edit"></i> </a>
                                </td>
                                <?php  endif?>
                                
                                <?php if($_SESSION['role'] == 1 || $_SESSION['role'] == 2):?>    
                                <td class="border border-gray-300 px-4 py-2">
                                     <a class="middle none center mr-4 rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"data-ripple-light="true" href="deleteProject.php?Project_ID=<?php echo $row['Project_ID']?>">delete <i class="fa fa-close"></i> </a>
                                </td>
                                <?php  endif?>
                                <?php  endif?>
                            </tr>
                        <?php endwhile;?>
                    <?php endif;?>
                </tbody>
            </table>
            <?php if($_SESSION['role'] == 1 ):?>

            <div class="flex items-center justify-center p-4">
            <button class="w-[10%] text-xl text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a class="nav-link" href="addProject.php">Add New</a></button>
            </div>
            <?php endif;?>
        </div>
    </div>

    
    <?php  include('../inc/footer.php'); ?>


 
  