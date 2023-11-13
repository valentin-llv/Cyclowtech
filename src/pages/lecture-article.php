<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "../html/head.php"; ?>
</head>
<body>
    <?php
        
        require_once dirname(__FILE__) . '/../../src/translations/translations.php';

        if(!isset($_GET['id']) || !$_GET['id']) {
            header('location:actualites.php');
            return false;
        }

        require_once dirname(__FILE__) . '/../php-worker/bdd-manager.php';

        function retrieveArticle() {
            $bdd = new BddManager();
            if(!$bdd) return false;

            $request = "SELECT title, content, date FROM articles WHERE id = {$_GET['id']}";
            $result = $bdd->query($request);

            if(!$result || $result->num_rows == 0) {
                header('location:actualites.php');
                return false;
            }

            return $result->fetch_assoc();
        }

        $article = retrieveArticle();

        require_once dirname(__FILE__) . '/../libs/parsedown.php';
        $parsedown = new Parsedown();
    ?>

    <!-- Global warper -->
    <div class="overflow-hidden w-full h-full absolute">
        <div id="content" class="absolute top-0 left-0 h-full w-full overflow-x-hidden overflow-y-auto">
            <?php include "../html/top-menu.php"; ?>
            <?php include "../html/mobile-menu.php"; ?>

            <!-- Read article -->
            <div class="relative w-full mt-24 md:mt-32 pb-32">
                <div class="relative pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-10/12 m-auto pt-12 lg:pt-20">
                    <div class="mt-10 relative flex flex-row flex-wrap">
                        <a href="actualites.php">
                            <div class="w-max mb-6 mr-10 cta-home-button border-2 border-dashed border-100 bg-900 hover:border-transparent duration-100 p-5 flex flex-row">
                                <svg class="m-auto mr-5 h-7 w-7 fill-100 stroke-100 duration-100 rotate-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                                    <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                                </svg>
                            
                                <p class="text-2xl md:text-3xl color-100 duration-100"><?php echo $translations_fr['read_article_back']; ?></p>
                            </div>
                        </a>
                    </div>

                    <p class='text-2xl mt-10'> | <?php echo $article['date']; ?> </p>
                    <h2 class="relative font-bold text-5xl md:text-6xl"><?php echo $article['title']; ?></h2>
                    <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                    <div id="article-content-text" class="mt-10 flex flex-col overflow-hidden">
                        <?php echo $parsedown->text($article['content']); ?>
                    </div>
                </div>
            </div>

            <?php include "../html/sponsors.php"; ?>
            <?php include "../html/footer.php"; ?>
        </div>
    </div>

    <script src="../js/mobile-menu.js"></script>
</body>
</html>