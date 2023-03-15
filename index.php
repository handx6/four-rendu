<!-- header -->
<?php
$title = 'Accueil';
include 'partials/_header.php';
include 'helpers/data.php';
include 'partials/_card.php';
?>

<!-- hero -->
<div class="" id="hero">
    <h1>Bienvenue au <span class="text_primary">Four</span></h1>
    <p>Nos recettes sont chouettes</p>
    <a href="" class="btn_primary">En savoir plus</a>
    <div class="trait"></div>
</div>
<!-- end hero -->

<!-- body/content -->
<main>
    <!-- section sucré -->
    <section class="px-[10%] py-[90px]">
        <h2 class="text-[3rem] text-[#333A7B] font-semibold pb-[65px]">Nos gateaux sucrés</h2>
        <div class="flex justify-around">
            <?php foreach ($productSucres as $sucre) { ?>
            <a href="product.php">
                <?php createCard($sucre); ?>
            </a>
            <?php } ?>
        </div>
        <!-- button more ++ -->
        <div class="flex justify-end items-center pt-[35px] text-[20px] text-[#333A7B]">
            <a href="sucres.php">Voir plus<i class="fa-solid fa-circle-arrow-right ml-[20px] rounded-full"></i>
            </a>
        </div>
    </section>
    <!-- section salé -->
    <section class="bg-[#f3f3f3] py-[90px]">
        <div class="px-[10%] ">
            <h2 class="text-[3rem] text-[#333A7B] font-semibold pb-[65px]">Nos gateaux salés</h2>
            <div class="flex justify-around">
                <?php foreach ($productSales as $sale) { ?>
                <a href="product.php">
                    <?php createCard($sale); ?>
                </a>
                <?php } ?>
            </div>
            <!-- button more ++ -->
            <div class="flex justify-end items-center pt-[35px] text-[20px] text-[#333A7B]">
                <a href="sales.php">Voir plus<i class="fa-solid fa-circle-arrow-right ml-[20px] rounded-full"></i></a>
            </div>
        </div>
    </section>
    <!-- image publicité -->
    <section class="px-[10%] py-[90px]">
        <!-- card twitch -->
        <div class="flex justify-between p-[40px] bg-card-gradient">
            <!-- box body -->
            <div class="w-[45%] pt-[20px] pr-[50px]">
                <div class="flex items-center pb-[12px] text-[30px] uppercase text-[#333A7B] font-black">
                    <h4>Live Twitch</h4>
                    <i class="fa-brands fa-twitch ml-[10px]" aria-hidden="true"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perspiciatis hic nulla eum tempore, excepturi sequi earum ipsam at
                    minus dolore. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Cumque exercitationem architecto laudantium deserunt tempore
                    corporis ipsum ea fugiat nostrum perspiciatis.
                </p>
                <div class="mt-[30px]">
                    <a href=""
                        class="text-[#333A7B] hover:bg-[#f5f6ff] border-x border-y py-[10px] px-[20px] rounded-[30px] border-[#2d336f96]">Découvrez
                        nos lives
                        Twitch</a>
                </div>
            </div>
            <!-- box image -->
            <div class="w-[45%]">
                <a href="https://www.twitch.tv/" target="_blank">
                    <img src="images/cooking.avif" alt="" class="w-full h-full" />
                </a>
            </div>
        </div>

        <!-- card live cooking -->
        <div class="flex flex-row-reverse mt-[50px] justify-between p-[40px] bg-card-gradient">
            <!-- box body -->
            <div class="w-[45%] pt-[20px] pr-[50px]">
                <div class="flex items-center pb-[12px] text-[30px] uppercase text-[#333A7B] font-black">
                    <h4>Live Twitch</h4>
                    <i class="fa-brands fa-twitch ml-[10px]" aria-hidden="true"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perspiciatis hic nulla eum tempore, excepturi sequi earum ipsam at
                    minus dolore. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Cumque exercitationem architecto laudantium deserunt tempore
                    corporis ipsum ea fugiat nostrum perspiciatis.
                </p>
                <div class="mt-[30px]">
                    <a href=""
                        class="text-[#333A7B] hover:bg-[#f5f6ff] border-x border-y py-[10px] px-[20px] rounded-[30px] border-[#2d336f96]">Découvrez
                        nos lives
                        Twitch</a>
                </div>
            </div>
            <!-- box image -->
            <div class="w-[45%]">
                <a href="https://www.twitch.tv/" target="_blank">
                    <img src="images/cooking.avif" alt="" class="w-full h-full" />
                </a>
            </div>
        </div>
    </section>
</main>
<!-- end body -->
<!-- footer -->
<?php include 'partials/_footer.php'; ?>
