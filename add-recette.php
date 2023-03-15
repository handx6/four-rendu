<!-- header -->
<?php
$title = 'Ajouter Recette';
include 'partials/_header.php';
?>

<!-- body/content -->
<main>
    <h2 class="py-[30px] text-[3rem] text-center text-[#333A7B] font-semibold pb-[65px]">Ajouter une recette</h2>
    <form action="" class="py-[40px] mb-[60px] w-2/3 mx-auto bg-[#f3f3f3] flex flex-col justify-center">
        <div class="flex justify-between">
            <div class="flex flex-col items-center w-1/2">
                <!-- titre -->
                <div class="form-control w-full max-w-xs">
                    <label class="label" for="title">
                        <span class="label-text">Titre</span>
                    </label>
                    <input type="text" name="titre" id="titre" class="input input-bordered w-full max-w-xs bg-white" />
                </div>
                <!-- duree -->
                <div class="form-control w-full max-w-xs">
                    <label class="label" for="duree">
                        <span class="label-text">Durée</span>
                    </label>
                    <input type="text" name="duree" id="duree" class="input input-bordered w-full max-w-xs bg-white" />
                </div>
                <!-- difficulte -->
                <div class="form-control w-full max-w-xs">
                    <label class="label" for="diff">
                        <span class="label-text">Difficulté</span>
                    </label>
                    <input type="text" name="diff" id="diff" class="input input-bordered w-full max-w-xs bg-white" />
                </div>
            </div>
            <!-- description -->
            <div class="w-1/2">
                <div class="form-control w-full max-w-xs m-auto">
                    <label class="label" for="desc">
                        <span class="label-text">Description</span>
                    </label>
                    <textarea class="bg-white textarea textarea-bordered textarea-lg"
                        placeholder="Votre recette"></textarea>
                </div>
            </div>
        </div>

        <button class="bg-[#333A7B] w-3/4 mx-auto mt-[40px] text-white btn btn-wide">Enregistrer la recette</button>
        <!-- 
        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <button type="submit">Envoyer la recette</button> -->
    </form>
</main>

<!-- footer -->
<?php include 'partials/_footer.php'; ?>