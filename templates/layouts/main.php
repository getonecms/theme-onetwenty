<?php

/* @var $content string */
?>

<?php view()->beginPage() ?>
<!doctype html>
<html lang="<?= app()->language ?>">

<head>
    <meta charset="<?= app()->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= app()->name ?></title>

    <link href="<?= view()->theme->baseUrl . '/css/site.css' ?>" rel="stylesheet">

    <?php view()->registerCsrfMetaTags() ?>
    <?php view()->head() ?>
</head>

<body>
    <?php view()->beginBody() ?>

    <header class="main-header" id="main-header">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= home_url() ?>">
                    <svg class="bi mr-2" width="32" height="32" fill="currentColor">
                        <use xlink:href="<?= view()->theme->baseUrl . '/images/icons.svg#x-diamond' ?>" />
                    </svg>
                    <span><?= app()->name ?></span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?= view()->render('_navigation') ?>
                </div>
            </div>
        </nav>
    </header>

    <?= $content ?>

    <script defer src="<?= view()->theme->baseUrl . '/js/site.js' ?>"></script>

    <?php view()->endBody() ?>
</body>

</html>
<?php view()->endPage() ?>