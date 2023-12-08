<?php include('header.php')?>
<main class="px-16 herothird:px-8">
    <section class="flex justify-center items-center flex-row py-0">
      <div class="w-[60%] w-[100%] flex justify-center items-start flex-col gap-6">
        <div>
          <h1
            class="herothird:text-[40px] herosecond:text-[50px] text-[60px] font-poppins font-semibold text-defaultText dark:text-slate-50">
            Unlock Your <span class="dark:text-mainPurple text-mainBlue">Freelance</span> Potential <span
              class="dark:text-mainPurple text-mainBlue">Today!</span>
          </h1>
          <p class="dark:text-textGrey text-defaultText">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae corporis<br> eveniet a omnis odit aut
            culpa accusantium quibusdam.
          </p>
        </div>
        
        <div class="flex justify-center items-center gap-6">
          <button type="button"
          class="middle none center mr-4 rounded-lg bg-purple-300 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Discover
            Now</button>
          <div class="flex justify-center items-center gap-4">
            <button type="button" class="p-[0.9rem] aspect-square rounded-full dark:bg-slate-50 bg-white"><img
                src="../images/SVG.svg" alt="playbutton-svg"></button>
            <p class="text-defaultText dark:text-textGrey">watch video</p>
          </div>
        </div>
        </div>
        <div>
          <img src="../images/hero-image.svg" alt="hero-image">
        </div>
      </section>
      <section class="py-12 justify-between items-start flex gap-4 flex-row flex-wrap">
          <img src="../images/company1.svg" alt="company1">
          <img src="../images/company2.svg" alt="company2">
          <img src="../images/company3.svg" alt="company3">
          <img src="../images/company4.svg" alt="company4">
          <img src="../images/company5.svg" alt="company5">
      </section>
        <div class="flex justify-center items-center gap-3 flex-col">
          <h2 class="text-defaultText dark:text-slate-50 font-poppins font-semibold text-[32px]">Featured Jobs</h2>
          <p class="dark:text-textGrey text-defaultText font-poppins font-normal text-sm text-center max-w-[600px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quia quos vero vel iste tenetur dolor alias sit excepturi. Illo aliquam culpa facilis iusto beatae placeat accusantium non eum minima.</p>
         </div>
         <section class="flex flex-row">
        <?php
                $sql = "SELECT * FROM `Categories` ORDER BY `Categorie_ID` DESC LIMIT 3";
                $result = mysqli_query($conn,$sql);
            ?>
                <?php if(mysqli_num_rows($result) > 0):?>
                <?php while($row = mysqli_fetch_assoc($result)):?>
    <div class="p-3 mr-[4%] sm:py-8 lg:py-12 flex flex-col overflow-hidden rounded-xl bg-white w-[30%] border">
      <!-- content - start -->
        <h2 class="text-xl font-bold text-black md:text-2xl lg:text-4xl mb-4"><?php echo $row['Categorie_Name']?></h2>
        <p class=" text-black mb-4"><?php echo $row['description']?></p>
          <a class="inline-block rounded-lg bg-purple-300 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base cursor-pointer" href="loginPage.php">See more</a>
  </div>
  <?php endwhile;?> 
            <?php endif;?>
    </section> 
        <section class="flex justify-center items-center flex-row pt-12 w-full gap-8">
            <?php
                $sql = "SELECT * FROM `project` ORDER BY `Project_ID` DESC LIMIT 4";
                $result = mysqli_query($conn,$sql);
            ?>
                <?php if(mysqli_num_rows($result) > 0):?>
                <?php while($row = mysqli_fetch_assoc($result)):?> 
            <div class="flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]">
              <div class="flex justify-center items-center flex-col gap-4">
                <img src="../images/job-logo-1.png.svg" alt="first-job-logo"> 
              <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl"><?php echo $row['Project_title']?></h3>
              <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base"><?php echo $row['Descriptions']?></p>
              </div>
             
              <div class="flex flex-col justify-center items-center flex-row w-full gap-4">
                <!-- <div class="rounded-full aspect-square w-[50px] bg-[#FF5353] flex justify-center items-center"><img src="../images/SVG (3).svg" alt="heart-emoji"></div> -->
                <button type="button" class="text-slate-50 rounded-full bg-blue-500 py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-full">Click on me</button>
                <span>For More Information</span>
              </div>
            </div>
            <?php endwhile;?> 
            <?php endif;?>
            <a href="signupPage.php"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            <span class="sr-only">Icon description</span>
            </button></a>
        </section>
        