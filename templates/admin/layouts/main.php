<?php

/**
 * The admin layout.
 *
 * @var $content string
 */
?>

<?php view()->beginPage() ?>
<!doctype html>
<html lang="<?= app()->language ?>">

<head>
    <meta charset="<?= app()->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= app()->name ?></title>

    <link href="<?= view()->theme->baseUrl . '/css/admin.css' ?>" rel="stylesheet">

    <?php view()->registerCsrfMetaTags() ?>
    <?php view()->head() ?>
</head>

<body class="vh-100 bg-light">
    <?php view()->beginBody() ?>

    <header class="main-header shadow-sm" id="main-header">
        <nav class="navbar navbar-expand-lg fixed-top bg-light">
            <div class="container-fluid">
                <?= view()->render('_navbarNav') ?>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsed" aria-controls="navbarCollapsed" aria-expanded="false" aria-label="Toggle navigation">
                    <svg class="bi mr-2" width="32" height="32" fill="currentColor">
                        <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#three-dots-vertical' ?>" />
                    </svg>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapsed">
                    <?= view()->render('_navbarCollapsed') ?>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex flex-wrap justify-start m-2 xl:m-5" id="main">
        <aside class="fixed w-28 xl:w-48 bg-white text-secondary-600 rounded-md shadow-md overflow-y-auto z-0" id="sidebar">
            <?php if (isset(view()->blocks['sidebarNav'])) : ?>
                <nav class="flex flex-col p-5">
                    <?= view()->blocks['sidebarNav']; ?>
                </nav>
            <?php endif; ?>
        </aside>

        <div class="w-full ml-32 xl:ml-56 min-h-full" id="content">
            <?= $content ?>
        </div>
    </main>

    <script defer src="<?= view()->theme->baseUrl . '/js/admin.js' ?>"></script>

    <?php view()->endBody() ?>
</body>

</html>
<?php view()->endPage() ?>