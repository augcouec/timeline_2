<?php // Fetch all categories ?>
<?php $categories = $page->children()->visible()->pluck('category', ',', true); ?>

<div class="filters__group">

    <span class="filters__label">
        Filter by category
    </span>

    <label class="radio">
        <input type="radio"
               name="category-filter"
               value="all-categories"
               class="category-filter filter"
               id="all-categories">
            All categories
    </label>

    <?php foreach ($categories as $category): ?>

        <label class="radio">
            <input type="radio"
                   name="category-filter"
                   value="<?= html($category) ?>"
                   class="category-filter filter"
                   id="<?= html($category) ?>">
                <?= html($category) ?>
        </label>

    <?php endforeach ?>

</div>