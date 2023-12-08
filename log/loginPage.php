<?php  include('header.php');?>
<section class="flex justify-center gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
  <div class="container h-full py-10 px-[10%]">
    <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
      <div class="w-full">
        <div
          class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
          <div class="g-0 flex ">
            <!-- Left column container-->
            <div class="px-4 md:px-0 lg:w-6/12">
              <div class="md:mx-6 md:p-12">
                <!--Logo-->
                <div class="text-center">
                  <img class="mx-auto w-96" src="../images/main-logo.svg" alt="main-logo">
                </div>
                <div class="text-center my-12">
                <h4 class="mb-12 mt-1 pb-1 text-xl font-moyen">We are The PeoplePerTask Team</h4>
                </div>
                <div>
                <form action = "login.php" method = "POST" class="p-[2%]">
                  <!-- <p class="mb-4">Please login to your account</p> -->
                          <!-- emeil input -->
                        <div class="mb-[9%]">
                        <label for="email" class="w-[100%]">
                            <input value = "<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : ''?>" id="email" name="email" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200" placeholder="Email" required="">
                        </label>
                        </div>
                        <!-- password input -->
                        <div class="mb-[9%]">
                        <label class="w-[100%]">
                            <input value="<?= isset($_COOKIE['pass_word']) ? $_COOKIE['pass_word'] : ''?>" id="password" name="pass_word" type="password" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-neutral-200"
                                placeholder="Password" required="">
                        </label>
                        </div>
                  <div class="mb-12 pb-1 pt-1 text-center">
                      <button class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] bg-gradient-to-r from-purple-500 to-pink-500" name="submit" type="submit" data-te-ripple-init data-te-ripple-color="light">Log in</button>
                    <!--Forgot password link-->
                      <a href="#!">Forgot password?</a>
                  </div>
                  <!--Register button-->
                  <div class="flex items-center justify-between pb-6">
                    <p class="mb-0 mr-2">Don't have an account?</p>
                    <a href="signUp.php">
                    <button type="button" class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"data-te-ripple-init data-te-ripple-color="light">Register</button>
                    </a>
                  </div>
                </form>
                </div>
                
              </div>
            </div>
            <!-- Right column container with background and description-->
            <div>
              <img src="../images/user.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>