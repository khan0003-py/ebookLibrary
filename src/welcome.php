<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}

?>

<!doctype html>
<html>

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
  <link href="/dist/output.css" rel="stylesheet">

  <!-- import 1 -->
  <link rel="stylesheet" href="loader.css">
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
        }
      }
    }
  </script>

  <title>Home | eBook Library</title>

    <!-- add icon link -->
    <link rel="icon" href="img/logo.png">

</head>

<body onload="Load()">

<?php include 'common/login_header.php'?>

  <div class="Home_container__bCOhY">
        <div class="flex bg-white h-96 container mx-auto">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <h1 class="text-3xl font-semibold text-gray-800 md:text-4xl">
                        <span class="block xl:inline">Wecome to</span>
                        <span class="block text-indigo-600 xl:inline">eBook Library</span>
                    </h1>
                    <p class="mt-2 text-sm text-gray-500 md:text-base">"An electronic version of a printed book", some
                        e-books
                        exist without a printed equivalent. E-books can be read on dedicated e-reader devices, but also
                        on
                        any
                        computer device that features a controllable viewing screen, including desktop computers,
                        laptops,
                        tablets
                        and smartphones.
                    </p>
                    <div class="flex justify-center lg:justify-start mt-6">
                        <a href="#categories">
                        <button
                            class="px-3 py-2 lg:px-4 lg:py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800">Read
                            Now</button>
                            </a>
                        <button
                            class="px-3 py-2 mx-4 lg:px-4 lg:py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400">Explore
                            Blog</button>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                <div class="h-full object-cover"
                    style="background-image:url(https://source.unsplash.com/800x1000/?library)">
                </div class="h-full bg-black opacity-25">
            </div>
        </div>
    </div>
    </div>


    <div id="categories">
    <h2 class="text-3xl font-medium title-font text-gray-900 my-10 text-center">Books Categories</h2>
    <div class="container px-5 py-10 mx-auto">
        <div class="flex flex-wrap">
            <div class="lg:p-4 md:w-1/3 flex justify-center">
                <div class="max-w-sm rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full" src="https://source.unsplash.com/400x200/?technology" alt="blog">
                    <div class="p-6 bg-gray-700">
                        <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1">CATEGORY</h2>
                        <h1 class="title-font text-lg font-medium text-white mb-3">Technology</h1>
                        <div class="flex items-center flex-wrap ">
                            <a href="technology.php">
                            <button
                                class="inline-flex items-center bg-white text-gray-900 border-0 py-1 px-3 focus:outline-none hover:bg-gray-500 hover:text-white rounded-full text-base mt-4 md:mt-0">Start
                                Reading
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:p-4 md:w-1/3 flex justify-center">
                <div class="max-w-sm rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full" src="https://source.unsplash.com/400x200/?environment" alt="blog">
                    <div class="p-6 bg-gray-700">
                        <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1">CATEGORY</h2>
                        <h1 class="title-font text-lg font-medium text-white mb-3">Environment</h1>
                        <div class="flex items-center flex-wrap">
                            <a href="environment.php">
                            <button
                                class="inline-flex items-center bg-white text-gray-900 border-0 py-1 px-3 focus:outline-none hover:bg-gray-500 hover:text-white rounded-full text-base mt-4 md:mt-0">Start
                                Reading
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:p-4 md:w-1/3 flex justify-center">
                <div class="max-w-sm rounded-2xl overflow-hidden shadow-lg">
                    <img class="w-full" src="https://source.unsplash.com/400x200/?entertainment" alt="blog">
                    <div class="p-6 bg-gray-700">
                        <h2 class="tracking-widest text-xs title-font font-medium text-white mb-1">CATEGORY</h2>
                        <h1 class="title-font text-lg font-medium text-white mb-3">Entertainment</h1>
                        <div class="flex items-center flex-wrap ">
                            <a href="entertainment.php">
                            <button
                                class="inline-flex items-center bg-white text-gray-900 border-0 py-1 px-3 focus:outline-none hover:bg-gray-500 hover:text-white rounded-full text-base mt-4 md:mt-0">Start
                                Reading
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="loader-wrapper">
        <div id="loader">
        </div>
    </div>

    <script>
        var preloader = document.getElementById('loader-wrapper');

        function Load() {
            preloader.style.display = "none";
        }
    </script>


<?php include 'common/footer.php';?>

</body>

</html>