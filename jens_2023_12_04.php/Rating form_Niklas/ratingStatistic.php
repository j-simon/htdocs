<section class="space-y-4">
    <?php if ($feedbacks) { ?>
        <div class="text-lg font-medium">
            Saved reviews : <?= count($feedbacks) ?>
        </div>

        <div class="flex items-center space-x-6">
            <p class="text-4xl">😀</p>
            <div class=" w-full h-8 bg-transparent rounded border border-gray-500 text-gray-800">
                <div class="h-8 bg-blue-500 rounded font-black" style="width:<?= calculateRating('Good') . '%' ?>">
                    <?= calculateRating('Good') ?>%
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-6">
            <p class="text-4xl">😐</p>
            <div class="w-full h-8 bg-transparent rounded border border-gray-500 text-gray-800">
                <div class="h-8 bg-blue-500 rounded font-black" style="width:<?= calculateRating('Neutral') . '%' ?>">
                    <?= calculateRating('Neutral') ?>%
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-6">
            <p class="text-4xl">🙁</p>
            <div class="w-full h-8 bg-transparent rounded border border-gray-500 text-gray-800">
                <div class="h-8 bg-blue-500 rounded font-black" style="width:<?= calculateRating('Bad') . '%' ?>">
                    <?= calculateRating('Bad') ?>%
                </div>
            </div>
        </div>

    <?php } ?>
</section>