<?php $categories = $page->children()->visible()->pluck('category', ',', true); ?>

  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>


<div id="sidebarMenu">
  <ul class="sidebarMenuInner">
    <li>
      <ul>
        <li class="title--filter">
          Filters
          <hr>
        </li>
        <li>
          <ul>
            <?php foreach ($categories as $category): ?>
              <li>
                <input type="checkbox"
                name="category-filter"
                value="<?= html($category) ?>"
                class="category-filter filter"
                id="<?= html($category) ?>">
                <label for="<?= html($category) ?>" class="radio">
                  <?= html($category) ?>
                </label>
              </li>
            <?php endforeach ?>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <ul>
        <li class="title--filter">
          Decades
          <hr>
        </li>
        <li>
          <ul>
            <li>
              <input type="checkbox" id="70s" name="70s" value="">
              <label for="70s">70's</label>
            </li>
            <li>
              <input type="checkbox" id="80s" name="80s" value="">
              <label for="80s">80's</label>
            </li>
            <li>
              <input type="checkbox" id="90S" name="90s" value="">
              <label for="90s">90's</label>
            </li>
            <li>
              <input type="checkbox" id="2000s" name="2000s" value="">
              <label for="2000s">2000's</label>
            </li>
            <li>
              <input type="checkbox" id="2010s" name="2010s" value="">
              <label for="2010s">2010's</label>
            </li>
          </ul>
        </li>
      </ul>
    </li>

  </ul>
</div>

</div>
</div>
