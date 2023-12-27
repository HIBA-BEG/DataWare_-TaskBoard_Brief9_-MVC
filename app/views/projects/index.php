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
          <div class="flex items-center">
            <div>
              <img class="inline-block h-9 w-9 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
            <div class="ml-3">
              <a href="" class="text-sm font-medium text-notwhite-color"><p><?php echo $_SESSION['last_name']. ''.$_SESSION['first_name']; ?></p></a>
              <a href="<?php echo URLROOT; ?>/users/logout" class="text-xs font-medium text-notwhite-color group-hover:text-gray-800">
                <p>Log out</p>
              </a>
            </div>
          </div>
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
      <div class="px-4 flex items-center justify-center">
        <div class="flex flex-wrap gap-20">
          <a href="<?php echo URLROOT; ?>/projects/add">
            <button type="button" class="flex shadow px-4 border-r rounded-lg border-gray-200 text-orange-color focus:outline-none focus:ring-2 focus:ring-inset focus:ring-darkred-color ">
              <p class="mb-12 text-xl font-semibold my-2">+ Add Project</p>
            </button>
          </a>
          <div class="flex rounded-lg shadow">
            <form class="w-full flex md:ml-0 bg-transparent" action="#" method="GET">
              <label for="search-field" class="sr-only">Search</label>
              <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                  <!-- Heroicon name: solid/search -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                  </svg>
                </div>
                <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent bg-orange-color rounded-lg text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
              </div>
            </form>
          </div>
          <button type="button" class="flex items-center shadow rounded-lg px-4 border-r border-gray-200 text-orange-color focus:outline-none focus:ring-2 focus:ring-inset focus:ring-darkred-color">
            <p class="mb-12 text-xl font-semibold my-2">+ Add Multiple</p>
          </button>
        </div>
      </div>
    </div>
    <main class="flex-1">
      <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <h1 class="text-2xl font-semibold text-orange-color">+ My projects</h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <div class="py-4">

            <!-- component -->
            <div class="flex items-center ">
              <div class="flex flex-wrap gap-20">

                <!-- To Do -->
                <?php foreach ($data['projects'] as $project) : ?>
                  <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div class="relative bg-white py-6 px-6 rounded-3xl w-80 h-62 my-4 shadow-xl">
                      <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl bg-pink-500 left-4 -top-6">
                        <!-- svg  -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                      </div>
                      <div class="mt-8 flex flex-col">
                        <p class="text-xl font-semibold my-2">Project: <?php echo $project->project_title ?></p>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                          <!-- svg  -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 320 512" stroke="currentColor">
                            <path fill="#9da4b0" d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z" />
                          </svg>
                          <p>Description: <?php echo $project->description ?></p>
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm">
                          <!-- svg  -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                          </svg>
                          <p>created on: <?php echo $project->creation_date ?></p>
                        </div>
                        <div class="flex space-x-2 text-gray-400 text-sm my-3">
                          <!-- svg  -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                          </svg>
                          <p>Deadline: <?php echo $project->deadline ?></p>
                        </div>
                        <div class="flex justify-end border-t-2"></div>

                        <div class="flex justify-between ">
                          <div class="m-2">

                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="22" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                              <path fill="#ec4899" d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                            </svg>
                          </div>
                          <div class="m-2">

                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                              <path fill="#ec4899" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                            </svg>
                          </div>
                          <div class="m-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 448 512">
                              <path fill="#ec4899" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                            </svg>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>

              </div>
            </div>

          </div>
          <!-- /End replace -->
        </div>
      </div>
    </main>
  </div>



  <script src="<?php echo URLROOT; ?>/public/js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</body>

</html>