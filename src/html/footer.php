<?php require_once dirname(__FILE__) . '/../../src/translations/translations.php'; ?>

<!-- Footer -->
<div class="w-full mt-32 bg-100 p-10 box-border">
    <div class="pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-10/12 m-auto flex flex-col md:flex-row">
        <div class="flex-1 min-w-min">
            <a href="/"><h1 class="color-900 text-5xl md:text-6xl font-bold">CYCLOW-TECH</h1></a>

            <div class="flex flex-row mt-10 text-2xl md:text-3xl color-900 flex-wrap md:flex-nowrap">
                <div class="min-w-max mr-24 mb-10">
                    <p class="color-900"><?php echo $translations_fr['footer_website_map']; ?></p>

                    <div class="ml-5 mt-2">
                        <a class="hover:underline" href="/">- <?php echo $translations_fr['footer_website_map_1']; ?></a><br />
                    </div>

                    <div class="ml-5 mt-2">
                        <a class="hover:underline" href="/src/pages/projet.php">- <?php echo $translations_fr['footer_website_map_2']; ?></a><br />
                    </div>

                    <div class="ml-5 mt-1">
                        <a class="hover:underline" href="/src/pages/actualites.php">- <?php echo $translations_fr['footer_website_map_3']; ?></a><br />
                    </div>

                    <div class="ml-5 mt-1">
                        <a class="hover:underline" href="/src/pages/contact.php">- <?php echo $translations_fr['footer_website_map_4']; ?></a><br />
                    </div>
                </div>

                <div class="min-w-max">
                    <p class="color-900"><?php echo $translations_fr['footer_website_socials']; ?> :</p>

                    <div class="ml-5 mt-2">
                        <a class="hover:underline" target="_blank" href="https://www.instagram.com/cyclowtech/">- Instagram</a><br />
                    </div>

                    <div class="ml-5 mt-1">
                        <a class="hover:underline" target="_blank" href="https://www.facebook.com/people/Cyclow-Tech/100085929644392/">- Youtube</a><br />
                    </div>

                    <div class="ml-5 mt-1">
                        <a class="hover:underline" target="_blank" href="https://www.youtube.com/channel/UCdGt7O031MUzUXVnEM0BX7w">- Facebook</a><br />
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-1 md:ml-10 md:mt-16">
            <p class="text-2xl md:text-3xl color-900 mt-10"><?php echo $translations_fr['footer_low_ressources']; ?></p>
            <p class="text-2xl md:text-3xl color-900 mt-10"><?php echo $translations_fr['footer_legal_mentions']; ?></p>
        </div>
    </div>
</div>