<?php  include '../inc/validtaion.php';
       include '../inc/header.php';

    if(isset($_POST['submit'])){
        $title = santString($_POST['title']);
        $description = santString($_POST['description']);
        $ID = $_POST['ID'];
        $id_cat = $_POST['Categorie_ID'];

        if(requiredInput($title) && requiredInput($description)){
            if(minInput($title,3) && maxInput($description,20)){
                    
                $sql = "INSERT INTO offers(`offer_title`,`Descriptions`,`User_ID`,`Categorie_ID`)      
                        VALUES ('$title','$description', $ID, $id_cat);";
                        var_dump($sql);
                    $result = mysqli_query($conn,$sql);
                    echo '<script>window.location.href="offers.php";</script>';
                
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
    <nav class="w-[65%] p-2">
     <div class="text-black dark:text-white">
                
            </div>
     </nav>
    <div class="flex flex-col items-center justify-between p-6 lg:p-24 bg-neutral-200">
        
    <form class="bg-white w-full max-w-3xl mx-auto px-4 lg:px-6 py-8 shadow-md rounded-md flex flex-col" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p class="w-full text-4xl font-medium text-center leading-snug font-serif">Add New offer</p>
            <?php
                $query = "SELECT User_ID FROM User";
                $result = mysqli_query($conn, $query);
                $options = "";
                while ($row = mysqli_fetch_assoc($result)) {
                    $options .= "<option value=\"" . $row['User_ID'] . "\">" . $row['User_ID'] . "</option>";
                }
            ?>
                <div class="mb-4">
                    <select name="ID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="User ID">
                    <option class="text-gray-900 text-sm">User name</option>
                    <?php echo $options; ?>
                    </select>
                </div>
            <!-- <input type="hidden" name="id" value="<php echo $id;?>"> -->

                <div class="mb-4">
                    <label><input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Title of offers"></label>
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
                    }?>
                <div class="mb-4">
                    <label><select name="Categorie_ID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Categorie">
                    <option class="text-gray-900 text-sm">Categorie</option>
                    <?php echo $options; ?>
                    </select></label>
                </div>
                
                 <button class="w-full inline-block pt-4 pr-5 pb-4 pl-5 text-xl font-medium text-center text-white bg-indigo-500 rounded-lg transition duration-200 hover:bg-indigo-600 ease" type="submit" name="submit">Submit</button>
            </div>
            
        </form>
        </div>
    </div>
   
    <?php  include('../inc/footer.php'); ?>


 
  