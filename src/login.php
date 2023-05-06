<?php
//This script will handle login
session_start();

$flag = 1;

// check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("location: welcome.php");
}

require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (empty(trim($_POST['username'])) && empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }

    if (empty($err)) {
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;


        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // this means the password is corrct. Allow user to login
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["loggedin"] = true;

                        if ($_SESSION['redirect']) {
                            header("location: " . $_SESSION['redirect'] . ".php");
                        } else {
                            //Redirect user to welcome page
                            header("location: welcome.php");
                        }
                    } else {

                        $flag = "password_err";
                    }
                }
            } else {
                $flag = "username_err";
            }
        }
    }
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
    <!--  -->
    <title>Login | eBook Library</title>

    <!-- add icon link -->
    <link rel="icon" href="img/logo.png">

</head>

<body onload="Load()">


    <?php include 'common/header.php';  ?>

    <?php
    if ($flag == "password_err") {

        echo '
            <div id="alert-2" class="flex p-4 bg-red-100 dark:bg-red-200" role="alert">
            <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
              <strong class="font-bold">Error!! </strong>Please Enter Correct Password. <a href=""login.php class="font-semibold underline hover:text-red-800 dark:hover:text-red-900">Try Again</a>.
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
          </div>
            ';
    } elseif ($flag == "username_err") {
        echo '
        <div id="alert-2" class="flex p-4 bg-red-100 dark:bg-red-200" role="alert">
        <svg class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
          <strong class="font-bold">Error!! </strong>User not found. <a href=""login.php class="font-semibold underline hover:text-red-800 dark:hover:text-red-900">Try Again</a>.
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-100 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300" data-dismiss-target="#alert-2" aria-label="Close">
          <span class="sr-only">Close</span>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </div>
      ';
    }
    ?>

    <div class="flex items-center min-h-screen bg-gray-50">
        <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
            <div class="flex flex-col md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img class="object-cover w-full h-full" src="https://source.unsplash.com/500x600/?book,login" alt="img" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <div class="flex justify-center">
                            <img src="img/logo.png" class="w-20 h-15">
                        </div>
                        <h1 class="mb-4 text-2xl font-bold text-center text-gray-700">
                            Login
                        </h1>
                        <form action="login.php" method="post">
                            <div class="mt-4">
                                <label class="block text-sm" for="id_username">
                                    Username
                                </label>
                                <input type="text" class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="Username" name="username" id="id_username" required />
                            </div>
                            <div>
                                <label class="block mt-4 text-sm" for="id_password">
                                    Password
                                </label>
                                <input class="w-full px-4 py-2 text-sm border rounded-md focus:border-blue-400 focus:outline-none focus:ring-1 focus:ring-blue-600" placeholder="Password" type="password" name="password" id="id_password" required />
                            </div>

                            <input type="submit" class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">
                        </form>

                        <div class="mt-4 text-center">
                            <p class="text-sm">Don't have an account ? <a href="signup.php" class="text-blue-600 hover:underline">Sign Up</a></p>
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

    <?php include 'common/footer.php';  ?>

</body>

</html>