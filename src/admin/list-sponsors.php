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

        require dirname(__FILE__) . '/../php-worker/bdd-manager.php';

        function retrieveSponsors() {
            $bdd = new BddManager();
            if(!$bdd) return false;

            $query = "SELECT id, sponsor_name, image_name, link FROM sponsors ORDER BY id";          
            $result = $bdd->query($query);

            if(!$result) return false;
            return $result;
        }

        $sponsors = retrieveSponsors();
    ?>

    <!-- Global warper -->
    <div class="overflow-hidden w-full h-full absolute">
        <div id="content" class="absolute top-0 left-0 h-full w-full overflow-x-hidden overflow-y-auto">
            <?php include "../html/top-menu.php"; ?>
            <?php include "../html/mobile-menu.php"; ?>

            <!-- Admin -->
            <div class="relative w-full mt-24 md:mt-32 pb-32">
                <div class="relative pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-10/12 m-auto pt-12 lg:pt-20">
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

                    <h2 class="relative font-bold text-5xl md:text-6xl">Liste des sponsors</h2>
                    <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                    <?php
                        if(isset($_SESSION["error"]) && $_SESSION["error"]) {
                            echo "<p class='text-red-500 text-3xl mt-12'> ". $_SESSION['error_value'] . "</p>";
                            $_SESSION["error"] = false;
                        }
                    ?>

                    <div class="flex flex-col mt-5 max-w-max">
                        <?php
                            foreach($sponsors as $sponsor) {
                                echo "
                                    <div class='text-center mt-10 ml-5 mr-5 flex flex-row'>
                                        <a class='flex flex-col' href='{$sponsor["link"]}' target='_blank'>
                                            <img class='h-48 w-48 lg:h-64 lg:w-64 m-auto' src='/public/images/supporters/{$sponsor["image_name"]}' />
                                            <p class='text-3xl font-bold text-center'>{$sponsor["sponsor_name"]}</p> 
                                        </a>

                                        <a href='../php-worker/delete-sponsors.php?id={$sponsor["id"]}' class='ml-10 text-3xl mt-5 underline text-red-500'> Supprimer </a>
                                    </div>
                                ";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <?php include "../html/footer.php"; ?>
        </div>
    </div>

    <script src="../js/mobile-menu.js"></script>
</body>
</html>