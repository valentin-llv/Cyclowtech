<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "../html/head.php"; ?>
</head>
<body>
    <?php
        session_start();
        if(!$_SESSION["loggedin"]) {
            header('location:login.php');
        }
    ?>

    <!-- Global warper -->
    <div class="overflow-hidden w-full h-full absolute">
        <div id="content" class="absolute top-0 left-0 h-full w-full overflow-x-hidden overflow-y-auto">
            <?php include "../html/top-menu.php"; ?>
            <?php include "../html/mobile-menu.php"; ?>

            <!-- Admin -->
            <div class="relative w-full mt-24 md:mt-32 pb-32">
                <div class="relative pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-10/12 m-auto pt-12 lg:pt-20">
                    <h2 class="relative font-bold text-5xl md:text-6xl">Administration</h2>
                    <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                    <div class="mt-10 relative flex flex-row flex-wrap">
                        <a href="list-sponsors.php">
                            <div class="w-max mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                <p class="text-2xl md:text-3xl color-100 duration-100">Voir les sponsors</p>

                                <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                    <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                </svg>
                            </div>
                        </a>

                        <a href="add-sponsors.php">
                            <div class="mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                <p class="text-2xl md:text-3xl color-100 duration-100">Ajouter un sponsor</p>

                                <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                    <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                </svg>    
                            </div>
                        </a>
                    </div>

                    <div class="mt-10 relative flex flex-row flex-wrap">
                        <a href="list-articles.php">
                            <div class="w-max mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                <p class="text-2xl md:text-3xl color-100 duration-100">Voir les articles</p>

                                <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                    <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                </svg>
                            </div>
                        </a>

                        <a href="add-articles.php">
                            <div class="mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                <p class="text-2xl md:text-3xl color-100 duration-100">Ajouter un article</p>

                                <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                    <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                </svg>    
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:absolute lg:w-full lg:top-full lg:-translate-y-full">
                <?php include "../html/footer.php"; ?>
            </div>
        </div>
    </div>

    <script src="../js/mobile-menu.js"></script>
</body>
</html>