<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col flex-1 bg-notwhite-color">
  <!-- Static sidebar for desktop -->
  <div class="hidden navbar md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex-1 flex flex-col min-h-0 bg-gray-50 dark:bg-gray-800">
      <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
        <div class="flex items-center flex-shrink-0 px-4">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="DataWareTasker">
        </div>
        <nav class="mt-5 flex-1 px-2 space-y-1">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="#" class="bg-orange-color text-notwhite-color group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <!--
              Heroicon name: outline/home

              Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
            -->
            <svg class="text-notwhite-color mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
          </a>

          <a href="<?php echo URLROOT; ?>/pages/register" class="text-notwhite-color hover:bg-orange-color group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/folder -->
            <svg class="text-notwhite-color mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            </svg>
            My Projects
          </a>

          <a href="<?php echo URLROOT; ?>/pages/login" class="text-notwhite-color hover:bg-orange-color group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/users -->
            <svg class="text-notwhite-color mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            My Tasks
          </a>

          <a href="#" class="text-notwhite-color hover:bg-orange-color group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/chart-bar -->
            <svg class="text-notwhite-color mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
            Statistics
          </a>

        </nav>
      </div>
      <div class="flex-shrink-0 flex bg-orange-color p-4">
        <a href="#" class="flex-shrink-0 w-full group block">
          <div class="flex items-center">
            <div>
              <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-notwhite-color">Tom Cook</p>
              <p class="text-xs font-medium text-notwhite-color group-hover:text-gray-800">Log out</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="md:pl-64 flex flex-col flex-1">
    <div class="sticky mt-6 z-10 flex h-16">
      <div class="hamburger md:hidden">
        <button type="button" class="humb px-4 border-r border-gray-200 text-darkred-color focus:outline-none focus:ring-2 focus:ring-inset focus:ring-darkred-color " onclick="toggleSidebar()">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/menu-alt-2 -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
        </button>
        <!-- <button type="button" class="px-4 border-r border-gray-200 text-darkred-color focus:outline-none focus:ring-2 focus:ring-inset focus:ring-darkred-color md:hidden">
        <span class="sr-only">Open sidebar</span>
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button> -->
      </div>
    </div>
    <main class="flex-1">
      <div class="px-4 flex items-center justify-center">
      <div class="flex md:w-1/2 justify-center py-10 items-center bg-notwhite-color">
            <form action="<?php echo URLROOT; ?>/project/add" method="post" class="bg-notwhite-color">
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Add a new Project !!!!</h1>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border" type="text" name="first_name" id="first_name" placeholder="First name">
                    </div>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border" type="text" name="last_name" id="last_name" placeholder="Last name" />
                    </div>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border" type="text" name="email" id="email" placeholder="Email Address" />
                    </div>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border" type="password" name="password" id="password" placeholder="Password" />
                    </div>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" />
                    </div>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border" type="phone" name="phone" id="phone" placeholder="Phone Number" />
                    </div>
                </div>
                <button type="submit" value="Register" class="block w-full bg-gradient-to-tr from-orange-color to-darkred-color mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
                <a href="<?php echo URLROOT; ?>/users/login" class="text-sm ml-2 hover:text-blue-500 cursor-pointer">You already have an account? Click here to login...</a>
            </form>
        </div>
      </div>
    </main>
  </div>



  <script src="<?php echo URLROOT; ?>/public/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>