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
        <nav class="uk-navbar-container uk-navbar-primary uk-light" data-uk-navbar data-uk-sticky>
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" data-uk-navbar-toggle-icon href="" data-uk-toggle="target: #mobile-menu"></a>
            </div>
            <div class="uk-navbar-center">
                <h1><?= $page->title()->html() ?></h1>
            </div>
        </nav>
        <div id="mobile-menu" data-uk-offcanvas="mode: push;">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
                    <li<?php e($page->isHomePage(), ' class="uk-active"') ?>><a href="<?= $site->url() ?>"><?= $site->homePage()->title() ?></a></li>
<?php foreach ($site->children()->listed() as $item): ?>
                    <li<?php e($item->isOpen(), ' class="uk-active"') ?>><?= $item->title()->link() ?></li>
<?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</header>