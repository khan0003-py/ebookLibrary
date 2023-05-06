<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
  <link href="/dist/output.css" rel="stylesheet">

</head>

<body>
  <nav class="w-full z-10 sticky top-0 border-b bg-gray-800 border-gray-200 px-2 sm:px-4 py-2.5 dark:bg-gray-800">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="welcome.php" class="flex items-center">
        <img src="img/logo.png" class="mr-3 h-6 sm:h-9" alt="Logo">
        <span class="self-center text-xl font-semibold whitespace-nowrap text-white">eBook Library</span>
      </a>
      <div class="flex items-center md:order-2">
        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
          <span class="sr-only">Open user menu</span>
          <img class="w-8 h-8 rounded-2xl bg-white overflow-visible" src="img/profile.png" alt="user photo">
        </button>

        <div class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1054.4px, 976px, 0px);">
          <div class="py-3 px-4">
            <span class="block text-sm text-gray-900 dark:text-white"><?php echo $_SESSION['username'] ?></span>
          </div>
          <ul class="py-1" aria-labelledby="dropdown">
            <li>
              <a href="logout.php" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-900 hover:text-white dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                out</a>
            </li>
          </ul>
        </div>
        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-400" aria-controls="mobile-menu-2" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
          <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
        <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a href="welcome.php" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-900 focus:outline-none md:hover:bg-transparent md:border-0 md:hover:font-bold md:hover:text-gray-400 font-bold md:p-0" aria-current="page">Home</a>
          </li>

          <li>
            <a href="contactus.php" class="block py-2 pr-4 pl-3 text-white hover:bg-gray-900 focus:outline-none md:hover:bg-transparent md:border-0 md:hover:font-bold md:hover:text-gray-400 font-bold md:p-0">Contact us</a>
          </li>

          <li>
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center py-2 pr-4 pl-3 w-full text-white border-b border-gray-100  md:hover:bg-transparent md:border-0 md:hover:text-gray-400 font-bold md:p-0">Categories
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