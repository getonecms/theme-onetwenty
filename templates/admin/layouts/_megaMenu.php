<?php

/**
 * Partial layout for render primary menu items in navbar
 */
?>


<li class="col-sm" role="menuitem">
    <div class="row row-cols-3 row-cols-lg-5 g-4">
        <?php foreach (view()->params['primaryMenuItems'] as $item) : ?>
            <div class="col">
                <a href="<?= url($item['route']) ?>" class="d-flex flex-column align-items-center" role="menuitem">
                    <svg class="bi mb-2" width="32" height="32" fill="currentColor">
                        <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#' . $item['icon'] ?>" />
                    </svg>
                    <span class="mx-auto"><?= $item['label'] ?></span>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</li>