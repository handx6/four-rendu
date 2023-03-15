<!-- header -->
<?php
$title = 'Nos recettes salées';
include 'partials/_header.php';
include 'helpers/data.php';
include 'partials/_card.php';
?>

<!-- body/content -->
<main>
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
        </div>
    </section>
</main>

<!-- footer -->
<?php include 'partials/_footer.php'; ?>
