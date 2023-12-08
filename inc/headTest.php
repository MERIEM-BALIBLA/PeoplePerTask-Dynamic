





<?php
// login.php
include('../db.php');
// Autres opérations de connexion, etc.
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" > -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    <title>CRUD</title>
  </head>
  <body class="flex">
    <?php
    $sql = "SELECT * FROM User";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['statut'] = ($row['role_ID']);?>

  <side class="text-base rounded-3xl w-[15%] min-h-screen py-[1%] px-[1%] border border-violet-400">
    <div class="flex flex-col ml-[2%] mb-[10%] text-indigo-500 text-lg">  
    <a href="../log/home.php"><img src="../main-logo.svg" alt="main-logo"></a>
    <a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors  hover:scale-110 rounded mb-[10%] block mt-4 lg:inline-block lg:mt-0  hover:text-white mr-4" href="../log/home.php">Home</a>
    <?php if($_SESSION['statut'] == 1):?>
    <a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../dashboard/statistic.php">Statistic</a><?php  endif ?>
    <?php if($_SESSION['statut'] == 1):?>
    <a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../dashboard/index.php">User</a><?php  endif?>
    <?php if($_SESSION['statut'] == 1):?>
    <a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../dashboard/freelencer.php">Freelencer</a><?php  endif?>
    <?php if($_SESSION['statut'] == 1):?>
    <a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../dashboard/categories.php">Categorie</a><?php  endif?>
    <?php if($_SESSION['statut'] == 1 OR $_SESSION['statut'] == 2):?>
    <a class="flex p-3 mb-15 w-3/4 h-14 transition-transform duration-200 ease-out transform-colors hover:scale-110 rounded mb-[10%]" href="../freelencer/projects.php">Project</a><?php  endif?>
    </div>

    </side>  
    
  