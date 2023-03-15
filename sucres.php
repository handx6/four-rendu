<!-- header -->
<?php
$title = 'Nos recettes sucrées';
include 'partials/_header.php';
include 'helpers/data.php';
include 'partials/_card.php';
?>

<!-- body/content -->
<main>
    <section class="px-[10%] py-[90px]">
        <h2 class="text-[3rem] text-[#333A7B] font-semibold pb-[65px]">Nos gateaux sucrés</h2>
        <div class="flex justify-around">
            <?php foreach ($productSucres as $sucre) { ?>
            <a href="product.php">
                <?php createCard($sucre); ?>
            </a>
            <?php } ?>
        </div>
    </section>
</main>

<!-- footer -->
<?php include 'partials/_footer.php'; ?>
