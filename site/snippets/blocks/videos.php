<section>
    <div class="uk-container uk-padding-remove-horizontal">
<?php if($video = $data->video()->toFile()): ?>
        <video src="<?= $video->url() ?>" controls data-uk-video="autoplay: false"<?php if($poster = $data->poster()->toFile()): ?> poster="<?= $poster->url() ?><?php endif ?>"></video>
<?php endif ?>
    </div>
</section>