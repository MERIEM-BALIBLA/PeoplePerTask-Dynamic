<?php include('headerclient.php')?>
<section>
<div class="bg-white pb-6 sm:pb-8 lg:pb-12">
  <!-- banner - start -->
  <div class="relative flex bg-indigo-500 justify-between px-2 py-3 sm:flex-nowrap sm:items-center sm:gap-3 sm:pr-8 md:px-2">
    <div class="flex justify-center items-center">
   <!-- categorie -->
   <?php
        $query = "SELECT * FROM Categories";
        $result = mysqli_query($conn, $query);
        $options = "";
        while ($row = mysqli_fetch_assoc($result)) {
        $options .= "<option value='{$row['Categorie_ID']}'>{$row['Categorie_Name']}</option>";
        }?>
        <div>
              <label><select id="cat" class="rounded-full mb-4 mt-4 mr-4" name="Categorie_ID">
        <?php echo $options; ?>
              </select></label>
        </div> 
    <!-- search -->
    <form action="" method="">
      <div class="flex items-center gap-6 px-3 mb-2 w-10/12 bg-white text-sm text-black sm:order-none sm:mb-0 sm:w-auto md:text-base rounded-full">
      <input id="search" name="search" type="text" placeholder="Searching for a type" class="border-none rounded-full">
      <a href="#" ><img  src="../images/search-2905 1.svg" alt=""></a>
      </div>
    </form>
    </div>
    <!--  -->
    <div class="flex justify-between">
    <!-- close button - start -->
        <div class="flex w-1/12 items-start justify-end sm:right-0 sm:order-none sm:mr-1">
          <button type="button" class="text-white transition duration-100 hover:text-indigo-100 active:text-indigo-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    <!-- close button - end -->
  </div>
  <!-- banner - end -->
</div>
</section>
<section id="parent" class="flex justify-center items-center flex-wrap pt-12 w-full gap-8 p-20">
    <!-- Le reste de votre contenu ici -->
            <?php
                $sql = "SELECT * FROM `project` ORDER BY `Project_ID` DESC LIMIT 4";
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
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script>
document.getElementById("search").addEventListener("input", function () {
  var search = document.getElementById("search").value;

  var x = new XMLHttpRequest();
  x.open("GET", "message.php?search=" + search, true);
  x.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      var res = JSON.parse(this.response);
      console.log(res);

      var parent = document.getElementById("parent");
      parent.innerHTML = "";

      res.forEach(e => {
        var div = document.createElement("div");
        div.className = "flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]";

        div.innerHTML = `
          <div class="flex justify-center items-center flex-col">
            <img src="../images/job-logo-1.png.svg" alt="first-job-logo"> 
            <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">${e.Project_title}</h3>
            <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">${e.Descriptions}</p>
          </div>
          <a class="btn btn-primary" href="projectInfo.php?Project_ID=${e.Project_ID}"><button>Im a simple link</button><a>`;
        parent.appendChild(div);
      });
    } else {
      var parent = document.getElementById("parent");
      parent.innerHTML = "";
    }
  };
  x.send();
});
  
// categories 
document.getElementById("cat").addEventListener("input", function () {
  var search = document.getElementById("cat").value;

  var x = new XMLHttpRequest();
  // x.open("GET", "message.php?search=" + search, true);
  x.open("GET", "message.php?cat=" + search, true);
  x.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      var res = JSON.parse(this.response);
      console.log(res);

      var parent = document.getElementById("parent");
      parent.innerHTML = "";

      res.forEach(e => {
        var div = document.createElement("div");
        div.className = "flex flex-col gap-8 justify-center items-center rounded-[18px] drop-shadow-[0px_2px_28px_0px_#3E35780A] shadow-[0px_2px_28px_0px_#3E35780A] bg-white dark:bg-cardGrey p-8 w-[329px]";

        div.innerHTML = `
          <div class="flex justify-center items-center flex-col">
            <img src="../images/job-logo-1.png.svg" alt="first-job-logo"> 
            <h3 class="dark:text-slate-50 text-defaultText font-poppins font-semibold text-xl">${e.Project_title}</h3>
            <p class="text-mainBlue dark:text-mainPurple font-poppins font-normal text-base">${e.Descriptions}</p>
          </div>
          <a class="btn btn-primary" href="projectInfo.php?Project_ID=${e.Project_ID}"><button>Im a simple link</button><a>`;
        parent.appendChild(div);
      });
    } else {
      var parent = document.getElementById("parent");
      parent.innerHTML = "";
    }
  };
  x.send();
});
  </script>

