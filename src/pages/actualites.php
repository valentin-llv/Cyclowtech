<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "../html/head.php"; ?>
</head>
<body>
    <?php

        require_once dirname(__FILE__) . '/../../src/translations/translations.php';
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

            <!-- Blog -->
            <div class="relative w-full mt-24 md:mt-32 pb-32">
                <div class="pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-10/12 m-auto">
                    <h2 class="text-6xl pt-10 font-bold"><?php echo $translations_fr['news_title']; ?></h2>
                    <p class="text-2xl md:text-3xl mt-14"><?php echo $translations_fr['news_hook_text']; ?></p>

                    <p class="mt-10 text-2xl md:text-3xl"><?php echo $translations_fr['news_show_images']; ?></p>

                    <div class="mt-5 flex flex-row border-2 border-dashed border-100 max-w-fit p-5 align-middle items-center">
                        <p class="text-2xl md:text-3xl"><?php echo $translations_fr['news_show_images_button']; ?></p>

                        <div class="ml-5 flex flex-row">
                            <input id="show-images" type="checkbox" class="peer appearance-none m-auto" />
                            <label for="show-images" class="switch h-8"></label>
                        </div>
                    </div>

                    <div class="mt-20 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12 news-block-element">
                        <?php
                            foreach($articles as $article) {
                                if($article['visible'] == "true") {
                                    echo "
                                        <a href='lecture-article.php?id={$article["id"]}'>
                                            <div class='cursor-pointer bg-800'>
                                                <div class='w-full h-72 md:h-80 lg:h-96'>
                                                    <img class='object-cover w-full h-full hidden hidden-image' data-imgsrc='/public/images/articles-cover/{$article["image_cover_name"]}' />
                                                </div>

                                                <div class='p-5 box-border'>
                                                <p class='text-2xl'> | {$article["date"]} </p>
                                                <h3 class='text-4xl font-bold mt-2'> {$article["title"]} </h3>
                                                    <p class='text-2xl mt-6 whitespace-pre-wrap'>{$article["summary"]}</p>
                                                </div>
                                            </div>
                                        </a>
                                    ";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            
            <?php include "../html/sponsors.php"; ?>
            <?php include "../html/footer.php"; ?>
        </div>
    </div>

    <script src="../js/mobile-menu.js"></script>
    <script src="../js/image-switch.js"></script>
</body>
</html>