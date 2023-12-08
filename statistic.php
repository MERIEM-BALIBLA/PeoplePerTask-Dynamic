<?php  include('inc/header.php'); ?>
<div class="container-fluid flex flex-col"  style="width:100%">
    <nav class="w-[65%] p-2">
     <div class="text-black dark:text-white">
                <div class="flex gap-2">
                  <h2 class="font-bold text-2xl"> Welcome Back,Ali</h2>
                  <img src="Waving Hand Emoji.svg" alt="waving hand">
                </div>
                <p class="text-textG text-base">Here's what's happening with your store touday</p>
            </div>
     </nav>
     
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
  </div>

</section>
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
