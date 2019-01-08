<?php snippet('header') ?>

    <main class="main page-timeline">

        <div class="sidebar">

            <div class="filters">

                <?php snippet('filter.categories') ?>

                <?php snippet('filter.tags') ?>

            </div>

        </div>

        <div class="container container--offset">

            <section id="timeline">

                <ul id="listing-events" class="listing-events">
                    <?php snippet('event') ?>
                </ul>

            </section>

        </div>

    </main>

<?php snippet('footer') ?>