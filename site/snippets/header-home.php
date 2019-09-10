<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="<?= $site->keywords() ?>">
    <meta name="description" content="<?= $site->description()->html() ?>" />
    <title><?= $page->title() . ' | ' . $site->title() ?></title>
    <link rel="shortcut icon" href="<?= $kirby->url('assets') ?>/img/favicon.ico">
    <?= css([
    'assets/css/uikit.min.css',
    'assets/css/custom.css'
    ]) ?>
</head>
<body>
<header>
    <div class="uk-container uk-padding-remove-horizontal">
        <nav class="uk-navbar-container uk-navbar-primary uk-light" data-uk-navbar>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="#" uk-icon="icon: chevron-down">Language</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="<?= $kirby->url('index') ?>">中文</a></li>
                                <li><a href="<?= $kirby->url('index') ?>/en/">English</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>