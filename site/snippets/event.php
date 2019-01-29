<?php

// function getCatColor($cat, $site) {
//     $categoryPage = $site->page("categories")->children()->findBy("slug", $cat);
//     $color = $categoryPage->content()->get('color');
// }

?> 

<?php // Fetch all events ?>
<?php $events = $page->children()->visible(); ?>

<?php foreach ($events as $event): ?>

    <div class="event all-categories ">

         <div class="event__info">

    <?php if($date = $event->content()->get('date')): ?>
                    <?php $year = date('Y', strtotime($date)); ?>
                    <?php $month_day = date('F d', strtotime($date)); ?>

            <div class="event__date__year">
                <?= html($year) ?>

            </div>
            <div class="event__date__month">
                <?= html($month_day) ?>

            </div>
            
        <?php endif ?>
        
        <?php if ($category = $event->content()->get('category')) : ?>
            <div class="event__category">
                <?= html($category) ?>

            </div>
        <?php endif ?>

                 </div>

<div class="event__card">



        <div class="event__title">
            <h2 class="event__title">
                <?= $event->title()->html() ?>
            </h2>
            <hr>
        </div>
  

 

                <?php if ($content = $event->content()->get('content')) : ?>
            <div class="event__content">
                <?= html($content) ?>
            </div>
        <?php endif ?>

        <!-- <?php if ($image = $event->image()) : ?>
            <div class="event__img">
                <img class="event__img" src="<?= $image->url() ?>" alt="<?= $image->alt_text()->html() ?>"/>
            </div>
        <?php endif ?> -->

</div>

    </div>

<?php endforeach ?>