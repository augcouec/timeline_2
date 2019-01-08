<?php snippet('header') ?>

    <main class="main error">

        <h1>
            <?= $page->title()->html() ?>
        </h1>

        <div>
            <?= $page->intro()->kirbytext() ?>
        </div>

        <div>
            <?= $page->text()->kirbytext() ?>
        </div>

    </main>

<?php snippet('footer') ?>