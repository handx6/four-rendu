<?php
$navItems = [
    [
        'name' => 'Recettes sucrées',
        'url' => 'sucres.php',
    ],
    [
        'name' => 'Recettes salées',
        'url' => 'sales.php',
    ],
    [
        'name' => 'Ajouter Recette',
        'url' => 'add-recette.php',
    ],
]; ?>
<!DOCTYPE html>
<html lang="fr" class="bg-white">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700;800;900;1000&display=swap"
        rel="stylesheet" />
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn tailwind & daisy -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.4/dist/full.css" rel="stylesheet" type="text/css" />
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css" />
    <title>Four | <?= $title ?></title>
</head>

<body>
    <!-- header -->
    <header class="px-[10%] py-[20px] bg-[#333A7B] flex justify-between items-center">
        <!-- div logo -->
        <div class="">
            <a href="index.php" class="text-white uppercase text-[30px] font-black">Logo</a>
        </div>
        <!-- end div logo -->
        <!-- navigation -->
        <nav class="space-x-6 text-white uppercase">
            <?php foreach ($navItems as $item) { ?>
            <a href="<?= $item[
                'url'
            ] ?>" class="hover:text-[#B4FFD8] hover:underline"><?= $item[
    'name'
] ?></a>
            <?php } ?>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->