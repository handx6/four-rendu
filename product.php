<!-- header -->
<?php
$title = 'Recette de ...';
include 'partials/_header.php';
?>

<!-- body/content -->
<main class="px-[10%] py-[60px]">
    <h2 class="text-[3rem] text-center text-[#333A7B]">Titre de la recette</h2>
    <!-- box image -->
    <div class="h-[400px] pt-[30px] pb-[40px]">
        <img src="images/gateau_chocolat.jpeg" alt="gateau au chocolat" class="w-full h-full object-cover" />
    </div>
    <!-- box information de la recette -->
    <div class="flex justify-center gap-[50px] text-[20px] text-[#333A7B] pb-[50px]">
        <!-- durée recette -->
        <div class="">
            <p>30 min</p>
        </div>
        <!-- dificulté recette -->
        <div class="">
            <p>Facile</p>
        </div>
        <!-- budget recette -->
        <div class="">
            <p>Bon marché</p>
        </div>
    </div>
    <!-- box etape recette -->
    <div class="w-[60%] bg-[#efefef] p-[40px] my-0 mx-auto">
        <!-- etape 1 -->
        <div class="pb-[30px]">
            <h2 class="pb-[10px]">Etape 1</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
                dicta consequuntur incidunt voluptate quis quo soluta quod? Hic
                accusantium error quibusdam necessitatibus, laudantium quam, commodi
                fugit tenetur odit sed deleniti!
            </p>
        </div>
        <!-- etape 2 -->
        <div class="pb-[30px]">
            <h2 class="pb-[10px]">Etape 2</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
                dicta consequuntur incidunt voluptate quis quo soluta quod? Hic
                accusantium error quibusdam necessitatibus, laudantium quam, commodi
                fugit tenetur odit sed deleniti!
            </p>
        </div>
    </div>
</main>

<!-- footer -->
<?php include 'partials/_footer.php'; ?>