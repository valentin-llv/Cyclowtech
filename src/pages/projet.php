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

            <!-- Project -->
            <div class="relative w-full mt-24 md:mt-32 pb-32">
                <div class="relative pl-14 pr-14 lg:pr-0 lg:pl-0 lg:w-10/12 m-auto pt-12 lg:pt-20">
                    <h2 class="relative font-bold text-5xl md:text-6xl"><?php echo $translations_fr['p_t1']; ?></h2>
                    <div class="h-2 w-20 bg-100 rounded-full ml-1 mt-5"></div>

                    <p class="text-2xl md:text-3xl mt-14"><?php echo $translations_fr['p_t1_w']; ?></p>

                    <div class="flex flex-row flex-wrap md:flex-nowrap mt-14 pb-10">
                        <div class="flex-1 text-center min-w-min lg:min-w-0 mt-10 ml-5 mr-5">
                            <img class="h-52 w-52 lg:h-72 lg:w-72 rounded-full m-auto" src="/public/images/founders/paul.webp" />
                            <p class="text-3xl lg:text-4xl mt-8 ml-16 mr-16">Paul Lebreton</p>
                        </div>

                        <div class="flex-1 text-center min-w-min lg:min-w-0 mt-10 ml-5 mr-5">
                            <img class="h-52 w-52 lg:h-72 lg:w-72 rounded-full m-auto" src="/public/images/founders/basile.webp" />
                            <p class="text-3xl lg:text-4xl mt-8 ml-16 mr-16">Basile Fleury</p>
                        </div>

                        <div class="flex-1 text-center min-w-min lg:min-w-0 mt-10 ml-5 mr-5">
                            <img class="h-52 w-52 lg:h-72 lg:w-72 rounded-full m-auto" src="/public/images/founders/melaine.webp" />
                            <p class="text-3xl lg:text-4xl mt-8 ml-16 mr-16">Melaine Piton</p>
                        </div>
                    </div>

                    <div class="h-1 w-full bg-100 rounded-full m-auto mt-24"></div>

                    <div class="relative w-full flex flex-col-reverse lg:flex-row mt-24">
                        <div class="flex-1 -mt-20 lg:pr-14 lg:mt-0 grid place-items-center">
                            <div class="box-border w-full">
                                <div class="relative p-8 bg-900 -mt-8 -ml-8 -mb-8 max-w-4xl">
                                    <h3 class="relative font-bold text-4xl md:text-5xl"><?php echo $translations_fr['p_t2']; ?></h3>
                                </div>

                                <p class="text-3xl mt-10"><?php echo $translations_fr['p_t2_w1']; ?></p>
                                <p class="text-3xl mt-10"><?php echo $translations_fr['p_t2_w2']; ?></p>
                            </div>
                        </div>

                        <div class="flex-1 w-full">
                            <img class="h-image-intro lg:h-full w-full object-cover" src="/public/images/illustrations/interview.webp" />
                        </div>
                    </div>

                    <div class="relative w-full flex flex-col lg:flex-row mt-32">
                        <div class="flex-1 w-full">
                            <img class="h-image-intro lg:h-full w-full object-cover" src="/public/images/illustrations/velo2.webp" />
                        </div>

                        <div class="flex-1 -mt-20 lg:pl-14 lg:mt-0 grid place-items-center">
                            <div class="box-border w-full">
                                <div class="relative p-8 bg-900 -mt-8 -ml-8 -mb-8 max-w-4xl">
                                    <h3 class="relative font-bold text-4xl md:text-5xl"><?php echo $translations_fr['p_t3']; ?></h3>
                                </div>

                                <p class="text-3xl mt-10"><?php echo $translations_fr['p_t3_w']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-full flex flex-col-reverse lg:flex-row mt-32">
                        <div class="flex-1 -mt-20 lg:pr-14 lg:mt-0 grid place-items-center">
                            <div class="box-border w-full">
                                <div class="relative p-8 bg-900 -mt-8 -ml-8 -mb-8 max-w-4xl">
                                    <h3 class="relative font-bold text-4xl md:text-5xl"><?php echo $translations_fr['p_t4']; ?></h3>
                                </div>

                                <p class="text-3xl mt-10"><?php echo $translations_fr['p_t4_w1']; ?></p>

                                <ul class="text-3xl color-100 list-disc ml-12 mt-2">
                                    <li><?php echo $translations_fr['p_t4_l1']; ?></li>
                                    <li><?php echo $translations_fr['p_t4_l2']; ?></li>
                                    <li><?php echo $translations_fr['p_t4_l3']; ?></li>
                                </ul>

                                <p class="text-3xl mt-5"><?php echo $translations_fr['p_t4_w2']; ?></p>
                            </div>
                        </div>

                        <div class="flex-1 w-full">
                            <img class="h-image-intro lg:h-full w-full object-cover" src="/public/images/illustrations/velo3.webp" />
                        </div>
                    </div>

                    <h3 class="relative font-bold text-4xl md:text-5xl mt-24"><?php echo $translations_fr['p_t5']; ?></h3>
                    <p class="text-3xl mt-10"><?php echo $translations_fr['p_t5_w']; ?></p>

                    <p class="vertical-bar relative text-2xl md:text-3xl mt-32 ml-6 before:absolute before:h-full before:w-2 before:rounded-full before:-ml-6">
                    <i><?php echo $translations_fr['p_t6_w1']; ?></i>
                </p>

                <p class="text-2xl md:text-3xl mt-5"><?php echo $translations_fr['p_t6_w2']; ?></p>
                </div>
            </div>

            <?php include "../html/sponsors.php"; ?>
            <?php include "../html/footer.php"; ?>
        </div>
    </div>

    <script src="../js/mobile-menu.js"></script>
</body>
</html>