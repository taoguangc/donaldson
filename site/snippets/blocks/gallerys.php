<section>
    <div class="uk-container uk-padding-remove-horizontal">
<?php
$images =  $data->gallery()->toFiles();
foreach($images as $image): ?>
        <img data-src="<?= $image->url() ?>" <?php if($image->alt()): ?>alt="<?= $image->alt() ?>" <?php endif ?> <?php if($image->imgid()): ?>id="<?= $image->imgid() ?>" <?php endif ?>data-uk-img>
<?php endforeach ?>
    </div>
</section>