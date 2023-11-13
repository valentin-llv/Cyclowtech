<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "../html/head.php"; ?>
</head>
<body>
    <?php
        session_start();
        if(!$_SESSION["loggedin"]) header('location:user_login.php');

        require dirname(__FILE__) . '/../php-worker/bdd-manager.php';

        function retrieveArticleInfos() {
            $bdd = new BddManager();
            if(!$bdd) return false;

            if(!isset($_GET['id'])) {
                header('location:../admin/list-articles.php');
                return false;
            }

            $query = "SELECT title, image_cover_name, content, date, summary FROM articles WHERE id = '{$_GET['id']}'";          
            $result = $bdd->query($query);

            if(!$result || $result->num_rows == 0) {
                header('location:../admin/list-articles.php');
                return false;
            }
            return $result->fetch_assoc();
        }

        $articleInfos = retrieveArticleInfos();
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
                    <h2 class="relative font-bold text-5xl md:text-6xl">Modifier l'article</h2>
                    <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                    <?php
                        if(isset($_SESSION["error"]) && $_SESSION["error"]) {
                            echo "<p class='text-red-500 text-3xl mt-12'> ". $_SESSION['error_value'] . "</p>";
                            $_SESSION["error"] = false;
                        }
                    ?>

                    <form action="../php-worker/modify-article.php" method="POST" class="flex flex-col w-full mt-20" enctype="multipart/form-data">
                        <input name="id" type="hidden" value="<?php echo $_GET['id']; ?>">

                        <h2 class="relative font-bold text-5xl md:text-6xl mt-20">Image de courverture</h2>
                        <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                        <div class="flex flex-col lg:flex-row min-w-min mt-10">
                            <div class="flex-1">
                                <img class="w-auto" src="../../public/images/articles-cover/<?php echo $articleInfos["image_cover_name"] ?>" />
                            </div>

                            <div class="flex-1 bg-800 flex flex-row items-center align-middle pt-10 pb-10">
                                <div class="max-w-max min-w-max m-auto">
                                    <p class="text-center text-3xl"> Utiliser une autre image ? </p>

                                    <div class="flex flex-col mt-10">
                                        <input id="file" name="file" class="hidden" type="file" accept="image/png, image/jpeg, image/jpg, image/webp">
                                        <label for="file" class="w-full border-2 border-dashed border-100 bg-900 p-5 text-center cursor-pointer ">
                                            <p id="file_name" class="text-3xl"> Envoyer une image </p> 
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h2 class="relative font-bold text-5xl md:text-6xl mt-24">Titre de l'article</h2>
                        <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                        <div class="mt-10 flex flex-col lg:flex-row w-full">
                            <div class="flex-1 bg-800 flex flex-row items-center align-middle pt-10 pb-10">
                                <h2 class="text-4xl font-bold w-full text-center"> <?php echo $articleInfos["title"] ?> </h2>
                            </div>

                            <div class="flex-1 bg-800 flex flex-row items-center align-middle pt-10 pb-10">
                                <div class="m-auto">
                                    <p class="text-3xl mt-10"> Modifier le titre de l'article </p>
                                    <input name="name" class="mt-5 outline-none border-2 rounded-md border-100 p-5 text-3xl color-100" type="text" placeholder="Nom de l'article ..." />
                                </div>
                            </div>
                        </div>

                        <h2 class="relative font-bold text-5xl md:text-6xl mt-24">Date de publication</h2>
                        <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>
                        <p class="mt-10 text-4xl"> | <?php echo $articleInfos["date"] ?> </p>
                        <input name="date" class="mt-4 outline-none border-2 rounded-md border-100 p-5 text-3xl color-100" type="text" placeholder="Modifier la date ..." />

                        <h2 class="relative font-bold text-5xl md:text-6xl mt-24">Contenu</h2>
                        <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                        <div class="w-full mt-8 relative">
                            <textarea id="article-content" class="bg-800 w-full relative text-3xl p-5 color-100" name="content"><?php echo $articleInfos["content"] ?></textarea>
                        </div>

                        <h2 class="relative font-bold text-5xl md:text-6xl mt-24">Résumé</h2>
                        <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                        <div class="w-full mt-8 relative">
                            <textarea id="article-summary" class="bg-800 w-full relative text-3xl p-5 color-100" name="summary"><?php echo $articleInfos["summary"] ?></textarea>
                        </div>

                        <button type="submit" class="w-max cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row m-auto mt-20">
                            <p class="text-2xl md:text-3xl color-100 duration-100">Suivant</p>

                            <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <?php include "../html/footer.php"; ?>
        </div>
    </div>

    <script>
        function resizeTextarea(event) {
            event.path[0].style.height = '24px';
            event.path[0].style.height = event.path[0].scrollHeight + 12 + 'px';
        }

        document.getElementById('article-content').addEventListener('input', resizeTextarea);
        document.getElementById('article-summary').addEventListener('input', resizeTextarea);
    </script>

    <script src="../js/mobile-menu.js"></script>
    <script src="../js/file-upload.js"></script>
</body>
</html>