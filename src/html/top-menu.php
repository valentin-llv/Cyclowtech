<?php require_once dirname(__FILE__) . '/../../src/translations/translations.php'; ?>

<!-- Top menu -->
<div class="z-30 fixed w-full flex h-24 md:h-32 lg:pr-6">
    <!-- Warper -->
    <div class="lg:m-auto w-full h-full flex flex-row border-b-4 border-b-100 bg-900-77">
        <!-- Site name / Logo -->
        <div class="h-full justify-center flex flex-col md:ml-12 lg:ml-5 flex-1 cursor-pointer">
            <a href="/"><img class="h-32 md:h-36" src="/public/favicon/favicon2.webp" /></a>
        </div>

        <!-- Desktop menu -->
        <div class="flex-row h-full ml-10 hidden lg:flex">
            <a class="relative z-0 m-auto cursor-pointer mr-10 duration-100 hover:-translate-y-1" href="/"><p class="text-3xl font-bold"><?php echo $translations_fr['mobile_menu_1']; ?><span class="text-5xl font-medium">.</span></p></a>
            <a class="relative z-0 m-auto cursor-pointer mr-10 duration-100 hover:-translate-y-1" href="/src/pages/projet.php"><p class="text-3xl font-bold"><?php echo $translations_fr['mobile_menu_2']; ?><span class="text-5xl font-medium">.</span></p></a>
            <a class="m-auto cursor-pointer mr-10 duration-100 hover:-translate-y-1" href="/src/pages/actualites.php"><p class="text-3xl font-bold"><?php echo $translations_fr['mobile_menu_3']; ?><span class="text-5xl font-medium">.</span></p></a>
            <a class="m-auto cursor-pointer mr-10 duration-100 hover:-translate-y-1" href="/src/pages/contact.php"><p class="text-3xl font-bold"><?php echo $translations_fr['mobile_menu_4']; ?><span class="text-5xl font-medium">.</span></p></a>
        </div>

        <!-- Desktop socials -->
        <div class="flex-row hidden xl:flex ml-8 lg:mr-20">
            <a href="https://www.instagram.com/cyclowtech/" target="_blank" class="cursor-pointer duration-100 hover:scale-105 m-auto ml-6 fill-100"><svg height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M349.33 69.33a93.62 93.62 0 0193.34 93.34v186.66a93.62 93.62 0 01-93.34 93.34H162.67a93.62 93.62 0 01-93.34-93.34V162.67a93.62 93.62 0 0193.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32z"/>
                <path d="M377.33 162.67a28 28 0 1128-28 27.94 27.94 0 01-28 28zM256 181.33A74.67 74.67 0 11181.33 256 74.75 74.75 0 01256 181.33m0-37.33a112 112 0 10112 112 112 112 0 00-112-112z"/>
            </svg></a>

            <a href="https://www.youtube.com/channel/UCdGt7O031MUzUXVnEM0BX7w" target="_blank" class="cursor-pointer duration-100 hover:scale-105 m-auto ml-6 fill-100"><svg height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M508.64 148.79c0-45-33.1-81.2-74-81.2C379.24 65 322.74 64 265 64h-18c-57.6 0-114.2 1-169.6 3.6C36.6 67.6 3.5 104 3.5 149 1 184.59-.06 220.19 0 255.79q-.15 53.4 3.4 106.9c0 45 33.1 81.5 73.9 81.5 58.2 2.7 117.9 3.9 178.6 3.8q91.2.3 178.6-3.8c40.9 0 74-36.5 74-81.5 2.4-35.7 3.5-71.3 3.4-107q.34-53.4-3.26-106.9zM207 353.89v-196.5l145 98.2z"/>
            </svg></a>

            <a href="https://www.facebook.com/people/Cyclow-Tech/100085929644392/" target="_blank" class="cursor-pointer duration-100 hover:scale-105 m-auto ml-6 fill-100"><svg height="30" width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M480 257.35c0-123.7-100.3-224-224-224s-224 100.3-224 224c0 111.8 81.9 204.47 189 221.29V322.12h-56.89v-64.77H221V208c0-56.13 33.45-87.16 84.61-87.16 24.51 0 50.15 4.38 50.15 4.38v55.13H327.5c-27.81 0-36.51 17.26-36.51 35v42h62.12l-9.92 64.77H291v156.54c107.1-16.81 189-109.48 189-221.31z" fill-rule="evenodd"/>
            </svg></a>
        </div>

        <div class="flex-row h-full hidden lg:flex">
            <p class="text-3xl font-bold m-auto mr-10"><a href="?lang=fr"+>fr</a> / <a href="?lang=en">en</a></p>
        </div>

        <!-- Mobile menu - Hamburger -->
        <div class="block lg:hidden mr-8 md:mr-16 ml-4 mt-4 md:mt-6">
            <input id="top-menu-hamburger" type="checkbox" class="hidden" />
            <label id="menu-label" for="top-menu-hamburger" class="h-14 md:h-20 flex flex-col cursor-pointer">
                <div class="bg-100 w-16 h-1.5 mt-2.5 md:mt-3.5"></div>
                <div class="bg-100 w-16 h-1.5 mt-2.5 md:mt-3.5"></div>
                <div class="bg-100 w-16 l h-1.5 mt-2.5 md:mt-3.5"></div>
            </label>
        </div>
    </div>
</div>