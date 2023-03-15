<?php

function createCard($content)
{
    ?>
<div class="shadow-md shadow-[#d1d1d1] w-[300px] bg-white rounded-3xl">
    <!-- box image -->
    <div class="h-[14rem]">
        <img src="<?= $content[
            'img'
        ] ?>" alt="<?= $content['title'] ?>" class="w-full h-full object-cover" />
    </div>
    <!-- card body -->
    <div class="py-[20px] px-[30px]">
        <h3 class="pb-[15px]"><?= $content['title'] ?></h3>
        <div class="pb-[12px]">
            <p>
                <?= $content['description'] ?>
            </p>
        </div>
        <div class="flex justify-between items-center text-[#bcbcbc]">
            <p><?= $content['avis'] ?> avis</p>
            <p class="text-right text-[12px]">
                Note : <span class="font-bold"><?= $content['note'] ?>/5</span>
            </p>
        </div>
    </div>
</div>

<?php
} ?>