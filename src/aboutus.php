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

    <title>Aboutus | eBook Library</title>

    <!-- add icon link -->
    <link rel="icon" href="img/logo.png">
</head>

<body onload="Load()">

    <?php include 'common/header.php';  ?>


    <div class="container flex justify-center mx-auto pt-5">
        <div>
            <h1 class="xl:text-4xl text-3xl text-center text-gray-800 dark:text-white font-extrabold pb-6 mx-auto">Our Team</h1>
        </div>
    </div>
    <div class="w-full bg-gray-100 dark:bg-gray-800 px-10 pt-10">
        <div class="container mx-auto">
            <div role="list" class="lg:flex md:flex sm:flex items-center xl:justify-between flex-wrap md:justify-around sm:justify-around lg:justify-around">
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="img/sir.png" alt="Display Picture of Andres Berlin" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold text-gray-800 dark:text-white text-3xl text-center mb-1">Prof. P. R. Holey</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Project Guide</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/pavanholey/" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="img/arshad.jpg" alt="Display Picture of Arshad" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold text-gray-800 dark:text-white text-3xl text-center mb-1">Arshad Khan</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Team Leader</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="https://github.com/thenameiskhan0003" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/thenameiskhan.0003/" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="img/vishal.png" alt="Display Picture of Pavan Holey" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold text-gray-800 dark:text-white text-3xl text-center mb-1">Vishal Shekokar</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Team Member</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
                                    </div>
                                </a>
                                <a href="https://www.instagram.com/__ii_vishal_ii____/" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="img/sohaib.png" alt="Display Picture of Sohaib" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold text-gray-800 dark:text-white text-3xl text-center mb-1">Sohaib Khan</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Team Member</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="mx-5">
                                    <a href="https://www.instagram.com/sohaib_5k_khan/" class="mx-5">
                                        <div aria-label="Instagram" role="img">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
                                        </div>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="img/pranav.png" alt="Display Picture of Pranav" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold text-gray-800 dark:text-white text-3xl text-center mb-1">Pranav Yadgire</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Team Member</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
                                    </div>
                                </a>

                                <a href="https://www.instagram.com/the_pranavpatil_/" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="img/nitish.jpeg" alt="Display Picture of Nitish" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold text-gray-800 dark:text-white text-3xl text-center mb-1">Nitish Sonone</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Team Member</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
                                    </div>
                                </a>

                                <a href="https://www.instagram.com/nitishsonone/" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="xl:w-1/3 sm:w-3/4 md:w-2/5 relative mt-16 mb-32 sm:mb-24 xl:max-w-sm lg:w-2/5 mx-auto">
                    <div class="rounded overflow-hidden shadow-md bg-white dark:bg-gray-900">
                        <div class="absolute -mt-20 w-full flex justify-center">
                            <div class="h-32 w-32">
                                <img src="img/nishant.jpeg" alt="Display Picture of Nishant" role="img" class="rounded-full object-cover h-full w-full shadow-md" />
                            </div>
                        </div>
                        <div class="px-6 mt-16">
                            <h1 class="font-bold text-gray-800 dark:text-white text-3xl text-center mb-1">Nishant Gawande</h1>
                            <p class="text-gray-800 dark:text-white text-sm text-center">Team Member</p>
                            <div class="w-full flex justify-center pt-5 pb-5">
                                <a href="javascript:void(0)" class="mx-5">
                                    <div aria-label="Github" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg1.svg" alt="github" />
                                    </div>
                                </a>
                                </a>
                                <a href="https://www.instagram.com/mr_n_s_gawande_2563/" class="mx-5">
                                    <div aria-label="Instagram" role="img">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/gray-bg-with-description-svg3.svg" alt="instagram" />
                                    </div>
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


    <?php include 'common/footer.php';  ?>

</body>

</html>