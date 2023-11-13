<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "./src/html/head.php"; ?>
</head>
<body>
    <?php require_once 'src/translations/translations.php'; ?>

    <!-- Global warper -->
    <div class="overflow-hidden w-full h-full absolute">
        <div id="content" class="absolute top-0 left-0 h-full w-full overflow-x-hidden overflow-y-auto">
            <?php include "./src/html/top-menu.php"; ?>
            <?php include "./src/html/mobile-menu.php"; ?>

            <!-- Section 1 -->
            <div class="relative w-full flex flex-col lg:flex-row mt-24 md:mt-32">
                <div class="flex-1 w-full">
                    <img class="h-image-intro lg:h-full w-full object-cover" src="/public/images/illustrations/velo.webp" />
                </div>

                <div class="flex-1 -mt-20 lg:mt-0 grid place-items-center">
                    <div class="pl-14 pr-14 lg:p-20 box-border w-full">
                        <div class="relative p-8 bg-900 -mt-8 -ml-8 -mb-8 max-w-4xl">
                            <h2 class="relative z-0 font-bold text-5xl md:text-6xl"><?php echo $translations_fr['home_title']; ?></h2>
                        </div>

                        <p class="text-2xl md:text-3xl mt-5 md:mt-14 max-w-7xl">
                            <?php echo $translations_fr['home_hook_text']; ?>
                        </p>

                        <div class="mt-10 relative flex flex-row flex-wrap">
                            <a href="/src/pages/actualites.php">
                                <div class="mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                    <p class="text-2xl md:text-3xl color-100 duration-100"><?php echo $translations_fr['home_hook_button_1']; ?></p>

                                    <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                        <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                    </svg>    
                                </div>
                            </a>

                            <a href="https://lowtechlab.org/fr/la-low-tech">
                                <div class="w-max mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                    <p class="text-2xl md:text-3xl color-100 duration-100"><?php echo $translations_fr['home_hook_button_2']; ?></p>

                                    <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                        <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                    </svg>
                                </div>
                            </a>

                            <a href="https://www.helloasso.com/associations/cyclow-tech-tour/formulaires/1" target="_blank">
                                <div class="w-max mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                    <p class="text-2xl md:text-3xl color-100 duration-100"><?php echo $translations_fr['home_hook_button_3']; ?></p>

                                    <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                        <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div class="relative w-full mt-32">
                <div class="relative lg:w-11/12 lg:rounded-m p-16 lg:p-24 m-auto bg-100 box-border">
                    <h2 class="relative font-bold text-5xl md:text-6xl color-900"><?php echo $translations_fr['home_projet_title']; ?></h2>

                    <div class="flex flex-row flex-wrap items-center">
                        <div class="flex-1 text-center min-w-max mt-10 ml-5 mr-5">
                            <p class="text-8xl lg:text-9xl color-900">10 000</p>
                            <p class="text-3xl md:text-4xl color-900 mt-3"><?php echo $translations_fr['home_project_distance']; ?></p>
                        </div>

                        <div class="flex-1 text-center min-w-max mt-10 ml-5 mr-5">
                            <img class="h-72 w-72 lg:h-96 lg:w-96 m-auto" src="/public/images/illustrations/pays.webp" />
                            <p class="text-3xl md:text-4xl color-900 -mt-8"><?php echo $translations_fr['home_project_countries']; ?></p>
                        </div>

                        <div class="flex-1 text-center min-w-max mt-16 lg:mt-10 ml-5 mr-5">
                            <p id="departure-date" class="text-8xl lg:text-9xl color-900">???</p>
                            <p id="departure-text" class="text-3xl md:text-4xl color-900 mt-3"><?php echo $translations_fr['home_project_days']; ?></p>
                        </div>
                    </div>

                    <h2 class="relative font-bold text-5xl md:text-6xl color-900 mt-24 lg:mt-10"><?php echo $translations_fr['home_project_goal_title']; ?></h2>
                    <p class="text-2xl md:text-3xl mt-8 color-900">
                    <?php echo $translations_fr['home_project_goal']; ?>
                    </p>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="relative w-full flex flex-col-reverse lg:flex-row mt-32 pb-32">
                <div class="flex-1 -mt-20 lg:mt-0 grid place-items-center">
                    <div class="pl-14 pr-14 lg:p-20 box-border w-full">
                        <div class="relative p-8 bg-900 -mt-8 -ml-8 -mb-8 max-w-4xl">
                            <h2 class="relative font-bold text-5xl md:text-6xl"><?php echo $translations_fr['knowus_title']; ?></h2>
                            <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>
                        </div>

                        <p class="text-2xl md:text-3xl mt-5 md:mt-14 max-w-7xl">
                        <?php echo $translations_fr['knowus_text']; ?>
                        </p>

                        <div class="mt-10 relative flex flex-row flex-wrap">
                            <a href="src/pages/projet.php">
                                <div class="w-max mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                    <p class="text-2xl md:text-3xl color-100 duration-100"><?php echo $translations_fr['knowus_hook_button_1']; ?></p>

                                    <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                        <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                    </svg>
                                </div>
                            </a>

                            <!-- Le lien de la video youtube --> 
                            <a href="https://www.youtube.com/channel/UCdGt7O031MUzUXVnEM0BX7w">
                                <div class="w-max mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                    <p class="text-2xl md:text-3xl color-100 duration-100"><?php echo $translations_fr['knowus_hook_button_2']; ?></p>

                                    <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                        <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex-1 w-full">
                    <img class="h-image-intro lg:h-full w-full object-cover" src="/public/images/illustrations/know-us.webp" />
                </div>
            </div>
            
            <?php include "./src/html/sponsors.php"; ?>
            <?php include "./src/html/footer.php"; ?>
        </div>
    </div>

    <script>
        const lang = "<?php echo $_SESSION['lang']; ?>";
    </script>

    <script src="src/js/mobile-menu.js"></script>
    <script src="src/js/home-timer.js"></script>
</body>
</html>