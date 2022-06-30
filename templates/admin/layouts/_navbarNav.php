<?php

/**
 * Partial layout for render navbar
 */
?>

<ul class="nav">
    <li class="nav-item border-end">
        <a class="nav-link" href="<?= home_url() ?>">
            <span class="navbar-brand mb-0 h1">
                <svg class="bi mr-3" width="32" height="32" fill="currentColor">
                    <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#x-diamond' ?>" />
                </svg>
                <span><?= app()->name ?></span>
            </span>
        </a>
    </li>
    <li class="nav-item dropdown position-static">
        <a class="nav-link" href="#" role="button" id="megaMenu" data-bs-toggle="dropdown" aria-expanded="false">
            <svg class="bi mr-2" width="32" height="32" fill="currentColor">
                <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#list' ?>" />
            </svg>
        </a>
        <ul class="dropdown-menu start-0 end-0 row mx-lg-4 mx-3 p-lg-4 p-3" aria-labelledby="megaMenu" role="menu">
            <?= view()->render('_megaMenu') ?>
        </ul>
    </li>
</ul>