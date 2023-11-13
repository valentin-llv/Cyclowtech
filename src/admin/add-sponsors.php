<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "../html/head.php"; ?>
</head>
<body>
    <?php
        session_start();
        if(!$_SESSION["loggedin"]) header('location:user_login.php');
    ?>

    <!-- Global warper -->
    <div class="overflow-hidden w-full h-full absolute">
        <div id="content" class="absolute top-0 left-0 h-full w-full overflow-x-hidden overflow-y-auto">
            <?php include "../html/top-menu.php"; ?>
            <?php include "../html/mobile-menu.php"; ?>

            <!-- Admin -->
            <div class="relative w-full mt-24 md:mt-32 pb-32">
                <div class="relative pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-10/12 m-auto pt-2">
                    <div class="mt-10 relative flex flex-row flex-wrap">
                        <a href="admin.php">
                            <div class="w-max mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                <svg class="m-auto mr-5 h-7 w-7 fill-100 stroke-100 duration-100 rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                    <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                </svg>
                            
                                <p class="text-2xl md:text-3xl color-100 duration-100">Retour</p>
                            </div>
                        </a>
                    </div>
                    <h2 class="relative font-bold text-5xl md:text-6xl">Ajouter un sponsors</h2>
                    <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                    <?php
                        if(isset($_SESSION["error"]) && $_SESSION["error"]) {
                            echo "<p class='text-red-500 text-3xl mt-12'> ". $_SESSION['error_value'] . "</p>";
                            $_SESSION["error"] = false;
                        }
                    ?>

                    <div class="w-full lg:w-4/12 m-auto mt-20">
                        <form action="../php-worker/add-sponsors.php" method="POST" class="flex flex-col" enctype="multipart/form-data">
                            <input id="file" name="file" class="hidden" type="file" accept="image/png, image/jpeg, image/jpg, image/webp" required>
                            <label for="file" class="w-full border-2 border-dashed border-100 bg-900 p-5 text-center cursor-pointer ">
                                <p id="file_name" class="text-3xl"> Envoyer une image </p> 
                            </label>

                            <input name="name" required class="mt-5 outline-none border-2 rounded-md border-100 p-5 text-3xl color-100" type="text" placeholder="Nom du sponsor ..." />
                            <input name="link" required class="mt-5 outline-none border-2 rounded-md border-100 p-5 text-3xl color-100" type="link" placeholder="Lien du sponsor ..." />

                            <button type="submit" class="w-max cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row m-auto mt-8">
                                <p class="text-2xl md:text-3xl color-100 duration-100">Ajouter</p>

                                <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                    <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <?php include "../html/footer.php"; ?>
        </div>
    </div>

    <script src="../js/mobile-menu.js"></script>
    <script src="../js/file-upload.js"></script>
</body>
</html>