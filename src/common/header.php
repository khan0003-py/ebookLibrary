<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
    <link href="/dist/output.css" rel="stylesheet">

    <!-- import 1 -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!--  -->

</head>

<body>

    <nav class="w-full z-10 sticky top-0 border-b bg-gray-800 border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800 ">
        <div class="sticky container flex flex-wrap justify-between items-center mx-auto">
            <a href="index.php" class="flex items-center">
                <img src="img/logo.png" class="mr-1 h-6 sm:h-8" alt="Logo" />
                <span class="self-center text-xl ml-2 font-semibold whitespace-nowrap dark:text-white text-white">eBook
                    Library</span>
            </a>
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-400" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="index.php" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-900 focus:outline-none md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:hover:font-bold md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="signup.php" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-900 focus:outline-none md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:hover:font-bold md:p-0">Sign
                            up</a>
                    </li>
                    <li>
                        <a class="block py-2 pr-4 pl-3 text-white hover:bg-gray-900 focus:outline-none md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:hover:font-bold md:p-0" href="login.php">Login</a>
                    </li>
                    <li>
                        <a class="block py-2 pr-4 pl-3 text-white hover:bg-gray-900 focus:outline-none md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:hover:font-bold md:p-0" href="contactus.php">Contact us</a>
                    </li>
                    <li>
                        <a class="block py-2 pr-4 pl-3 text-white hover:bg-gray-900 focus:outline-none md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:hover:font-bold md:p-0" href="aboutus.php">About us</a>
                    </li>

                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full text-white border-b border-gray-100  md:hover:bg-transparent md:border-0 md:hover:text-gray-400 md:hover:font-bold md:p-0">Categories
                            <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg></button>
                        <div id="dropdownNavbar" class="hidden z-10 w-44 bg-gray-800 rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="technology.php" class="block py-2 px-4 hover:bg-white hover:text-gray-800  text-white">Technology</a>
                                </li>
                                <li>
                                    <a href="entertainment.php" class="block py-2 px-4 hover:bg-white hover:text-gray-800  text-white">Entertainment</a>
                                </li>
                                <li>
                                    <a href="environment.php" class="block py-2 px-4 hover:bg-white hover:text-gray-800 text-white">Environment</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>