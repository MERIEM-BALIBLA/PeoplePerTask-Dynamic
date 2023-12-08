<?php 
include('headerclient.php');
// require '';
?>

<!-- <body class="bg-body-bg bg-cover bg-center"> -->
        <div
            class="max-w-2xl h-fit mx-auto  my-12 bg-white p-8 pb-1 mt-16 rounded-xl shadow shadow-slate-200 drop-shadow-lg dark:bg-mainColorDark dark:shadow-slate-900 sm: w-full">
            <h1 class="text-4xl text-center font-bold font-fredoka dark:text-white">Contact <span
                    class="text-mainBlue dark:text-mainPurple"><span class="text-violet-400">People</span><span class="text-orange-400">Per</span><span class="text-violet-400">Task</span></h1>
                    <form method="POST" class="mt-10 mb-6" action="validation.php">
                        <div class="flex flex-col space-y-5 items-center justify-center w-[100%]">
                            <div class="flex flex-row items-center justify-between w-[100%] ">
                                <div class="w-[47%]">
                                    <label for="email"></label>
                                    <input id="first-name" type="text" name="firt_name" class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="First Name">
                                </div>
                                <div class="w-[47%]">
                                    <label for=""></label>
                                    <input type="text" name="last_name" id="last-name"
                                    class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="flex flex-col items-center justify-between space-y-5 w-[100%]">
                            <!-- email -->
                            <label for="email" class="w-[100%]">
                                    <input type="text" name="mail" id="last-name"
                                    class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple" placeholder="Email">
                            </label>
                            <!-- subject -->
                            <label for="email" class="w-[100%]">
                                    <input id="email" name="subject" type="text"
                                        class="w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                        placeholder="Subject">
                            </label>
                            <!-- message -->
                            <label for="password" class="w-[100%]">
                                    <input id="password" name="message" 
                                        class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                        placeholder="Message">
                            </label>
                            </div>
                            <button
                                class=" w-full font-medium text-white  bg-gradient-to-r from-purple-500 to-pink-500 hover:bg-gradient-to-l focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 text-xl">
                                <span>Send</span>
                            </button>
                        </div>
                        </form>
                    </div>

