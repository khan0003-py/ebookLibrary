<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  $_SESSION['redirect']="environment";
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
  <!--  -->

  <title>Entertainment | eBook Library</title>

  <!-- add icon link -->
  <link rel="icon" href="img/logo.png">

</head>

<body onload="Load()">

  <?php include 'common/login_header.php';  ?>

  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="booksImg/book3img.png">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="mt-28 text-sm title-font text-gray-500 tracking-widest">Environment</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Lower South Gardening</h1>
          <div class="flex mb-4">
            <span class="flex items-center">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <span class="text-gray-600 ml-3">4 Reviews</span>
            </span>
          </div>
          <p class="leading-relaxed text-justify">Just like North America is made up of many diff erent types of people, it is also made up of many different plant-growing regions. And just as you can often tell where a person comes from by the way they dress, speak, or act, you can often tell where a plant comes from by the way it looks and how it grows. This book is all about celebrating the region where you live and enjoying the unique gardening opportunities it has to offer.</p>
          <p class="leading-relaxed text-justify mt-3">You’ll fi nd many benefi ts to be reaped from tending a home garden. Not only will you add beauty to your landscape and neighborhood, you will increase the value of your property and improve your quality of life. </p>

          <div>
            <a href="books/Env1.pdf">
              <button go class="mt-4 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Read Now</button>
          </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="booksImg/book4img.png">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="mt-28 text-sm title-font text-gray-500 tracking-widest">Environment</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Introduction to Environment Impact Assesment</h1>
          <div class="flex mb-4">
            <span class="flex items-center">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <span class="text-gray-600 ml-3">3 Reviews</span>
            </span>
          </div>
          <p class="leading-relaxed text-justify">A comprehensive, clearly structured and readable overview of the subject, Introduction to Environmental Impact Assessment quickly established itself as the leading introduction to EIA. The second edition developed many issues of growing importance in this fast moving subject area, and reinforced the success of the book.</p>
          <p class="leading-relaxed text-justify"><p class="leading-relaxed text-justify">A comprehensive, clearly structured and readable overview of the subject, Introduction to Environmental Impact Assessment quickly established itself as the leading introduction to EIA. The second edition developed many issues of growing importance in this fast moving subject area, and reinforced the success of the book.</p></p>
          <div>
            <a href="books/Env2.pdf">
              <button class="mt-4 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Read Now</button>
          </div>
          </a>
        </div>
      </div>
    </div>
  </section>

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

  <?php include 'common/footer.php';  ?>

</body>

</html>