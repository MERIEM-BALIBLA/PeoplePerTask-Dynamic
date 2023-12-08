       
<?php  
      include('../inc/header.php'); ?>

<div class="container-fluid flex flex-col"  style="width:100%">
     
<div class="flex flex-col">
<section class="text-gray-600 body-font flex flex-wrap">
      <div class="p-4 md:w-1/6 sm:w-1/2 ml-[10%] ">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <div>
     <?php
        $sql = "SELECT COUNT(*) as userCount FROM User";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $userCount = $row['userCount'];
            echo "<p>Total Users: $userCount</p>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
     </div>
        </div>
      </div>
      <div class="p-4 md:w-1/6 sm:w-1/2 ml-[10%]">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
          </svg>
          <div >
     <?php
        $sql = "SELECT COUNT(*) as userCount FROM project";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $userCount = $row['userCount'];
            echo "<p>Total Projects: $userCount</p>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
     </div>
        </div>
      </div>
      <div class="p-4 md:w-1/6 sm:w-1/2 ml-[10%]">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
          <div>
     <?php
        $sql = "SELECT COUNT(*) as userCount FROM categories";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $userCount = $row['userCount'];
            echo "<p>Total Categories: $userCount</p>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
     </div>
        </div>
      </div>
    </div>

</section>
<section class="p-6">
  <div class="w-[60%] border rounded-lg overflow-hidden dark:border-gray-700 ">
  <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
    <thead class="bg-gray-50 dark:bg-gray-700">
      <tr >
      <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Client</th>
      <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Contact</th>
      <th class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Project</th>
    </tr>
    </thead>
    
    <?php
                // $sql = "SELECT * FROM `User` ORDER BY `User_ID` DESC LIMIT 4";
                $sql="SELECT User.User_ID, User.name, User.lname, User.Email_Adress, COUNT(project.Project_ID) AS Projects
                FROM User
                LEFT JOIN project ON User.User_ID = project.User_ID
                GROUP BY User.User_ID, User.name, User.lname, User.Email_Adress;";
                $result = mysqli_query($conn,$sql);
            ?>
                <?php if(mysqli_num_rows($result) > 0):?>
                <?php while($row = mysqli_fetch_assoc($result)):?> 
    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"><?php echo $row['name']?> <?php echo $row['lname']?></td>
      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"><?php echo $row['Email_Adress']?></td>
      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"><?php echo $row['Projects']?></td>

    </tbody>
    <?php endwhile;?> 
            <?php endif;?>
  </table>
 
  <!--  -->
  </div>
</section>
</div>
<!-- <section>
  <div class="p-4 md:w-1/6 sm:w-1/2 ml-[10%] ">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <div>
     <php
        $sql = "SELECT COUNT(*) as userCount FROM User";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $userCount = $row['userCount'];
            echo "<p>Total Users: $userCount</p>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        ?>
     </div>
        </div>
      </div>
</section> -->

</div>
<?php  include('../inc/footer.php'); ?>
