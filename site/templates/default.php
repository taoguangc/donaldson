<?php snippet('header') ?>

<?php
foreach($page->builder()->toBuilderBlocks() as $block):
  snippet('blocks/' . $block->_key(), array('data' => $block));
endforeach;
?>

<?php snippet('footer') ?>