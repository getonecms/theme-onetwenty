<?php

/**
 * Partial layout for render collapsed navbar-nav
 */
?>

<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a href="#" class="nav-link">
            <svg width="24" height="24" fill="currentColor">
                <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#circle' ?>" />
            </svg>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <svg width="24" height="24" fill="currentColor">
                <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#window' ?>" />
            </svg>
        </a>
    </li>
</ul>