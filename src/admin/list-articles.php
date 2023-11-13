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

        require_once dirname(__FILE__) . '/../php-worker/bdd-manager.php';

        function retrieveArticles() {
            $bdd = new BddManager();
            if(!$bdd) return false;

            $query = "SELECT content, image_cover_name, title, id, visible, date, summary FROM articles ORDER BY id DESC";          
            $result = $bdd->query($query);

            if(!$result) return false;
            return $result;
        }

        $articles = retrieveArticles();
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

                    <div class="mt-20 w-full news-block-element">
                        <?php
                            foreach($articles as $article) {
                                echo "
                                    <div class='flex flex-row mt-10'>
                                        <div class='cursor-pointer bg-800 flex-1'>
                                            <div class='p-5 box-border'>
                                            <p class='text-2xl'> | {$article["date"]} </p>
                                            <h3 class='text-4xl font-bold mt-2'> {$article["title"]} </h3>
                                                <p class='text-2xl mt-6 whitespace-pre-wrap'>{$article["summary"]}</p>
                                            </div>
                                        </div>

                                        <div class='flex-1 ml-10'>
                                            <a href='modify-article.php?id={$article["id"]}' class='mr-10 text-3xl mt-5 underline text-red-500'> Editer l'article </a>
                                            <a href='../php-worker/delete-article.php?id={$article["id"]}' class='delete-article mr-10 text-3xl mt-5 underline text-red-500'> Supprimer </a>
                                ";

                                if($article['visible'] == "true") {
                                    echo "<a href='../php-worker/modify-article.php?id={$article["id"]}&visibility=false' class='mr-10 text-3xl mt-5 underline text-red-500'> Cacher cet article </a>";
                                } else {
                                    echo "<a href='../php-worker/modify-article.php?id={$article["id"]}&visibility=true' class='mr-10 text-3xl mt-5 underline text-red-500'> Rendre disponible cet article </a>";
                                }

                                echo "
                                        </div>
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

    <script>
        let elements = document.getElementsByClassName('delete-article');

        for(let i = 0; i < elements.length; i++) {
            elements[i].addEventListener('click', (event) => {
                event.preventDefault();
                console.log(event)
                let result = confirm('Etês-vous sûr de vouloir supprmier cet article ?');

                if(result == true) {
                    //window.location.replace(event.path[0].href);
                }
            });
        }
    </script>

    <script src="../js/mobile-menu.js"></script>
</body>
</html>