<?php snippet('header') ?>

<section>
    <div class="uk-container uk-padding-remove-horizontal uk-position-relative">
<?php if($image = $page->imgmap()->toFile()): ?>
        <img src="<?= $image->url() ?>" alt="">
<?php endif ?>
<?php
$items = $page->hotarea()->toStructure();
foreach ($items as $item): ?>
        <a href="<?= $item->hotlink() ?>" class="uk-position-absolute uk-transform-center hotarea" style="left: <?= $item->hotleft() ?>; top: <?= $item->hottop() ?>;" data-uk-scroll><?= $item->hottext() ?></a>
<?php  endforeach; ?>
    </div>
</section>

<?php
foreach($page->builder()->toBuilderBlocks() as $block):
  snippet('blocks/' . $block->_key(), array('data' => $block));
endforeach;
?>

<?php snippet('footer') ?>