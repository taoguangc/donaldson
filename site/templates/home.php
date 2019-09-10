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
<body class="home">
<audio id="bgaudio" autoplay loop>
    <source src="<?= $kirby->url('assets') ?>/img/bgm30s.mp3" type="audio/mp3">
</audio>
<div id="loader" class="uk-position-cover uk-position-fixed uk-background-default" style="z-index: 99;">
    <div class="uk-position-center">
      <div uk-spinner="ratio: 2"></div>
    </div>
</div>
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

<section class="uk-section uk-padding-remove-vertical">
    <div class="uk-container uk-padding-remove donaldson uk-light">
        <div class="uk-background-cover homebg el01" style="background-image: url(<?= $kirby->url('assets') ?>/img/slide01.jpg);"></div>
        <div class="uk-background-cover homebg el02" style="background-image: url(<?= $kirby->url('assets') ?>/img/slide02.jpg);"></div>
        <div class="uk-background-cover homebg el03" style="background-image: url(<?= $kirby->url('assets') ?>/img/slide03.jpg);"></div>
        <div class="homemenu">
            <div class="uk-position-top" style="margin-top: 16vh;">
    <?php if($image = $page->product()->toFile()): ?>
                <img src="<?= $image->url() ?>" width="86%" alt="">
    <?php endif ?>
            </div>
            <div class="uk-position-bottom" style="margin-bottom: 8vh;">
                <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-text-center" data-uk-grid>
<?php foreach ($site->children()->listed() as $item): ?>
                    <div><a href="<?= $item->url() ?>" class="uk-button uk-button-default"><?= $item->title() ?></a></div>
<?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?= js([
  'assets/js/uikit.min.js',
  'assets/js/uikit-icons.min.js',
  'assets/js/donaldson.js',
  'assets/js/anime.min.js'
]) ?>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
function audioAutoPlay(id) {
    var audio = document.getElementById(id);

    if (window.WeixinJSBridge) {
        WeixinJSBridge.invoke('getNetworkType', {}, function (e) {
            audio.play();
        }, false);
    } else {
        document.addEventListener("WeixinJSBridgeReady", function () {
            WeixinJSBridge.invoke('getNetworkType', {}, function (e) {
                audio.play();
            });
        }, false);
    }

    return false;
}
audioAutoPlay('bgaudio');

function preloader() {
  if (document.images) {
    var img1 = new Image();
    var img2 = new Image();
    var img3 = new Image();

    img1.src = "<?= $kirby->url('assets') ?>/img/slide01.jpg";
    img2.src = "<?= $kirby->url('assets') ?>/img/slide02.jpg";
    img3.src = "<?= $kirby->url('assets') ?>/img/slide03.jpg";
  }

  var loader = document.querySelector("#loader");
  loader.style.display = "none";
        
  anime({
  targets: '.homebg.el03',
  translateX: [
    { value: '66.6%', duration: 0, endDelay: 4000 },
    { value: ['-100%','66.6%'], duration: 2000, delay: 1000, easing: 'easeOutExpo' },
  ],
  translateY: [
    { value: ['-100%','0'], duration: 500, delay: 2000, easing: 'easeOutQuad' },
    { value: ['0','100%'], duration: 500, delay: 1000, easing: 'easeOutQuad' },
    { value: 0, easing: 'easeOutExpo' },
  ],
});
anime({
  targets: '.homebg.el02',
  translateX: [
    { value: '-66.6%', endDelay: 4500 },
    { value: ['-100%','33.3%'], duration: 2000, delay: 500, easing: 'easeOutExpo' },
  ],
  translateY: [
    { value: ['100%','0'], duration: 500, delay: 2000, easing: 'easeOutQuad' },
    { value: ['0','-100%'], duration: 500, delay: 1000, endDelay: 1000, easing: 'easeOutQuad' },
    { value: 0, easing: 'easeOutExpo' },
  ],
});
anime({
  targets: '.homebg.el01',
  scale: [
    { value: [0,1], duration: 2000, easing: 'easeOutSine' },
    { value: 1, delay: 2000 },
  ],
});
anime({
  targets: ['.homemenu', 'header'],
  opacity: ['0','1'],
  duration: 3000,
  delay: 5000,
  easing: 'easeOutExpo'
});
}

function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}

addLoadEvent(preloader);
</script>
<?php echo snippet('matomo') ?>
</body>
</html>