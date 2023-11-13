<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "../html/head.php"; ?>
</head>
<body>  
    <?php require_once dirname(__FILE__) . '/../../src/translations/translations.php'; ?>

    <!-- Global warper -->
    <div class="overflow-hidden w-full h-full absolute">
        <div id="content" class="absolute top-0 left-0 h-full w-full overflow-x-hidden overflow-y-auto">
            <?php include "../html/top-menu.php"; ?>
            <?php include "../html/mobile-menu.php"; ?>

            <!-- Legal mentions -->
            <div class="relative w-full mt-24 md:mt-32 pb-10">
                <div class="pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-9/12 m-auto pt-12">
                    <h2 class="relative text-4xl md:text-5xl"><?php echo $translations_fr['lm_title']; ?></h2>
                    <h2 class="relative font-bold text-6xl md:text-7xl mt-24"><?php echo $translations_fr['lm_s1']; ?></h2>

                    <h3 class="relative font-bold text-4xl md:text-5xl mt-8"><?php echo $translations_fr['lm_s1_p1']; ?> </h3>
                    <p class="text-3xl mt-5"><?php echo $translations_fr['lm_s1_p1_w']; ?></p>

                    <h3 class="relative font-bold text-4xl md:text-5xl mt-8"><?php echo $translations_fr['lm_s1_p2']; ?></h3>
                    <p class="text-3xl mt-5"><?php echo $translations_fr['lm_s1_p2_w']; ?></p>

                    <h3 class="relative font-bold text-4xl md:text-5xl mt-8"><?php echo $translations_fr['lm_s1_p3']; ?></h3>
                    <p class="text-3xl mt-5"><?php echo $translations_fr['lm_s1_p3_w']; ?></p>

                    <h2 class="relative font-bold text-6xl md:text-7xl mt-24"><?php echo $translations_fr['lm_s2']; ?></h2>
                    <p class="text-3xl mt-10"><?php echo $translations_fr['lm_s2_w']; ?></p>

                    <h3 class="relative font-bold text-4xl md:text-5xl mt-12"><?php echo $translations_fr['lm_s2_p1']; ?></h3>
                    <h3 class="relative font-bold text-3xl md:text-4xl mt-8"><?php echo $translations_fr['lm_s2_p1_t1']; ?></h3>
                    <p class="text-3xl mt-5"><?php echo $translations_fr['lm_s2_p1_t1_w']; ?></p>

                    <h3 class="relative font-bold text-3xl md:text-4xl mt-8"><?php echo $translations_fr['lm_s2_p1_t2']; ?></h3>
                    <p class="text-3xl mt-5"><?php echo $translations_fr['lm_s2_p1_t2_w']; ?></p>

                    <h3 class="relative font-bold text-3xl md:text-4xl mt-8"><?php echo $translations_fr['lm_s2_p1_t3']; ?></h3>
                    <p class="text-3xl mt-5"><?php echo $translations_fr['lm_s2_p1_t3_w']; ?></p>

                    <ul class="text-3xl color-100 list-disc ml-12 mt-2">
                        <li><?php echo $translations_fr['lm_s2_p1_t3_l']; ?></li>
                        <li><?php echo $translations_fr['lm_s2_p1_t3_l']; ?></li>
                        <li><?php echo $translations_fr['lm_s2_p1_t3_l']; ?></li>
                    </ul>

                    <p class="text-3xl mt-5"><?php echo $translations_fr['lm_s2_p1_t3_w2']; ?></p>

                    <h3 class="relative font-bold text-4xl md:text-5xl mt-12"><?php echo $translations_fr['lm_s2_p2']; ?></h3>
                    <p class="text-3xl mt-10"><?php echo $translations_fr['lm_s2_p2_w']; ?></p>

                    <h2 class="relative font-bold text-6xl md:text-7xl mt-24"><?php echo $translations_fr['lm_s3']; ?></h2>
                    <p class="text-3xl mt-10"><?php echo $translations_fr['lm_s3_w']; ?></p>
                </div>
            </div>

            <?php include "../html/footer.php"; ?>
        </div>
    </div>

    <script src="../js/mobile-menu.js"></script>
</body>
</html>