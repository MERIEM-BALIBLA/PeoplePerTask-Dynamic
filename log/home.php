<?php session_start();

include('headerclient.php');
?>
<?php
$sql = "SELECT `Project_ID` FROM `project`;";
$result = mysqli_query($conn, $sql);
?>

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
  </div>
  </div>
  </div>
  </section>

  <section class="flex items-center justify-center mt-20">
    <div class="text-gray-600 body-font">
      <!-- <div class="text-center mb-20 ">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Master Cleanse Reliac Heirloom</h1>
  </div> -->
      <div class="container px-5 mx-auto flex gap-10 ">
        <?php
        $sql = "SELECT * FROM `Categories` ORDER BY `Categorie_ID` DESC LIMIT 3";
        $result = mysqli_query($conn, $sql);
        ?>
        <?php if (mysqli_num_rows($result) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
              <div class="flex items-center mb-3">
                <div
                  class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
                <h2 class="text-gray-900 text-lg title-font font-medium">
                  <?php echo $row['Categorie_Name'] ?>
                </h2>
              </div>
              <div class="flex-grow">
                <p class="leading-relaxed text-base">
                  <?php echo $row['description'] ?>
                </p>
                <a class="mt-3 text-indigo-500 inline-flex items-center">See more
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
  </section>


  <section class="flex flex-col mt-8">
    <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Project section</h1>
    <div class="flex justify-center items-center flex-row w-full gap-8">
      <?php
      $sql = "SELECT * FROM `project` ORDER BY `Project_ID` DESC LIMIT 4";
      $result = mysqli_query($conn, $sql);
      ?>
      <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <!-- <div class="p-4 lg:w-1/3">
            <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
            <img src="../images/project.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
            <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Project</p>

              <php echo $row['Project_title'] ?>
              </h1>
              <p class="leading-relaxed mb-3">
                <php echo $row['Descriptions'] ?>
              </p>
              <a href="singlePage.php?Project_ID=<php echo $row['Project_ID']; ?>" name="project"
                class="text-indigo-500 inline-flex items-center">
                <button method="GET">Apply</button>
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>

              <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                <span
                  class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>6
                </span>
              </div>
            </div>
          </div> -->



          <div class="flex flex-col">
            <div class="relative min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
              <div class="flex flex-col">
                <a class="block shadow-xl rounded-2xl">
                  <img src="../images/project.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                </a>
              </div>
            </div>
            <div class="flex flex-col px-1 pt-6">
              <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Project</p>
              <a href="javascript:;">
                <h5>
                  <?php echo $row['Project_title'] ?>
                </h5>
              </a>
              <p class="mb-6 leading-normal text-sm">
                <?php echo $row['Descriptions'] ?>
              </p>
              <div class="flex items-center justify-between">
                <a href="singlePage.php?Project_ID=<?php echo $row['Project_ID']; ?>" name="project"
                class="text-indigo-500 inline-flex items-center">
                <button type="button" method="GET"
                  class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Apply</button>
                  </a>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="text-center mb-8">
    <a href="projectPage.php" class="text-indigo-500 inline-flex items-center">View more
      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
        <path d="M5 12h14"></path>
        <path d="M12 5l7 7-7 7"></path>
      </svg></a>
    </div>
  </section>
  
  <section class="flex flex-col">
    <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Offers section</h1>
    <div class="flex justify-center items-center flex-row  w-full gap-8">
      <?php
      $sql = "SELECT * FROM `offers` ORDER BY `offer_ID` DESC LIMIT 3";
      $result = mysqli_query($conn, $sql);
      ?>
      <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="p-4 lg:w-1/3">
            <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Offer</h2>
              <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
                <?php echo $row['offer_title'] ?>
              </h1>
              <p class="leading-relaxed mb-3">
                <?php echo $row['Descriptions'] ?>
              </p>
              <a class="text-indigo-500 inline-flex items-center">View more
                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                <span
                  class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>6
                </span>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <a href="projectPage.php"><button type="button"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M1 5h12m0 0L9 1m4 4L9 9" />
          </svg>
          <span class="sr-only">Icon description</span>
        </button></a>

    </div>
  </section>
  </div>
  <!-- <div class="flex-auto p-4"> -->
  <!-- <div class="flex flex-wrap -mx-3"> -->
 