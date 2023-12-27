<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'darkred-color': '#B20000',
                        'red-color': '#FD292F',
                        'orange-color': '#FE8535',
                        'yellow-color': '#FDB10B',
                        'lightyellow-color': '#FEF4C0',
                        'notwhite-color': '#f6ebf3',
                    },
                },
            },
        }
    </script>
</head>

<body>
    <!-- component -->
    <div class="h-screen md:flex">
        <div class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-orange-color to-darkred-color i justify-around items-center hidden">
            <div>
                <h1 class="text-white font-bold text-4xl font-sans">DataWareTasker</h1>
                <p class="text-white mt-1">Please fill out this form to register with us</p>
            </div>
            <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-notwhite-color">
            <form action="<?php echo URLROOT; ?>/users/register" method="post" class="bg-notwhite-color">
                <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello!</h1>
                <p class="text-sm font-normal text-gray-600 mb-7">Welcome To DataWareTasker</p>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border <?php echo (!empty($data['first_name_err'])) ? 'border-red-500 text-red-500' : 'border-none'; ?>" type="text" name="first_name" id="first_name" placeholder="First name">
                    </div>
                    <span class="text-red-500"><?php echo $data['first_name_err']; ?></span>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border <?php echo (!empty($data['last_name_err'])) ? 'border-red-500 text-red-500' : 'border-none'; ?>" type="text" name="last_name" id="last_name" placeholder="Last name" />
                    </div>
                    <span class="text-red-500"><?php echo $data['last_name_err']; ?></span>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border <?php echo (!empty($data['email_err'])) ? 'border-red-500 text-red-500' : 'border-none'; ?>" type="text" name="email" id="email" placeholder="Email Address" />
                    </div>
                    <span class="text-red-500"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border <?php echo (!empty($data['password_err'])) ? 'border-red-500 text-red-500' : 'border-none'; ?>" type="password" name="password" id="password" placeholder="Password" />
                    </div>
                    <span class="text-red-500"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border <?php echo (!empty($data['confirm_password_err'])) ? 'border-red-500 text-red-500' : 'border-none'; ?>" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" />
                    </div>
                    <span class="text-red-500"><?php echo $data['confirm_password_err']; ?></span>
                </div>
                <div class="flex flex-col border-2 py-2 px-3 rounded-2xl mb-4">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input class="pl-2 bg-notwhite-color outline-none border <?php echo (!empty($data['phone_err'])) ? 'border-red-500 text-red-500' : 'border-none'; ?>" type="phone" name="phone" id="phone" placeholder="Phone Number" />
                    </div>
                    <span class="text-red-500"><?php echo $data['phone_err']; ?></span>
                </div>
                <button type="submit" value="Register" class="block w-full bg-gradient-to-tr from-orange-color to-darkred-color mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
                <a href="<?php echo URLROOT; ?>/users/login" class="text-sm ml-2 hover:text-blue-500 cursor-pointer">You already have an account? Click here to login...</a>
            </form>
        </div>
    </div>


</body>

<script src="<?php echo URLROOT; ?>/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

</html>