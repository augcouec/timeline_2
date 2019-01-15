<?php // Fetch all events ?>
<?php $events = $page->children()->visible(); ?>

<?php foreach ($events as $event): ?>

    <div class="event all-categories ">

        <div class="event__title">
            <h2 class="event__title__font">
                <?= $event->title()->html() ?>
            </h2>
        </div>


        <?php if ($date = $event->content()->get('date')) : ?>
            <div class="event__date">
                <?= html($date) ?>
            </div>
        <?php endif ?>

        <?php if ($category = $event->content()->get('category')) : ?>
            <div class="event__category">
                <?= html($category) ?>
            </div>
        <?php endif ?>

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

<?php endforeach ?>