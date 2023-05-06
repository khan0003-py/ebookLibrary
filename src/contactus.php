<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    $_SESSION['redirect'] = "contactus";
    header("location: login.php");
}


?>

<?php

$flag = 0;
$flag1 = 0;

require_once "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $result = "INSERT INTO contact(name,email,phone,message) VALUES('$name','$email','$phone','$message')";

    // if (mysqli_query($conn, $result)) {
    //     $flag = 1;
    // }

    // $to_email = "$email";
    // $subject = "Contact";
    // $body = "Hii!! $name, We'll reach you soon.";

    // $headers = "From: khan.1234arshadkhan@gmail.com";
    
    // if (mail($to_email, $subject, $body, $headers)) {
    //     $flag1 = 1;
    // }
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

    <title>Contact | eBook Library</title>

    <!-- add icon link -->
    <link rel="icon" href="img/logo.png">

</head>

<body onload="Load()">

    <?php include 'common/login_header.php';  ?>

    <?php
    if($flag == 1 & $flag1 == 1){
    echo '<div id="alert-3" class="flex p-4 mb-4 bg-green-100 dark:bg-green-200" role="alert">
        <svg class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
        <strong class="font-bold">Success!!: </strong>Contact form has been submitted successfully.
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </div>';
    }
    ?>

    <div>
        <div class="max-w-screen-xl mt-16 px-4 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-8 lg:px-12 xl:px-26 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
            <div class="flex flex-col justify-between">
                <div>
                    <h2 class="text-center text-3xl lg:text-5 xl font-bold leading-tight">Lets talk about everything!</h2>

                    <img class="h-32 my-4 mx-auto py-2" src="img/logo.png">
                    <h2 class="text-center text-xl lg:text-2xl font-medium leading-tight">Feel free to ask us anything!</h2>
                    <h3 class="py-4 px-4 text-md lg:text-md leading-tight"> Have doubt or suggestion to make? Feel free to ask anything. If you have any suggestions, please let me know. Your suggestions are highly appreciated. I appreciate your time and try hard to reply to every single message posted here! Keep dropping your priceless opinions.</h3>
                </div>
            </div>
            <div>
                <form action="" method="post">
                    <div>
                        <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
                        <input type="text" name="name" class="w-full bg-gray-300 text-gray-900 mt-2 p-1 rounded-lg focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mt-8">
                        <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
                        <input type="email" name="email" class="w-full bg-gray-300 text-gray-900 mt-2 p-1 rounded-lg focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mt-8">
                        <span class="uppercase text-sm text-gray-600 font-bold">Phone</span>
                        <input type="text" name="phone" class="w-full bg-gray-300 text-gray-900 mt-2 p-1 rounded-lg focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mt-8">
                        <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
                        <textarea name="message" type="text" class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-1 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <input type="submit" value="Send Message" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-gray-600 hover:bg-gray-700 focus:outline-none focus:shadow-outline-blue">
                </form>
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

    <?php include 'common/footer.php';  ?>

</body>
</html>