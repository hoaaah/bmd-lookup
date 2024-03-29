<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
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
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            ['label' => 'Aset', 'items' => [
                ['label' => 'Tanah', 'url' => ['/kib-a']],
                ['label' => 'Peralatan dan Mesin', 'url' => ['/kib-b']],
                ['label' => 'Bangunan', 'url' => ['/kib-c']],
                ['label' => 'JJI', 'url' => ['/kib-d']],
                ['label' => 'ATL', 'url' => ['/kib-e']],
            ]],
            ['label' => 'Permasalahan', 'items' => [
                ['label' => 'P1', 'url' => ['/permasalahan/p1']],
                ['label' => 'P2', 'url' => ['/permasalahan/p2']],
                ['label' => 'P3', 'url' => ['/permasalahan/p3']],
                ['label' => 'P4', 'url' => ['/permasalahan/p4']],
                ['label' => 'P5', 'url' => ['/permasalahan/p5']],
                ['label' => 'P7', 'url' => ['/permasalahan/p7']],
                ['label' => 'P8', 'url' => ['/permasalahan/p8']],
            ]],
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
            ),
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::a('hoaaah', 'https://belajararief.com', ['target' => '_BLANK']) ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
