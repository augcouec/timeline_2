<?php snippet('header') ?>

    <main class="main" role="main">

      <div class="container">

        <div class="info_block">
          <h1><?= $page->title()->html() ?></h1>
          <h2><?= $page->intro()->html() ?></h2>
          <p class="text wrap"><?= $page->text()->html() ?></p>
        </div>

        <div class="img_block">
          <img src="content/1-timeline/device.gif" alt="Device image">
        </div>

      </div>

    </main>

<?php snippet('footer') ?>
