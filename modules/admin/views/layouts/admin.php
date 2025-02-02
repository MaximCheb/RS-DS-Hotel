<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title)?> ADMIN</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'АМ', 'url' => ['/site/index']],
            ['label' => 'Articles', 'url' => ['/post/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
	<?= $content ?>
    
</div>

   <footer class="footer">
		<div class="l-container">
			<div class="l-row">
				<div class="footer__content">
					<div class="footer__content-col">
						<h3 class="footer__col-caption">О RS·DC PROJECT</h3>
						<ul class="footer__list">
							<li class="footer__list-item">
								<?= Html::a('О нашем отеле',['hotel/about'],['class' => 'footer__list-link']) ?>
							</li>
							<li class="footer__list-item">
								<?= Html::a('О нашем отеле',['hotel/about'],['class' => 'footer__list-link']) ?>
							</li>
							<li class="footer__list-item">
								<?= Html::a('О нашем отеле',['hotel/about'],['class' => 'footer__list-link']) ?>
							</li>
							
						</ul>
					</div>

					<div class="footer__content-col">
						<h3 class="footer__col-caption">Ваш отдых</h3>
						<ul class="footer__list">
							<li class="footer__list-item">
								<?= Html::a('О нашем отеле',['hotel/about'],['class' => 'footer__list-link']) ?>
							</li>
							<li class="footer__list-item">
								<?= Html::a('О нашем отеле',['hotel/about'],['class' => 'footer__list-link']) ?>
							</li>
							<li class="footer__list-item">
								<?= Html::a('О нашем отеле',['hotel/about'],['class' => 'footer__list-link']) ?>
							</li>
						</ul>
					</div>

					<div class="footer__content-col">
						<h3 class="footer__col-caption">Следите за нами</h3>
						<ul class="footer__list footer__list_social">
							<li class="footer__list-item">
								<a href="https://vk.com/chebols" class="footer__list-link footer__list-link_social"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="footer__list-item">
								<a href="" class="footer__list-link footer__list-link_social"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="footer__list-item">
								<a href="" class="footer__list-link footer__list-link_social"><i class="fab fa-vk"></i></a>
							</li>
							<li class="footer__list-item">
								<a href="" class="footer__list-link footer__list-link_social"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="footer__copyright-container">
					<div class="footer__copyright">
						<p class="footer__copyright-text">
							2021 © Все права защищены <br>RS·DC 41 GROUP  
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
