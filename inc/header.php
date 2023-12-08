<?php 
session_start();
require '../db.php';

    $_SESSION['user_id'];
    // var_dump($_SESSION['user_id']);
    $_SESSION['role'];
    // var_dump($_SESSION['role']);
    ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <title>CRUD</title>
  </head>
  <body class="flex">
    
    <side class="text-base rounded-3xl w-[17%] min-h-screen py-[1%] px-[1%] border border-violet-400">
        <div class="flex flex-col ml-[2%] mb-[10%] text-indigo-500 text-xl font-semibold tracking-wide">  
        <a href="../log/home.php"><img src="../main-logo.svg" alt="main-logo"></a>

        <?php if($_SESSION['role'] == 2 || $_SESSION['role'] == 3):?>
        <div class="text-indigo-500"><a href="../log/profile.php" class="flex items-center p-2 text-indigo-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%] block mt-4  hover:text-white mr-4">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            <span class="ml-[7%]">Profile</span></a>
        </div>
        <?php  endif?>

        <div>
        <?php if($_SESSION['role'] == 1 OR $_SESSION['role'] == 2 OR $_SESSION['role'] == 3):?>
            <a  class="flex items-center p-2 text-indigo-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%] block mt-4  hover:text-white mr-4" href="../log/home.php">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
            </svg>
            <span class="ml-[7%]">Home</span></a>
        <?php  endif?>

<?php if($_SESSION['role'] == 1):?>

<a class="flex items-center p-2 text-indigo-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%] block mt-4  hover:text-white mr-4" href="../dashboard/statistic.php">
<svg class="flex-shrink-0 w-5 h-5 text-indigo-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
    <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
</svg>    
<span class="ml-[7%]">Statistic</span></a>

<?php  endif?>
<?php if($_SESSION['role'] == 1):?>
<a class="flex items-center p-2 text-indigo-500 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%] block mt-4  hover:text-white mr-4" href="../dashboard/index.php">
<svg class="flex-shrink-0 w-5 h-5 text-indigo-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
    <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
</svg>    
<span class="ml-[7%]">User</span></a><?php  endif?>
<?php if($_SESSION['role'] == 1 || $_SESSION['role'] == 2):?>
<a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../dashboard/freelencer.php">Freelencer</a><?php  endif?>
<?php if($_SESSION['role'] == 1):?>
<a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../dashboard/categories.php">Categorie</a><?php  endif?>
<?php if($_SESSION['role'] == 1 OR $_SESSION['role'] == 2):?>
<a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../freelencer/projects.php">Project</a><?php  endif?>

<?php if($_SESSION['role'] == 1 || $_SESSION['role'] == 3):?>
<a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../offers/offers.php">Offers</a><?php  endif?>

<a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../log/logout.php">Log out</a>

<a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../offers/jobs.php">job</a>



        </div>
    </div>
        </side>  
        <div class="container-fluid"  style="width:100%">
    <nav class="w-[65%] p-2">
     <div class="text-black dark:text-white">
                <div class="flex gap-2">
                <h2 class="font-bold text-2xl"><?php echo "Welcome Back," . $_SESSION['name']; ?></h2>
                  <img src="../dashboard/Waving Hand Emoji.svg" alt="waving hand">
                </div>
                <p class="text-textG text-base">Here's what's happening with your store today</p>
            </div>
     </nav>
  