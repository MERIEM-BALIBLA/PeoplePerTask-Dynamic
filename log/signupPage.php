<?php  include('header.php'); ?>
    <main class="bg-neutral-200 py-[1%]">
        <div
            class="max-w-2xl h-fit mx-auto  my-12 bg-white p-8 pb-1 mt-16 rounded-xl shadow shadow-slate-200 drop-shadow-lg dark:bg-mainColorDark dark:shadow-slate-900 sm: w-full">
            <h1 class="text-4xl text-center font-bold font-fredoka dark:text-white">Log in to <span
                    class="text-mainBlue dark:text-mainPurple">PeoplePerTask</span></h1>
                    
            <form action="signup.php" method="POST" class="mt-10 mb-4">
                <div class="flex flex-col space-y-5 items-center justify-center w-[100%]">
                    <div class="flex flex-row items-center justify-between w-[100%] ">
                        <div class="w-[47%]">
                            <label for="email"></label>
                            <input id="first-name" type="text" name="fname" class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="First Name" required="">
                        </div>
                        <div class="w-[47%]">
                            <label for=""></label>
                            <input type="text" name="lname" id="last-name"class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="Last Name" required="">
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-between space-y-5 w-[100%]">
                        <label for="email" class="w-[100%]">
                            <input id="email" name="email" type="email"
                                class="w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Email">
                        </label>
                        <label for="password" class="w-[100%]">
                            <input id="password" name="password" type="password"
                                class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Password" required="">
                        </label>
                        <label for="password" class="w-[100%]">
                            <input id="password" name="repeat_password" type="password"
                                class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Confirm password" required="">
                        </label>

                        <?php
                            $query = "SELECT * FROM ROLES";
                            $result = mysqli_query($conn, $query);
                            $options = "";
                            while ($row = mysqli_fetch_assoc($result)) {
                                $options .= "<option value='{$row['role_ID']}'>{$row['role']}</option>";
                            }?>
                        <select class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" name="role">
                            <option>Your role is</option>
                            <?php echo $options; ?>
                        </select>
                    </div>   
                    
                    <button type="submit" name="submit" class=" w-full font-medium text-white  bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Submit</button>
                   
                    <a href="loginPage.php"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <span>Back</span>
                    </button></a>
                </div>
            </form>
        </div>
    </main>

    <footer>
    </footer>
