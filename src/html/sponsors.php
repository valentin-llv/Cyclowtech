<?php

    require_once dirname(__FILE__) . '/../../src/translations/translations.php';
    require_once dirname(__FILE__) . '/../php-worker/bdd-manager.php';

    function retrieveSponsors() {
        $bdd = new BddManager();
        if(!$bdd) return false;

        $query = "SELECT sponsor_name, image_name, link FROM sponsors ORDER BY id";          
        $result = $bdd->query($query);

        if(!$result) return false;
        return $result;
    }

    $sponsors = retrieveSponsors();

?>

<!-- Sponsors -->

<div class="relative w-full">
    <div class="w-full m-auto bg-70055">
        <div class="pl-14 pr-14 lg:pr-0 lg:pl-0 pt-20 pb-20 lg:w-10/12 m-auto">
            <h2 class="relative font-bold text-5xl md:text-6xl"><?php echo $translations_fr['sponsors_participate']; ?></h2>
            <p class="text-2xl md:text-3xl mt-6"><?php echo $translations_fr['sponsors_participate_text']; ?></p>

            <a href="https://www.helloasso.com/associations/cyclow-tech-tour/formulaires/1" target="_blank">
                <div class="w-max mb-6 mr-10 cta-home-button bg-70055 border-2 border-dashed border-100 hover:border-transparent duration-100 p-5 mt-10 flex flex-row bg-700">
                    <p class="text-2xl md:text-3xl color-100 duration-100"><?php echo $translations_fr['sponsors_join_us']; ?></p>

                    <svg class="m-auto ml-5 h-7 w-7 fill-100 stroke-100 duration-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13.46 13.75">
                        <polygon points="5.92 12.87 11.15 7.5 0 7.5 0 6.25 11.15 6.25 5.92 0.88 6.77 0 13.46 6.87 6.77 13.75 5.92 12.87"/>
                    </svg> 
                </div>
            </a>
        </div>
    </div>
</div>

<div class="relative w-full mt-24">
    <div class="pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-10/12 m-auto">
        <h2 class="relative font-bold text-5xl md:text-6xl"><?php echo $translations_fr['sponsors_title']; ?></h2>
        <div class="h-2 w-20 rounded-full ml-1 mt-5 bg-100"></div>

        <div class="flex flex-row flex-wrap mt-5">
            <?php
                foreach($sponsors as $sponsor) {
                    echo "
                        <a class='flex-1 text-center min-w-max mt-10 ml-5 mr-5 flex flex-col' href='{$sponsor["link"]}' target='_blank'>
                            <img class='h-48 w-48 lg:h-64 lg:w-64 m-auto' src='/public/images/supporters/{$sponsor["image_name"]}' />
                            <p class='text-3xl font-bold text-center'>{$sponsor["sponsor_name"]}</p> 
                        </a>
                    ";
                }
            ?>
        </div>
    </div>
</div>